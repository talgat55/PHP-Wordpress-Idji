<?php

/*
* Add Feature Imagee
**/
add_theme_support('post-thumbnails');

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
if (!is_home()) {


    /*
    * Form generate
    */


    include_once('inc/form-generate.php');


// forms
    include_once('inc/forms/form-11.php');
    include_once('inc/forms/form-10.php');
    include_once('inc/forms/form-9.php');
    include_once('inc/forms/form-8.php');
    include_once('inc/forms/form-7.php');
    include_once('inc/forms/form-6.php');
    include_once('inc/forms/form-5.php');
    include_once('inc/forms/form-4.php');
    include_once('inc/forms/form-3.php');
    include_once('inc/forms/form-2.php');
    include_once('inc/forms/form-1.php');

    /*
    * User Profile
    */


    include_once('inc/user-profile.php');

    /*
     *  SMS Service
     */
    require_once('inc/sms.ru.php');


}
/*
 *  Hide Admin bar for subscriber
 */
if (!current_user_can('manage_options')) {
    add_filter('show_admin_bar', '__return_false');
}
// show admin bar only for admins and editors
if (!current_user_can('edit_posts')) {
    add_filter('show_admin_bar', '__return_false');
}

/*
* Enrique Script
*/

function th_scripts()
{
    // Theme stylesheet.
    wp_enqueue_style('th-style', get_theme_file_uri('style.css'), array(), '');
    wp_enqueue_style('style', get_theme_file_uri('/assets/css/style.css'), array(), '');
    // wp_enqueue_style('style', get_theme_file_uri('/assets/css/minify.css'), array(), '');
    wp_enqueue_style('lightbox.min', get_theme_file_uri('/assets/css/lightbox.min.css'), array(), '');

    wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/jquery-3.2.1.min.js'), array(), '1');
    wp_enqueue_script('default', get_theme_file_uri('/assets/js/default_js.js'), array(), '2');
    //   wp_enqueue_script('compressed', get_theme_file_uri('/assets/js/compressed.js'), array(), '2');
    wp_enqueue_script('lightbox.min', get_theme_file_uri('/assets/js/lightbox.min.js'), array(), '2');
    wp_enqueue_script('slick.min', get_theme_file_uri('/assets/js/slick.min.js'), array(), '2');
    wp_enqueue_script('tabs', get_theme_file_uri('/assets/js/tabs.js'), array(), '2');
    wp_enqueue_script('appear', get_theme_file_uri('/assets/js/appear.js'), array(), '2');
    wp_enqueue_script('lazyload.min', get_theme_file_uri('/assets/js/lazyload.min.js'), array(), '2');
    if (is_page('contact')) {
        wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDkewQZi7iY6eOtlXajXXHFWHECGYWqfMs', array(), '2');

        wp_enqueue_script('maps', get_theme_file_uri('/assets/js/maps.js'), array(), '2');
    }

    wp_enqueue_script('jquery.inputmask', get_theme_file_uri('/assets/js/jquery.inputmask.js'), array(), '2');
    wp_enqueue_script('jquery.equalheightresponsive.min', get_theme_file_uri('/assets/js/jquery.equalheightresponsive.min.js'), array(), '2');
    wp_enqueue_script('jquery.ui-slider', get_theme_file_uri('/assets/js/jquery-ui.min.js'), array(), '2');
    wp_enqueue_script('ajax-confirm', get_theme_file_uri('/assets/js/ajax-confirm.js'), array(), '2');
    wp_enqueue_script('jquery.ui.touch-punch.min', get_theme_file_uri('/assets/js/jquery.ui.touch-punch.min.js'), array(), '2');


    global $wp_query;
    $args = array(
        'url' => admin_url('admin-ajax.php'),
        'query' => $wp_query->query,
    );
    wp_enqueue_script('be-load-more', get_theme_file_uri('/assets/js/load-more.js'), array(), '');
    wp_localize_script('be-load-more', 'beloadmore', $args);


}

