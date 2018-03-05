<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 05.03.2018
 * Time: 3:05
 */
if (isset($_POST['form_7_submit'])) {
    $form_7_recipient = $_POST['form_7_recipient'];
    $form_7_number_doc = $_POST['form_7_number_doc'];
    $form_7_date_doc = $_POST['form_7_date_doc'];
    //		$cur_user_id = get_current_user_id();
    $cur_user_id = 1;
    global $wpdb;
    $table_name = $wpdb->prefix . "addition_informaion";
    $results = $wpdb->get_results("SELECT * FROM " . $table_name . " WHERE id_user ='" . $cur_user_id . "'");

    $html = '
     <h1 style="text-align: center;">Заявление<br> об отказе взаимодействия</h1>
     Заявитель: ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . '<br>
     Документ, удостоверяющий личность: паспорт гражданина РФ<br>
     серия: ' . $results[0]->passport_serial . '  номер:  ' . $results[0]->passport_number . '  дата выдачи:  ' . date("d.m.y", strtotime($results[0]->passport_issued_date)) . ' <br>
     кем выдан: ' . $results[0]->passport_issued_by . ' <br>
     
     Адрес места жительства заявителя: 
     ' . $results[0]->registrtation_index . ', ' . $results[0]->registrtation_city . ',  ' . $results[0]->registrtation_locality . '<br>
     Контактные телефоны заявителя:  ' . $results[0]->extra_phone . '<br>
     Адрес электронной почты заявителя:  ' . $results[0]->extra_email . '<br>
     При совершении действий, направленных на возврат просроченной задолженности,<br>
     '.$form_7_number_doc.' ' . date("d.m.y", strtotime($form_7_date_doc)) . '<br>
     Заявление составлено: ' . date("d.m.y") . '         <p style="text-align:right;">
                Подпись заявителя _____________/  ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . ' 
            </p>
     ';
    generateform($html, 'form7');
}