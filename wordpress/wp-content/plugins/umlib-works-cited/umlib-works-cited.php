<?php
defined('ABSPATH') or die("No script kiddies please!");

/**
 * Plugin Name: UM Lib Works Cited
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: Scans posts for oclc number attributes and retrieves citation information from HathiTrust API.
 * Version: 1.0
 * Author: Charles Brown-Roberts
 * Author URI: http://www.charlesbrownroberts.com
 * License: A "Slug" license name e.g. GPL2
 */
 
 /*
 * Dependencies: PEAR FILE_MARC to parse marc record xml
 */
 

 // Creating the widget 
class umlib_wp_widget extends WP_Widget {
	

	function __construct() {
		parent::__construct(
		// Base ID of your widget
		'umlib_wp_widget', 
		
		// Widget name will appear in UI
		__('UM Lib Works Cited Widget', 'umlib_wp_widget_domain'), 
		
		// Widget description
		array( 'description' => __( 'Scans posts and retrieves citation information from HathiTrust API', 'umlib_wp_widget_domain' ), ) 
		);
	}

	// Creating widget front-end
	// This is where the action happens
	public function widget( $args, $instance ) {
		global $post;
		
		if(is_singular($post)) {
			
			$title = apply_filters( 'widget_title', $instance['title'] );
			// before and after widget arguments are defined by themes
			echo $args['before_widget'];
			if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];
		
			// This is where you run the code and display the output
			echo __( '', 'umlib_wp_widget_domain' );
		
			//get current post
			$current_post = get_post($post->ID);
			
			//get post body
			$post_content = $current_post->post_content;
			
			//create new dom doc
			$doc = new DOMDocument();
			//load the post
			$doc->loadHTML($post_content);
					
			//get the span tags from the post
			$tags = $doc->getElementsByTagName('span');
			
			//libs - set vendor library directory
			$vendor_libs = 'libs';
			
			//path to pear in libs
			$pathToPearLibs = plugin_dir_path(__FILE__) . $vendor_libs;
			
			//set include path to include vendor libs
			set_include_path(get_include_path() . PATH_SEPARATOR . $pathToPearLibs);
			
			//include pear marcxml
			require_once('File/MARCXML.php');
			
			//echo the accordion with results
			echo '<div class="panel-group" id="accordion">';
			foreach ($tags as $tag) {
				//get the oclc attribute
				$oclc = $tag->getAttribute('oclc');
				//st the hathitrust bib api url
				$url = "http://catalog.hathitrust.org/api/volumes/full/json/oclc:" . $oclc;
				//get the json results
				$json = file_get_contents($url);
				//decode the json into an array	
				$result = json_decode($json, true);
				//set the oclc value   
				$oclcValue = 'oclc:' . $oclc;
				//get current child node of records 
				$record = current($result[$oclcValue]['records']);
				//get the items   
				$items = $result[$oclcValue]['items'];
				   
				  
			   $itemTpl = '';
			   foreach($items as $i) {
				   $itemTpl .= '<p>Origin: '. $i['orig'] . '</p>';
				   $itemTpl .= '<p>From record: '. $i['fromRecord'] . '</p>';
				   $itemTpl .= '<p>View: <a href="'.$i['itemURL'].'">Full Text Online</a></p>';
				   $itemTpl .= '<p>Rights code: '. $i['rightsCode'] . '</p>';
				   $itemTpl .= '<p>Last update: '. $i['lastUpdate'] . '</p>';
				   $itemTpl .= '<p>Version: '. $i['enumcron'] . '</p>';
				   $itemTpl .= '<p>Rights: '. $i['usRightsString'] . '</p>';
			   }
			   
			   //get the marc record xml
			   $xmlStr = $record['marc-xml'];
			   
			   // Read MARC records from a stream (a string)
				$marc_source = new File_MARCXML($xmlStr, File_MARC::SOURCE_STRING);   
					
							
				// Retrieve the first MARC record from the source
				$marc_record = $marc_source->next();
				
				// Retrieve a personal name field from the record
				$names = $marc_record->getFields('100');
				
				foreach ($names as $name_field) {
					// set the $a subfield
					$name = $name_field->getSubfields('a');
				
					if (count($name) == 1) {
						$author =  $name[0]->getData() . "\n";
						
					} else {
						$author = "No author found";
					}
				}
					
				$titles = $marc_record->getFields('245');
				
				foreach ($titles as $title_field) {
					// set the $a subfield
					$title = $title_field->getSubfields('a');
				
					if (count($title) == 1) {
						$title =  $title[0]->getData() . "\n";
						
					} else {
						$title = "No title found";
					}
				}
					
				   
				   echo '
				   <div class="panel panel-default hover-fade">
					<div class="panel-heading">
					  <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse_'.$record['oclcs'][0].'">
						  '.$record['titles'][0].'
						</a>
					  </h4>
					</div>
					<div id="collapse_'.$record['oclcs'][0].'" class="panel-collapse collapse">
					  <div class="panel-body">
						<ul>
							<li>'. $title .'</li>
							<li>'. $author .'</li>
							<li><a href="'.$record['recordURL'].'">Catalog</a></li>
							<li>Published date: '.$record['publishDates'][0].'</li>
							<li>OCLC: '.$record['oclcs'][0].'</li>
							<li>'.$itemTpl.'</li>
						</ul>
					  </div>
					</div>
				  </div>
				   ';
				   
				  
				  
			}
			echo '</div>';	
				
			echo $args['after_widget'];		
				
		}		
		
	}
			
	// Widget Backend 
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'umlib_wp_widget_domain' );
		}
	// Widget admin form
	?>
	
	<p>
	  <label for="<?php echo $this->get_field_id( 'title' ); ?>">
		<?php _e( 'Title:' ); ?>
	  </label>
	  <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
	</p>
	<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
} // Class wpb_widget ends here



// Register and load the widget
function umlib_wp_load_widget() {
	register_widget( 'umlib_wp_widget' );
}
add_action( 'widgets_init', 'umlib_wp_load_widget' );


/**
 * Proper way to enqueue scripts and styles
 */
function theme_name_scripts() {
	//wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	//wp_enqueue_script( 'umlib_script', plugins_url( 'assets/js/app.js', __FILE__ ), array(), '1.0.0', true );
}

//add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );