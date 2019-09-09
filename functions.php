<?php 

function wordPress_resources(){

	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/assets/css/icomoon.css');
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/assets/css/flexslider.css');
	wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
	wp_enqueue_style( 'style.css', get_stylesheet_uri());

	wp_enqueue_script( 'modernizr-2.6.2.min', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.min.js');
	wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/assets/js/jquery.min.js');
	wp_enqueue_script( 'jquery.easing.1.3', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js');
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
	wp_enqueue_script( 'jquery.waypoints.min', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js');
	wp_enqueue_script( 'jquery.flexslider-min', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js');
	wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js');
	wp_enqueue_script( 'jquery.magnific-popup.min', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js');
	wp_enqueue_script( 'magnific-popup-options', get_template_directory_uri() . '/assets/js/magnific-popup-options.js');
	wp_enqueue_script( 'jquery.countTo', get_template_directory_uri() . '/assets/js/jquery.countTo.js');
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js');
	wp_enqueue_script( 'respond.min', get_template_directory_uri() . '/assets/js/respond.min.js');
} 
add_action('wp_enqueue_scripts', 'wordPress_resources');

//custom background
function custome_theme(){
$args = array(
'default-color' => '000000',
 'default-image' => '',
);
	add_theme_support('post-thumbnails');
	// add_image_size('banner-thumbnail', 00, 200);

	add_theme_support('custom-background', $args);
	add_theme_support('post-formats', array('aside', 'gallery', 'video', 'Quote'));
	//nav menus
	register_nav_menus( array(
		'primary' => __('Primary Menu') 
	) );
}
add_action('after_setup_theme', 'custome_theme');


//register a custom post type for slider
function create_imageSlider(){
	
	$labels = array(
		'name' => esc_html__( 'Image Silder', 'church' ),
	);
	$args = array(
		'labels'       => $labels,
		'public'       => true,
		'rewrite'      => array( 'slug' => 'image-slider' ),
		'has_archive'  => false,
		'show_in_rest' => true,
		'taxonomies'   => array( 'category' ),
		'supports'     => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','category' ),
	);
	register_post_type('slider', $args);
}
add_action('init', 'create_imageSlider');

//customizer
function index_customizer_1( $wp_customize ){
	$wp_customize->add_section('church-customizer', array(
		'title' => 'church-customize-1'
	));

//customizer for title
	$wp_customize->add_setting('church-customizer-title', array(
		'default' => 'Title exaomple'
	));

	$wp_customize->add_control( new WP_Customize_control($wp_customize, 'church-customizer-title-control', array(
		'label' => 'Title',
		'section' => 'church-customizer',
		'settings'=> 'church-customizer-title'
	)));

	//customizer for paragraph
	$wp_customize->add_setting('church-customizer-para', array(
		'default' => 'para example'
	));

	$wp_customize->add_control( new WP_Customize_control( $wp_customize, 'church-customizer-para-control', array(
		'label' => 'text',
		'section' => 'church-customizer',
		'settings' => 'church-customizer-para',

	)));
}
add_action('customize_register', 'index_customizer_1');

//customizer 2
function index_customizer_2($wp_customize){
	$wp_customize->add_section('church-customizer-2', array(
		'title' => 'church-customizer-2'
	));

	//custmoizer for paragraph
	$wp_customize->add_setting('church-customizer-text', array(
		'default' => 'text example'
	));
	$wp_customize->add_control( new WP_Customize_control( $wp_customize, 'church-customizer-text-control', array(
		'label' => 'paragraph',
		'section' => 'church-customizer-2',
		'settings' => 'church-customizer-text',
		'type' => 'textarea'
	)));

	//custmoizer for the words below count
	  $wp_customize->add_setting('church-customizer-word-1', array(
		'default' => 'text example'
	));
	$wp_customize->add_control( new WP_Customize_control( $wp_customize, 'church-customizer-word-control-1', array(
		'label' => 'text-1',
		'section' => 'church-customizer-2',
		'settings' => 'church-customizer-word-1',
	)));

	//2

	$wp_customize->add_setting('church-customizer-word-2', array(
		'default' => 'text example'
	));
	$wp_customize->add_control( new WP_Customize_control( $wp_customize, 'church-customizer-word-control-2', array(
		'label' => 'text-2',
		'section' => 'church-customizer-2',
		'settings' => 'church-customizer-word-2',
	)));

//3
	$wp_customize->add_setting('church-customizer-word-3', array(
		'default' => 'text example'
	));
	$wp_customize->add_control( new WP_Customize_control( $wp_customize, 'church-customizer-word-control-3', array(
		'label' => 'text-3',
		'section' => 'church-customizer-2',
		'settings' => 'church-customizer-word-3',
	)));


//4
	$wp_customize->add_setting('church-customizer-word-4', array(
		'default' => 'text example'
	));
	$wp_customize->add_control( new WP_Customize_control( $wp_customize, 'church-customizer-word-control-4', array(
		'label' => 'text-4',
		'section' => 'church-customizer-2',
		'settings' => 'church-customizer-word-4',
	)));
}
add_action('customize_register', 'index_customizer_2');


//customizzer for sermons page
function sermons_custmoizer($wp_customize){
	$wp_customize->add_section('sermon-customizer', array(
		'title' => 'sermon-customizer'
	));

	//title
	$wp_customize->add_setting('sermon-customizer-title', array(
		'default' => 'hello laudas'
	));

	$wp_customize->add_control( new WP_Customize_control( $wp_customize, 'sermon-customizer-title', array(
		'label' => 'sermon-title',
		'section' => 'sermon-customizer',
		'settings' => 'sermon-customizer-title'
	)));

	//text
	$wp_customize->add_setting('sermon-customizer-text', array(
		'default' => 'text mfs'
	));

	$wp_customize->add_control( new WP_Customize_control( $wp_customize, 'sermon-customizer-text', array(
		'label' => 'sermon-text',
		'section'=>'sermon-customizer',
		'settings'=>'sermon-customizer-text',
		'type' => 'tetarea'
	) ) );
}
add_action('customize_register', 'sermons_custmoizer');


function widgets(){
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'siderbar1'
	));
}

add_action('widgets_init', 'widgets');

//filter hook
function excerpt_length( $length ){
	$length = 15;
	return $length;
}
add_filter('excerpt_length', 'excerpt_length');
