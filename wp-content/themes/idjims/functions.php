<?php

/*
* Add Feature Imagee
**/
add_theme_support( 'post-thumbnails' );

/*
* Include meta box
*/
include_once('inc/meta-box/meta-box.php');

/*
* Enrique Script
*/

function th_scripts() {
	// Theme stylesheet.
	wp_enqueue_style( 'th-style', get_theme_file_uri(  'style.css'),array(), '' );
	wp_enqueue_style( 'style', get_theme_file_uri(  '/assets/css/style.css'),array(), '' );

  wp_enqueue_script( 'jquery', get_theme_file_uri( '/assets/js/jquery-3.2.1.min.js' ), array(), '1' );
	wp_enqueue_script( 'default', get_theme_file_uri(  '/assets/js/default_js.js'),array(), '2' );
 	wp_enqueue_script( 'slick.min', get_theme_file_uri(  '/assets/js/slick.min.js'),array(), '2' );
 	wp_enqueue_script( 'tabs', get_theme_file_uri(  '/assets/js/tabs.js'),array(), '2' );
 	wp_enqueue_script( 'jquery.inputmask', get_theme_file_uri(  '/assets/js/jquery.inputmask.js'),array(), '2' );
 	wp_enqueue_script( 'jquery.ui-slider', get_theme_file_uri(  '/assets/js/jquery-ui.min.js'),array(), '2' );

}
add_action( 'wp_enqueue_scripts', 'th_scripts' );


/*
*  Rgister Post Type Slider
*/

add_action( 'init', 'post_type_slider' );

function post_type_slider() {
	$labels = array(
		'name' => 'Слайдер',
		'singular_name' => 'Слайдер',
		'all_items' => 'Слайдер',
		'menu_name' => 'Слайдер' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_position' => 5,
		'has_archive' => true,
		'query_var' => "slider",
		'supports'  => array(
						'title',
						'editor',
						'thumbnail'
		)
	);
	register_post_type('slider',$args);
}
/*
*  Rgister Post Type CLients
*/

add_action( 'init', 'post_type_client' );

function post_type_client() {
	$labels = array(
		'name' => 'Клиенты',
		'singular_name' => 'Клиенты',
		'all_items' => 'Клиенты',
		'menu_name' => 'Клиенты' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_position' => 5,
		'has_archive' => true,
		'query_var' => "clients",
		'supports'  => array(
						'title',
						'editor',
						'thumbnail'
		)
	);
	register_post_type('clients',$args);
}
/*
*  Rgister Post Type Action
*/

add_action( 'init', 'post_type_action' );

function post_type_action() {
	$labels = array(
		'name' => 'Акции',
		'singular_name' => 'Акции',
		'all_items' => 'Акции',
		'menu_name' => 'Акции' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_position' => 5,
		'has_archive' => true,
		'query_var' => "action",
		'supports'  => array(
						'title',
						'editor',
						'thumbnail'

		)
	);
	register_post_type('action',$args);
}
/*
* Meta box Slider
*/
add_filter( 'rwmb_meta_boxes', 'your_prefix_file_demo' );
function your_prefix_file_demo( $meta_boxes )
{
	$meta_boxes[] = array(
		'title'  => __( 'Дополнительное поле', 'your-prefix' ),
		'post_types' =>'slider',
		'fields' => array(
			array(
					'id'      => 'title_meta',
					'name'    => 'Заголовок',
					'type'    => 'text',
			),
			array(
					'name' => 'Текст',
					'id'    => 'text_meta',
					'type'  => 'text'
			) ,
			array(
					'name' => 'Выделеное слово',
					'id'    => 'select_meta',
					'type'  => 'text'
			)
		),
	);
	return $meta_boxes;
}




/*
* Meta Box for CLients
*/
add_filter( 'rwmb_meta_boxes', 'your_prefix_file_demo2' );
function your_prefix_file_demo2( $meta_boxes )
{
	$meta_boxes[] = array(
		'title'  => __( 'Дополнительное поле', 'your-prefix' ),
		'post_types' =>'clients',
		'fields' => array(
			array(
					'name' => 'Город',
					'id'    => 'city_meta',
					'type'  => 'text'
			)
		),
	);
	return $meta_boxes;
}


/*
*  Meta box for Action
*/
add_filter( 'rwmb_meta_boxes', 'your_prefix_file_demo3' );
function your_prefix_file_demo3( $meta_boxes )
{
	$meta_boxes[] = array(
		'title'  => __( 'Дополнительное поле', 'your-prefix' ),
		'post_types' =>'action',
		'fields' => array(
			array(
					'name' => 'Показывать на главной странице',
					'id'    => 'check_show',
					'type'  => 'checkbox'
			)
		),
	);
	return $meta_boxes;
}
/**
 * Create Tables if not exist  For Profile
 */
add_action( 'after_setup_theme', 'create_tables' );
function create_tables (){
	global $wpdb;

	$table_name = $wpdb->prefix . "addition_informaion";
	if ($wpdb->get_var("show tables like '$table_name'") != $table_name) {
	$charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";
	$sql = "CREATE TABLE {$table_name} (
	  id mediumint(9) NOT NULL AUTO_INCREMENT,
	  id_user integer,
	  first_name text,
	  second_name text,
	  third_name text,
	  bird_day date,
	  place_bird text,
	  last_name text,
	  place_live text,
	  passport_serial text,
	  passport_number text,
	  passport_issued_by text,
	  passport_issued_date date,
	  passport_issued_key text,
	  extra_inn text,
	  extra_snils text,
	  extra_phone text,
	  extra_email text,
	  registrtation_index text,
	  registrtation_city text,
	  registrtation_locality text,
	  registrtation_street text,
	  registrtation_number_hourse text,
	  registrtation_number_housing text,
	  registrtation_number_apartments text,
	  UNIQUE KEY id (id)

	)
	{$charset_collate};";
	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta($sql);

	}

}



/*
* Login
*/

if (isset($_POST['login_submit'])) {
//    login_check($_POST['login_name'], $_POST['login_password']);

		if( wp_verify_nonce( $_POST['_crsf'], 'ASMART') ){

			global $user;
			$creds = [];
			$creds['user_login'] = $_POST['login_name'];
			$creds['user_password'] =  $_POST['login_password'];
			$creds['remember'] = true;
			$user = wp_signon( $creds, false );
			if ( is_wp_error($user) ) {
			echo $user->get_error_message();
			}
			if ( !is_wp_error($user) ) {
				wp_redirect(home_url('wp-admin'));

			}


		} else{

			echo 'false';

		}
}
