<?php
add_action('wp_enqueue_scripts', 'theme_styles');
add_action('wp_enqueue_scripts', 'theme_scripts');
add_action('after_setup_theme', 'menues');

function menues(){
  register_nav_menu( 'top-index', 'Index Menu' );
  register_nav_menu( 'top', 'Navigation Menu' );
}

function theme_styles(){
  wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.min.css');
  wp_enqueue_style('font', get_template_directory_uri().'/assets/fonts/Roboto-Regular.woff2');
}

function theme_scripts(){
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.bundle.js', array(), 'null', true);
}

add_theme_support( 'post-thumbnails');
add_theme_support( 'title-tag');
add_theme_support( 'custom-logo');

add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}
add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	if( $dosvg ){

		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}
?>
