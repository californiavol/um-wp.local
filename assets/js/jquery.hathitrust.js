/*

jquery.hathitrust.js -- simple interface to see if something is in the HathiTrust

This is a simple library that will, given bibliographic data, (a) determine if something
is present in the HathiTrust, and (b) produce an appropriate image link to that item.

GENERAL USAGE
==============

In the <head>:
----------------

  <!-- Load jQuery from Google Ajax Library -->
  <script src="http://www.google.com/jsapi"></script>
  <script>google.load("jquery", "1"); </script>
  
  <!-- Load hathithrust plugin -->
  <script src="jquery.hathitrust.js"></script>
  
  <script>
  // Once things are loaded, find all the elements with the class 'hathi' and 
  // pull information from their ref attribute. Replace their contents with an
  // appropriate imagelink
  
  $(document).ready(function() {
    $('.hathi').HathiTrust_imglinkFromRef();
  });

  </script>


In the body
------------

Blah blah blah blah Canterbury Tales. <span class="hathi" ref="id:1,oclc:16857172"></span>



Explanation
------------

After loading the libraries, when the document is ready to go we search for all DOM
elements that match the given css selector (.hathi, meaning all items with the 
class 'hathi'). We take a look at the 'ref' attribute for each of these, parse it out
as a hash of key/value pairs relevent to the HathiTrust interface, and then 
get data about that item from the server. If we have a match, the appropriate 
link is put in to the document, replacing whatever is already within the matched element.

CONFIGURATION
==============

You can get a configuration object and then modify it to, e.g., replace the images
used to link. The currently-active options are as follows

  config = $(document).HathiTrust.config();

  config.targetURL 
    ... is the URL of the script that returns data.
  
  config.images.full, 
  config.images.search 
   ... are structures of the form:
    {
      url: <url of the image to use>
      alt: <alt text to use>
      title: <text to use in the "title" attribute of the link
    }

  config.display.full, 
  config.display.search
    ... are booleans (true/false) dictating whether or not the linked image should
    be displayed. For example, to only show the link when full text is available,
    set config.display.search = false;


ADVANCED USAGE
===============

You can also deal at a much lower level with basicquery.

$('css-selector').HathiTrust_basicquery(id, searchHash, callback);

A sample use would be:

$('#myid').HathiTrust_basicquery(1, {oclc: 1234567}, function(data) {
  theElementMatched = this;
  firstmatch = data.result[0];
  // do other manipulation of the data returned
});

The 'data' object is the structure returned by the server, as documented on the wiki.

*/

(function($) { // wrapper

// Set up the data we'll need
  
var HathiTrust = {
  
  // Base url
  
  'targetURL' : 'http://babel.hathitrust.org/cgi/',
  
  // Which images to use?
  
  'images' : {
    'full': {
      'src': 'http://sdr.lib.umich.edu/m/mdp/graphics/Mbooks_fulltext.gif',
      'alt': 'See full text at MBooks',
      'title' : 'View full text at MBooks'
    },
    
    'search': {
      'src': 'http://sdr.lib.umich.edu/m/mdp/graphics/Mbooks_fulltext.gif',
      'alt': 'Searchable at MBooks',
      'title': 'Fulltext not available. Search within the text at MBooks'
    },
    'unavailable': null,
  },
  
  

  // Which conditions to show on?
  
 'display': {
    'full' : true,
    'search' : true,
    'unavailable' : false
  },
  
  // Get the rights for real???
  
  'realRights' : false
};  // end of the HathiTrust config object



// stringToHash -- turn a string of the form key:val,key2:val2 into a hash

function stringToHash(str) {
  var rv = {};
  pairs = str.split(/\s*,\s*/);
  $.each(pairs, function() {
    kv = this.split(/\s*:\s*/);
    rv[kv[0]] = kv[1];  
 //   alert("Set " + kv[0] + " to " + kv[1]);  
  });
  return rv;
}

// Get a base object

$.fn.HathiTrust = function() {};

// Give folks access to the config 

$.fn.HathiTrust.config = function() {
  return HathiTrust;
}







// Get data given a hash explicitly

$.fn.HathiTrust_basicquery = function (id, search, callback) {

  // Add the id 
  search.id  = id;
  $.getJSON(HathiTrust.targetURL, search, callback);
};
  
  
$.fn.HathiTrust_imglink = function (id, search) {
  search.id = id;
  var target = this;


  $.getJSON(HathiTrust.targetURL, search, function(rdata) {
    // Do nothing if there's an error or 
    if ((rdata.error) || 
        (rdata.result == null) || 
        (rdata.result[id][0].sdr == null)) {
 //     alert("first error");
      return this;  
    }

    // Get data from the json structure 

    with (rdata.result[id][0]){
      var href = sdr.mburl;
      var rights =  sdr.rights;  
    }

    // Return if we're not doing anything for this set of rights
    if (! HathiTrust.display[rights]) {
  //    alert("second error");
      return this;
    }

    // Build the link

    var img = $('<img/>');
    for (var key in HathiTrust.images[rights]) {
      img.attr(key, HathiTrust.images[rights][key]);
    }
    var a = $('<a/>');
    a.attr('href', href);
    a.attr('title', HathiTrust.images[rights].title);
    
    a.append(img);
  //  alert(a.html());
  
    // Empty out the target and put in the link
    target.empty();
    target.append(a);
    
  });
  
};

$.fn.HathiTrust_imglinkFromRef = function () {
  search = stringToHash(this.attr('ref'));
  this.HathiTrust_imglink(search.id, search);
  return this;
}


})(jQuery);