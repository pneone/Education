<?php


// add_action( 'init', function (){

// 	register_post_type('home_page',
//         array(
//             'labels'      => array(
//                 'name'          => __('Home', 'textdomain'),
//                 'singular_name' => __('home', 'textdomain'),
//             ),
// 				'menu_position' => 5,
// 				'supports'	=> ['title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'],
// 				'taxonomies'	=> array('category', 'post_tad'),
//                 'public'      => true,
//                 'has_archive' => true,
//         )
//     );

// 	register_taxonomy( 'taxonomy', [ 'home_page' ], [
// 		'label'                 => '', // определяется параметром $labels->name
// 		'labels'                => [
// 			// 'name'              => 'Genres',
// 			// 'singular_name'     => 'Genre',
// 			// 'search_items'      => 'Search Genres',
// 			// 'all_items'         => 'All Genres',
// 			// 'view_item '        => 'View Genre',
// 			// 'parent_item'       => 'Parent Genre',
// 			// 'parent_item_colon' => 'Parent Genre:',
// 			// 'edit_item'         => 'Edit Genre',
// 			// 'update_item'       => 'Update Genre',
// 			// 'add_new_item'      => 'Add New Genre',
// 			// 'new_item_name'     => 'New Genre Name',
// 			'menu_name'         => 'Рубрики',
// 			// 'back_to_items'     => '← Back to Genre',
// 		],
// 		'description'           => '', // описание таксономии
// 		'public'                => true,
// 		// 'publicly_queryable'    => null, // равен аргументу public
// 		// 'show_in_nav_menus'     => true, // равен аргументу public
// 		// 'show_ui'               => true, // равен аргументу public
// 		// 'show_in_menu'          => true, // равен аргументу show_ui
// 		// 'show_tagcloud'         => true, // равен аргументу show_ui
// 		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
// 		'hierarchical'          => true,

// 		'rewrite'               => true,
// 		//'query_var'             => $taxonomy, // название параметра запроса
// 		'capabilities'          => array(),
// 		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
// 		'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
// 		'show_in_rest'          => null, // добавить в REST API
// 		'rest_base'             => null, // $taxonomy
// 		// '_builtin'              => false,
// 		//'update_count_callback' => '_update_post_term_count',
// 	] );
// });


// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', function () {
	// wp_enqueue_style( 'style-name', get_stylesheet_uri() );// main style.css
	wp_enqueue_style( 'bootstrap',  'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css' );// custom style.css
	wp_enqueue_style( 'style',  get_template_directory_uri() . '/assets/css/style.css' );// custom style.css



    // wp_deregister_script( 'jquery' );
	// wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');


	// wp_enqueue_script( 'jquery' );
	wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', array(), NULL, true);
});


add_theme_support( 'post-thumbnails' );    
add_theme_support( 'title-tag' );    
add_theme_support( 'custom-logo' );    


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
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

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
			$data['ext'] = $type_and_ext['type'] = false;
		}

	}

	return $data;
}

?>