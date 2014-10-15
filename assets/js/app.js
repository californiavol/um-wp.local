// JavaScript Document

$( document ).ready(function() {
	
var jqxhr = $.ajax( "post.html" )
  .done(function(data) {
	
	 $('.book').each(function(){
        var $span = $(this);
        var spanOclc = $span.attr('oclc');
        
        // do something with the above
        alert('oclc: ' + spanOclc);
    });
	
  })
  .fail(function() {
    alert( "error" );
  })
  .always(function() {
    alert( "complete" );
  });
  
	
});