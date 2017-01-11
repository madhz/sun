<?php
/*
* Plugin Name: follow us widget
* Plugin URI: http://www.paulund.co.uk
* Description: A widget that allows you to add follow us content
* Version: 1.0
* Author: Paul Underwood
* Author URI: http://www.paulund.co.uk
* License: GPL2

Copyright 2012  Paul Underwood

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License,
version 2, as published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
*/
/**
 * Register the Widget
 */
class follow_us_Widget extends WP_Widget
{

  public function __construct()
  {
    parent::__construct(
      'follow-us-Widget',
      'Follow Us widget',
      array(
        'description' => 'Follow Us widget'
      )
    );
  }

  public function widget( $args, $instance )
  {
    // basic output just for this example

    $title      = apply_filters( 'widget_title1', $instance['title'] );
    

  
    echo '
    	<li>
			<div class="social-small-item">				
				<div class="social-small-info-wrap">
					<div class="social-small-info">
						<div class="social-small-info-front>
							<a href="'.$title.'"><img src='.esc_url($instance['image_uri']).' alt=""  /></a>
							</div>
								<a href="'.$title.'"><img src='.esc_url($instance['image_uri']).' alt=""  /></a>
							</div>
						</div>
					</div>
		</li>
 ';
  }
    public function update( $new_instance, $old_instance ) {

        // update logic goes here
        $updated_instance = $new_instance;
        return $updated_instance;
    }
  public function form( $instance )
  {
        $title      = esc_attr( $instance['title'] );
        $subtitle    = esc_attr( $instance['subtitle'] );
        $aboutuscontent= esc_attr( $instance['aboutuscontent'] );
        // $bannercontentlink= esc_attr( $instance['bannercontentlink'] );
        $img=esc_url($instance['image_uri']);

	        ?>
          
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
            <input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
            


    <p>
     
      <input type="text" class="img" name="<?php echo $this->get_field_name('image_uri'); ?>" id="<?php echo $this->get_field_id('image_uri'); ?>" value="<?php echo $img; ?>" />
      <input type="button" class="select-img" value="Select Image" />
    </p>
    <?php
  }


} 
// end class

// init the widget
add_action( 'widgets_init', create_function('', 'return register_widget("follow_us_Widget");') );

// queue up the necessary js
function aboutus()
{
  wp_enqueue_style('thickbox');
  wp_enqueue_script('media-upload');
  wp_enqueue_script('thickbox');
  // moved the js to an external file, you may want to change the path
  wp_enqueue_script('aboutus',  get_template_directory_uri().'/js/upload-media.js', array('jquery'));    }

add_action('admin_enqueue_scripts', 'aboutus');
?>