add_action('wp_enqueue_scripts', 'th_scripts');


/*
*  Rgister Post Type Slider
*/

add_action('init', 'post_type_slider');

function post_type_slider()
{
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
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('slider', $args);
}

/*
*  Rgister Post Type CLients
*/

add_action('init', 'post_type_client');

function post_type_client()
{
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
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('clients', $args);
}


/*
*  Rgister Post Type Action
*/

add_action('init', 'post_type_action');

function post_type_action()
{
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
        'supports' => array(
            'title',
            'editor',
            'thumbnail'

        )
    );
    register_post_type('action', $args);
}


/*
* Meta Box for CLients
*/
add_filter('rwmb_meta_boxes', 'your_prefix_file_demo2');
function your_prefix_file_demo2($meta_boxes)
{
    $meta_boxes[] = array(
        'title' => __('Дополнительное поле', 'your-prefix'),
        'post_types' => 'clients',
        'fields' => array(
            array(
                'name' => 'Город',
                'id' => 'city_meta',
                'type' => 'text'
            ),
            array(
                'id' => 'images_meta',
                'name' => 'Изображения',
                'type' => 'image_advanced',
                'force_delete' => false,
                'max_file_uploads' => 10,
                'max_status' => 'false',
                'image_size' => 'full',
            ),
            array(
                'name' => 'Файл PDF',
                'id' => 'file_meta',
                'type' => 'file',
                'force_delete' => false,
                'max_file_uploads' => 1,
            )
        ),
    );
    return $meta_boxes;
}


/*
*  Meta box for Action
*/
add_filter('rwmb_meta_boxes', 'your_prefix_file_demo3');
function your_prefix_file_demo3($meta_boxes)
{
    $meta_boxes[] = array(
        'title' => __('Дополнительное поле', 'your-prefix'),
        'post_types' => 'action',
        'fields' => array(
            array(
                'name' => 'Показывать на главной странице',
                'id' => 'check_show',
                'type' => 'checkbox'
            )
        ),
    );
    return $meta_boxes;
}

/**
 * Create Tables if not exist  For Profile
 */
add_action('after_setup_theme', 'create_tables');
function create_tables()
{
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

    if (wp_verify_nonce($_POST['_crsf'], 'ASMART')) {

        global $user;
        $creds = [];
        $creds['user_login'] = $_POST['login_name'];
        $creds['user_password'] = $_POST['login_password'];
        $creds['remember'] = true;
        $user = wp_signon($creds, false);
        if (is_wp_error($user)) {
            //echo $user->get_error_message();


            $_SESSION['error_login'] = $user->get_error_message();


        }
        if (!is_wp_error($user)) {

            wp_redirect(LinksTheme('user-doc'));
            exit;

        }


    } else {

        $_SESSION['error_login'] = 'Не соответсвие входных данных. попробуйте снова';

    }

}
/*
 *  Registration
 */
if (isset($_POST['reg_submit'])) {
    $userdata = array(
        'user_login' => esc_attr($_POST['reg_name']),
        'user_email' => esc_attr($_POST['reg_email']),
        'user_pass' => esc_attr($_POST['reg_password']),
    );
    $register_user = wp_insert_user($userdata);
    if (!is_wp_error($register_user)) {
        $creds = array();
        $creds['user_login'] = esc_attr($_POST['reg_name']);
        $creds['user_password'] = esc_attr($_POST['reg_password']);
        $creds['remember'] = true;

        $user = wp_signon($creds, false);
        if (is_wp_error($user)) {
            $_SESSION['error_registration'] = $user->get_error_message();
        } else {
            wp_redirect(LinksTheme('confirm')); // confirm phone number
        }
        //$_SESSION['error_registration'] = 'Регистрация успешна завершена';


        exit;
    } else {

        $_SESSION['error_registration'] = $register_user->get_error_message();

    }
}


