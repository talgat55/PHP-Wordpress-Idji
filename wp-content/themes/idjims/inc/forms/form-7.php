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
    $cur_user_id = get_current_user_id();

    $arr = [
        'января',
        'февраля',
        'марта',
        'апреля',
        'майя',
        'июня',
        'июля',
        'августа',
        'сентября',
        'октября',
        'ноября',
        'декабря'
    ];

    //$cur_user_id = 1;
    global $wpdb;
    $table_name = $wpdb->prefix . "addition_informaion";
    $results = $wpdb->get_results("SELECT * FROM " . $table_name . " WHERE id_user ='" . $cur_user_id . "'");
    $html = '
    <table style="border: none; width: 100%; " cellpadding="5">
        <tbody>
            <tr>
                <td style="width: 30%;"> </td>
                <td style="width: 40%; "></td>
                <td style="width: 30%; text-align: left; font-size: 10px;">УТВЕРЖДЕНО
                                        <br>приказом ФССП России
                                        <br>от 28.12.2016 № 822
                </td>
            </tr>
            <tr>
                <td style="width: 30%;"> </td>
                <td style="width: 70%; text-align: right;">' . $form_7_recipient . '</td>
                 
            </tr> 
            </tbody>
            </table>';
    $rdymounth = date("m", strtotime($results[0]->passport_issued_date))-1;
    $html .= '<div  style="text-align: justify;">
     <h1 style="text-align: center;">Заявление должника об отказе от взаимодействия</h1>
        <table style="border: none; width: 100%; " cellpadding="2">
        <tbody>
            <tr>
                <td style=" width: 95px;"><span style="color: #fff;">wdaw</span>Заявитель</td>
                <td  style="text-align:left;">' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . '</td> 
            </tr>
            <tr >
                <td style=" width: 100%;">Документ, удостоверяющий личность заявителя  паспорт гражданина РФ</td>
                  
            </tr> 
            <tr>
                 <td  style=" width: 100%;">серия: ' . $results[0]->passport_number . '  номер:  ' . $results[0]->passport_serial . '  выдан  «' . date("d", strtotime($results[0]->passport_issued_date)) . '»  ' . $arr[$rdymounth] . ' ' . date("Y", strtotime($results[0]->passport_issued_date)) . ' г.</td>
                 
            </tr> 
            <tr>
                <td style=" width: 100%;">' . $results[0]->passport_issued_by . '.</td>
            </tr> 
            <tr>
               <td style=" width: 100%;">Адрес места жительства заявителя</td>
            </tr> 
            <tr>
               <td style=" width: 100%;">' . $results[0]->registrtation_index . ', ' . $results[0]->registrtation_city . ',  ' . $results[0]->registrtation_locality . ' ' . $results[0]->registrtation_street . ', д. ' . $results[0]->registrtation_number_hourse . ', кв. ' . $results[0]->registrtation_number_housing .'.</td>
            </tr> 
            <tr>
                <td style=" width: 180px;">Контактный телефон заявителя</td>
                <td >' . $results[0]->extra_phone . '.</td> 
            </tr>
            <tr>
                <td style=" width: 100%;">Адрес электронной почты заявителя (при наличии)  </td> 
            </tr>
            <tr>
                <td style=" width: 100%;" >' . $results[0]->extra_email . '.</td> 
            </tr>
            
            </tbody>
            </table>
        <span style="font-weight: bold;"><span style="color: #fff;">wdaw</span>При совершении действий, направленных на возврат просроченной задолженности,  по договору</span> 
     ' . $form_7_number_doc . ' ' . date("d.m.y", strtotime($form_7_date_doc)) . '.
     
     <br>сообщаю об отказе от взаимодействия со мной способами, предусмотренными пунктами 1 и 2 части 1 статьи 4 Федерального закона от 03.07.2016 № 230-ФЗ “О защите прав и законных интересов физических лиц при осуществлении деятельности по возврату просроченной задолженности и о внесении изменений в Федеральный закон “О микрофинансовой деятельности и микрофинансовых организациях”.
    
     
     
     <br>Заявление <br>составлено:    «' . date("d") . '» ' . $arr[date("m")-1] . ' ' . date("Y") . ' г.</div>        
            <p style="text-align:right;">
                Подпись заявителя _____________/  ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . ' 
            </p>
     ';
    generateform($html, 'form7');
}