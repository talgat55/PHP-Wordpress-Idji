<?php


if (isset($_POST['form_reg_submit'])) {

  //		$cur_user_id = get_current_user_id();
        $cur_user_id =1;
        global $wpdb;
        $table_name = $wpdb->prefix . "addition_informaion";
        $results = $wpdb->get_results("SELECT * FROM ".$table_name." WHERE id_user ='".$cur_user_id."'");

        $form_1_entity[] = $_POST['form_1_entity'];  //Содержание обязательства
        $form_1_creditor[] = $_POST['form_1_creditor'];  //Кредитор
        $form_1_place_life[] = $_POST['form_1_place_life'];  //Место нахождения (место жительства) кредитора
        $form_1_main_emite[] = $_POST['form_1_main_emite'];  //Основание возникновения
        $form_1_total_all[] = $_POST['form_1_total_all'];  //Сумма обязательства (всего)
        $form_1_total_all_indebtedness[] = $_POST['form_1_total_all_indebtedness'];  //Сумма обязательства (в том числе задолженность)
        $form_1_penaltie_fines[] = $_POST['form_1_penaltie_fines'];  // Штрафы, пени и иные санкции

        $form_1_row2_name_tax[] = $_POST['form_1_row2_name_tax'];  // Наименование налога, сбора или иного обязательного платежа
        $form_1_row2_arrears[] = $_POST['form_1_row2_arrears'];  // Недоимка
        $form_1_row2_penaltie_fines[] = $_POST['form_1_row2_penaltie_fines'];  // Штрафы, пени и иные санкции

        // 2

        $form_1_entity_2[] = $_POST['form_1_entity_2'];  //Содержание обязательства
        $form_1_creditor_2[] = $_POST['form_1_creditor_2'];  //Кредитор
        $form_1_place_life_2[] = $_POST['form_1_place_life_2'];  //Место нахождения (место жительства) кредитора
        $form_1_main_emite_2[] = $_POST['form_1_main_emite_2'];  //Основание возникновения
        $form_1_total_all_2[] = $_POST['form_1_total_all_2'];  //Сумма обязательства (всего)
        $form_1_total_all_indebtedness_2[] = $_POST['form_1_total_all_indebtedness_2'];  //Сумма обязательства (в том числе задолженность)
        $form_1_penaltie_fines_2[] = $_POST['form_1_penaltie_fines_2'];  // Штрафы, пени и иные санкции

        $form_1_row2_name_tax_2[] = $_POST['form_1_row2_name_tax_2'];  // Наименование налога, сбора или иного обязательного платежа
        $form_1_row2_arrears_2[] = $_POST['form_1_row2_arrears_2'];  // Недоимка
        $form_1_row2_penaltie_fines_2[] = $_POST['form_1_row2_penaltie_fines_2'];  // Штрафы, пени и иные санкции

        // 3

        $form_1_entity_3[] = $_POST['form_1_entity_3'];  //Содержание обязательства
        $form_1_creditor_3[] = $_POST['form_1_creditor_3'];  //Кредитор
        $form_1_place_life_3[] = $_POST['form_1_place_life_3'];  //Место нахождения (место жительства) кредитора
        $form_1_main_emite_3[] = $_POST['form_1_main_emite_3'];  //Основание возникновения
        $form_1_total_all_3[] = $_POST['form_1_total_all_3'];  //Сумма обязательства (всего)
        $form_1_total_all_indebtedness_3[] = $_POST['form_1_total_all_indebtedness_3'];  //Сумма обязательства (в том числе задолженность)
        $form_1_penaltie_fines_3[] = $_POST['form_1_penaltie_fines_3'];  // Штрафы, пени и иные санкции

        $form_1_row2_name_tax_3[] = $_POST['form_1_row2_name_tax_3'];  // Наименование налога, сбора или иного обязательного платежа
        $form_1_row2_arrears_3[] = $_POST['form_1_row2_arrears_3'];  // Недоимка
        $form_1_row2_penaltie_fines_3[] = $_POST['form_1_row2_penaltie_fines_3'];  // Штрафы, пени и иные санкции

        //4

        $form_1_entity_4[] = $_POST['form_1_entity_4'];  //Содержание обязательства
        $form_1_creditor_4[] = $_POST['form_1_creditor_4'];  //Кредитор
        $form_1_place_life_4[] = $_POST['form_1_place_life_4'];  //Место нахождения (место жительства) кредитора
        $form_1_main_emite_4[] = $_POST['form_1_main_emite_4'];  //Основание возникновения
        $form_1_total_all_4[] = $_POST['form_1_total_all_4'];  //Сумма обязательства (всего)
        $form_1_total_all_indebtedness_4[] = $_POST['form_1_total_all_indebtedness_4'];  //Сумма обязательства (в том числе задолженность)
        $form_1_penaltie_fines_4[] = $_POST['form_1_penaltie_fines_4'];  // Штрафы, пени и иные санкции

        $form_1_row2_name_tax_4[] = $_POST['form_1_row2_name_tax_4'];  // Наименование налога, сбора или иного обязательного платежа
        $form_1_row2_arrears_4[] = $_POST['form_1_row2_arrears_4'];  // Недоимка
        $form_1_row2_penaltie_fines_4[] = $_POST['form_1_row2_penaltie_fines_4'];  // Штрафы, пени и иные санкции



        $html = '

        <style>

          td {
            line-height:20px;
          }
         .right{
           text-align:right;
         }
         .spec-min-font{
           font-size: 10px;
         }
         .spec-class-aligncenter{
           display: table;
         }
         .spec-class-aligncenter-walp{
            display: table-cell;
            vertical-align:middle;
         }
        </style>
        <p align="center">
            Список кредитов и должников гражданина
        </p>
        <p class="right spec-min-font">
            Приложение №2<br>
            к приказу   минэкономразвития России<br>
            от 5 августа 2015 года №530
        </p>

        <p align="center">
        		<strong> Информация о гражданине</strong>
        </p>
        <p>
        <table border="1" cellspacing="0" cellpadding="0" align="left" width="100%" cellpadding="5">
            <tbody>
                <tr>
                    <td class="spec-class-aligncenter"   colspan="3" style="text-align:center; height:20px; line-height: 20px;" >
                        <span class="spec-class-aligncenter-walp"> Информация о гражданине</span>
                    </td>
                </tr>
                <tr>
                    <td  width="60%">

                            фамилия

                    </td>
                    <td   width="20%" valign="middle">

                            обязательно

                    </td>
                    <td  width="20%"  valign="middle">
                    '.$results[0]->first_name.'
                    </td>
                </tr>
                <tr>
                    <td  width="60%" valign="middle">
                            имя
                    </td>
                    <td  width="20%" valign="middle">
                            обязательно
                    </td>
                    <td  width="20%" valign="middle">
                    '.$results[0]->second_name.'
                    </td>
                </tr>
                <tr>
                    <td width="60%" valign="center">
                            отчество
                    </td>
                    <td  width="20%"  valign="middle">
                            при наличии
                    </td>
                    <td   width="20%" valign="middle">
                    '.$results[0]->third_name.'
                    </td>
                </tr>
                <tr>
                    <td width="60%" >
                           в случае изменения фамилии, имени, отчества указать прежние
                            фамилии, имена, отчества
                    </td>
                    <td   width="20%" valign="middle">
                            при наличии
                    </td>
                    <td  width="20%"  valign="middle">
                    '.$results[0]->last_name.'
                    </td>
                </tr>
                <tr>
                    <td width="60%"  valign="middle">
                            дата рождения
                    </td>
                    <td   width="20%" valign="middle">
                            обязательно
                    </td>
                    <td  width="20%" valign="middle">
                    '.date("d.m.y",strtotime($results[0]->bird_day)).'
                    </td>
                </tr>
                <tr>
                    <td width="60%" valign="middle">
                            место рождения
                    </td>
                    <td  width="20%" valign="middle">
                            обязательно
                    </td>
                    <td  width="20%" valign="middle">
                    '.$results[0]->place_bird.'
                    </td>
                </tr>
                <tr>
                    <td  width="60%" valign="middle">
                            СНИЛС
                    </td>
                    <td  width="20%" valign="middle">
                            обязательно
                    </td>
                    <td   width="20%" valign="middle">
                    '.$results[0]->extra_snils.'
                    </td>
                </tr>
                <tr>
                    <td width="60%" valign="middle">
                            ИНН
                    </td>
                    <td  width="20%" valign="middle">
                            при наличии
                    </td>
                    <td  width="20%" valign="middle">
                    '.$results[0]->extra_inn.'
                    </td>
                </tr>
                <tr>
                    <td   colspan="3" valign="middle">
                            документ, удостоверяющий личность
                    </td>
                </tr>
                <tr>
                    <td width="60%"  valign="middle">
                            вид документа
                    </td>
                    <td  width="20%"  valign="middle">
                            обязательно
                    </td>
                    <td   width="20%" valign="middle">
                            Паспорт
                    </td>
                </tr>
                <tr>
                    <td  width="60%" valign="middle">
                            серия (при наличии) и номер
                    </td>
                    <td   width="20%" valign="middle">
                            обязательно
                    </td>
                    <td   width="20%" valign="middle">
                      '.$results[0]->passport_serial.'   '.$results[0]->passport_number.'
                    </td>
                </tr>
                <tr>
                    <td   colspan="3" valign="middle">
                            адрес регистрации по месту жительства в Российской
                            Федерации*
                    </td>
                </tr>
                <tr>
                    <td width="60%" valign="middle">
                            субьект Российской Федерации
                    </td>
                    <td  width="20%" valign="middle">
                            обязательно
                    </td>
                    <td  width="20%" valign="middle">
                    '.$results[0]->registrtation_city.'
                    </td>
                </tr>
                <tr>
                    <td width="60%" valign="middle">
                            район
                    </td>
                    <td   width="20%" valign="middle">
                            при наличии
                    </td>
                    <td  width="20%" valign="middle">

                      '.$results[0]->registrtation_city.'
                    </td>
                </tr>
                <tr>
                    <td  width="60%" valign="middle">
                            город
                    </td>
                    <td  width="20%" valign="middle">
                            при наличии
                    </td>
                    <td  width="20%"  valign="middle">
                    '.$results[0]->registrtation_locality.'
                    </td>
                </tr>
                <tr>
                    <td  width="60%" valign="middle">
                            населенный пункт (село, поселок и так далее)
                    </td>
                    <td  width="20%" valign="middle">
                            при наличии
                    </td>
                    <td  width="20%" valign="middle">
                    '.$results[0]->registrtation_locality.'
                    </td>
                </tr>
                <tr>
                    <td width="60%"  valign="middle">
                            улица (проспект, переулок и так далее)
                    </td>
                    <td   width="20%" valign="middle">
                            при наличии
                    </td>
                    <td   width="20%" valign="middle">
                    '.$results[0]->registrtation_street.'
                    </td>
                </tr>
                <tr>
                    <td width="60%" valign="middle">
                            номер дома (владения)
                    </td>
                    <td   width="20%" valign="middle">
                            при наличии
                    </td>
                    <td  width="20%"  valign="middle">
                    '.$results[0]->registrtation_number_hourse.'
                    </td>
                </tr>
                <tr>
                    <td width="60%"  valign="middle">
                            номер корпуса (строения)
                    </td>
                    <td  width="20%" valign="middle">
                            при наличии
                    </td>
                    <td   width="20%" valign="middle">
                      '.$results[0]->registrtation_number_housing.'
                    </td>
                </tr>
                <tr>
                    <td  width="60%" valign="middle">
                            номер квартиры (офиса)
                    </td>
                    <td   width="20%" valign="middle">
                            при наличии
                    </td>
                    <td  width="20%"  valign="middle">
                      '.$results[0]->registrtation_number_apartments.'
                    </td>
                </tr>
            </tbody>
        </table>
        <div>

                <strong>_____</strong><br>
                * При отсутствии регистрации по месту жительства в пределах Российской
                Федерации указать наименование субъекта Российской Федерации по месту
                пребывания без указания конкретного адреса
            </p>
        </div>
        <div>
            <p>
                I. Сведения о кредиторах гражданина (по денежным обязательствам и (или)
                обязанности по уплате обязательных платежей, за исключением возникших в
                результате осуществления гражданином предпринимательской деятельности)
            </p>
        </div>
        <table border="1" cellspacing="0" cellpadding="5" align="left" style="font-size:12px;" width="100%">
            <tbody>
                <tr>
                    <td width="100%" colspan="9" valign="middle">
                                I. Сведения о кредиторах гражданина ( по денежным
                                обязательствам и (или) обязанности по уплате
                                обязательных платежей, за исключением возникших в
                                результате осуществления гражданином
                                предпринимательской деятельности)
                    </td>
                </tr>
                <tr>
                    <td width="6%" valign="middle">
                            1
                    </td>
                    <td width="94%" colspan="8" style="text-align:center;">
                            Денежные обязательства
                    </td>
                </tr>
                <tr>
                    <td   width="6%"   rowspan="2" valign="middle">
                            № <br>
                            п/п
                    </td>
                    <td   width="15%"  rowspan="2" valign="middle">
                            Содержание   обязательства<sup>1</sup>
                    </td>
                    <td  width="12%" rowspan="2" valign="middle">
                            Кредитор<sup>2</sup>
                    </td>
                    <td   width="15%"  colspan="2" rowspan="2" valign="middle">
                            Место нахождения (место жительства кредитора)
                    </td>
                    <td   width="15%"  rowspan="2" valign="middle">
                            Основание  возникновения<sup>3</sup>
                    </td>
                    <td   width="25%"  colspan="2" valign="middle">
                            Сумма обязательства
                    </td>
                    <td   width="12%"  rowspan="2" valign="middle">
                            Штрафы, пени и иные санкции
                    </td>
                </tr>
                <tr>
                    <td   valign="middle">
                            Всего<sup>4</sup>
                    </td>
                    <td   valign="middle">
                            В том числе задолженность<sup>5</sup>
                    </td>
                </tr>';
                $curent_1_row = 1;

                for($i=0;$i<count($form_1_entity[0]);$i++){

                  $html .='
                            <tr>
                                <td  valign="middle">
                                      1.'.$curent_1_row.'
                                </td>
                                <td >
                                '.$form_1_entity[0][$i].'
                                </td>
                                <td >
                                '.$form_1_creditor[0][$i].'
                                </td>
                                <td  colspan="2" >
                                '.$form_1_place_life[0][$i].'
                                </td>
                                <td  >
                                '.$form_1_main_emite[0][$i].'
                                </td>
                                <td >
                                '.$form_1_total_all[0][$i].'
                                </td>
                                <td  >
                                '.$form_1_total_all_indebtedness[0][$i].'
                                </td>
                                <td>
                                '.$form_1_penaltie_fines[0][$i].'
                                </td>
                            </tr>
                  ';
                  $curent_1_row++;
                }

                if($form_1_row2_name_tax[0]){

                    $html .='
                      <tr>
                          <td width="6%"  >
                                  2
                          </td>
                          <td width="94%" colspan="8"  >
                                  Обязательные платежи
                          </td>
                      </tr>
                      <tr>
                          <td  >
                                  <div>
                                  №
                                  п/п
                                  </div>
                          </td>
                          <td   colspan="3"  >
                                  <div>
                                  Наименование налога, сбора или иного обязательного платежа
                                  </div>
                          </td>
                          <td  colspan="3"  >
                                  <div>
                                  Недоимка
                                  </div>
                          </td>
                          <td   colspan="2" >
                                  <div>
                                  Штрафы, пени и иные санкции
                                  </div>
                          </td>
                      </tr>
                      ';
                      $curent_1_row2 = 1;
                      for($q=0;$q<count($form_1_row2_name_tax[0]);$q++){
                      $html .='
                      <tr>
                          <td>
                                  2.'.$curent_1_row2.'
                          </td>
                          <td   colspan="3" >
                            '.$form_1_row2_name_tax[0][$q].'
                          </td>
                          <td  colspan="3"  >
                            '.$form_1_row2_arrears[0][$q].'
                          </td>
                          <td  colspan="2" >
                            '.$form_1_row2_penaltie_fines[0][$q].'
                          </td>
                      </tr>
                       ';

                      $curent_1_row2++;
                    }

              }
          $html .= '
            </tbody>
        </table>

        	  <strong>_____</strong>
            <p>
                Сведения о не денежных обязательствах гражданина, за исключением
                возникших в результате осуществления гражданином предпринимательской
                деятельности (в том числе о передаче имущества в собственность,
                выполнении работ и оказании услуг и так далее):
            </p>
        		<p>____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
            </p>
        <br>';

          // 2

        if($form_1_entity_2[0]){

        $html .='
            <p>
                II. Сведения о кредиторах гражданина (по денежным обязательствам и
                (или) обязанности по уплате обязательных платежей, которые возникли в
                результате осуществления гражданином предпринимательской деятельности)
            </p>

        <table border="1" cellspacing="0" cellpadding="5" align="left" width="100%">
            <tbody>
                <tr>
                    <td width="100%" colspan="9" valign="middle">
                                II. Сведения о кредиторах гражданина (по денежным
                                обязательствам и (или) обязанности по уплате
                                обязательных платежей, которые возникли в результате
                                осуществления гражданином предпринимательской
                                деятельности)
                    </td>
                </tr>
                <tr>
                    <td width="6%" valign="middle">
                            1
                    </td>
                    <td width="94%" colspan="8" valign="middle">
                            Денежные обязательства
                    </td>
                </tr>
                <tr>
                    <td width="6%" rowspan="2" valign="middle">
                            №
                            п/п
                    </td>
                    <td width="15%" rowspan="2" valign="middle">
                            Содержание   Обязательства<sup>6</sup>
                    </td>
                    <td width="12%" rowspan="2" valign="middle">
                            Кредитор<sup>7</sup>
                    </td>
                    <td width="15%" colspan="2" rowspan="2" valign="middle">
                            Место   нахождения (место жительства   кредитора)
                    </td>
                    <td width="15%" rowspan="2" valign="middle">
                            Основание возникновения<sup>3</sup>
                    </td>
                    <td width="25%" colspan="2" valign="middle">
                            Сумма обязательства
                    </td>
                    <td width="12%" rowspan="2" valign="middle">
                            Штрафы, пени и иные санкции
                    </td>
                </tr>
                <tr>
                    <td   valign="middle">
                            Всего<sup>9</sup>
                    </td>
                    <td   valign="middle">
                            В том числе задолженность<sup>10</sup>
                    </td>
                </tr>';
                $curent_2_row = 1;
                for($w=0;$w<count($form_1_entity_2[0]);$w++){
                  $html .='
                            <tr>
                                <td  valign="middle">
                                    <p align="center">
                                        1.'.$curent_2_row.'
                                    </p>
                                </td>
                                <td  valign="center">
                                '.$form_1_entity_2[0][$w].'
                                </td>
                                <td valign="center">
                                '.$form_1_creditor_2[0][$w].'
                                </td>
                                <td  colspan="2" valign="center">
                                '.$form_1_place_life_2[0][$w].'
                                </td>
                                <td valign="center">
                                '.$form_1_main_emite_2[0][$w].'
                                </td>
                                <td valign="center">
                                '.$form_1_total_all_2[0][$w].'
                                </td>
                                <td   valign="center">
                                '.$form_1_total_all_indebtedness_2[0][$w].'
                                </td>
                                <td  valign="center">
                                '.$form_1_penaltie_fines_2[0][$w].'
                                </td>
                            </tr>
                  ';
                  $curent_2_row++;
                }
                if($form_1_row2_name_tax_2[0]){
                $html .= '
                <tr>
                    <td width="6%" valign="middle">
                            2
                    </td>
                    <td width="94%" colspan="8" valign="middle">
                            Обязательные платежи
                    </td>
                </tr>
                <tr>
                    <td width="6%" valign="middle">
                            №
                            п/п
                    </td>
                    <td   colspan="3" valign="middle">
                            Наименование налога, сбора или иного обязательного платежа
                    </td>
                    <td   colspan="3" valign="middle">
                            Недоимка
                    </td>
                    <td   colspan="2" valign="middle">
                            Штрафы, пени и иные санкции
                    </td>
                </tr>';

                $curent_2_row2 = 1;
                for($e=0;$e<count($form_1_row2_name_tax_2[0]);$e++){
                $html .='
                <tr>
                    <td   valign="middle">
                            2.'.$curent_2_row2.'
                    </td>
                    <td  colspan="3" valign="center">
                      '.$form_1_row2_name_tax_2[0][$e].'
                    </td>
                    <td  colspan="3" valign="center">
                      '.$form_1_row2_arrears_2[0][$e].'
                    </td>
                    <td  colspan="2" valign="center">
                      '.$form_1_row2_penaltie_fines_2[0][$e].'
                    </td>
                </tr>
                 ';

                $curent_2_row2++;
              }

              }
              $html .='
            </tbody>
        </table>

        	  <strong>_____</strong>
            <p>
                Сведения о не денежных обязательствах гражданина, которые возникли в
                результате осуществления гражданином предпринимательской деятельности
                (в том числе о передаче имущества в собственность, выполнении работ и
                оказании услуг и так далее):
            </p>
            <p>____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
            </p>
        	</br>';

        }
          // 3

        if($form_1_entity_3[0]){
          $html .='
            <p>
                III. Сведения о должниках гражданина (по денежным обязательствам и
                (или) обязанности по уплате обязательных платежей, за исключением
                возникших в результате осуществления гражданином предпринимательской
                деятельности)
            </p>
        <table border="1" cellspacing="0" cellpadding="5" align="left" width="100%">
            <tbody>
                <tr>
                    <td width="100%" colspan="9" valign="middle">
                                III. Сведения о должниках гражданина (по денежным
                                обязательствам и (или) обязанности по уплате
                                обязательных платежей, за исключением возникших в
                                результате осуществления гражданином
                                предпринимательской деятельности)
                    </td>
                </tr>
                <tr>
                    <td width="6%" >
                            1
                    </td>
                    <td width="94%" colspan="8" >

                            Денежные обязательства
                    </td>
                </tr>
                <tr>
                    <td width="6%" rowspan="2" >
                    <div>
                            №
                            п/п
                    </div>
                    </td>
                    <td width="15%" rowspan="2"  >
                            <div>Содержание обязательства<sup>11</sup></div>
                    </td>
                    <td width="12%" rowspan="2"  >
                    <div>Кредитор<sup>12</sup></div>
                    </td>
                    <td width="15%" colspan="2" rowspan="2"  >
                    <div>Место нахождения (место жительства кредитора)</div>
                    </td>
                    <td width="15%" rowspan="2" >
                    <div>Основание   Возникновения<sup>13</sup></div>
                    </td>
                    <td width="25%" colspan="2"  >
                    <div>Сумма обязательства</div>
                    </td>
                    <td width="12%" rowspan="2"  >
                    <div>Штрафы, пени и иные санкции</div>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div>Всего<sup>14</sup></div>
                    </td>
                    <td >
                      <div>В том числе задолженность<sup>15</sup></div>
                    </td>
                </tr>';
                $curent_3_row = 1;
                for($r=0;$r<count($form_1_entity_3[0]);$r++){
                  $html .='
                            <tr>
                                <td   valign="middle">
                                        1.'.$curent_3_row.'
                                </td>
                                <td  valign="center">
                                '.$form_1_entity_3[0][$r].'
                                </td>
                                <td  valign="center">
                                '.$form_1_creditor_3[0][$r].'
                                </td>
                                <td colspan="2" valign="center">
                                '.$form_1_place_life_3[0][$r].'
                                </td>
                                <td  valign="center">
                                '.$form_1_main_emite_3[0][$r].'
                                </td>
                                <td  valign="center">
                                '.$form_1_total_all_3[0][$r].'
                                </td>
                                <td  valign="center">
                                '.$form_1_total_all_indebtedness_3[0][$r].'
                                </td>
                                <td   valign="center">
                                '.$form_1_penaltie_fines_3[0][$r].'
                                </td>
                            </tr>
                  ';
                  $curent_3_row++;
                }

                if($form_1_row2_name_tax_3[0]){
                $html .= '
                <tr>
                    <td width="6%" valign="middle">
                            2
                    </td>
                    <td width="94%" colspan="8" valign="middle">
                            Обязательные платежи
                    </td>
                </tr>
                <tr>
                    <td   rowspan="2" valign="middle">
                        <div>
                            №
                            п/п
                        </div>
                    </td>
                    <td   colspan="3" rowspan="2" valign="middle">
                        <div align="center">
                            Наименование налога, сбора или иного обязательного платежа
                        </div>
                    </td>
                    <td   colspan="5" valign="middle">
                        <div align="center">
                            Сумма к зачету или возврату
                        </div>
                    </td>
                </tr>
                <tr>
                    <td   colspan="3" valign="middle">
                        <div align="center">
                            всего
                        </div>
                    </td>
                    <td   colspan="2" valign="middle">
                        <div align="center">
                            проценты<sup>16</sup>
                        </div>
                    </td>
                </tr>';
                $curent_3_row2 = 1;
                for($e=0;$e<count($form_1_row2_name_tax_3[0]);$e++){
                $html .='
                <tr>
                    <td   valign="middle">
                            2.'.$curent_3_row2.'
                    </td>
                    <td   colspan="3" valign="center">
                      '.$form_1_row2_name_tax_3[0][$e].'
                    </td>
                    <td   colspan="3" valign="center">
                      '.$form_1_row2_arrears_3[0][$e].'
                    </td>
                    <td   colspan="2" valign="center">
                      '.$form_1_row2_penaltie_fines_3[0][$e].'
                    </td>
                </tr>
                 ';

                $curent_3_row2++;
              }

             }
        $html .= '
            </tbody>
        </table>

        	<strong>_____</strong>
            <p>
                Сведения о не денежных обязательствах перед гражданином, которые
                возникли в результате осуществления гражданином предпринимательской
                деятельности (в том числе о передаче имущества в собственность,
                выполнении работ и оказании услуг и так далее):
            </p>
            <p>____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
                      </p>
        	</br>
          ';
        }
            // 4
        if($form_1_entity_4[0]){
          $html .='
            <p>
                IV. Сведения о должниках гражданина (по денежным обязательствам и (или)
                обязанности по уплате обязательных платежей, которые возникли в
                результате осуществления гражданином предпринимательской деятельности)
            </p>

        <table border="1" cellspacing="0" cellpadding="5" align="left" width="100%">
            <tbody>
                <tr>
                    <td width="100%" colspan="9" valign="middle">
                      IV. Сведения о должниках гражданина (по денежным
                      обязательствам и (или) обязанности по уплате
                      обязательных платежей, которые возникли в результате
                      осуществления гражданином предпринимательской
                      деятельности)
                    </td>
                </tr>
                <tr>
                    <td width="6%" valign="middle">
                            1
                    </td>
                    <td width="94%" colspan="8" valign="middle">
                            Денежные обязательства
                    </td>
                </tr>
                <tr>
                    <td width="6%" rowspan="2" valign="middle">
                            №
                            п/п
                    </td>
                    <td width="15%" rowspan="2" valign="middle">
                        <div align="center">
                            Содержание обязательства<sup>17</sup>
                        </div>
                    </td>
                    <td width="12%" rowspan="2" valign="middle">
                        <div align="center">
                            Кредитор<sup>18</sup>
                        </div>
                    </td>
                    <td width="15%" colspan="2" rowspan="2" valign="middle">
                        <div align="center">
                            Место нахождения (место жительства кредитора)
                        </div>
                    </td>
                    <td width="15%" rowspan="2" valign="middle">
                        <div align="center">
                            Основание Возникновения<sup>19</sup>
                        </div>
                    </td>
                    <td width="25%" colspan="2" valign="middle">
                        <div align="center">
                            Сумма обязательства
                        </div>
                    </td>
                    <td width="12%" rowspan="2" valign="middle">
                        <div align="center">
                            Штрафы, пени и иные санкции
                        </div>
                    </td>
                </tr>
                <tr>
                    <td  valign="middle">
                        <div>
                            Всего<sup>20</sup>
                        </div>
                    </td>
                    <td  valign="middle">
                        <div align="center">
                            В том числе задолженность<sup>21</sup>
                        </div>
                    </td>
                </tr>';
                $curent_4_row = 1;
                for($t=0;$t<count($form_1_entity_4[0]);$t++){
                  $html .='
                            <tr>
                                <td >
                                        1.'.$curent_4_row.'
                                </td>
                                <td >
                                '.$form_1_entity_4[0][$t].'
                                </td>
                                <td >
                                '.$form_1_creditor_4[0][$t].'
                                </td>
                                <td colspan="2" >
                                '.$form_1_place_life_4[0][$t].'
                                </td>
                                <td >
                                '.$form_1_main_emite_4[0][$t].'
                                </td>
                                <td >
                                '.$form_1_total_all_4[0][$t].'
                                </td>
                                <td >
                                '.$form_1_total_all_indebtedness_4[0][$t].'
                                </td>
                                <td >
                                '.$form_1_penaltie_fines_4[0][$t].'
                                </td>
                            </tr>
                  ';
                  $curent_4_row++;
                }

                if($form_1_row2_name_tax_4[0]){
                $html .= '
                <tr>
                    <td width="6%" valign="middle">
                            2
                    </td>
                    <td width="94%" colspan="8"  >
                            Обязательные платежи
                    </td>
                </tr>
                <tr>
                    <td  rowspan="2" valign="middle">
                        <div align="center">
                            п/п
                        </div>
                    </td>
                    <td  colspan="3" rowspan="2" valign="middle">
                        <div align="center">
                            Наименование налога, сбора или иного обязательного платежа
                        </div>
                    </td>
                    <td   colspan="5" valign="middle">
                        <div align="center">
                            Сумма к зачету или возврату
                        </div>
                    </td>
                </tr>
                <tr>
                    <td  colspan="3" valign="middle">
                        <div align="center">
                            всего
                        </div>
                    </td>
                    <td   colspan="2" valign="middle">
                        <div align="center">
                            Проценты<sup>22</sup>
                        </div>
                    </td>
                </tr>
                ';
                $curent_4_row2 = 1;
                for($y=0;$y<count($form_1_row2_name_tax_4[0]);$y++){
                $html .='
                <tr>
                    <td width="6%" valign="middle">
                            2.'.$curent_4_row2.'
                    </td>
                    <td  colspan="3" valign="center">
                      '.$form_1_row2_name_tax_4[0][$y].'
                    </td>
                    <td   colspan="3" valign="center">
                      '.$form_1_row2_arrears_4[0][$y].'
                    </td>
                    <td  colspan="2" valign="center">
                      '.$form_1_row2_penaltie_fines_4[0][$y].'
                    </td>
                </tr>
                 ';

                $curent_4_row2++;
              }
        }

        $html .='

            </tbody>
        </table>

        	<strong>_____</strong>
            <p>
                Сведения о не денежных обязательствах перед гражданином, которые
                возникли в результате осуществления гражданином предпринимательской
                деятельности (в том числе о передаче имущества в собственность,
                выполнении работ и оказании услуг и так далее):
            </p>
            <p>____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
                      </p>
        	</br>
          ';
        }
        $html .='
            <p>
                Достоверность и полноту настоящих сведений потверждаю:
            </p>
            <p style="text-align:right;">
                «___» _____________ 20___г.
            </p>
            <p>
                _______
            </p>
            <p>
                1 - Указывается существо обязательства (например, заем, кредит).
            </p>
            <p>
                2- Указывается другая сторона обязательства: кредитор, фамилия, имя и
                отчество (последнее - при наличии) для физического лица или
                наименование юридического лица.
            </p>
            <p>
                3 - Указывается основание возникновения обязательства, а также
                реквизиты (дата, номер) соответствующего договора или акта.
            </p>
            <p>
                4 - Указывается сумма основного обязательства, в том числе подлежащие
                уплате проценты. Для обязательств, выраженных в иностранной валюте,
                сумма указывается в рублях по курсу Банка России на дату составления
                списка кредиторов и должников гражданина.
            </p>
            <p>
                5 - Указывается размер просроченной задолженности по сумме основного
                обязательства (с процентами) по состоянию на дату составления списка
                кредиторов и должников гражданина (за исключением неустойки (штрафа,
                пени), процентов за просрочку платежа, убытков в виде упущенной выгоды
                и иных финансовых санкций, начисленных на сумму основного
                обязательства). Для обязательств, выраженных в иностранной валюте,
                сумма указывается в рублях по курсу Банка России на дату составления
                списка кредиторов и должников гражданина.
            </p>
            <p>
                6 - Указывается существо обязательства (например, заем, кредит).
            </p>
            <p>
                7 - Указывается другая сторона обязательства: кредитор, фамилия, имя и
                отчество (последнее - при наличии) для физического лица или
                наименование юридического лица.
            </p>
            <p>
                8 - Указывается основание возникновения обязательства, а также
                реквизиты (дата, номер) соответствующего договора или акта.
            </p>
            <p>
                9 - Указывается сумма основного обязательства, в том числе подлежащие
                уплате проценты. Для обязательств, выраженных в иностранной валюте,
                сумма указывается в рублях по курсу Банка России на дату составления
                списка кредиторов и должников гражданина.
            </p>
            <p>
                10 - Указывается размер просроченной задолженности по сумме основного
                обязательства (с процентами) по состоянию на дату составления списка
                кредиторов и должников гражданина (за исключением неустойки (штрафа,
                пени), процентов за просрочку платежа, убытков в виде упущенной выгоды
                и иных финансовых санкций, начисленных на сумму основного
                обязательства). Для обязательств, выраженных в иностранной валюте,
                сумма указывается в рублях по курсу Банка России на дату составления
                списка кредиторов и должников гражданина.
            </p>
            <p>
                11 - Указывается существо обязательства (например, заем, кредит).
            </p>
            <p>
                12 - Указывается другая сторона обязательства: кредитор, фамилия, имя и
                отчество (последнее - при наличии) для физического лица или
                наименование юридического лица.
            </p>
            <p>
                13 - Указывается основание возникновения обязательства, а также
                реквизиты (дата, номер) соответствующего договора или акта.
            </p>
            <p>
                14 - Указывается сумма основного обязательства, в том числе подлежащие
                уплате проценты. Для обязательств, выраженных в иностранной валюте,
                сумма указывается в рублях по курсу Банка России на дату составления
                списка кредиторов и должников гражданина.
            </p>
            <p>
                15 - Указывается размер просроченной задолженности по сумме основного
                обязательства (с процентами) по состоянию на дату составления списка
                кредиторов и должников гражданина (за исключением неустойки (штрафа,
                пени), процентов за просрочку платежа, убытков в виде упущенной выгоды
                и иных финансовых санкций, начисленных на сумму основного
                обязательства). Для обязательств, выраженных в иностранной валюте,
                сумма указывается в рублях по курсу Банка России на дату составления
                списка кредиторов и должников гражданина.
            </p>
            <p>
                16 - Указывается существо обязательства (например, заем, кредит).
            </p>
            <p>
                17 - Указывается другая сторона обязательства: кредитор, фамилия, имя и
                отчество (последнее - при наличии) для физического лица или
                наименование юридического лица.
            </p>
            <p>
                18 - Указывается основание возникновения обязательства, а также
                реквизиты (дата, номер) соответствующего договора или акта.
            </p>
            <p>
                19 - Указывается сумма основного обязательства, в том числе подлежащие
                уплате проценты. Для обязательств, выраженных в иностранной валюте,
                сумма указывается в рублях по курсу Банка России на дату составления
                списка кредиторов и должников гражданина.
            </p>
            <p>
                20 - Указывается размер просроченной задолженности по сумме основного
                обязательства (с процентами) по состоянию на дату составления списка
                кредиторов и должников гражданина (за исключением неустойки (штрафа,
                пени), процентов за просрочку платежа, убытков в виде упущенной выгоды
                и иных финансовых санкций, начисленных на сумму основного
                обязательства). Для обязательств, выраженных в иностранной валюте,
                сумма указывается в рублях по курсу Банка России на дату составления
                списка кредиторов и должников гражданина.
            </p>
            <p>
                21 - Заполняется в случае, если возврат суммы излишне уплаченного
                налога осуществляется с нарушением сроков, установленных Налоговым
                кодексом Российской Федерации (Собрание законодательства Российской
                Федерации, 1998, N 31, ст.3824; 2006, N 31, ст.3436; 2010, N 31,
                ст.4198; 2011, N 47, ст.6611; 2012, N 27, ст.3588; 2013, N 30, ст.4081;
                2014, N 45, ст.6157; N 26, ст.3372; 2015, N 24, ст.3377).
            </p>
        </div>



        ';
      /*  $uniq = uniqid();
        $namefile = "form1".$uniq.".html";
        $fp = fopen($namefile, "w");

        // записываем в файл текст
        fwrite($fp, $html);

        // закрываем
        fclose($fp);*/

        generateform ($html,'form1');

}

?>
