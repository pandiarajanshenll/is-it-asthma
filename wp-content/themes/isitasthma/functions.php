<?php

function isitasthma_setup() {

	add_theme_support( 'title-tag' );

	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'twentysixteen' ),
		'social'  => __( 'Social Links Menu', 'twentysixteen' ),
	) );
}

add_action( 'after_setup_theme', 'isitasthma_setup' );



function twentyseventeen_scripts() {
	wp_enqueue_style( 'twentyseventeen-style', get_stylesheet_uri() );
	
}
add_action( 'wp_enqueue_scripts', 'twentyseventeen_scripts' );


add_action('admin_init', 'my_general_section');  
function my_general_section() {  
    add_settings_section(  
        'my_settings_section', // Section ID 
        'Social Link Settings', // Section Title
        'my_section_options_callback', // Callback
        'general' // What Page?  This makes the section show up on the General Settings Page
    );

    add_settings_field( // Option 1
        'facebook_link', // Option ID
        'Facebook Link', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'my_settings_section', // Name of our section
        array( // The $args
            'facebook_link' // Should match Option ID
        )  
    ); 

    add_settings_field( // Option 2
        'twitter_link', // Option ID
        'Twitter Link', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'twitter_link' // Should match Option ID
        )  
    ); 

    add_settings_field( // Option 2
        'guide_pdf_link', // Option ID
        'PDF Link', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'guide_pdf_link' // Should match Option ID
        )  
    ); 
    register_setting('general','facebook_link', 'esc_attr');
    register_setting('general','twitter_link', 'esc_attr');
    register_setting('general','guide_pdf_link', 'esc_attr');
}

function my_section_options_callback() {
   // echo '<p>A little message on editing info</p>';  
}

function my_textbox_callback($args) { 
	$twitterlink = get_option('twitter_link');
	$facebook_link = get_option('facebook_link');
    $option = get_option($args[0]);
    echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}
