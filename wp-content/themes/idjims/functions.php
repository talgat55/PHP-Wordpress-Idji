<?php

/*
* Add Feature Imagee
**/
add_theme_support( 'post-thumbnails' );

/*
* Enrique SCript
*/

function th_scripts() {
	// Theme stylesheet.
	wp_enqueue_style( 'th-style', get_theme_file_uri(  'style.css'),array(), '' );
	wp_enqueue_style( 'style', get_theme_file_uri(  '/assets/css/style.css'),array(), '' );

  wp_enqueue_script( 'jquery', get_theme_file_uri( '/assets/js/jquery-3.2.1.min.js' ), array(), '1' );
	wp_enqueue_script( 'default', get_theme_file_uri(  '/assets/js/default_js.js'),array(), '2' );
 	wp_enqueue_script( 'slick.min', get_theme_file_uri(  '/assets/js/slick.min.js'),array(), '2' );
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


function my_meta_box() {
    add_meta_box(
        'my_meta_menu_box',
        'Дополнительное поле',
        'show_my_metabox',
        'slider',
        'normal',
        'high');
}
add_action('add_meta_boxes', 'my_meta_box');

$meta_fields = array(
    array(
        'label' => 'Заголовок',
        'id'    => 'title_meta',
        'type'  => 'text'
    ) ,
    array(
        'label' => 'Текст',
        'id'    => 'text_meta',
        'type'  => 'text'
    ) ,
    array(
        'label' => 'Выделеное слово',
        'id'    => 'select_meta',
        'type'  => 'text'
    )



);

function show_my_metabox() {
global $meta_fields;
global $post;
echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

    echo '<table class="form-table">';
    foreach ($meta_fields as $field) {
        $meta = get_post_meta($post->ID, $field['id'], true);
        echo '<tr><th><label for="'.$field['id'].'">'.$field['label'].'</label></th><td>';

        switch($field['type']) {
            case 'text':
    			echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" /><br /><span class="description">'.$field['desc'].'</span>';
			break;
			case 'textarea':
			    echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="60" rows="4">'.$meta.'</textarea><br /><span class="description">'.$field['desc'].'</span>';
			break;
            case 'checkbox':
                echo '<input type="checkbox" name="'.$field['id'].'" id="'.$field['id'].'" ',$meta ? ' checked="checked"' : '','/><label for="'.$field['id'].'">'.$field['desc'].'</label>';
            break;

                }
        echo '</td></tr>';
    }
    echo '</table>';
}

function save_my_meta_fields($post_id) {
    global $meta_fields;

    if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))
        return $post_id;

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
    }

    foreach ($meta_fields as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach
}
add_action('save_post', 'save_my_meta_fields');
