<?php
/** header.php
 *
 * Displays all of the <head> section and everything up till </header>
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0 - 05.02.2012
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<?php tha_head_top(); ?>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<title><?php wp_title( '&laquo;', true, 'right' ); ?></title>
		
		<?php //tha_head_bottom(); ?>
		<?php wp_head(); ?>
       
        
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        
        <style>
        
        .dropdown-large {
  position: static !important;
}
.dropdown-menu-large {
  margin-left: 16px;
  margin-right: 16px;
  padding: 20px 0px;
}
.dropdown-menu-large > li > ul {
  padding: 0;
  margin: 0;
}
.dropdown-menu-large > li > ul > li {
  list-style: none;
}
.dropdown-menu-large > li > ul > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.428571429;
  color: #333333;
  white-space: normal;
}
.dropdown-menu-large > li ul > li > a:hover,
.dropdown-menu-large > li ul > li > a:focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5;
}
.dropdown-menu-large .disabled > a,
.dropdown-menu-large .disabled > a:hover,
.dropdown-menu-large .disabled > a:focus {
  color: #999999;
}
.dropdown-menu-large .disabled > a:hover,
.dropdown-menu-large .disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  cursor: not-allowed;
}
.dropdown-menu-large .dropdown-header {
  color: #428bca;
  font-size: 18px;
}
@media (max-width: 768px) {
  .dropdown-menu-large {
    margin-left: 0 ;
    margin-right: 0 ;
  }
  .dropdown-menu-large > li {
    margin-bottom: 30px;
  }
  .dropdown-menu-large > li:last-child {
    margin-bottom: 0;
  }
  .dropdown-menu-large .dropdown-header {
    padding: 3px 15px !important;
  }
}

        
        </style>
        
        
        
        
        <style>

/* bootstrap overwrites #F37421 */
body {
	background-color:#C8C8C3;
}

a {
	color:#F37421;
}

.well {
	min-height: 20px;
	padding: 19px;
	margin-bottom: 20px;
	background-color: #fff;
	border: 1px solid #fff;
	border-radius: 4px;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
}

.nav>li>a {
	position: relative;
	display: block;
	padding: 10px;
}

.navbar-default .navbar-collapse, .navbar-default .navbar-form {
border-color: #fff;
background-color:#fff;
}

.navbar-default {
background-color: #fff;
border-color: #fff;
}

.navbar-default.secondary-nav,
.navbar-collapse.secondary-nav {
background-color: #000;
border-color: #000;
min-height:40px;
}



.secondary-nav a:link,
.secondary-nav a:visited {
	color:#fff;
	text-transform:uppercase;
	padding-left:0;
	padding-right:0;
	font-size:12px;
}

.secondary-nav li a:hover,
.secondary-nav li a:active,
.secondary-nav li a:focus {
	color:#F37421;
	background-color:transparent;
}

.secondary-nav .open>a, .secondary-nav .open>a:hover, .secondary-nav .open>a:focus {
background-color: transparent;
border-color: #428bca;
}



h1 {
	background-image: url(/assets/img/h1_bg_green.png);
	background-repeat: repeat-x;
	padding: .25em;
	color: #333;
	margin: 20px 0;
	text-shadow: 0px 1px 3px #efefef;
	font-size:22px;
}

h2 {
	font-size:18px;	
}

.hidden-header {
	text-transform: uppercase;
	color: #fff;
	font-size: 18px;
	padding: 10px;
	border: none;
	text-decoration: none;
	/* margin-top: 50px; */
	text-align: center;
	position: relative;
	top: 15px;
	left: 20px;
	line-height: normal;
}


