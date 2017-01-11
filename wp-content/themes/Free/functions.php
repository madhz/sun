<?php
function freemelogo_theme_customizer( $wp_customize ) {
    // Fun code will go here
    $wp_customize->add_section( 'freeme_logo_section' , array(
    'title'       => __( 'Logo ', 'freemeslug' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );
$wp_customize->add_setting( 'freeme_logo' );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'freeme_logo', array(
    'label'    => __( 'Logo', 'freemeslug' ),
    'section'  => 'freeme_logo_section',
    'settings' => 'freeme_logo', 
) ) );
}
add_action( 'customize_register', 'freemelogo_theme_customizer' );

function freemelogo_menus()
{
	register_nav_menus(array(
		 'primay' => __( 'Primay Menu' ))
	);
}
add_action('init','freemelogo_menus');
function freeme_widgets_init() {
	register_sidebar(array(
    'name' => 'Header',
    'id'   => 'Header',
    'description'   => 'This is the widgetized header.',
    'before_widget' => '<div class="Top_Search1 left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));
	register_sidebar(array(
    'name' => 'logoarea',
    'id'   => 'logoarea',
    'description'   => 'This is the widgetized logo.',
    'before_widget' => '<li>',
    'after_widget'  => '</li>',

  ));
    register_sidebar(array(
    'name' => 'follow',
    'id'   => 'follow',
    'description'   => 'This is the widgetized follow.',
    'before_widget' => '',
    'after_widget'  => '',

  ));
        register_sidebar(array(
    'name' => 'followfooter',
    'id'   => 'followfooter',
    'description'   => 'This is the widgetized follow.',
    'before_widget' => '',
    'after_widget'  => '',

  ));
	}
	add_action("widgets_init","freeme_widgets_init");

	function my_post_type_slider() {
  register_post_type( 'slider',
                array( 
        'label' => __('Slide'), 
        'singular_label' => __('Slide', 'my_framework'),
        '_builtin' => false,
        'exclude_from_search' => true, // Exclude from Search Results
        'capability_type' => 'page',
        'public' => true, 
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'rewrite' => array(
          'slug' => 'slide-view',
          'with_front' => FALSE,
        ),
        'query_var' => "slide", // This goes to the WP_Query schema
        'menu_icon' => get_template_directory_uri() . '/images/icon12.png',
        'supports' => array(
            'title',
            'custom-fields',
            'editor',
            'thumbnail'),
        'taxonomies'=> array( 'category' ),

          ) 
        );
}
add_action('init', 'my_post_type_slider');
	function my_logo_post_slider() {
  register_post_type( 'Logos',
                array( 
        'label' => __('logos'), 
        'singular_label' => __('Slide', 'my_framework'),
        '_builtin' => false,
        'exclude_from_search' => true, // Exclude from Search Results
        'capability_type' => 'page',
        'public' => true, 
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'rewrite' => array(
          'slug' => 'slide-view',
          'with_front' => FALSE,
        ),
        'query_var' => "slide", // This goes to the WP_Query schema
        'menu_icon' => get_template_directory_uri() . '/images/icon12.png',
        'supports' => array(
            'title',
            'custom-fields',
            'editor',
            'thumbnail'),
        'taxonomies'=> array( 'category' ),

          ) 
        );
}
add_action('init', 'my_logo_post_slider');

add_theme_support( 'post-thumbnails' );

?>