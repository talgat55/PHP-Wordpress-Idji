<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 05.03.2018
 * Time: 10:44
 */


if (isset($_POST['form_11_submit'])) {

    $form_11_name_bank = $_POST['form_11_name_bank'];
    $form_11_adress_bank = $_POST['form_11_adress_bank'];

    $form_11_order = $_POST['form_11_order'];

    $form_11_date = $_POST['form_11_date'];
    $form_11_number_cart = $_POST['form_11_number_cart'];
    	$cur_user_id = get_current_user_id();
    //$cur_user_id = 1;
    global $wpdb;
    $table_name = $wpdb->prefix . "addition_informaion";
    $results = $wpdb->get_results("SELECT * FROM " . $table_name . " WHERE id_user ='" . $cur_user_id . "'");

    $html = '
    <table style="border: none; width: 100%; " cellpadding="5">
        <tbody>
            <tr>
                <td style="width: 30%;"> </td>
                <td style="width: 30%; text-align: right;">Куда:</td>
                <td style="width: 40%;">' . $form_11_name_bank . '<br>Адрес: ' . $form_11_adress_bank . '<br> 
                </td>
            </tr>            
            <tr>
                <td style="width: 30%;"> </td>
                <td style="width: 30%; text-align: right;">От<br />кого:</td>
                <td style="width: 40%;">' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . '<br>Место жительства: '.$results[0]->place_live.'  '.$results[0]->registrtation_locality.',   '.$results[0]->registrtation_city.', '.$results[0]->registrtation_street.', д. '.$results[0]->registrtation_number_hourse.', кв. '.$results[0]->registrtation_number_housing.'<br>Паспорт: серия ' . $results[0]->passport_number. '  №' . $results[0]->passport_serial . ', выдан  '.date("d.m.y", strtotime($results[0]->passport_issued_date)).'  '.$results[0]->passport_issued_by.', код подразделения '.$results[0]->passport_issued_key.'<br>тел: '.$results[0]->extra_phone.'
                </td>
            </tr>
        </tbody>
        </table>
           
            
            ';



    $html .= '     
                                        
                     
    <h1 style="text-align: center;">Заявление<br>
    о предоставлении информации заемщику<br>
    (в порядке ст. 10 ФЗ от 21.12.2013 N 353-ФЗ «О<br>
    потребительском кредите (займе)»)

    </h1>
    <p style="text-align: justify;"><span style="color: #fff;">wdaw</span>' . date("d.m.y", strtotime($form_11_date)) . ' между мной и '.$form_11_name_bank.' (далее - Банк) заключен кредитный договор '.$form_11_order.',
согласно условиям которого Банк принял на себя обязательство по выпуску кредитной карты '.$form_11_number_cart.'
<br><span style="color: #fff;">wdaw</span>Прошу Вас предоставить мне информацию в виде справки, в которой будут содержаться
следующие сведения:<br>
<span style="color: #fff;">wdaw</span>- о наличии и размере как текущей, так и просроченной задолженности по
вышеуказанному Договору;<br>
<span style="color: #fff;">wdaw</span>- даты и размеры произведенных и предстоящих платежей по вышеуказанному Договору.
<br><span style="color: #fff;">wdaw</span>Запрашиваемую справку прошу направить письмом по почтовому адресу, указанному мной в
настоящем заявлении в срок, не превышающий 7 (семь) календарных дней с момента получения
Вами настоящего заявления.
<br><span style="color: #fff;">wdaw</span>Обращаю Ваше внимание, что запрашиваемая мной информация в рамках Договора, согласно
нормам Федерального закона от 21.12.2013 N 353-ФЗ «О потребительском кредите (займе)»
предоставляется заёмщику бесплатно.
<br><span style="color: #fff;">wdaw</span>Так же прошу бесплатно предоставить заверенную Вами копию вышеуказанного Договора
(документов, на основании которых возникло соответствующее обязательство). В случае, если
по каким-то причинам Вы не имеет возможности предоставить в мой адрес копию
запрашиваемого Договора (документов, на основании которых возникло соответствующее
обязательство) бесплатно, прошу предоставить письменные разъяснения на этот счёт с
приложением тарифов за предоставление данной услуги.
<br><span style="color: #fff;">wdaw</span>Запрашиваемую копию Договора (документов, на основании которых возникло соответствующее
обязательство) также прошу направить письмом по почтовому адресу, указанному мной в
настоящем заявлении в срок, не превышающий 7(семь) календарных дней с момента получения
Вами настоящего заявления.
<br><span style="color: #fff;">wdaw</span><b>Обращаю Ваше внимание,</b> что предоставленные письменные разъяснения о невозможности
предоставления копии запрашиваемого Договора (документов, на основании которых возникло
соответствующее обязательство) бесплатно, а также отсутствие ответа на данный запрос по
существу будет являться основанием для обращения в контролирующие органы.
<br><span style="color: #fff;">wdaw</span>С уважением,


    </p> 
            <p style="text-align:right;">
                 ______________/  ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . ' 
            </p>
            <br>
    ' . date("d.m.y") . '          
    
    ';

    generateform($html, 'form5');
}