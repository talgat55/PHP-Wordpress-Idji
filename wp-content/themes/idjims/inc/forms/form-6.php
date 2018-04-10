<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 05.03.2018
 * Time: 3:53
 */
if (isset($_POST['form_6_submit'])) {

    		$cur_user_id = get_current_user_id();
    //$cur_user_id = 1;
    global $wpdb;
    $table_name = $wpdb->prefix . "addition_informaion";
    $results = $wpdb->get_results("SELECT * FROM " . $table_name . " WHERE id_user ='" . $cur_user_id . "'");

    $form_6_court = $_POST['form_6_court'];

    $form_6_fio = $_POST['form_6_fio'];

    $form_6_adress_send_mails = $_POST['form_6_adress_send_mails'];
    $form_6_creditor[] = $_POST['form_6_creditor'];

    $form_6_number_dela = $_POST['form_6_number_dela'];

    $form_6_period_dela = $_POST['form_6_period_dela'];
    $form_6_textarea = $_POST['form_6_textarea'];
    $form_6_amount_money = $_POST['form_6_amount_money'];

    $explodecourt = explode('|', $form_6_court);
    $html = '
    <table style="border: none; width: 100%; " cellpadding="5">
        <tbody>
            <tr>
                <td style="width: 30%;"> </td>
                <td style="width: 30%; text-align: right;">Куда:</td>
                <td style="width: 40%;">' . $explodecourt[0] . ' <br>Адрес: ' . $explodecourt[1] . '
                </td>
            </tr>
            <tr>
                <td style="width: 30%;"> </td>
                <td style="width: 30%; text-align: right;">Должник:<br> (Заявитель)</td>
                <td style="width: 40%;"> ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . ' <br>паспорт:  ' . $results[0]->passport_serial . '  ' . $results[0]->passport_number . '<br>выдан:  ' . $results[0]->passport_issued_by . ' <br>дата выдачи:  ' . date("d.m.y", strtotime($results[0]->passport_issued_date)) . '  <br>адрес регистрации:
                                                    ' . $results[0]->registrtation_index . ', ' . $results[0]->registrtation_city . ',  ' . $results[0]->registrtation_locality . '<br>
                </td>
            </tr>
            <tr>
                <td style="width: 30%;"> </td>
                <td style="width: 30%; text-align: right;">Финансовый<br> управляющий:</td>
                <td style="width: 40%;"> адрес: ' . $form_6_adress_send_mails . ' <br> ';
    for ($i = 0; $i < count($form_6_creditor[0]); $i++) {

        $html .= $form_6_creditor[0][$i] . '<br>';
    }
    $html .= '        
                </td>
            </tr>             
            <tr>
                <td style="width: 30%;"> </td>
                <td style="width: 30%; text-align: right;">Дело №:</td>
                <td style="width: 40%;"> ' . $form_6_number_dela . '</td>
            </tr> 
        </tbody>
    </table>
            ';


    $html .= ' 
          
    <h1 style="text-align: center;">Заявление<br> об исключении из конкурсной массы должника денежных<br>
        средств, необходимых для<br>
        проживания должника и членов его семьи
    </h1>
    
    <p style="text-align: justify;">
     Решением Арбитражного суда Республики Башкортостан по делу № ' . $form_6_number_dela . '  ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . ' 
    признан банкротом и введена процедура реализации имущества гражданина. Процедура введена
    на срок до 2018-02-27 г.
     Согласно п. 39 Постановления Пленума ВС РФ №45 от 13.10.2015 г. при рассмотрении дел о
    банкротстве граждан, в том числе индивидуальных предпринимателей, суды должны учитывать
    необходимость обеспечения справедливого баланса между имущественными интересами
    кредиторов и личными правами должника (в том числе его правами на достойную жизнь и
    достоинство личности). Указанное обстоятельство подлежит учету судом, рассматривающим
    дело о банкротстве, в том числе при рассмотрении ходатайства должника о получении из
    конкурсной массы денежных средств в разумном размере на оплату личных нужд.
    ' . $form_6_textarea . '
        
    </p>
    <h1 style="text-align: center;">ПРОШУ СУД:</h1>  
    <p  style="text-align: justify;">
    ежемесячно, в течение срока проведения процедуры реализации имущества должника,
    исключать из конкурсной массы должника денежные средства в размере ' . num2str($form_6_amount_money) . ' руб. для проживания должника и членов его семьи.<br>
    <br>Дата: ' . date("d.m.y") . '         
    <p style="text-align:right;">
                 _____________/  ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . ' 
            </p>
    </p>
        ';
    generateform($html, 'form6');
}