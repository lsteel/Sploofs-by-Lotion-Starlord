<?php

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

// Classes
require_once 'classes/class-fl-child-theme.php';

// Actions
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );



//MISC stuffs

// register the new setting for the new social media icon
// replace the word twitch below with the name of the social media icon you want to use
add_action( 'customize_register', 'odw_customize_register' );
function odw_customize_register( $customizer )
{
	$customizer->add_setting( 'fl-social-twitch', array(
		'default' => ''
	) );

	$customizer->add_control(
		new WP_Customize_Control( $customizer, 'fl-social-twitch', array(
			'label' 	=> 'Twitch',
			'section' 	=> 'fl-social-links'
		) )
	);

  $customizer->add_setting( 'fl-social-snapchat', array(
		'default' => ''
	) );

	$customizer->add_control(
		new WP_Customize_Control( $customizer, 'fl-social-snapchat', array(
			'label' 	=> 'Snapchat',
			'section' 	=> 'fl-social-links'
		) )
	);
}


// add our new social media icon into the list of icons output by the Beaver Builder Theme
// in our example we are using Houzz as the social media icon to be added so we add the word twitch below
add_filter( 'fl_social_icons', 'odw_social_icons' );
function odw_social_icons( $icons ) {
    $icons = array(
				'twitch',
				'youtube',
        'twitter',
        'snapchat',
        'instagram',
        'facebook',
        'tumblr',
        'pinterest',
        'google',
        'linkedin',
        'yelp',
        'vimeo',
        'flickr',
        'dribbble',
        '500px',
        'blogger',
        'github',
        'rss',
        'email'
    );
    return $icons;
}
