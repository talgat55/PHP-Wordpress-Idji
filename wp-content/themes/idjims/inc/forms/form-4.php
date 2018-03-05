<?php
/**
 * Created by PhpStorm.
 * User: talgat
 * Date: 05.03.2018
 * Time: 11:21
 */
if (isset($_POST['form_4_submit'])) {

    //		$cur_user_id = get_current_user_id();
    $cur_user_id = 1;
    global $wpdb;
    $table_name = $wpdb->prefix . "addition_informaion";
    $results = $wpdb->get_results("SELECT * FROM " . $table_name . " WHERE id_user ='" . $cur_user_id . "'");

    $form_4_court = $_POST['form_4_court'];
    $form_4_number_dela = $_POST['form_4_number_dela'];

    $form_4_name_creditor[] = $_POST['form_4_name_creditor'];
    $form_4_location[] = $_POST['form_4_location'];
    $form_4_inn[] = $_POST['form_4_inn'];
    $form_4_ogrn[] = $_POST['form_4_ogrn'];
    $form_4_phone[] = $_POST['form_4_phone'];
    $form_4_fax[] = $_POST['form_4_fax'];
    $form_4_email[] = $_POST['form_4_email'];

    $form_4_no_have_earn = $_POST['form_4_no_have_earn'];
    $form_4_outstanding_conviction = $_POST['form_4_outstanding_conviction'];
    $form_4_administrative_punishment = $_POST['form_4_administrative_punishment'];
    $form_4_have_bankrot = $_POST['form_4_have_bankrot'];
    $form_4_have_plan_bankot = $_POST['form_4_have_plan_bankot'];
    $form_4_name_app[] = $_POST['form_4_name_app'];

    $html = '
                                            
                        В ' . $form_4_court . '<br> 
                        Должник  ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . ' <br>
                        Место жительства: ' . $results[0]->place_live . '
                        Дата и место рождения: ' . date("d.m.y", strtotime($results[0]->bird_day)) . ',<br>
                         ' . $results[0]->place_bird . ' <br>
                        Телефон: ' . $results[0]->extra_phone . '<br>
                        E-mail: ' . $results[0]->extra_email . '<br>
                        Конкурсный<br> 
                        ';
    if ($form_4_name_creditor[0]) {
        $count_creditor = 1;
        for ($i = 0; $i < count($form_4_name_creditor[0]); $i++) {
            $html .= '
                       кредитор ' . $count_creditor . '<br>
                                   ' . $form_4_name_creditor[0][$i] . '<br>
                                   Место нахождения:<br>
                                   ' . $form_4_location[0][$i] . '<br>
                                  ИНН: ' . $form_4_inn[0][$i] . ';ОГРН: ' . $form_4_ogrn[0][$i] . '<br>
                                  Телефон: ' . $form_4_phone[0][$i] . '<br>
                                  Факс: ' . $form_4_fax[0][$i] . '<br>
                                  E-mail: ' . $form_4_email[0][$i] . '<br>
              
                       ';


            $count_creditor++;
        }

    }


    $html .= '
               Дело № ' . $form_4_number_dela . '<br>          
    
    
     <h1 style="text-align: center;">ХОДАТАЙСТВО<br> о признании гражданина банкротом и введении процедуры<br>
        реализации имущества гражданина 
    </h1>
    <p>
     В соответствии с п. 8 ст. 213.6 Федерального закона «О несостоятельности
    (банкротстве)», по результатам рассмотрения обоснованности заявления о признании
    гражданина банкротом, если гражданин не соответствует требованиям для утверждения плана
    реструктуризации долгов, установленным пунктом 1 статьи 213.13 вышеуказанного
    Федерального закона, арбитражный суд вправе на основании ходатайства гражданина вынести
    решение о признании его банкротом и введении процедуры реализации имущества гражданина.
     Я,  ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . ' , (далее - Должник) не соответствую требованиям п. 1 ст. 213.13
    Федерального закона «О несостоятельности (банкротстве)» и в отношении меня не может быть
    введена процедура реструктуризации долгов гражданина в связи с тем, что на момент
    рассмотрения обоснованности заявления о признании гражданина банкротом, я:
    ';
    if ($form_4_no_have_earn) {
        $html .= '- не имею источника дохода;<br> ';
    }
    if ($form_4_outstanding_conviction) {
        $html .= '- имею неснятую или непогашенную судимость за совершение умышленного преступления в сфере экономики;<br> ';
    }
    if ($form_4_administrative_punishment) {
        $html .= '- считаюсь подвергнутым административному наказанию за мелкое хищение, умышленное уничтожение или повреждение имущества либо за фиктивное или преднамеренное банкротство;<br> ';
    }
    if ($form_4_have_bankrot) {
        $html .= '- признавался банкротом в течение пяти лет;<br> ';
    }

    if ($form_4_have_plan_bankot) {
        $html .= '- имею утверждённый в течение предшествующих восьми лет план реструктуризации долгов в отношении моей задолженности;<br> ';
    }


    $html .= '
    На основании вышеизложенного, а также руководствуясь ст. 41 АПК РФ, п. 8 ст. 213.6 ФЗ
    от 26.10.2002 г. № 127-ФЗ «О несостоятельности (банкротстве)»,
    </p>
    ';

    $html .= '      
     <h1 style="text-align: center;">ПРОШУ СУД:</h1>
     <p>
         Признать меня - гражданина Российской Федерации  ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . '  банкротом, в вести
            процедуру реализации имущества гражданина в отношении моего имущества. 
    </p>


    ';
    if ($form_4_name_app[0]) {
        $count_app = 1;
        for ($j = 0; $j < count($form_4_name_app[0]); $j++) {
            $html .= 'Приложение:<br>
        '.$count_app.') '.$form_4_name_app[0][$j].' <br>
        
        ';
            $count_app++;
        }

    }
    $html .=  '' . date("d.m.y") . '         <p style="text-align:right;">
        _____________   ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . '
    </p>';



    generateform($html, 'form4');

}