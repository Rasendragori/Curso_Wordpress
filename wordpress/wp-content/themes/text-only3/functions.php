<?php

		//Activando soporte para las imagenes
	if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'imagen-miniatura', 200, 200, true );
    add_image_size( 'imagen-full', 350, 350, true );
    add_image_size( 'category-thumb-blog', 580, 272, true );
	}

	//Registrando un menú
	register_nav_menus(array(
		'principal' => 'Menú Principal',
	));

    /**
	 * Enqueue scripts
	 *
	 * @param string $handle Script name
	 * @param string $src Script url
	 * @param array $deps (optional) Array of script names on which this script depends
	 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
	 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
	 */
	function misrecursos() {
    wp_enqueue_style("style",get_stylesheet_uri());
    wp_enqueue_script( 'material', get_template_directory_uri() . '/assets/material.js', array( 'jquery' ), '1.0.0', true);
	wp_enqueue_script( 'material', get_template_directory_uri() . '/assets/material.min.js', array( 'jquery' ), '1.0.6', true);
	}

	add_action( 'wp_enqueue_scripts', 'misrecursos');

?>