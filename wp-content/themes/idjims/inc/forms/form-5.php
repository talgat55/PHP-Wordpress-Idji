<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 05.03.2018
 * Time: 10:44
 */


if (isset($_POST['form_5_submit'])) {

    $form_5_name_bank = $_POST['form_5_name_bank'];
    $form_5_adress_bank = $_POST['form_5_adress_bank'];
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
                <td style="width: 30%; text-align: right;">В:</td>
                <td style="width: 40%;">' . $form_5_name_bank . '<br>Адрес: ' . $form_5_adress_bank . '<br>От  ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . '<br>Место жительства: '.$results[0]->place_live.'<br>Телефон: '.$results[0]->extra_phone.'
                </td>
            </tr>
        </tbody>
        </table>
           
            
            ';



    $html .= '     
                                        
                     
    <h1 style="text-align: center;">Заявление о предоставлении информации</h1>
    <p>
    Прошу Вас предоставить сведения в виде справки о наличии счетов, вкладов (депозитов),
    а также об остатках денежных средств на счетах, во вкладах (депозитах), выписки за
    трехлетний период по операциям на счетах, по вкладам (депозитам) открытым в Вашем банке
    на моё имя.
    Также прошу Вас предоставить сведения в виде справки об остатках принадлежащих мне
    электронных денежных средств и о переводах электронных денежных средств за трехлетний
    период.
    </p>
     
 ' . date("d.m.y") . '         <p style="text-align:right;">
                 _____________   ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . ' 
            </p>
     
    
    ';

    generateform($html, 'form5');
}