function wpse_lost_password_redirect()
{

    // Check if have submitted
    $confirm = (isset($_GET['checkemail']) ? $_GET['checkemail'] : '');

    if ($confirm) {
        wp_redirect(LinksTheme('login'));
        exit;
    }
}

add_action('login_headerurl', 'wpse_lost_password_redirect');


/*
* Custom excerpt
*/
function my_string_limit_words($string, $word_limit)
{
    $words = explode(' ', $string, ($word_limit + 1));
    if (count($words) > $word_limit)
        array_pop($words);
    //	return implode(' ', $words).'... ';
    return implode(' ', $words) . '';
}


/*
* Delete pdf files
*
*/
add_action('wp', 'my_cron_delete_files');
function my_cron_delete_files()
{
    if (!wp_next_scheduled('my_cron_delete_files_event')) {
        wp_schedule_event(time(), 'daily ', 'my_cron_delete_files_event');
    }
}

add_action('my_cron_delete_files_event', 'destroyFiles');

function destroyFiles()
{


    $dir = __DIR__ . '/inc/redypdf/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false) {
            if ($file == '.' || $file == '..' || is_dir($dir . '/' . $file)) {
                continue;
            }


            unlink($dir . '/' . $file);

        }
        closedir($handle);
    }

}


/**
 * Возвращает сумму прописью
 * @author runcore
 * @uses morph(...)
 */
