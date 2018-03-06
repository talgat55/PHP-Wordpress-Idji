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
* Resize Images
*/
include_once('inc/aq_resizer.php');

/*
*  Pdf Library
*/
if(!is_home()){






/*
* Form generate
*/


include_once('inc/form-generate.php');


// forms
include_once('inc/forms/form-1.php');
include_once('inc/forms/form-10.php');
include_once('inc/forms/form-9.php');
include_once('inc/forms/form-8.php');
include_once('inc/forms/form-7.php');
include_once('inc/forms/form-6.php');
include_once('inc/forms/form-5.php');
include_once('inc/forms/form-4.php');
include_once('inc/forms/form-3.php');
include_once('inc/forms/form-2.php');


/*
* User Profile
*/


include_once('inc/user-profile.php');



}

/*
* Enrique Script
*/

function th_scripts() {
	// Theme stylesheet.
	wp_enqueue_style( 'th-style', get_theme_file_uri(  'style.css'),array(), '' );
	wp_enqueue_style( 'style', get_theme_file_uri(  '/assets/css/style.css'),array(), '' );
	wp_enqueue_style( 'lightbox.min', get_theme_file_uri(  '/assets/css/lightbox.min.css'),array(), '' );

  wp_enqueue_script( 'jquery', get_theme_file_uri( '/assets/js/jquery-3.2.1.min.js' ), array(), '1' );
	wp_enqueue_script( 'default', get_theme_file_uri(  '/assets/js/default_js.js'),array(), '2' );
	wp_enqueue_script( 'lightbox.min', get_theme_file_uri(  '/assets/js/lightbox.min.js'),array(), '2' );
 	wp_enqueue_script( 'slick.min', get_theme_file_uri(  '/assets/js/slick.min.js'),array(), '2' );
 	wp_enqueue_script( 'tabs', get_theme_file_uri(  '/assets/js/tabs.js'),array(), '2' );
 	wp_enqueue_script( 'jquery.inputmask', get_theme_file_uri(  '/assets/js/jquery.inputmask.js'),array(), '2' );
 	wp_enqueue_script( 'jquery.equalheightresponsive.min', get_theme_file_uri(  '/assets/js/jquery.equalheightresponsive.min.js'),array(), '2' );
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
			),
			array(
		    'id'               => 'images_meta',
		    'name'             => 'Изображения',
		    'type'             => 'image_advanced',
		    'force_delete'     => false,
		    'max_file_uploads' => 10,
		    'max_status'       => 'false',
		    'image_size'       => 'full',
			),
			array(
					'name' 						 => 'Файл PDF',
					'id'    					 => 'file_meta',
					'type'             => 'file',
					'force_delete'     => false,
					'max_file_uploads' => 1,
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
			//echo $user->get_error_message();



			 $_SESSION['error_login'] =  $user->get_error_message();


			}
			if ( !is_wp_error($user) ) {

				wp_redirect( home_url() );
				exit;

			}


		} else{

			 $_SESSION['error_login'] =  'Не соответсвие входных данных. попробуйте снова';

		}

}


/*
* Custom excerpt
*/
function my_string_limit_words($string, $word_limit){
		$words = explode(' ', $string, ($word_limit + 1));
		if( count($words) > $word_limit )
			array_pop($words);
	//	return implode(' ', $words).'... ';
		return implode(' ', $words).'';
}


/*
* Delete pdf files
*
*//*
function destroy() {
		$days = 1;
		$dir = dirname (__DIR__.'/inc/redypdf/');

		$nofiles = 0;

		    if ($handle = opendir($dir)) {
		    while (( $file = readdir($handle)) !== false ) {
		        if ( $file == '.' || $file == '..' || is_dir($dir.'/'.$file) ) {
		            continue;
		        }

		        if ((time() - filemtime($dir.'/'.$file)) > ($days *86400)) {
		            $nofiles++;
		            unlink($dir.'/'.$file);
		        }
		    }
		    closedir($handle);
		   // echo "Total files deleted: $nofiles \n";
		}
}*/


/**
 * Возвращает сумму прописью
 * @author runcore
 * @uses morph(...)
 */
function num2str($num) {
    $nul='ноль';
    $ten=array(
        array('','один','два','три','четыре','пять','шесть','семь', 'восемь','девять'),
        array('','одна','две','три','четыре','пять','шесть','семь', 'восемь','девять'),
    );
    $a20=array('десять','одиннадцать','двенадцать','тринадцать','четырнадцать' ,'пятнадцать','шестнадцать','семнадцать','восемнадцать','девятнадцать');
    $tens=array(2=>'двадцать','тридцать','сорок','пятьдесят','шестьдесят','семьдесят' ,'восемьдесят','девяносто');
    $hundred=array('','сто','двести','триста','четыреста','пятьсот','шестьсот', 'семьсот','восемьсот','девятьсот');
    $unit=array( // Units
        array('копейка' ,'копейки' ,'копеек',	 1),
        array('рубль'   ,'рубля'   ,'рублей'    ,0),
        array('тысяча'  ,'тысячи'  ,'тысяч'     ,1),
        array('миллион' ,'миллиона','миллионов' ,0),
        array('миллиард','милиарда','миллиардов',0),
    );
    //
    list($rub,$kop) = explode('.',sprintf("%015.2f", floatval($num)));
    $out = array();
    if (intval($rub)>0) {
        foreach(str_split($rub,3) as $uk=>$v) { // by 3 symbols
            if (!intval($v)) continue;
            $uk = sizeof($unit)-$uk-1; // unit key
            $gender = $unit[$uk][3];
            list($i1,$i2,$i3) = array_map('intval',str_split($v,1));
            // mega-logic
            $out[] = $hundred[$i1]; # 1xx-9xx
            if ($i2>1) $out[]= $tens[$i2].' '.$ten[$gender][$i3]; # 20-99
            else $out[]= $i2>0 ? $a20[$i3] : $ten[$gender][$i3]; # 10-19 | 1-9
            // units without rub & kop
            if ($uk>1) $out[]= morph($v,$unit[$uk][0],$unit[$uk][1],$unit[$uk][2]);
        } //foreach
    }
    else $out[] = $nul;
    $out[] = morph(intval($rub), $unit[1][0],$unit[1][1],$unit[1][2]); // rub
    $out[] = $kop.' '.morph($kop,$unit[0][0],$unit[0][1],$unit[0][2]); // kop
    return trim(preg_replace('/ {2,}/', ' ', join(' ',$out)));
}

/**
 * Склоняем словоформу
 * @ author runcore
 */
function morph($n, $f1, $f2, $f5) {
    $n = abs(intval($n)) % 100;
    if ($n>10 && $n<20) return $f5;
    $n = $n % 10;
    if ($n>1 && $n<5) return $f2;
    if ($n==1) return $f1;
    return $f5;
}