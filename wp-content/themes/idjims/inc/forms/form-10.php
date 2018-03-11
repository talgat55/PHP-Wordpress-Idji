<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 04.03.2018
 * Time: 19:34
 */
if (isset($_POST['form_10_cancel_court_order_submit'])) {

    $form_10_whom = $_POST['form_10_whom'];
    $form_10_adress_court = $_POST['form_10_adress_court'];
    $form_10_by_whom = $_POST['form_10_by_whom'];

    $form_10_who_whom = $_POST['form_10_who_whom'];

    $form_10_name_creditor = $_POST['form_10_name_creditor'];
    $form_10_location = $_POST['form_10_location'];
    $form_10_inn = $_POST['form_10_inn'];
    $form_10_ogrn = $_POST['form_10_ogrn'];
    $form_10_phone = $_POST['form_10_phone'];
    $form_10_fax = $_POST['form_10_fax'];
    $form_10_email = $_POST['form_10_email'];

    $form_10_date = $_POST['form_10_date'];

    $form_10_case_number = $_POST['form_10_case_number'];
    $form_10_credit_number = $_POST['form_10_credit_number'];
    $form_10_total = $_POST['form_10_total'];
    //		$cur_user_id = get_current_user_id();
    $cur_user_id = 1;
    global $wpdb;
    $table_name = $wpdb->prefix . "addition_informaion";
    $results = $wpdb->get_results("SELECT * FROM " . $table_name . " WHERE id_user ='" . $cur_user_id . "'");

    $html = '
    <table style="border: none; width: 100%; " cellpadding="5">
        <tbody>
            <tr>
                <td style="width: 30%;"> </td>
                <td style="width: 30%; text-align: right;">Куда:</td>
                <td style="width: 40%;">' . $form_10_whom . '<br>' . $form_10_adress_court . '</td>
            </tr>
            <tr>
                <td style="width: 30%;"> </td>
                <td style="width: 30%; text-align: right;">Заявитель:</td>
                <td style="width: 40%;">' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . ' <br>Место жительства: ' . $results[0]->place_live . ' <br>Дата и место рождения: ' . date("d.m.y", strtotime($results[0]->bird_day)) . ',<br>
                                         ' . $results[0]->place_bird . ' <br>Телефон: ' . $results[0]->extra_phone . ' <br>e-mail: ' . $results[0]->extra_email . ' <br>
                         </td>
            </tr>
            <tr>
                <td style="width: 30%;"> </td>
                <td style="width: 30%; text-align: right;">Взыскатель:</td>
                <td style="width: 40%;">' . $form_10_name_creditor . ' <br>Место нахождения: ' . $form_10_location . ' <br>ИНН: ' . $form_10_inn . '; ОГРН: ' . $form_10_ogrn . ' <br>Телефон: ' . $form_10_phone . ' <br>Факс: ' . $form_10_fax . ' <br>e-mail: ' . $form_10_email . ' <br></td>
            </tr>             
            <tr>
                <td style="width: 30%;"> </td>
                <td style="width: 30%; text-align: right;">Дело №:</td>
                <td style="width: 40%;"> ' . $form_10_case_number . '</td>
            </tr> 
            </tbody>
            </table>
            ';



    $html .= '     
 
            
            
               
    
        <h1 style="text-align: center;">Заявление<br> об отмене судебного приказа</h1>
    
        <p>
        ' . date("d.m.y", strtotime($form_10_date)) . ' ' . $form_10_by_whom . ' был вынесен судебный приказ по делу ' . $form_10_case_number . ' по заявлению
        ' . $form_10_name_creditor . ' к ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . ' о взыскании денежных средств по кредитному
        договору ' . $form_10_credit_number . ', уплате госпошлины, а всего в размере ' . $form_10_total . '  (' . num2str($form_10_total) . ') рублей.
        Категорически возражаю относительно исполнения вышеуказанного судебного приказа,
        поскольку не согласен с суммой взыскания по вышеуказанному кредитному договору, считаю,
        что расчет произведен незаконно и необоснованно.
        ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . ' не имел возможности представлять доказательства в защиту своей позиции по
        данному разбирательству и знакомиться с материалами, имеющимися в распоряжении банка, то
        есть реализовывать свои права, предоставленные ГПК РФ.
        На основании вышеизложенного и руководствуясь ст. 128, 129 ГПК РФ
                
        </p> 
    <h1 style="text-align: center;">Прошу суд:</h1>
    <p>
    1. Отменить судебный приказ ' . $form_10_who_whom . '    от ' . date("d.m.y", strtotime($form_10_date)) . ' по делу ' . $form_10_case_number . ' о взыскании с  ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . '  
    в пользу ' . $form_10_name_creditor . ' денежных средств в размере ' . $form_10_total . '  (' . num2str($form_10_total) . ') рублей.
    2. Выдать  ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . '  на руки копию определения об отмене судебного приказа в установленный законом срок.
      
    </p>
    <br>
    Приложение:<br>
    1. копия настоящего заявления для взыскателя;<br>
    2. копия судебного приказа;<br>
    3. копия почтового конверта.<br>
    
               <p style="text-align:right;">
                Должник _____________/  ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . ' 
            </p>
    Дата: ' . date("d.m.y") . '
    
    ';
    /*
    $uniq = uniqid();
    $namefile = "form10" . $uniq . ".html";
    $fp = fopen($namefile, "w");

    // записываем в файл текст
    fwrite($fp, $html);

    // закрываем
    fclose($fp);*/

    generateform($html, 'form10');
}