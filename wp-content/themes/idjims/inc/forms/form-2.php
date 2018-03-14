<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 05.03.2018
 * Time: 23:42
 */
if (isset($_POST['form_2_submit'])) {

    //		$cur_user_id = get_current_user_id();
    $cur_user_id = 1;
    global $wpdb;
    $table_name = $wpdb->prefix . "addition_informaion";
    $results = $wpdb->get_results("SELECT * FROM " . $table_name . " WHERE id_user ='" . $cur_user_id . "'");

    $form_2_kinds_name_property[] = $_POST['form_2_kinds_name_property'];
    $form_2_kind_property[] = $_POST['form_2_kind_property'];
    $form_2_place_property[] = $_POST['form_2_place_property'];
    $form_2_area_property[] = $_POST['form_2_area_property'];
    $form_2_acquisition_price_property[] = $_POST['form_2_acquisition_price_property'];
    $form_2_info_zalog_property[] = $_POST['form_2_info_zalog_property'];

    $form_2_kinds_name_home[] = $_POST['form_2_kinds_name_home'];
    $form_2_kind_home[] = $_POST['form_2_kind_home'];
    $form_2_place_home[] = $_POST['form_2_place_home'];
    $form_2_area_home[] = $_POST['form_2_area_home'];
    $form_2_acquisition_price_home[] = $_POST['form_2_acquisition_price_home'];
    $form_2_info_zalog_home[] = $_POST['form_2_info_zalog_home'];

    $form_2_kinds_name_rooms[] = $_POST['form_2_kinds_name_rooms'];
    $form_2_kind_rooms[] = $_POST['form_2_kind_rooms'];
    $form_2_place_rooms[] = $_POST['form_2_place_rooms'];
    $form_2_area_rooms[] = $_POST['form_2_area_rooms'];
    $form_2_acquisition_price_rooms[] = $_POST['form_2_acquisition_price_rooms'];
    $form_2_info_zalog_rooms[] = $_POST['form_2_info_zalog_rooms'];

    $form_2_kinds_name_garages[] = $_POST['form_2_kinds_name_garages'];
    $form_2_kind_garages[] = $_POST['form_2_kind_garages'];
    $form_2_place_garages[] = $_POST['form_2_place_garages'];
    $form_2_area_garages[] = $_POST['form_2_area_garages'];
    $form_2_acquisition_price_garages[] = $_POST['form_2_acquisition_price_garages'];
    $form_2_info_zalog_garages[] = $_POST['form_2_info_zalog_garages'];

    $form_2_kinds_name_otherproperty[] = $_POST['form_2_kinds_name_otherproperty'];
    $form_2_kind_otherproperty[] = $_POST['form_2_kind_otherproperty'];
    $form_2_place_otherproperty[] = $_POST['form_2_place_otherproperty'];
    $form_2_area_otherproperty[] = $_POST['form_2_area_otherproperty'];
    $form_2_acquisition_price_otherproperty[] = $_POST['form_2_acquisition_price_otherproperty'];
    $form_2_info_zalog_otherproperty[] = $_POST['form_2_info_zalog_otherproperty'];

    // 2
    $form_2_kind_marks_light[] = $_POST['form_2_kind_marks_light'];
    $form_2_id_number_light[] = $_POST['form_2_id_number_light'];
    $form_2_kinds_property_light[] = $_POST['form_2_kinds_property_light'];
    $form_2_palce_light[] = $_POST['form_2_palce_light'];
    $form_2_price_light[] = $_POST['form_2_price_light'];
    $form_2_info_light[] = $_POST['form_2_info_light'];

    $form_2_kind_marks_cargo[] = $_POST['form_2_kind_marks_cargo'];
    $form_2_id_number_cargo[] = $_POST['form_2_id_number_cargo'];
    $form_2_kinds_property_cargo[] = $_POST['form_2_kinds_property_cargo'];
    $form_2_palce_cargo[] = $_POST['form_2_palce_cargo'];
    $form_2_price_cargo[] = $_POST['form_2_price_cargo'];
    $form_2_info_cargo[] = $_POST['form_2_info_cargo'];

    $form_2_kind_marks_moto[] = $_POST['form_2_kind_marks_moto'];
    $form_2_id_number_moto[] = $_POST['form_2_id_number_moto'];
    $form_2_kinds_property_moto[] = $_POST['form_2_kinds_property_moto'];
    $form_2_palce_moto[] = $_POST['form_2_palce_moto'];
    $form_2_price_moto[] = $_POST['form_2_price_moto'];
    $form_2_info_moto[] = $_POST['form_2_info_moto'];

    $form_2_kind_marks_agricultural_machinery[] = $_POST['form_2_kind_marks_agricultural_machinery'];
    $form_2_id_number_agricultural_machinery[] = $_POST['form_2_id_number_agricultural_machinery'];
    $form_2_kinds_property_agricultural_machinery[] = $_POST['form_2_kinds_property_agricultural_machinery'];
    $form_2_palce_agricultural_machinery[] = $_POST['form_2_palce_agricultural_machinery'];
    $form_2_price_agricultural_machinery[] = $_POST['form_2_price_agricultural_machinery'];
    $form_2_info_agricultural_machinery[] = $_POST['form_2_info_agricultural_machinery'];

    $form_2_kind_marks_water_machinery[] = $_POST['form_2_kind_marks_water_machinery'];
    $form_2_id_number_water_machinery[] = $_POST['form_2_id_number_water_machinery'];
    $form_2_kinds_property_water_machinery[] = $_POST['form_2_kinds_property_water_machinery'];
    $form_2_palce_water_machinery[] = $_POST['form_2_palce_water_machinery'];
    $form_2_price_water_machinery[] = $_POST['form_2_price_water_machinery'];
    $form_2_info_water_machinery[] = $_POST['form_2_info_water_machinery'];

    $form_2_kind_marks_air_machinery[] = $_POST['form_2_kind_marks_air_machinery'];
    $form_2_id_number_air_machinery[] = $_POST['form_2_id_number_air_machinery'];
    $form_2_kinds_property_air_machinery[] = $_POST['form_2_kinds_property_air_machinery'];
    $form_2_palce_air_machinery[] = $_POST['form_2_palce_air_machinery'];
    $form_2_price_air_machinery[] = $_POST['form_2_price_air_machinery'];
    $form_2_info_air_machinery[] = $_POST['form_2_info_air_machinery'];

    $form_2_kind_marks_other_machinery[] = $_POST['form_2_kind_marks_other_machinery'];
    $form_2_id_number_other_machinery[] = $_POST['form_2_id_number_other_machinery'];
    $form_2_kinds_property_other_machinery[] = $_POST['form_2_kinds_property_other_machinery'];
    $form_2_palce_other_machinery[] = $_POST['form_2_palce_other_machinery'];
    $form_2_price_other_machinery[] = $_POST['form_2_price_other_machinery'];
    $form_2_info_other_machinery[] = $_POST['form_2_info_other_machinery'];
    // 3

    $form_2_name_adress_bank[] = $_POST['form_2_name_adress_bank'];
    $form_2_kind_valute_chet[] = $_POST['form_2_kind_valute_chet'];
    $form_2_date_open_chet[] = $_POST['form_2_date_open_chet'];
    $form_2_balance_chet[] = $_POST['form_2_balance_chet'];
    //4

    $form_2_4_1_name[] = $_POST['form_2_4_1_name'];
    $form_2_4_2_place[] = $_POST['form_2_4_2_place'];
    $form_2_4_3_kapital[] = $_POST['form_2_4_3_kapital'];
    $form_2_4_4_part_use[] = $_POST['form_2_4_4_part_use'];
    $form_2_4_5_main_use[] = $_POST['form_2_4_5_main_use'];
    // 5

    $form_2_5_1_kind_paper[] = $_POST['form_2_5_1_kind_paper'];
    $form_2_5_2_face_release[] = $_POST['form_2_5_2_face_release'];
    $form_2_5_3_value_obyazatelstava[] = $_POST['form_2_5_3_value_obyazatelstava'];
    $form_2_5_4_total_count[] = $_POST['form_2_5_4_total_count'];
    $form_2_5_5_total_price[] = $_POST['form_2_5_5_total_price'];
    // 6

    $form_2_6_1_kind_property_jewelry[] = $_POST['form_2_6_1_kind_property_jewelry'];
    $form_2_6_2_price_jewelry[] = $_POST['form_2_6_2_price_jewelry'];
    $form_2_6_3_plcae_have_jewelry[] = $_POST['form_2_6_3_plcae_have_jewelry'];
    $form_2_6_4_total_info_jewelry[] = $_POST['form_2_6_4_total_info_jewelry'];

    $form_2_6_1_kind_property_artobjects[] = $_POST['form_2_6_1_kind_property_artobjects'];
    $form_2_6_2_price_artobjects[] = $_POST['form_2_6_2_price_artobjects'];
    $form_2_6_3_plcae_have_artobjects[] = $_POST['form_2_6_3_plcae_have_artobjects'];
    $form_2_6_4_total_info_artobjects[] = $_POST['form_2_6_4_total_info_artobjects'];

    $form_2_6_1_kind_property_property[] = $_POST['form_2_6_1_kind_property_property'];
    $form_2_6_2_price_property[] = $_POST['form_2_6_2_price_property'];
    $form_2_6_3_plcae_have_property[] = $_POST['form_2_6_3_plcae_have_property'];
    $form_2_6_4_total_info_property[] = $_POST['form_2_6_4_total_info_property'];

    $form_2_6_1_kind_property_propertyother[] = $_POST['form_2_6_1_kind_property_propertyother'];
    $form_2_6_2_price_propertyother[] = $_POST['form_2_6_2_price_propertyother'];
    $form_2_6_3_plcae_have_propertyother[] = $_POST['form_2_6_3_plcae_have_propertyother'];
    $form_2_6_4_total_info_propertyother[] = $_POST['form_2_6_4_total_info_propertyother'];


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
        <h1 align="center">
            Опись имущества гражданина
        </h1>
        <p class="right spec-min-font">
            Приложение №2<br>
            к приказу   минэкономразвития России<br>
            от 5 августа 2015 года №530
        </p>

        <h1 align="center">
        		<strong> Информация о гражданине</strong>
        </h1>
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
                    ' . $results[0]->first_name . '
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
                    ' . $results[0]->second_name . '
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
                    ' . $results[0]->third_name . '
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
                    ' . $results[0]->last_name . '
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
                    ' . date("d.m.y", strtotime($results[0]->bird_day)) . '
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
                    ' . $results[0]->place_bird . '
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
                    ' . $results[0]->extra_snils . '
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
                    ' . $results[0]->extra_inn . '
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
                      ' . $results[0]->passport_serial . '   ' . $results[0]->passport_number . '
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
                    ' . $results[0]->registrtation_city . '
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

                      ' . $results[0]->registrtation_city . '
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
                    ' . $results[0]->registrtation_locality . '
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
                    ' . $results[0]->registrtation_locality . '
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
                    ' . $results[0]->registrtation_street . '
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
                    ' . $results[0]->registrtation_number_hourse . '
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
                      ' . $results[0]->registrtation_number_housing . '
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
                      ' . $results[0]->registrtation_number_apartments . '
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
        ';
    $count_rows_property = count($form_2_kinds_name_property[0]) + 1;
    $html .= '
    <h1 align="center">
        I. Недвижимое имущество 
    </h1>
    <table border="1" cellspacing="0" cellpadding="5" style="font-size:10px;">
    <tbody>
        <tr  >
            <td width="100%" colspan="7" valign="top" style="text-align: center;"> 
                    Недвижимое имущество 
            </td>
        </tr>
        <tr  >
            <td width="6%" valign="top"> 
                    № п/п 
            </td>
            <td width="15%" style="text-align: center;">Вид и наименование имущества</td>
            <td width="17%"  style="text-align: center;">Вид собствености<sup>1</sup></td>
            <td width="17%"  style="text-align: center;">Местонахождение (адрес)</td>
            <td width="11%"  style="text-align: center;">Площадь (кв. м)</td>
            <td width="17%"  style="text-align: center;">Основание приобритения<sup>2</sup> и стоимость<sup>3</sup></td>
            <td width="17%"  style="text-align: center;">Сведения о залоге и залогодержателе<sup>4</sup></td>
        </tr>
        <tr nobr="true">
            <td width="6%" rowspan="' . $count_rows_property . '" valign="top">
                <span style="vertical-align: middle;">
                    1.1
                </span>
            </td>
            <td width="94%" colspan="6" valign="top"> 
                    Земельные участки<sup>5</sup>: 
            </td>
        </tr>';
    $form_2_kinds_name_property_count = 1;
    for ($z = 0; $z < count($form_2_kinds_name_property[0]); $z++) {

        $html .= '        
            <tr nobr="true">
                <td>
                ' . $form_2_kinds_name_property_count . ')  ' . $form_2_kinds_name_property[0][$z] . '
                </td>
                <td>
                ' . $form_2_kind_property[0][$z] . '
                </td>
                <td>
                ' . $form_2_place_property[0][$z] . ' 
                </td>
                <td>
                ' . $form_2_area_property[0][$z] . ' 
                </td>
                <td>
                ' . $form_2_acquisition_price_property[0][$z] . ' 
                </td>
                <td>
                ' . $form_2_info_zalog_property[0][$z] . '
                </td>
            </tr>';
        $form_2_kinds_name_property_count++;
    }
    //  1.2
    $count_rows_home = count($form_2_kinds_name_home[0]) + 1;
    $html .= '<tr nobr="true">
            <td width="6%" rowspan="' . $count_rows_home . '" valign="top">
                <span style="vertical-align: middle;">
                    1.2
                </span>
            </td>
            <td width="94%" colspan="6" valign="top"> 
                   Жилые дома, дачи: 
            </td>
        </tr>';

    $form_2_kinds_name_home_count = 1;
    for ($x = 0; $x < count($form_2_kinds_name_home[0]); $x++) {

        $html .= '        
            <tr nobr="true">
                <td>
                ' . $form_2_kinds_name_home_count . ')  ' . $form_2_kinds_name_home[0][$x] . '
                </td>
                <td>
                ' . $form_2_kind_home[0][$x] . '
                </td>
                <td>
                ' . $form_2_place_home[0][$x] . ' 
                </td>
                <td>
                ' . $form_2_area_home[0][$x] . ' 
                </td>
                <td>
                ' . $form_2_acquisition_price_home[0][$x] . ' 
                </td>
                <td>
                ' . $form_2_info_zalog_home[0][$x] . '
                </td>
            </tr>';
        $form_2_kinds_name_home_count++;
    }
    // 1.3
    $count_rows_rooms = count($form_2_kinds_name_rooms[0]) + 1;
    $html .= '<tr nobr="true">
            <td width="6%" rowspan="' . $count_rows_rooms . '" valign="top">
                <span style="vertical-align: middle;">
                    1.3
                </span>
            </td>
            <td width="94%" colspan="6" valign="top"> 
                  Квартиры:
            </td>
        </tr>';
    $form_2_kinds_name_rooms_count = 1;
    for ($c = 0; $c < count($form_2_kinds_name_rooms[0]); $c++) {

        $html .= '        
            <tr nobr="true">
                <td>
                ' . $form_2_kinds_name_rooms_count . ')  ' . $form_2_kinds_name_rooms[0][$c] . '
                </td>
                <td>
                ' . $form_2_kind_rooms[0][$c] . '
                </td>
                <td>
                ' . $form_2_place_rooms[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_area_rooms[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_acquisition_price_rooms[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_info_zalog_rooms[0][$c] . '
                </td>
            </tr>';
        $form_2_kinds_name_rooms_count++;
    }
    // 1.4
    $count_rows_garages = count($form_2_kinds_name_garages[0]) + 1;
    $html .= '<tr nobr="true">
            <td width="6%" rowspan="' . $count_rows_garages . '" valign="top">
                <span style="vertical-align: middle;">
                    1.4
                </span>
            </td>
            <td width="94%" colspan="6" valign="top"> 
                  Гаражи:
            </td>
        </tr>';
    $form_2_kinds_name_garages_count = 1;
    for ($c = 0; $c < count($form_2_kinds_name_garages[0]); $c++) {

        $html .= '        
            <tr nobr="true">
                <td>
                ' . $form_2_kinds_name_garages_count . ')  ' . $form_2_kinds_name_garages[0][$c] . '
                </td>
                <td>
                ' . $form_2_kind_garages[0][$c] . '
                </td>
                <td>
                ' . $form_2_place_garages[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_area_garages[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_acquisition_price_garages[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_info_zalog_garages[0][$c] . '
                </td>
            </tr>';
        $form_2_kinds_name_garages_count++;
    }

    // 1.5

    $count_rows_otherproperty = count($form_2_kinds_name_otherproperty[0]) + 1;
    $html .= '<tr nobr="true">
            <td width="6%" rowspan="' . $count_rows_otherproperty . '" valign="top">
                <span style="vertical-align: middle;">
                    1.5
                </span>
            </td>
            <td width="94%" colspan="6" valign="top"> 
                  Иное недвижимое имущество:
            </td>
        </tr>';
    $form_2_kinds_name_otherproperty_count = 1;
    for ($c = 0; $c < count($form_2_kinds_name_otherproperty[0]); $c++) {

        $html .= '        
            <tr nobr="true">
                <td>
                ' . $form_2_kinds_name_otherproperty_count . ')  ' . $form_2_kinds_name_otherproperty[0][$c] . '
                </td>
                <td>
                ' . $form_2_kind_otherproperty[0][$c] . '
                </td>
                <td>
                ' . $form_2_place_otherproperty[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_area_otherproperty[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_acquisition_price_otherproperty[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_info_zalog_otherproperty[0][$c] . '
                </td>
            </tr>';
        $form_2_kinds_name_otherproperty_count++;
    }


    $html .= '    
    </tbody>
    </table>
    <strong>_____</strong><br>
    <sup>1</sup>
     Указывается вид собственности (индивидуальная, долевая, общая); для совместной собственности указываются иные лица (фамилия, имя и отчество (последнее - при наличии) или
    наименование), в собственности которых находится имущество; для долевой собственности указывается доля гражданина, который составляет опись имущества.
    <br>
    <sup>2</sup>
     Указываются наименование и реквизиты документа, являющегося законным основанием для возникновения права собственности.
    <br>
    <sup>3</sup>
     Указывается при наличии документов, содержащих сведения о стоимости имущества (например, отчет о стоимости имущества, подготовленный оценщиком, договор купли-продажи, иной
    документ об оплате (приобретении) имущества).
    <br>
    <sup>4</sup>
     Указываются сведения о договоре залога, иной сделке, на основании которой возникает залог в силу закона, а также наименование юридического лица или фамилия, имя и отчество
    (последнее - при наличии) физического лица, в залоге у которого находится имущество.
    <br>
    <sup>5</sup>
     Указывается вид земельного участка (пая, доли): под индивидуальное жилищное строительство, дачный, садовый, приусадебный, огородный и другие.
    ';

    //II
    $count_kind_marks_light = count($form_2_kind_marks_light[0]) + 1;
    $html .= '
    <h1 align="center">
        II. Движимое имущество 
    </h1>
    
    <table border="1" cellspacing="0" cellpadding="5" style="font-size:10px;">
    <tbody>
        <tr nobr="true">
            <td width="100%" colspan="7" valign="top" style="text-align: center;"> 
                    Движимое имущество 
            </td>
        </tr>
        <tr nobr="true">
            <td width="6%" valign="top"> 
                    № п/п 
            </td>
            <td width="15%" style="text-align: center;">Вид, марка, модель транспортного средства, год изготовления</td>
            <td width="17%"  style="text-align: center;">Идентификационный номер<sup>6</sup></td>
            <td width="17%"  style="text-align: center;">Вид собственности <sup>7</sup></td>
            <td width="11%"  style="text-align: center;">Место нахождения/место хранения (адрес)</td>
            <td width="17%"  style="text-align: center;">Стоимость<sup>8</sup></td>
            <td width="17%"  style="text-align: center;">Сведения о залоге и залогодержателе<sup>9</sup></td>
        </tr>
        <tr nobr="true">
            <td width="6%" rowspan="' . $count_kind_marks_light . '" valign="top"> 
                   <span style="vertical-align: middle;">
                    2.1 
                    </span>
            </td>
            <td width="94%" colspan="6" valign="top"> 
                   Автомобили легковые:
            </td>
        </tr>';

    $form_2_kind_marks_light_count = 1;
    for ($c = 0; $c < count($form_2_kind_marks_light[0]); $c++) {

        $html .= '        
            <tr nobr="true">
                <td>
                ' . $form_2_kind_marks_light_count . ')  ' . $form_2_kind_marks_light[0][$c] . '
                </td>
                <td>
                ' . $form_2_id_number_light[0][$c] . '
                </td>
                <td>
                ' . $form_2_kinds_property_light[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_palce_light[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_price_light[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_info_light[0][$c] . '
                </td>
            </tr>';

        $form_2_kind_marks_light_count++;
    }
    // 2
    $count_rows_cargo = count($form_2_kind_marks_cargo[0]) + 1;
    $html .= '<tr nobr="true">
            <td width="6%" rowspan="' . $count_rows_cargo . '" valign="top">
                <span style="vertical-align: middle;">
                    2.2
                </span>
            </td>
            <td width="94%" colspan="6" valign="top"> 
                  Автомобили грузовые:
            </td>
        </tr>';
    $form_2_kind_marks_cargo_count = 1;
    for ($c = 0; $c < count($form_2_kind_marks_cargo[0]); $c++) {

        $html .= '        
            <tr nobr="true">
                <td>
                ' . $form_2_kind_marks_cargo_count . ')  ' . $form_2_kind_marks_cargo[0][$c] . '
                </td>
                <td>
                ' . $form_2_id_number_cargo[0][$c] . '
                </td>
                <td>
                ' . $form_2_kinds_property_cargo[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_palce_cargo[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_price_cargo[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_info_cargo[0][$c] . '
                </td>
            </tr>';

        $form_2_kind_marks_cargo_count++;
    }
    // 3
    $count_rows_moto = count($form_2_kind_marks_moto[0]) + 1;
    $html .= '<tr nobr="true">
            <td width="6%" rowspan="' . $count_rows_moto . '" valign="top">
                <span style="vertical-align: middle;">
                    2.3
                </span>
            </td>
            <td width="94%" colspan="6" valign="top"> 
                  Мототранспортные средства:
            </td>
        </tr>';

    $form_2_kind_marks_moto_count = 1;
    for ($c = 0; $c < count($form_2_kind_marks_moto[0]); $c++) {

        $html .= '        
            <tr nobr="true">
                <td>
                ' . $form_2_kind_marks_moto_count . ')  ' . $form_2_kind_marks_moto[0][$c] . '
                </td>
                <td>
                ' . $form_2_id_number_moto[0][$c] . '
                </td>
                <td>
                ' . $form_2_kinds_property_moto[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_palce_moto[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_price_moto[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_info_moto[0][$c] . '
                </td>
            </tr>';

        $form_2_kind_marks_moto_count++;
    }

    // 4
    $count_rows_agricultural_machinery = count($form_2_kind_marks_agricultural_machinery[0]) + 1;
    $html .= '<tr nobr="true">
            <td width="6%" rowspan="' . $count_rows_agricultural_machinery . '" valign="top">
                <span style="vertical-align: middle;">
                    2.4
                </span>
            </td>
            <td width="94%" colspan="6" valign="top"> 
                  Сельскохозяйственная техника:
            </td>
        </tr>';

    $form_2_kind_marks_agricultural_machinery_count = 1;
    for ($c = 0; $c < count($form_2_kind_marks_agricultural_machinery[0]); $c++) {

        $html .= '        
            <tr nobr="true">
                <td>
                ' . $form_2_kind_marks_agricultural_machinery_count . ')  ' . $form_2_kind_marks_agricultural_machinery[0][$c] . '
                </td>
                <td>
                ' . $form_2_id_number_agricultural_machinery[0][$c] . '
                </td>
                <td>
                ' . $form_2_kinds_property_agricultural_machinery[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_palce_agricultural_machinery[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_price_agricultural_machinery[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_info_agricultural_machinery[0][$c] . '
                </td>
            </tr>';

        $form_2_kind_marks_agricultural_machinery_count++;
    }

    // 5
    $count_rows_water_machinery = count($form_2_kind_marks_water_machinery[0]) + 1;
    $html .= '<tr nobr="true">
            <td width="6%" rowspan="' . $count_rows_water_machinery . '" valign="top">
                <span style="vertical-align: middle;">
                    2.5
                </span>
            </td>
            <td width="94%" colspan="6" valign="top"> 
                 Водный транспорт:
            </td>
        </tr>';

    $form_2_kind_marks_water_machinery_count = 1;
    for ($c = 0; $c < count($form_2_kind_marks_water_machinery[0]); $c++) {

        $html .= '        
            <tr nobr="true">
                <td>
                ' . $form_2_kind_marks_water_machinery_count . ')  ' . $form_2_kind_marks_water_machinery[0][$c] . '
                </td>
                <td>
                ' . $form_2_id_number_water_machinery[0][$c] . '
                </td>
                <td>
                ' . $form_2_kinds_property_water_machinery[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_palce_water_machinery[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_price_water_machinery[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_info_water_machinery[0][$c] . '
                </td>
            </tr>';

        $form_2_kind_marks_water_machinery_count++;
    }


    // 6
    $count_rows_air_machinery = count($form_2_kind_marks_air_machinery[0]) + 1;
    $html .= '<tr nobr="true">
            <td width="6%" rowspan="' . $count_rows_air_machinery . '" valign="top">
                <span style="vertical-align: middle;">
                    2.6
                </span>
            </td>
            <td width="94%" colspan="6" valign="top"> 
                 Воздушный транспорт:
            </td>
        </tr>';

    $form_2_kind_marks_air_machinery_count = 1;
    for ($c = 0; $c < count($form_2_kind_marks_air_machinery[0]); $c++) {

        $html .= '        
            <tr nobr="true">
                <td>
                ' . $form_2_kind_marks_air_machinery_count . ')  ' . $form_2_kind_marks_air_machinery[0][$c] . '
                </td>
                <td>
                ' . $form_2_id_number_air_machinery[0][$c] . '
                </td>
                <td>
                ' . $form_2_kinds_property_air_machinery[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_palce_air_machinery[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_price_air_machinery[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_info_air_machinery[0][$c] . '
                </td>
            </tr>';

        $form_2_kind_marks_air_machinery_count++;
    }
    // 7
    $count_rows_other_machinery = count($form_2_kind_marks_other_machinery[0]) + 1;
    $html .= '  <tr nobr="true">
                    <td width="6%" rowspan="' . $count_rows_other_machinery . '" valign="top">
                        <span style="vertical-align: middle;">
                            2.7
                        </span>
                    </td>
                    <td width="94%" colspan="6" valign="top"> 
                         Иные транспортные средства:
                    </td>
                </tr>';

    $form_2_kind_marks_other_machinery_count = 1;
    for ($c = 0; $c < count($form_2_kind_marks_other_machinery[0]); $c++) {

        $html .= '        
            <tr nobr="true">
                <td>
                ' . $form_2_kind_marks_other_machinery_count . ')  ' . $form_2_kind_marks_other_machinery[0][$c] . '
                </td>
                <td>
                ' . $form_2_id_number_other_machinery[0][$c] . '
                </td>
                <td>
                ' . $form_2_kinds_property_other_machinery[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_palce_other_machinery[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_price_other_machinery[0][$c] . ' 
                </td>
                <td>
                ' . $form_2_info_other_machinery[0][$c] . '
                </td>
            </tr>';

        $form_2_kind_marks_other_machinery_count++;
    }


    $html .= '
        </tbody>
    </table>
        <strong>_____</strong><br>
        <sup>6</sup>
         Указывается при наличии у движимого имущества цифрового, буквенного обозначения или комбинации таких обозначений, которые идентифицируют указанное имущество, в том числе
        идентификационный номер транспортного средства (VIN).
        <br>
        <sup>7</sup> 
         Указывается вид собственности (индивидуальная, долевая, общая); для совместной собственности указываются иные лица (фамилия, имя и отчество (последнее - при наличии) или
        наименование), в собственности которых находится имущество; для долевой собственности указывается доля гражданина, который составляет опись имущества.
        <br>
        <sup>8</sup> 
         Указывается при наличии документов, содержащих сведения о стоимости имущества (например, отчет о стоимости имущества, подготовленный оценщиком, договор купли-продажи, кассовый
        чек, товарный чек, иной документ об оплате (приобретении) имущества).
        <br>
        <sup>9</sup> 
         Указываются сведения о договоре залога, иной сделке, на основании которой возникает залог в силу закона, а также наименование юридического лица или фамилия, имя и отчество
        (последнее - при наличии) физического лица, в залоге у которого находится имущество.
  
     // III
     
    <h1 align="center">
        III. Сведения о счетах в банках и иных кредитных организациях 
    </h1> 
    <table border="1" cellspacing="0" cellpadding="5" style="font-size:10px;">
    <tbody> 
        <tr nobr="true">
            <td width="100%" colspan="7" valign="top" style="text-align: center;"> 
                    III. Сведения о счетах в банках и иных кредитных организациях 
            </td>
        </tr>
        <tr nobr="true">
            <td width="10%" valign="top"> 
                    № п/п 
            </td>
            <td width="45%" style="text-align: center;">Наименование и адрес банка или иной кредитной организации</td>
            <td width="15%"  style="text-align: center;">Вид и валюта счета<sup>10</sup></td>
            <td width="15%"  style="text-align: center;">Дата открытия счета</td>
            <td width="15%"  style="text-align: center;">Остаток на счете<sup>11</sup> (руб.)</td> 
        </tr>';
    $form_2_name_adress_bank_count = 1;
    for ($c = 0; $c < count($form_2_name_adress_bank[0]); $c++) {

        $html .= '        
        <tr nobr="true">
            <td width="10%" valign="top"> 
                <span style="vertical-align: middle;">
                3.' . $form_2_name_adress_bank_count . '
                </span>
            </td>
            <td width="45%" style="text-align: center;">' . $form_2_name_adress_bank[0][$c] . '</td>
            <td width="15%"  style="text-align: center;">' . $form_2_kind_valute_chet[0][$c] . '</td>
            <td width="15%"  style="text-align: center;">' . $form_2_date_open_chet[0][$c] . '</td>
            <td width="15%"  style="text-align: center;">' . $form_2_balance_chet[0][$c] . '</td> 
        </tr>
        ';
        $form_2_name_adress_bank_count++;
    }

    $html .= '    
    </tbody>
    </table> 
        <strong>_____</strong><br>
        <sup>10</sup>
        Указывается вид счета (например, депозитный, текущий, расчетный, ссудный) и валюта счета.
        <br>
        <sup>11</sup> Остаток на счете указывается по состоянию на дату составления описи имущества гражданина. Для счетов в иностранной валюте остаток указывается в рублях по курсу Банка России на
        дату составления описи имущества гражданина.

      //   IV
    <h1 align="center">
        IV. Акции и иное участие в коммерческих организациях
    </h1> 
    <table border="1" cellspacing="0" cellpadding="5" style="font-size:10px;">
    <tbody> 
        <tr nobr="true">
            <td width="100%" colspan="7" valign="top" style="text-align: center;"> 
                    IV. Акции и иное участие в коммерческих организациях
            </td>
        </tr>
        <tr nobr="true">
            <td width="10%" valign="top"> 
                    № п/п 
            </td>
            <td width="25%" style="text-align: center;">Наименование и организационно-правовая форма организации <sup>12</sup></td>
            <td width="15%"  style="text-align: center;">Местонахождение организации (адрес)</td>
            <td width="15%"  style="text-align: center;">Уставный, складочный капитал, паевой фонд<sup>13</sup> (руб.)</td>
            <td width="20%"  style="text-align: center;">Доля участия<sup>14</sup></td>
            <td width="15%"  style="text-align: center;">Основание участия<sup>15</sup></td> 
        </tr>';
    $form_2_4_1_name_count = 1;
    for ($c = 0; $c < count($form_2_4_1_name[0]); $c++) {

        $html .= '    
        <tr nobr="true">
            <td width="10%" valign="top"> 
                <span style="vertical-align: middle;">
                4.' . $form_2_4_1_name_count . '
                </span>
            </td>
            <td width="25%" style="text-align: center;">' . $form_2_4_1_name[0][$c] . '</td>
            <td width="15%"  style="text-align: center;">' . $form_2_4_2_place[0][$c] . '</td>
            <td width="15%"  style="text-align: center;">' . $form_2_4_3_kapital[0][$c] . '</td>
            <td width="20%"  style="text-align: center;">' . $form_2_4_4_part_use[0][$c] . '</td>
            <td width="15%"  style="text-align: center;">' . $form_2_4_5_main_use[0][$c] . '</td> 
        </tr>
        ';
        $form_2_4_1_name_count++;
    }

    $html .= '    
    </tbody>
    </table> 
        <strong>_____</strong><br>
        <sup>12</sup>Указываются полное или сокращенное официальное наименование организации и ее организационно-правовая форма (например, акционерное общество, общество с ограниченной
        ответственностью, полное товарищество, товарищество на вере, производственный кооператив, хозяйственное партнерство).
        <br>
        <sup>13</sup>
          Указывается согласно учредительным документам организации по состоянию на дату составления описи имущества гражданина. Суммы, выраженные в иностранной валюте, указываются в
        рублях по курсу Банка России на дату составления описи имущества гражданина.
        <br>
        <sup>14</sup>
          Указывается доля участия в уставном, складочном капитале, паевом фонде. Для акционерных обществ указываются также номинальная стоимость и количество акций.
        <br>
        <sup>15</sup>
         Указываются основание приобретения доли участия (например, учредительный договор, приватизация, покупка, мена, дарение, наследование), а также реквизиты (дата, номер)
        соответствующего договора или акта.
 
    ';
    //   V

    $html .= '
      
    <h1 align="center">
       V. Иные ценные бумаги
    </h1> 
    <table border="1" cellspacing="0" cellpadding="5" style="font-size:10px;">
    <tbody> 
        <tr nobr="true">
            <td width="100%" colspan="7" valign="top" style="text-align: center;"> 
                   V. Иные ценные бумаги
            </td>
        </tr>
        <tr nobr="true">
            <td width="8%" valign="top"> 
                    № п/п 
            </td>
            <td width="12%" style="text-align: center;">Вид ценной бумаги<sup>16</sup></td>
            <td width="20%"  style="text-align: center;">Лицо, выпустившее ценную бумагу</td>
            <td width="20%"  style="text-align: center;">Номинальная величина обязательства (руб.)</td>
            <td width="20%"  style="text-align: center;">Общее количество</td>
            <td width="20%"  style="text-align: center;">Общая стоимость<sup>17</sup> (руб.)</td> 
        </tr>';
    $form_2_5_1_kind_paper_count = 1;
    for ($c = 0; $c < count($form_2_5_1_kind_paper[0]); $c++) {

        $html .= '    
        <tr nobr="true">
            <td width="8%" valign="top"> 
                <span style="vertical-align: middle;">
                5.' . $form_2_5_1_kind_paper_count . '
                </span>
            </td>
            <td width="12%" style="text-align: center;">' . $form_2_5_1_kind_paper[0][$c] . '</td>
            <td width="20%"  style="text-align: center;">' . $form_2_5_2_face_release[0][$c] . '</td>
            <td width="20%"  style="text-align: center;">' . $form_2_5_3_value_obyazatelstava[0][$c] . '</td>
            <td width="20%"  style="text-align: center;">' . $form_2_5_4_total_count[0][$c] . '</td>
            <td width="20%"  style="text-align: center;">' . $form_2_5_5_total_price[0][$c] . '</td> 
        </tr>
        ';
        $form_2_5_1_kind_paper_count++;
    }

    $html .= '    
    </tbody>
    </table> 
        <strong>_____</strong><br>
         <sup>16</sup>
         Указываются все ценные бумаги по видам (например, облигации, векселя), за исключением акций, указанных в разделе IV "Акции и иное участие в коммерческих организациях"
        <br>
        <sup>17</sup>
         Указывается общая стоимость ценных бумаг данного вида исходя из стоимости их приобретения (если ее нельзя определить - исходя из рыночной стоимости или номинальной стоимости).
        Для обязательств, выраженных в иностранной валюте, стоимость указывается в рублях по курсу Банка России на дату составления описи имущества гражданина.
        
    ';
    // VI

    $count_2_6_1_kind_property_jewelry = count($form_2_6_1_kind_property_jewelry[0]) + 1;

    $html .= '
        
    <h1 align="center">
      VI. Сведения о наличных денежных средствах и ином ценном имуществе
    </h1> 
       <table border="1" cellspacing="0" cellpadding="5" style="font-size:10px;">
    <tbody>
        <tr nobr="true"  >
            <td width="100%" colspan="7" valign="top" style="text-align: center;"> 
                   VI. Сведения о наличных денежных средствах и ином ценном имуществе
            </td>
        </tr>
        <tr nobr="true"  >
            <td width="10%" valign="top"> 
                    № п/п 
            </td>
            <td width="25%" style="text-align: center;">Вид и наименование имущества</td>
            <td width="15%"  style="text-align: center;">Стоимость (сумма и валюта)<sup>18</sup></td> 
            <td width="25%"  style="text-align: center;">Место нахождения/место хранения<sup>19</sup> (адрес)</td>
            <td width="25%"  style="text-align: center;">Сведения о залоге и залогодержателе<sup>20</sup></td>
        </tr>
        <tr nobr="true">
            <td width="10%" rowspan="' . $count_2_6_1_kind_property_jewelry . '" valign="top"> 
                   <span style="vertical-align: middle;">
                    6.1 
                    </span>
            </td>
            <td width="90%" colspan="6" valign="top"> 
                    Драгоценности, в том числе ювелирные украшения, и другие предметы роскоши:
            </td>
        </tr>';
    $form_2_6_1_jewelry_count = 1;

    for ($z = 0; $z < count($form_2_6_1_kind_property_jewelry[0]); $z++) {

        $html .= '        
            <tr nobr="true">
                <td width="25%">
                ' . $form_2_6_1_jewelry_count . ')  ' . $form_2_6_1_kind_property_jewelry[0][$z] . '
                </td>
                <td width="15%">
                ' . $form_2_6_2_price_jewelry[0][$z] . '
                </td>
                <td width="25%" >
                ' . $form_2_6_3_plcae_have_jewelry[0][$z] . ' 
                </td>
                <td width="25%" >
                ' . $form_2_6_4_total_info_jewelry[0][$z] . ' 
                </td> 
            </tr>';
        $form_2_6_1_jewelry_count++;
    }
    // 2
    $count_2_6_1_kind_property_artobjects = count($form_2_6_1_kind_property_artobjects[0]) + 1;
    $html .= '        
        <tr nobr="true">
            <td width="10%" rowspan="' . $count_2_6_1_kind_property_artobjects . '" valign="top"> 
                   <span style="vertical-align: middle;">
                    6.2 
                    </span>
            </td>
            <td width="90%" colspan="6" valign="top"> 
                    Предметы искусства:
            </td>
        </tr>';
    $form_2_6_1_kind_property_artobjects_count = 1;

    for ($z = 0; $z < count($form_2_6_1_kind_property_artobjects[0]); $z++) {

        $html .= '        
            <tr nobr="true">
                <td width="25%">
                ' . $form_2_6_1_kind_property_artobjects_count . ')  ' . $form_2_6_1_kind_property_artobjects[0][$z] . '
                </td>
                <td width="15%">
                ' . $form_2_6_2_price_artobjects[0][$z] . '
                </td>
                <td width="25%" >
                ' . $form_2_6_3_plcae_have_artobjects[0][$z] . ' 
                </td>
                <td width="25%" >
                ' . $form_2_6_4_total_info_artobjects[0][$z] . ' 
                </td> 
            </tr>';
        $form_2_6_1_kind_property_artobjects_count++;
    }
    // 3
    $count_form_2_6_1_kind_property_property = count($form_2_6_1_kind_property_property[0]) + 1;
    $html .= '        
        <tr nobr="true">
            <td width="10%" rowspan="' . $count_form_2_6_1_kind_property_property . '" valign="top"> 
                   <span style="vertical-align: middle;">
                    6.3 
                    </span>
            </td>
            <td width="90%" colspan="6" valign="top"> 
                    Имущество, необходимое для профессиональных занятий:
            </td>
        </tr>';
    $form_2_6_1_kind_property_property_count = 1;

    for ($z = 0; $z < count($form_2_6_1_kind_property_property[0]); $z++) {

        $html .= '        
            <tr nobr="true">
                <td width="25%">
                ' . $form_2_6_1_kind_property_property_count . ')  ' . $form_2_6_1_kind_property_property[0][$z] . '
                </td>
                <td width="15%">
                ' . $form_2_6_2_price_property[0][$z] . '
                </td>
                <td width="25%" >
                ' . $form_2_6_3_plcae_have_property[0][$z] . ' 
                </td>
                <td width="25%" >
                ' . $form_2_6_4_total_info_property[0][$z] . ' 
                </td> 
            </tr>';
        $form_2_6_1_kind_property_property_count++;
    }
    // 4
    $count_form_2_6_1_kind_property_propertyother = count($form_2_6_1_kind_property_propertyother[0]) + 1;
    $html .= '        
        <tr nobr="true">
            <td width="10%" rowspan="' . $count_form_2_6_1_kind_property_propertyother . '" valign="top"> 
                   <span style="vertical-align: middle;">
                    6.4 
                    </span>
            </td>
            <td width="90%" colspan="6" valign="top"> 
                    Иное ценное имущество:
            </td>
        </tr>';
    $form_2_6_1_kind_property_propertyother_count = 1;

    for ($z = 0; $z < count($form_2_6_1_kind_property_propertyother[0]); $z++) {

        $html .= '        
            <tr nobr="true">
                <td width="25%">
                ' . $form_2_6_1_kind_property_propertyother_count . ')  ' . $form_2_6_1_kind_property_propertyother[0][$z] . '
                </td>
                <td width="15%">
                ' . $form_2_6_2_price_propertyother[0][$z] . '
                </td>
                <td width="25%" >
                ' . $form_2_6_3_plcae_have_propertyother[0][$z] . ' 
                </td>
                <td width="25%" >
                ' . $form_2_6_4_total_info_propertyother[0][$z] . ' 
                </td> 
            </tr>';
        $form_2_6_1_kind_property_propertyother_count++;
    }


    $html .= '
    </tbody>
    </table> 
        <strong>_____</strong><br>
         
        <sup>18</sup> В отношении наличных денежных средств в валюте указывается сумма по курсу Банка России на дату подачи заявления о признании должника банкротом, в отношении иного указывается при
        наличии документов, содержащих сведения о стоимости имущества (например, отчет о стоимости имущества, подготовленный оценщиком, договор купли-продажи, кассовый чек, товарный чек,
        иной документ об оплате (приобретении) имущества).
        <br>
        <sup>19</sup> Указываются сведения о договоре хранения ценностей в индивидуальном банковском сейфе (ячейке) и наименование кредитной организации.
        <br>
        <sup>20</sup> Указываются сведения о договоре залога, иной сделке, на основании которой возникает залог в силу закона, а также наименование юридического лица или фамилия, имя и отчество
        (последнее - при наличии) физического лица, в залоге у которого находится имущество.<br>
        Достоверность и полноту настоящих сведений подтверждаю.<br>
      <table  nobr="true" style="border: none; width: 100%; " cellpadding="0">
        <tbody>
            <tr>
                <td style="width: 30%;"></td>
                <td style="width: 30%;"></td>
                <td style="width:40%; text-align: right;"> Представитель по</td>
            </tr>
             <tr>
                <td style="width: 30%;"></td>
                <td style="width: 30%;"></td>
                <td style="width:40%; text-align: right;"  >доверенности</td>
            </tr>
             <tr>
                <td style="width: 30%;"> «__» ___________ 20<span style="text-decoration: underline;padding: 3px;"> ' . date("y") . ' </span> г.</td>
                <td style="width: 30%;  text-align: center;">__________________</td>
                <td style="width:40%;  text-align: right;"><span style="text-decoration: underline;padding: 3px;">Старокорова С.В.</span></td>
            </tr>
         
            </tbody>
            </table>
   
                 
    
    ';


    generateform($html, 'form2');
}