function num2str($num)
{
    $nul = 'ноль';
    $ten = array(
        array('', 'один', 'два', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять'),
        array('', 'одна', 'две', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять'),
    );
    $a20 = array('десять', 'одиннадцать', 'двенадцать', 'тринадцать', 'четырнадцать', 'пятнадцать', 'шестнадцать', 'семнадцать', 'восемнадцать', 'девятнадцать');
    $tens = array(2 => 'двадцать', 'тридцать', 'сорок', 'пятьдесят', 'шестьдесят', 'семьдесят', 'восемьдесят', 'девяносто');
    $hundred = array('', 'сто', 'двести', 'триста', 'четыреста', 'пятьсот', 'шестьсот', 'семьсот', 'восемьсот', 'девятьсот');
    $unit = array( // Units
        array('копейка', 'копейки', 'копеек', 1),
        array('рубль', 'рубля', 'рублей', 0),
        array('тысяча', 'тысячи', 'тысяч', 1),
        array('миллион', 'миллиона', 'миллионов', 0),
        array('миллиард', 'милиарда', 'миллиардов', 0),
    );
    //
    list($rub, $kop) = explode('.', sprintf("%015.2f", floatval($num)));
    $out = array();
    if (intval($rub) > 0) {
        foreach (str_split($rub, 3) as $uk => $v) { // by 3 symbols
            if (!intval($v)) continue;
            $uk = sizeof($unit) - $uk - 1; // unit key
            $gender = $unit[$uk][3];
            list($i1, $i2, $i3) = array_map('intval', str_split($v, 1));
            // mega-logic
            $out[] = $hundred[$i1]; # 1xx-9xx
            if ($i2 > 1) $out[] = $tens[$i2] . ' ' . $ten[$gender][$i3]; # 20-99
            else $out[] = $i2 > 0 ? $a20[$i3] : $ten[$gender][$i3]; # 10-19 | 1-9
            // units without rub & kop
            if ($uk > 1) $out[] = morph($v, $unit[$uk][0], $unit[$uk][1], $unit[$uk][2]);
        } //foreach
    } else $out[] = $nul;
    $out[] = morph(intval($rub), $unit[1][0], $unit[1][1], $unit[1][2]); // rub
    $out[] = $kop . ' ' . morph($kop, $unit[0][0], $unit[0][1], $unit[0][2]); // kop
    return trim(preg_replace('/ {2,}/', ' ', join(' ', $out)));
}

/**
 * Склоняем словоформу
 * @ author runcore
 */
function morph($n, $f1, $f2, $f5)
{
    $n = abs(intval($n)) % 100;
    if ($n > 10 && $n < 20) return $f5;
    $n = $n % 10;
    if ($n > 1 && $n < 5) return $f2;
    if ($n == 1) return $f1;
    return $f5;
}


/**
 * AJAX Load More
 */

function be_ajax_load_more()
{
    $args = isset($_POST['query']) ? array_map('esc_attr', $_POST['query']) : array();
    //$args['post_type'] = isset( $args['post_type'] ) ? esc_attr( $args['post_type'] ) : 'post';
    $args['post_type'] = $_POST['query'];
    $args['paged'] = esc_attr($_POST['page']);
    $args['post_status'] = 'publish';
    ob_start();
    $loop = new WP_Query($args);
    if ($loop->have_posts()): while ($loop->have_posts()): $loop->the_post();
        be_post_summary();
    endwhile; endif;
    wp_reset_postdata();
    $data = ob_get_clean();
    wp_send_json_success($data);
    wp_die();
}

add_action('wp_ajax_be_ajax_load_more', 'be_ajax_load_more');
add_action('wp_ajax_nopriv_be_ajax_load_more', 'be_ajax_load_more');


function be_post_summary()
{

    $img_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full');
    $image = aq_resize($img_url, 334, 179, true); // Resize & crop img

    echo '  <li class="blog-item">
                            <div class="blog-item-walp">
                                <a class="blog-img-link" href="' . get_the_permalink(get_the_ID()) . '">
                                    <img class="blog-img" src="' . $image . '" />
                                    <div class="overlay-layer-blog"></div>
                                    <div class="meta-blog">
                                        <img src="' . get_theme_file_uri("/assets/images/cal-white.png") . '"/>
                                        <span class="date-blog">' . get_the_date('Y.m.d', get_the_ID()) . '</span>
                                    </div>
                                </a>
                                
                                <div class="title-blog"><a href="' . get_the_permalink(get_the_ID()) . '">' . get_the_title(get_the_ID()) . '</a></div>
                                <div class="except-blog">' . my_string_limit_words(get_the_content(get_the_ID()), 10) . '</div>
                            </div>
            </li>';


}


/*
 *  Links  to URL
 */

function LinksTheme($link)
{

    switch ($link) {
        case 'user-profile':
            return home_url('/user-profile/');
            break;
        case 'login':
            return home_url("/login");
            break;
        case 'user-doc':
            return home_url("/doc/");
            break;
        case 'banlrotstvo-fl':
            return home_url("/banlrotstvo-fl/");
            break;
        case 'bankrotstvo-ipotechikov':
            return home_url("/bankrotstvo-ipotechikov/");
            break;
        case 'bankrotstvo-poruchitelya':
            return home_url("/bankrotstvo-poruchitelya/");
            break;
        case 'bankrotstvo-ooo':
            return home_url("/bankrotstvo-ooo/");
            break;
        case 'bankrotstvo-ip':
            return home_url("/bankrotstvo-ip/");
            break;
        case 'reviews':
            return home_url("/reviews/");
            break;
        case 'blog':
            return home_url("/blog/");
            break;
        case 'question-answer':
            return home_url("/question-answer/");
            break;
        case 'calculate':
            return home_url("/calculate/");
            break;
        case 'policy':
            return home_url("/policy/");
            break;
        case 'policy':
            return home_url("/policy/");
            break;
        case 'registration':
            return home_url("/registration/");
            break;
        case 'form10':
            return home_url("/doc-form10/");
            break;
        case 'form11':
            return home_url("/doc-form11/");
            break;
        case 'form9':
            return home_url("/doc-form9/");
            break;

        case 'form8':
            return home_url("/doc-form8/");
            break;
        case 'form7':
            return home_url("/doc-form7/");
            break;
        case 'form6':
            return home_url("/doc-form6/");
            break;
        case 'form5':
            return home_url("/doc-form5/");
            break;
        case 'form4':
            return home_url("/doc-form4/");
            break;
        case 'form3':
            return home_url("/doc-form3/");
            break;
        case 'form2':
            return home_url("/doc-form2/");
            break;
        case 'form1':
            return home_url("/doc-form1/");
            break;
        case 'perechen':
            return home_url("/perechen-doc/");
            break;
        case 'contact':
            return home_url("/contact/");
            break;
        case 'confirm':
            return home_url("/confirm/");
            break;

    }

}

/*
 *  Check User
 */
function checkUser()
{

    if (!is_user_logged_in()) {
        wp_redirect(LinksTheme('login'));
        exit;

    } else {
        $cur_user_id = get_current_user_id();
        global $wpdb;
        $table_name = $wpdb->prefix . "addition_informaion";
        $results = $wpdb->get_results("SELECT * FROM " . $table_name . " WHERE id_user ='" . $cur_user_id . "'");
        if (!is_page('confirm')) {  // check page Confirm   fix self redirect

            if (!isset($results[0]->extra_phone)) {
                wp_redirect(LinksTheme('confirm'));
                exit;
            }
        }

    }

}

/**
 * AJAX Confirm account
 */

function check_account()
{


    $number = isset($_POST['number']) ? $_POST['number'] : $_POST['number'] = '0';
    $code = isset($_POST['code']) ? $_POST['code'] : $_POST['code'] = 0;
    $check = isset($_POST['check']) ? $_POST['check'] : $_POST['check'] = false;
    ob_start();



    if ($number AND $code == 0) {

        $six_digit_random_number = mt_rand(100000, 999999);



        $updatenumber = substr_replace($number, '7', 0, 1);

        $smsru = new SMSRU('BD789B4B-A7F8-D5C2-A36E-D40CAC1DF37F'); // Ваш уникальный программный ключ, который можно получить на главной странице

        $data = new stdClass();
        $data->to = $updatenumber;
        $data->text = 'Компания Иджис\n Подтверждение регистрации. \n Введите код:' . $six_digit_random_number; // Текст сообщения
// $data->from = ''; // Если у вас уже одобрен буквенный отправитель, его можно указать здесь, в противном случае будет использоваться ваш отправитель по умолчанию
// $data->time = time() + 7*60*60; // Отложить отправку на 7 часов
// $data->translit = 1; // Перевести все русские символы в латиницу (позволяет сэкономить на длине СМС)
// $data->test = 1; // Позволяет выполнить запрос в тестовом режиме без реальной отправки сообщения
// $data->partner_id = '1'; // Можно указать ваш ID партнера, если вы интегрируете код в чужую систему

        $sms = $smsru->send_one($data); // Отправка сообщения и возврат данных в переменную

        if ($sms->status == "OK") { // Запрос выполнен успешно
            $a = array(
                'status' => ok,
                'value' => $six_digit_random_number
            );
            echo json_encode($a);
            // echo "ID сообщения: $sms->sms_id. ";
            //  echo "Ваш новый баланс: $sms->balance";
        } else {
            $a = array(
                'status' => false,
                'value' => $sms->status_code." ".$sms->status_text
            );
            echo json_encode($a);
        }

    }
    if ($code > 0) {

        if ($check == 'true') {
            $cur_user_id = get_current_user_id();
            global $wpdb;
            $table_name = $wpdb->prefix . "addition_informaion";
            $wpdb->query($wpdb->prepare(
                "INSERT INTO `" . $table_name . "` (id, id_user,extra_phone) VALUES ( %d, %d, %s)",
                array(
                    0,
                    $cur_user_id,
                    $number
                )
            ));
            $a = array(
                'status' => success,
                'url' => LinksTheme('user-profile')
            );
            echo json_encode($a);

        } else {

            $a = array(
                'status' => falsecheck
            );
            echo json_encode($a);
        }

    }

    wp_reset_postdata();
    $data = ob_get_clean();
    wp_send_json_success($data);

    wp_die();
}

add_action('wp_ajax_check_account', 'check_account');
add_action('wp_ajax_nopriv_check_account', 'check_account');