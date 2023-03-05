<?php
function my_theme_scripts() {
	// my-styles
	wp_enqueue_style('owl-carousel',get_template_directory_uri().'/assets/owl-carousel/assets/owl.carousel.min.css');
	wp_enqueue_style('owl-theme-default',get_template_directory_uri().'/assets/owl-carousel/assets/owl.theme.default.min.css');
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.css');
	wp_enqueue_style('main',get_template_directory_uri().'/assets/css/main.css');
	// my-scripts
	wp_deregister_script('jquery');
	wp_register_script('my-jquery', 'https://code.jquery.com/jquery-3.6.3.min.js');
	wp_enqueue_script('my-jquery');
	
	wp_enqueue_script('gsap',get_template_directory_uri().'/assets/libs/gsap/gsap.min.js', array());
	wp_enqueue_script('ScrollTrigger',get_template_directory_uri().'/assets/libs/gsap/ScrollTrigger.min.js', array());
	wp_enqueue_script('ScrollSmoother',get_template_directory_uri().'/assets/libs/gsap/ScrollSmoother.min.js', array());
	wp_enqueue_script('owl',get_template_directory_uri().'/assets/owl-carousel/owl.carousel.min.js');
	wp_enqueue_script('bootstrap-bundle',get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js');
	wp_enqueue_script('main',get_template_directory_uri().'/assets/js/main.js');
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

add_theme_support('post-thumbnails');
add_theme_support('title-tag');

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}
?>