</style>
        
        
        
	</head>
	
	<body <?php body_class(); ?>>
		<div class="container">
			<div id="page" class="hfeed row">
				<?php tha_header_before(); ?>
                
                <nav class="navbar navbar-default" role="navigation">
                  <div class="container-fluid col-md-12">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a href="/index.php"><img style="float:left;" src="https://library.miami.edu/wp-content/themes/umiami/images/logo.png" alt="University of Miami Libraries" /></a>
                    </div>
                
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav nav-pills nav-justified">            
                        <li>
                            
                            <a href="/ask-a-librarian/"><i class="fa fa-question-circle"></i> Ask a Librarian</a></li>
                        <li>
                        	
                            <a href="http://library.miami.edu/sp/subjects/talkback.php"><i class="fa fa-comment-o"></i> Comments</a>
                        </li>
                        
                     
                        <li class="dropdown">
                        <form style="float:right;" action="https://library.miami.edu/wp-content/themes/umiami/resolver.php" method="post">		
                            <fieldset>
               
                                <input type="text" name="searchterms"  />
                                
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-search"></i>
                            
                            </a>
                            <ul class="dropdown-menu">
                                <li><input type="radio" name="searchtype" value="website" checked="checked" id="INPUT_23" />website</li>
                                <li><input type="radio" name="searchtype" value="catalog_keyword" id="INPUT_25" />catalog</li>
                                <li><input type="radio" name="searchtype" value="article" id="INPUT_27" />articles+</li>
                                <li><input type="radio" name="searchtype" value="digital" id="INPUT_29" />digital</li>
                            </ul>
                        
               
                                <input type="submit" value="go" name="submitsearch" alt="Search" />
               
                            </fieldset>
                            
                        </form>
                        
                        </li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
               
           <nav class="navbar navbar-default secondary-nav navbar-static">
    <div class="navbar-header">
		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<!-- Add the extra clearfix for only the required viewport -->
  		<div class="visible-xs-block"><span class="hidden-header">Library Searches</span></div>
	</div>
	
	
	<div class="collapse navbar-collapse secondary-nav js-navbar-collapse ">
		<ul class="nav nav-pills secondary-nav nav-justified">
        
        	<li class="dropdown dropdown-large">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Books </a>
				
				<ul class="dropdown-menu dropdown-menu-large row">
					<li class="col-sm-12">
						<div>
                        <div>
                        <p>Looking for books? Start with the catalog:</p>
                      <form action="http://catalog.library.miami.edu/search/" method="get" name="search" id="search">
                        <input type="hidden" id="iiiFormHandle_1">
                
                        <select name="searchtype" id="searchtype">
                          <option value="X" selected="selected">Keyword</option>
                          <option value="t">Title</option>
                          <option value="a">Author</option>
                          <option value="d">Subject</option>
                <!--
                          <option value="c">LC Call Number</option>
                
                          <option value="l">Local Call Number</option>
                          <option value="g">SuDocs Number</option>
                          <option value="i">ISSN/ISBN Number</option>
                          <option value="o">OCLC Number</option>
                          <option value="m">Music Pub. Number</option> -->
                        </select>
                
                        <input type="hidden" name="SORT" id="SORT" value="D">
                
                        <input maxlength="75" name="searcharg" size="20">
                
                        <input type="hidden" id="iiiFormHandle_1">
                        <input name="Search" type="submit" id="Search" value="Search">
                      </form>
                        </div>
                            <ul>
                              <li><a href="http://catalog.library.miami.edu/">Catalog home</a></li>
                              <li><a href="http://library.miami.edu/sp/subjects/new_acquisitions.php">New Acquisitions</a></li>
                            </ul>
                            <ul>
                              <li><a href="http://miami.lib.overdrive.com/">Overdrive E-Books</a></li>
                            </ul>
                            <div>See also <a href="/books/">Books Overview</a></div>
                          </div>
                                    </li>
                                    
                                    
				</ul>
				
			</li>
            
            <li class="dropdown dropdown-large">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Articles </a>
				
				<ul class="dropdown-menu dropdown-menu-large row">
					<li class="col-sm-12">
						<div>
                        <div>
                        <p>Looking for books? Start with the catalog:</p>
                      <form action="http://catalog.library.miami.edu/search/" method="get" name="search" id="search">
                        <input type="hidden" id="iiiFormHandle_1">
                
                        <select name="searchtype" id="searchtype">
                          <option value="X" selected="selected">Keyword</option>
                          <option value="t">Title</option>
                          <option value="a">Author</option>
                          <option value="d">Subject</option>
                <!--
                          <option value="c">LC Call Number</option>
                
                          <option value="l">Local Call Number</option>
                          <option value="g">SuDocs Number</option>
                          <option value="i">ISSN/ISBN Number</option>
                          <option value="o">OCLC Number</option>
                          <option value="m">Music Pub. Number</option> -->
                        </select>
                
                        <input type="hidden" name="SORT" id="SORT" value="D">
                
                        <input maxlength="75" name="searcharg" size="20">
                
                        <input type="hidden" id="iiiFormHandle_1">
                        <input name="Search" type="submit" id="Search" value="Search">
                      </form>
                        </div>
                            <ul>
                              <li><a href="http://catalog.library.miami.edu/">Catalog home</a></li>
                              <li><a href="http://library.miami.edu/sp/subjects/new_acquisitions.php">New Acquisitions</a></li>
                            </ul>
                            <ul>
                              <li><a href="http://miami.lib.overdrive.com/">Overdrive E-Books</a></li>
                            </ul>
                            <div>See also <a href="/books/">Books Overview</a></div>
                          </div>
                                    </li>
                                    
                                    
				</ul>
				
			</li>
        
        
			<li class="dropdown dropdown-large">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">CD/DVDs </a>
				
				<ul class="dropdown-menu dropdown-menu-large row">
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Glyphicons</li>
							<li><a href="#">Available glyphs</a></li>
							<li class="disabled"><a href="#">How to use</a></li>
							<li><a href="#">Examples</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Dropdowns</li>
							<li><a href="#">Example</a></li>
							<li><a href="#">Aligninment options</a></li>
							<li><a href="#">Headers</a></li>
							<li><a href="#">Disabled menu items</a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Button groups</li>
							<li><a href="#">Basic example</a></li>
							<li><a href="#">Button toolbar</a></li>
							<li><a href="#">Sizing</a></li>
							<li><a href="#">Nesting</a></li>
							<li><a href="#">Vertical variation</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Button dropdowns</li>
							<li><a href="#">Single button dropdowns</a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Input groups</li>
							<li><a href="#">Basic example</a></li>
							<li><a href="#">Sizing</a></li>
							<li><a href="#">Checkboxes and radio addons</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Navs</li>
							<li><a href="#">Tabs</a></li>
							<li><a href="#">Pills</a></li>
							<li><a href="#">Justified</a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Navbar</li>
							<li><a href="#">Default navbar</a></li>
							<li><a href="#">Buttons</a></li>
							<li><a href="#">Text</a></li>
							<li><a href="#">Non-nav links</a></li>
							<li><a href="#">Component alignment</a></li>
							<li><a href="#">Fixed to top</a></li>
							<li><a href="#">Fixed to bottom</a></li>
							<li><a href="#">Static top</a></li>
							<li><a href="#">Inverted navbar</a></li>
						</ul>
					</li>
				</ul>
				
			</li>
            
            
            <li class="dropdown dropdown-large">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Research </a>
				
				<ul class="dropdown-menu dropdown-menu-large row">
					<li class="col-sm-12">
						<div>
                        <div>
                        <p>Looking for books? Start with the catalog:</p>
                      <form action="http://catalog.library.miami.edu/search/" method="get" name="search" id="search">
                        <input type="hidden" id="iiiFormHandle_1">
                
                        <select name="searchtype" id="searchtype">
                          <option value="X" selected="selected">Keyword</option>
                          <option value="t">Title</option>
                          <option value="a">Author</option>
                          <option value="d">Subject</option>
                <!--
                          <option value="c">LC Call Number</option>
                
                          <option value="l">Local Call Number</option>
                          <option value="g">SuDocs Number</option>
                          <option value="i">ISSN/ISBN Number</option>
                          <option value="o">OCLC Number</option>
                          <option value="m">Music Pub. Number</option> -->
                        </select>
                
                        <input type="hidden" name="SORT" id="SORT" value="D">
                
                        <input maxlength="75" name="searcharg" size="20">
                
                        <input type="hidden" id="iiiFormHandle_1">
                        <input name="Search" type="submit" id="Search" value="Search">
                      </form>
                        </div>
                            <ul>
                              <li><a href="http://catalog.library.miami.edu/">Catalog home</a></li>
                              <li><a href="http://library.miami.edu/sp/subjects/new_acquisitions.php">New Acquisitions</a></li>
                            </ul>
                            <ul>
                              <li><a href="http://miami.lib.overdrive.com/">Overdrive E-Books</a></li>
                            </ul>
                            <div>See also <a href="/books/">Books Overview</a></div>
                          </div>
                                    </li>
                                    
                                    
				</ul>
				
			</li>
            
            <li class="dropdown dropdown-large">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Libraries & Collections </a>
				
				<ul class="dropdown-menu dropdown-menu-large row">
					<li class="col-sm-12">
						<div>
                        <div>
                        <p>Looking for books? Start with the catalog:</p>
                      <form action="http://catalog.library.miami.edu/search/" method="get" name="search" id="search">
                        <input type="hidden" id="iiiFormHandle_1">
                
                        <select name="searchtype" id="searchtype">
                          <option value="X" selected="selected">Keyword</option>
                          <option value="t">Title</option>
                          <option value="a">Author</option>
                          <option value="d">Subject</option>
                <!--
                          <option value="c">LC Call Number</option>
                
                          <option value="l">Local Call Number</option>
                          <option value="g">SuDocs Number</option>
                          <option value="i">ISSN/ISBN Number</option>
                          <option value="o">OCLC Number</option>
                          <option value="m">Music Pub. Number</option> -->
                        </select>
                
                        <input type="hidden" name="SORT" id="SORT" value="D">
                
                        <input maxlength="75" name="searcharg" size="20">
                
                        <input type="hidden" id="iiiFormHandle_1">
                        <input name="Search" type="submit" id="Search" value="Search">
                      </form>
                        </div>
                            <ul>
                              <li><a href="http://catalog.library.miami.edu/">Catalog home</a></li>
                              <li><a href="http://library.miami.edu/sp/subjects/new_acquisitions.php">New Acquisitions</a></li>
                            </ul>
                            <ul>
                              <li><a href="http://miami.lib.overdrive.com/">Overdrive E-Books</a></li>
                            </ul>
                            <div>See also <a href="/books/">Books Overview</a></div>
                          </div>
                                    </li>
                                    
                                    
				</ul>
				
			</li>
            
            
            
            
            <li class="dropdown dropdown-large">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services </a>
				
				<ul class="dropdown-menu dropdown-menu-large row">
					<li class="col-sm-12">
						<div>
                        <div>
                        <p>Looking for books? Start with the catalog:</p>
                      <form action="http://catalog.library.miami.edu/search/" method="get" name="search" id="search">
                        <input type="hidden" id="iiiFormHandle_1">
                
                        <select name="searchtype" id="searchtype">
                          <option value="X" selected="selected">Keyword</option>
                          <option value="t">Title</option>
                          <option value="a">Author</option>
                          <option value="d">Subject</option>
                <!--
                          <option value="c">LC Call Number</option>
                
                          <option value="l">Local Call Number</option>
                          <option value="g">SuDocs Number</option>
                          <option value="i">ISSN/ISBN Number</option>
                          <option value="o">OCLC Number</option>
                          <option value="m">Music Pub. Number</option> -->
                        </select>
                
                        <input type="hidden" name="SORT" id="SORT" value="D">
                
                        <input maxlength="75" name="searcharg" size="20">
                
                        <input type="hidden" id="iiiFormHandle_1">
                        <input name="Search" type="submit" id="Search" value="Search">
                      </form>
                        </div>
                            <ul>
                              <li><a href="http://catalog.library.miami.edu/">Catalog home</a></li>
                              <li><a href="http://library.miami.edu/sp/subjects/new_acquisitions.php">New Acquisitions</a></li>
                            </ul>
                            <ul>
                              <li><a href="http://miami.lib.overdrive.com/">Overdrive E-Books</a></li>
                            </ul>
                            <div>See also <a href="/books/">Books Overview</a></div>
                          </div>
                                    </li>
                                    
                                    
				</ul>
				
			</li>
            
            
            
            <li class="dropdown dropdown-large">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">About </a>
				
				<ul class="dropdown-menu dropdown-menu-large row">
					<li class="col-sm-12">
						<div>
                        <div>
                        <p>Looking for books? Start with the catalog:</p>
                      <form action="http://catalog.library.miami.edu/search/" method="get" name="search" id="search">
                        <input type="hidden" id="iiiFormHandle_1">
                
                        <select name="searchtype" id="searchtype">
                          <option value="X" selected="selected">Keyword</option>
                          <option value="t">Title</option>
                          <option value="a">Author</option>
                          <option value="d">Subject</option>
                <!--
                          <option value="c">LC Call Number</option>
                
                          <option value="l">Local Call Number</option>
                          <option value="g">SuDocs Number</option>
                          <option value="i">ISSN/ISBN Number</option>
                          <option value="o">OCLC Number</option>
                          <option value="m">Music Pub. Number</option> -->
                        </select>
                
                        <input type="hidden" name="SORT" id="SORT" value="D">
                
                        <input maxlength="75" name="searcharg" size="20">
                
                        <input type="hidden" id="iiiFormHandle_1">
                        <input name="Search" type="submit" id="Search" value="Search">
                      </form>
                        </div>
                            <ul>
                              <li><a href="http://catalog.library.miami.edu/">Catalog home</a></li>
                              <li><a href="http://library.miami.edu/sp/subjects/new_acquisitions.php">New Acquisitions</a></li>
                            </ul>
                            <ul>
                              <li><a href="http://miami.lib.overdrive.com/">Overdrive E-Books</a></li>
                            </ul>
                            <div>See also <a href="/books/">Books Overview</a></div>
                          </div>
                                    </li>
                                    
                                    
				</ul>
				
			</li>
            
            
            
            
            <li class="dropdown dropdown-large">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Accounts+ </a>
				
				<ul class="dropdown-menu dropdown-menu-large row">
					<li class="col-sm-12">
						<div>
                        <div>
                        <p>Looking for books? Start with the catalog:</p>
                      <form action="http://catalog.library.miami.edu/search/" method="get" name="search" id="search">
                        <input type="hidden" id="iiiFormHandle_1">
                
                        <select name="searchtype" id="searchtype">
                          <option value="X" selected="selected">Keyword</option>
                          <option value="t">Title</option>
                          <option value="a">Author</option>
                          <option value="d">Subject</option>
                <!--
                          <option value="c">LC Call Number</option>
                
                          <option value="l">Local Call Number</option>
                          <option value="g">SuDocs Number</option>
                          <option value="i">ISSN/ISBN Number</option>
                          <option value="o">OCLC Number</option>
                          <option value="m">Music Pub. Number</option> -->
                        </select>
                
                        <input type="hidden" name="SORT" id="SORT" value="D">
                
                        <input maxlength="75" name="searcharg" size="20">
                
                        <input type="hidden" id="iiiFormHandle_1">
                        <input name="Search" type="submit" id="Search" value="Search">
                      </form>
                        </div>
                            <ul>
                              <li><a href="http://catalog.library.miami.edu/">Catalog home</a></li>
                              <li><a href="http://library.miami.edu/sp/subjects/new_acquisitions.php">New Acquisitions</a></li>
                            </ul>
                            <ul>
                              <li><a href="http://miami.lib.overdrive.com/">Overdrive E-Books</a></li>
                            </ul>
                            <div>See also <a href="/books/">Books Overview</a></div>
                          </div>
                                    </li>
                                    
                                    
				</ul>
				
			</li>
            
            
            
            
            
            
            
		</ul>
		
	</div><!-- /.nav-collapse -->
</nav>
     
                
                
			<?php
				tha_header_after();
				

/* End of file header.php */
/* Location: ./wp-content/themes/the-bootstrap/header.php */