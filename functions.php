<?php 

function wordpress_resources() {
	wp_enqueue_style("style", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "wordpress_resources");


function learnWordPress_setup() {
	// Navigation Menus
	register_nav_menus(array(
		"primary" => __( "Primary Menu" ),
		"footer"  => __( "Footer Menu" ),
	));

	/*
	// Add featured image support
	add_theme_support("post-thumbnails");
	*/

	// Add post format support
	add_theme_support("post-formats", array('aside', 'gallery', 'link'));
}

add_action("after_setup_theme", "learnWordPress_setup");

// Add Widget location
function widgetInit() {
	register_sidebar(array(
		'name' => 'Footer Area 1',
		'id' => 'footer1'
	));

	register_sidebar(array(
		'name' => 'Footer Area 2',
		'id' => 'footer2'
	));

	register_sidebar(array(
		'name' => 'Footer Area 3',
		'id' => 'footer3'
	));

	register_sidebar(array(
		'name' => 'Footer Area 4',
		'id' => 'footer4'
	));
}

add_action('widgets_init', 'widgetInit');


// Customize Appearance Options
function theme_customize_register( $wp_customize ) {

	$wp_customize->add_setting('header_image', array(
		'default' => 'background.jpg',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('title_color', array(
		'default' => '#fff',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('menu_color', array(
		'default' => '#fff',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('heading_color', array(
		'default' => '#404040',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('link_color', array(
		'default' => '#404040',
		'transport' => 'refresh',
	));

	$wp_customize->add_section('header_change', array(
		'title' => __('Header Image', 'Dammy Blog'),
		'priority' => 20,
	));

	$wp_customize->add_section('standard_colors', array(
		'title' => __('Standard Colors', 'Dammy Blog'),
		'priority' => 30,
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_image_control', array(
		'label' => __('Header Image', 'Dammy Blog'),
		'section' => 'header_change',
		'settings' => 'header_image',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_color_control', array(
		'label' => __('Title Color', 'Dammy Blog'),
		'section' => 'standard_colors',
		'settings' => 'title_color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_color_control', array(
		'label' => __('Menu Color', 'Dammy Blog'),
		'section' => 'standard_colors',
		'settings' => 'menu_color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'heading_color_control', array(
		'label' => __('Heading Color', 'Dammy Blog'),
		'section' => 'standard_colors',
		'settings' => 'heading_color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color_control', array(
		'label' => __('Link Color', 'Dammy Blog'),
		'section' => 'standard_colors',
		'settings' => 'link_color',
	) ) );

}

add_action('customize_register', 'theme_customize_register');

// Output Customize CSS
function theme_customize_css() { ?>
	<style type="text/css">
		header {
			background-image: url(<?php echo get_theme_mod('header_image'); ?>);
  		}

		.header-text {
			color: <?php echo get_theme_mod('title_color'); ?>;
		}

		.navbar-collapse ul > li > a, 
		.navbar-default .navbar-brand {
			color: <?php echo get_theme_mod('menu_color'); ?>;
		}

		a:link, a:visited {
			color: <?php echo get_theme_mod('heading_color'); ?>;
		}

		.post-summary p a {
			color: <?php echo get_theme_mod('link_color'); ?>;
		}
	</style>	
<?php }

add_action('wp_head', 'theme_customize_css');

?>


