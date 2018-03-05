<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 05.03.2018
 * Time: 2:00
 */
if (isset($_POST['form_8_loan_agreement_submit'])) {
    $form_8_court_name = $_POST['form_8_court_name'];
    $form_8_adress_court = $_POST['form_8_adress_court'];

    $form_8_name_i = $_POST['form_8_name_i'];
    $form_8_adress_i = $_POST['form_8_adress_i'];
    $form_8_inn_i = $_POST['form_8_inn_i'];
    $form_8_ogrn_i = $_POST['form_8_ogrn_i'];
    $form_8_phone_exist = $_POST['form_8_phone_exist'];
    $form_8_fax_exist = $_POST['form_8_fax_exist'];
    $form_8_email_exist = $_POST['form_8_email_exist'];

    $form_8_number_delo = $_POST['form_8_number_delo'];
    $form_8_subject_dispute = $_POST['form_8_subject_dispute'];
    $form_8_violation_plaintiff = $_POST['form_8_violation_plaintiff'];
    $form_8_percent_delo = $_POST['form_8_percent_delo'];
    $form_8_circumstances_obligation = $_POST['form_8_circumstances_obligation'];

    $form_8_name_obligation = $_POST['form_8_name_obligation'];

    $form_8_aplication_name[] = $_POST['form_8_aplication_name'];

    //		$cur_user_id = get_current_user_id();
    $cur_user_id = 1;
    global $wpdb;
    $table_name = $wpdb->prefix . "addition_informaion";
    $results = $wpdb->get_results("SELECT * FROM " . $table_name . " WHERE id_user ='" . $cur_user_id . "'");


    $html = '    
            <div style="text-align: right;  display: block;">
                   <div style="text-align: right; width:60%; display: inline-block;">
                    <p style="    width: 57%; display: inline-block;">В:</p> <p style="display: inline-block;width: 40%;">' . $form_8_court_name . ' 
                    Адрес: ' . $form_8_adress_court . '
                    </div>                                 
            </div>   
            
 
            <div style="text-align: right;  display: block;">
                    Заявитель:  ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . ' <br>
                         Место жительства: ' . $results[0]->place_live . ' <br>
                         Дата и место рождения: ' . date("d.m.y", strtotime($results[0]->bird_day)) . ',<br>
                         ' . $results[0]->place_bird . ' <br>
                         Телефон: ' . $results[0]->extra_phone . ' <br>
                         e-mail: ' . $results[0]->extra_email . ' <br>
            </div> 
            <div style="text-align: right;   display: inline-block;">
                    Истец:                     
                        ' . $form_8_name_i . ' <br>
                         Место нахождения: ' . $form_8_adress_i . ' <br>
                         ИНН: ' . $form_8_inn_i . '; ОГРН: ' . $form_8_ogrn_i . ' <br> 
                         Телефон: ' . $form_8_phone_exist . ' <br>
                         Факс: ' . $form_8_fax_exist . ' <br>
                         e-mail: ' . $form_8_email_exist . ' <br>
            </div> 
                    <div style="text-align: right; width: 40%; display: inline-block;">
                    Дело №:                    
            </div>   
            <div style="text-align: right;  display: inline-block;">
                        ' . $form_8_number_delo . ' <br> 
            </div>
          
    
        <h1 style="text-align: center;">ХОДАТАЙСТВО<br> о снижении неустойки</h1>
    
        <p>
        Истец обратился в ' . $form_8_court_name . ' с исковым заявлением к Ответчику о '.$form_8_subject_dispute.'
        (далее по тексту настоящего ходатайства - Договор), уплата неустойки.
         Считаю, что требуемая Истцом сумма неустойки явно несоразмерна последствиям
        ненадлежащего исполнения Ответчиком своих обязательств по '.$form_8_violation_plaintiff.', поскольку по
        заключенному между Истцом и Ответчиком Договору предусмотрен чрезвычайно высокий процент
        неустойки - 4%, значительно превышающий размер действующей в период просрочки ставки
        рефинансирования ЦБ РФ. Таким образом, требуемая Истцом неустойка составляет значительную
        часть исковых требований в целом.
        Кроме того, при разрешении настоящего ходатайства прошу суд учесть '.$form_8_circumstances_obligation.'
        На основании вышеизложенного и руководствуясь ст. 333 ГК РФ, ст. 35 ГПК РФ,

        </p> 
    <h1 style="text-align: center;">ПРОШУ СУД:</h1>
    <p>
   Снизить размер неустойки за неисполнение Ответчиком обязательств перед Истцом по
    '.$form_8_name_obligation.', заключенного между Истцом и Ответчиком.

    </p>
    <br>
    Приложение:<br>';
    $count = 1;
    for($i=0;$i<count($form_8_aplication_name[0]);$i++){
        $html .='
            
            '.$count.'. '.$form_8_aplication_name[0][$i].';<br>
        
        ';
        $count++;
    }

    $html .='
     
    
               <p style="text-align:right;">
                Заявитель ___________________  ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . ' 
            </p>
    Дата: ' . date("d.m.y") . '
    
    ';
    generateform($html, 'form8');
}