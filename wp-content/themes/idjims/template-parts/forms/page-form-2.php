<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 05.03.2018
 * Time: 23:41
 */
?>
<div class="breadscrumb">
    <div class="container">
        <h1 class="title-section service center-white ">Опись имущества гражданина</h1>
    </div>
</div>
<div class="row row-doc-form">
    <div class="container">
        <p>
            ЗАПОЛНИТЕ ДОПОЛНИТЕЛЬНУЮ ИНФОРМАЦИЮ
        </p>
        <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
            <div class="clearfix page-form-2">

                <div class="form-group-one-walp one-section">
                    <h3>I. Недвижимое имущество</h3>
                    <div class="accordion">
                        <a class="link-to-ul" href="#">Информация о правилах заполнения (кликните для
                            показа/скрытия)</a>
                        <div>
                            (1) - Указывается вид собственности (индивидуальная, долевая, общая); для совместной
                            собственности указываются иные лица (фамилия, имя и отчество (последнее - при наличии) или
                            наименование), в собственности которых находится имущество; для долевой собственности
                            указывается доля гражданина, который составляет опись имущества.
                            </br>
                            (2) - Указываются наименование и реквизиты документа, являющегося законным основанием для
                            возникновения права собственности.
                            </br>
                            (3) - Указывается при наличии документов, содержащих сведения о стоимости имущества
                            (например,
                            отчет о стоимости имущества, подготовленный оценщиком, договор купли-продажи, иной документ
                            об
                            оплате (приобретении) имущества).
                            </br>
                            (4) - Указываются сведения о договоре залога, иной сделке, на основании которой возникает
                            залог
                            в силу закона, а также наименование юридического лица или фамилия, имя и отчество (последнее
                            -
                            при наличии) физического лица, в залоге у которого находится имущество.
                            </br>
                            (5) - Указывается вид земельного участка (пая, доли): под индивидуальное жилищное
                            строительство,
                            дачный, садовый, приусадебный, огородный и другие.
                        </div>
                    </div>
                    <p>Земельные участки (5)</p>
                    <div class="form-group-one clearfix" data-section="_property" style="    margin-bottom: 90px;">
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_2_kinds_name_property[]" type="text" class="form-control "
                                       placeholder="Вид и наименование имущества">
                            </div>
                            <div class="form-group">
                                <input name="form_2_kind_property[]" type="text" class="form-control "
                                       placeholder="Вид собственности (1)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_place_property[]" type="text" class="form-control "
                                       placeholder="Местонахождение (адрес)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_area_property[]" type="text" class="form-control "
                                       placeholder="Площадь (кв.м)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_acquisition_price_property[]" type="text" class="form-control "
                                       placeholder="Основание приобретения (2) и стоимость (3)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_info_zalog_property[]" type="text" class="form-control "
                                       placeholder="Сведения о залоге и залогодержателе (4)">
                            </div>


                        </div>
                        <a href="#" class="add-form form-2-1">Добавить ещё участок</a>
                    </div>
                    <p>Жилые дома, дачи</p>
                    <div class="form-group-one clearfix" data-section="_home" style="    margin-bottom: 90px;">
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_2_kinds_name_home[]" type="text" class="form-control "
                                       placeholder="Вид и наименование имущества">
                            </div>
                            <div class="form-group">
                                <input name="form_2_kind_home[]" type="text" class="form-control "
                                       placeholder="Вид собственности (1)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_place_home[]" type="text" class="form-control "
                                       placeholder="Местонахождение (адрес)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_area_home[]" type="text" class="form-control "
                                       placeholder="Площадь (кв.м)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_acquisition_price_home[]" type="text" class="form-control "
                                       placeholder="Основание приобретения (2) и стоимость (3)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_info_zalog_home[]" type="text" class="form-control "
                                       placeholder="Сведения о залоге и залогодержателе (4)">
                            </div>


                        </div>
                        <a href="#" class="add-form form-2-1">Добавить ещё дом</a>
                    </div>
                    <p>Квартиры</p>
                    <div class="form-group-one clearfix" data-section="_rooms" style="    margin-bottom: 90px;">
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_2_kinds_name_rooms[]" type="text" class="form-control "
                                       placeholder="Вид и наименование имущества">
                            </div>
                            <div class="form-group">
                                <input name="form_2_kind_rooms[]" type="text" class="form-control "
                                       placeholder="Вид собственности (1)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_place_rooms[]" type="text" class="form-control "
                                       placeholder="Местонахождение (адрес)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_area_rooms[]" type="text" class="form-control "
                                       placeholder="Площадь (кв.м)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_acquisition_price_rooms[]" type="text" class="form-control "
                                       placeholder="Основание приобретения (2) и стоимость (3)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_info_zalog_rooms[]" type="text" class="form-control "
                                       placeholder="Сведения о залоге и залогодержателе (4)">
                            </div>


                        </div>
                        <a href="#" class="add-form form-2-1">Добавить ещё квартиру</a>
                    </div>
                    <p>Гаражи</p>
                    <div class="form-group-one clearfix" data-section="_garages" style="    margin-bottom: 90px;">
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_2_kinds_name_garages[]" type="text" class="form-control "
                                       placeholder="Вид и наименование имущества">
                            </div>
                            <div class="form-group">
                                <input name="form_2_kind_garages[]" type="text" class="form-control "
                                       placeholder="Вид собственности (1)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_place_garages[]" type="text" class="form-control "
                                       placeholder="Местонахождение (адрес)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_area_garages[]" type="text" class="form-control "
                                       placeholder="Площадь (кв.м)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_acquisition_price_garages[]" type="text" class="form-control "
                                       placeholder="Основание приобретения (2) и стоимость (3)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_info_zalog_garages[]" type="text" class="form-control "
                                       placeholder="Сведения о залоге и залогодержателе (4)">
                            </div>


                        </div>
                        <a href="#" class="add-form form-2-1">Добавить ещё Гараж</a>
                    </div>
                    <p>Иное недвижимое имущество</p>
                    <div class="form-group-one clearfix" data-section="_otherproperty" style="    margin-bottom: 90px;">
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_2_kinds_name_otherproperty[]" type="text" class="form-control "
                                       placeholder="Вид и наименование имущества">
                            </div>
                            <div class="form-group">
                                <input name="form_2_kind_otherproperty[]" type="text" class="form-control "
                                       placeholder="Вид собственности (1)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_place_otherproperty[]" type="text" class="form-control "
                                       placeholder="Местонахождение (адрес)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_area_otherproperty[]" type="text" class="form-control "
                                       placeholder="Площадь (кв.м)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_acquisition_price_otherproperty[]" type="text" class="form-control "
                                       placeholder="Основание приобретения (2) и стоимость (3)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_info_zalog_otherproperty[]" type="text" class="form-control "
                                       placeholder="Сведения о залоге и залогодержателе (4)">
                            </div>


                        </div>
                        <a href="#" class="add-form form-2-1">Добавить ещё имущество</a>
                    </div>


                </div>

                <div class="form-group-one-walp one-section">
                    <h3>II. Движимое имущество</h3>
                    <div class="accordion">
                        <a class="link-to-ul" href="#">Информация о правилах заполнения (кликните для
                            показа/скрытия)</a>
                        <div>
                            (6) - Указывается при наличии у движимого имущества цифрового, буквенного обозначения или
                            комбинации таких обозначений, которые идентифицируют указанное имущество, в том числе
                            идентификационный номер транспортного средства (VIN).
                            </br>
                            (7) - Указывается вид собственности (индивидуальная, долевая, общая); для совместной
                            собственности указываются иные лица (фамилия, имя и отчество (последнее - при наличии) или
                            наименование), в собственности которых находится имущество; для долевой собственности
                            указывается доля гражданина, который составляет опись имущества.
                            </br>
                            (8) - Указывается при наличии документов, содержащих сведения о стоимости имущества
                            (например, отчет о стоимости имущества, подготовленный оценщиком, договор купли-продажи,
                            кассовый чек, товарный чек, иной документ об оплате (приобретении) имущества).
                            </br>
                            (9) - Указываются сведения о договоре залога, иной сделке, на основании которой возникает
                            залог в силу закона, а также наименование юридического лица или фамилия, имя и отчество
                            (последнее - при наличии) физического лица, в залоге у которого находится имущество.
                        </div>
                    </div>
                    <p>Автомобили легковые</p>
                    <div class="form-group-one clearfix" data-section="_light" style=" margin-bottom: 90px;">
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_2_kind_marks_light[]" type="text" class="form-control "
                                       placeholder="Вид, марка, модель транспортного средства, год изготовления">
                            </div>
                            <div class="form-group">
                                <input name="form_2_id_number_light[]" type="text" class="form-control "
                                       placeholder="Идентификационный номер (6)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_kinds_property_light[]" type="text" class="form-control "
                                       placeholder="Вид собственности (7)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_palce_light[]" type="text" class="form-control "
                                       placeholder="Место нахождения/место хранения (адрес)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_price_light[]" type="text" class="form-control "
                                       placeholder="Стоимость (8)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_info_light[]" type="text" class="form-control "
                                       placeholder="Сведения о залоге и залогодержателе (9)">
                            </div>
                        </div>
                        <a href="#" class="add-form form-2-2">Добавить ещё автомобиль</a>
                    </div>
                    <p>Автомобили грузовые</p>
                    <div class="form-group-one clearfix" data-section="_cargo" style=" margin-bottom: 90px;">
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_2_kind_marks_cargo[]" type="text" class="form-control "
                                       placeholder="Вид, марка, модель транспортного средства, год изготовления">
                            </div>
                            <div class="form-group">
                                <input name="form_2_id_number_cargo[]" type="text" class="form-control "
                                       placeholder="Идентификационный номер (6)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_kinds_property_cargo[]" type="text" class="form-control "
                                       placeholder="Вид собственности (7)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_palce_cargo[]" type="text" class="form-control "
                                       placeholder="Место нахождения/место хранения (адрес)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_price_cargo[]" type="text" class="form-control "
                                       placeholder="Стоимость (8)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_info_cargo[]" type="text" class="form-control "
                                       placeholder="Сведения о залоге и залогодержателе (9)">
                            </div>
                        </div>
                        <a href="#" class="add-form form-2-2">Добавить ещё автомобиль</a>
                    </div>
                    <p>Мототранспортные средства</p>
                    <div class="form-group-one clearfix" data-section="_moto" style=" margin-bottom: 90px;">
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_2_kind_marks_moto[]" type="text" class="form-control "
                                       placeholder="Вид, марка, модель транспортного средства, год изготовления">
                            </div>
                            <div class="form-group">
                                <input name="form_2_id_number_moto[]" type="text" class="form-control "
                                       placeholder="Идентификационный номер (6)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_kinds_property_moto[]" type="text" class="form-control "
                                       placeholder="Вид собственности (7)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_palce_moto[]" type="text" class="form-control "
                                       placeholder="Место нахождения/место хранения (адрес)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_price_moto[]" type="text" class="form-control "
                                       placeholder="Стоимость (8)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_info_moto[]" type="text" class="form-control "
                                       placeholder="Сведения о залоге и залогодержателе (9)">
                            </div>
                        </div>
                        <a href="#" class="add-form form-2-2">Добавить ещё мото</a>
                    </div>
                    <p>Сельскохозяйственная техника</p>
                    <div class="form-group-one clearfix" data-section="_agricultural_machinery"
                         style=" margin-bottom: 90px;">
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_2_kind_marks_agricultural_machinery[]" type="text"
                                       class="form-control "
                                       placeholder="Вид, марка, модель транспортного средства, год изготовления">
                            </div>
                            <div class="form-group">
                                <input name="form_2_id_number_agricultural_machinery[]" type="text"
                                       class="form-control "
                                       placeholder="Идентификационный номер (6)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_kinds_property_agricultural_machinery[]" type="text"
                                       class="form-control "
                                       placeholder="Вид собственности (7)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_palce_agricultural_machinery[]" type="text" class="form-control "
                                       placeholder="Место нахождения/место хранения (адрес)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_price_agricultural_machinery[]" type="text" class="form-control "
                                       placeholder="Стоимость (8)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_info_agricultural_machinery[]" type="text" class="form-control "
                                       placeholder="Сведения о залоге и залогодержателе (9)">
                            </div>
                        </div>
                        <a href="#" class="add-form form-2-2">Добавить ещё технику</a>
                    </div>
                    <p>Водный транспорт</p>
                    <div class="form-group-one clearfix" data-section="_water_machinery" style=" margin-bottom: 90px;">
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_2_kind_marks_water_machinery[]" type="text" class="form-control "
                                       placeholder="Вид, марка, модель транспортного средства, год изготовления">
                            </div>
                            <div class="form-group">
                                <input name="form_2_id_number_water_machinery[]" type="text" class="form-control "
                                       placeholder="Идентификационный номер (6)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_kinds_property_water_machinery[]" type="text" class="form-control "
                                       placeholder="Вид собственности (7)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_palce_water_machinery[]" type="text" class="form-control "
                                       placeholder="Место нахождения/место хранения (адрес)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_price_water_machinery[]" type="text" class="form-control "
                                       placeholder="Стоимость (8)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_info_water_machinery[]" type="text" class="form-control "
                                       placeholder="Сведения о залоге и залогодержателе (9)">
                            </div>
                        </div>
                        <a href="#" class="add-form form-2-2">Добавить ещё технику</a>
                    </div>
                    <p>Воздушный транспорт</p>
                    <div class="form-group-one clearfix" data-section="_air_machinery" style=" margin-bottom: 90px;">
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_2_kind_marks_air_machinery[]" type="text" class="form-control "
                                       placeholder="Вид, марка, модель транспортного средства, год изготовления">
                            </div>
                            <div class="form-group">
                                <input name="form_2_id_number_air_machinery[]" type="text" class="form-control "
                                       placeholder="Идентификационный номер (6)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_kinds_property_air_machinery[]" type="text" class="form-control "
                                       placeholder="Вид собственности (7)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_palce_air_machinery[]" type="text" class="form-control "
                                       placeholder="Место нахождения/место хранения (адрес)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_price_air_machinery[]" type="text" class="form-control "
                                       placeholder="Стоимость (8)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_info_air_machinery[]" type="text" class="form-control "
                                       placeholder="Сведения о залоге и залогодержателе (9)">
                            </div>
                        </div>
                        <a href="#" class="add-form form-2-2">Добавить ещё технику</a>
                    </div>
                    <p>Иные транспортные средства</p>
                    <div class="form-group-one clearfix" data-section="_other_machinery" style=" margin-bottom: 90px;">
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_2_kind_marks_other_machinery[]" type="text" class="form-control "
                                       placeholder="Вид, марка, модель транспортного средства, год изготовления">
                            </div>
                            <div class="form-group">
                                <input name="form_2_id_number_other_machinery[]" type="text" class="form-control "
                                       placeholder="Идентификационный номер (6)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_kinds_property_other_machinery[]" type="text" class="form-control "
                                       placeholder="Вид собственности (7)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_palce_other_machinery[]" type="text" class="form-control "
                                       placeholder="Место нахождения/место хранения (адрес)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_price_other_machinery[]" type="text" class="form-control "
                                       placeholder="Стоимость (8)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_info_other_machinery[]" type="text" class="form-control "
                                       placeholder="Сведения о залоге и залогодержателе (9)">
                            </div>
                        </div>
                        <a href="#" class="add-form form-2-2">Добавить ещё технику</a>
                    </div>


                </div>
                <div class="form-group-one-walp one-section">
                    <h3>III. Сведения о счетах в банках и иных кредитных организациях</h3>
                    <div class="accordion">
                        <a class="link-to-ul" href="#">Информация о правилах заполнения (кликните для
                            показа/скрытия)</a>
                        <div>
                            (10) - Указывается вид счета (например, депозитный, текущий, расчетный, ссудный) и валюта
                            счета.
                            </br>
                            (11) - Остаток на счете указывается по состоянию на дату составления описи имущества
                            гражданина. Для счетов в иностранной валюте остаток указывается в рублях по курсу Банка
                            России на дату составления описи имущества гражданина.
                        </div>
                    </div>
                    </br>
                    <div class="form-group-one clearfix" data-section="_property" style="    margin-bottom: 90px;">
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_2_name_adress_bank[]" type="text" class="form-control "
                                       placeholder="Наименование и адрес банка или иной кредитной организации">
                            </div>
                            <div class="form-group">
                                <input name="form_2_kind_valute_chet[]" type="text" class="form-control "
                                       placeholder="Вид и валюта счета (10)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_date_open_chet[]" type="text" class="form-control "
                                       placeholder="Дата открытия счета">
                            </div>
                            <div class="form-group">
                                <input name="form_2_balance_chet[]" type="text" class="form-control "
                                       placeholder="Остаток на счете (11)">
                            </div>
                        </div>
                        <a href="#" class="add-form form-2-3">Добавить ещё счет</a>
                    </div>

                </div>
                <div class="form-group-one-walp one-section">
                    <h3>IV. Акции и иное участие в коммерческих организациях</h3>
                    <div class="accordion">
                        <a class="link-to-ul" href="#">Информация о правилах заполнения (кликните для
                            показа/скрытия)</a>
                        <div>
                            (12) - Указываются полное или сокращенное официальное наименование организации и ее
                            организационно-правовая форма (например, акционерное общество, общество с ограниченной
                            ответственностью, полное товарищество, товарищество на вере, производственный кооператив,
                            хозяйственное партнерство).
                            </br>
                            (13) - Указывается согласно учредительным документам организации по состоянию на дату
                            составления описи имущества гражданина. Суммы, выраженные в иностранной валюте, указываются
                            в рублях по курсу Банка России на дату составления описи имущества гражданина.
                            </br>
                            (14) - Указывается доля участия в уставном, складочном капитале, паевом фонде. Для
                            акционерных обществ указываются также номинальная стоимость и количество акций.
                            </br>
                            (15) - Указываются основание приобретения доли участия (например, учредительный договор,
                            приватизация, покупка, мена, дарение, наследование), а также реквизиты (дата, номер)
                            соответствующего договора или акта.
                        </div>
                    </div>
                    </br>
                    <div class="form-group-one clearfix" data-section="_property" style="    margin-bottom: 90px;">
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_2_4_1_name[]" type="text" class="form-control "
                                       placeholder="Наименование и организационно-правовая форма организации (12)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_4_2_place[]" type="text" class="form-control "
                                       placeholder="Местонахождение организации (адрес)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_4_3_kapital[]" type="text" class="form-control "
                                       placeholder="Уставный, складочный капитал, паевой фонд (13)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_4_4_part_use[]" type="text" class="form-control "
                                       placeholder="Доля участия (14)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_4_5_main_use[]" type="text" class="form-control "
                                       placeholder="Основание участия (15)">
                            </div>
                        </div>
                        <a href="#" class="add-form form-2-4">Добавить ещё акцию</a>
                    </div>

                </div>
                <div class="form-group-one-walp one-section">
                    <h3>V. Иные ценные бумаги</h3>
                    <div class="accordion">
                        <a class="link-to-ul" href="#">Информация о правилах заполнения (кликните для
                            показа/скрытия)</a>
                        <div>
                            (16) - Указываются все ценные бумаги по видам (например, облигации, векселя), за исключением
                            акций, указанных в разделе IV "Акции и иное участие в коммерческих организациях"
                            </br>
                            (17) - Указывается общая стоимость ценных бумаг данного вида исходя из стоимости их
                            приобретения (если ее нельзя определить - исходя из рыночной стоимости или номинальной
                            стоимости). Для обязательств, выраженных в иностранной валюте, стоимость указывается в
                            рублях по курсу Банка России на дату составления описи имущества гражданина.
                        </div>
                    </div>
                    </br>
                    <div class="form-group-one clearfix" data-section="_property" style="    margin-bottom: 90px;">
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_2_5_1_kind_paper[]" type="text" class="form-control "
                                       placeholder="Вид ценной бумаги (16)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_5_2_face_release[]" type="text" class="form-control "
                                       placeholder="Лицо, выпустившее ценную бумагу">
                            </div>
                            <div class="form-group">
                                <input name="form_2_5_3_value_obyazatelstava[]" type="text" class="form-control "
                                       placeholder="Номинальная величина обязательства (руб.)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_5_4_total_count[]" type="text" class="form-control "
                                       placeholder="Общее количество">
                            </div>
                            <div class="form-group">
                                <input name="form_2_5_5_total_price[]" type="text" class="form-control "
                                       placeholder="Общая стоимость (17)">
                            </div>
                        </div>
                        <a href="#" class="add-form form-2-5">Добавить ещё бумагу</a>
                    </div>

                </div>
                <div class="form-group-one-walp one-section">
                    <h3>VI. Сведения о наличных денежных средствах и ином ценном имуществе</h3>
                    <div class="accordion">
                        <a class="link-to-ul" href="#">Информация о правилах заполнения (кликните для
                            показа/скрытия)</a>
                        <div>
                            (18) - В отношении наличных денежных средств в валюте указывается сумма по курсу Банка
                            России на дату подачи заявления о признании должника банкротом, в отношении иного
                            указывается при наличии документов, содержащих сведения о стоимости имущества (например,
                            отчет о стоимости имущества, подготовленный оценщиком, договор купли-продажи, кассовый чек,
                            товарный чек, иной документ об оплате (приобретении) имущества).
                            </br>
                            (19) - Указываются сведения о договоре хранения ценностей в индивидуальном банковском сейфе
                            (ячейке) и наименование кредитной организации.
                            </br>
                            (20) - Указываются сведения о договоре залога, иной сделке, на основании которой возникает
                            залог в силу закона, а также наименование юридического лица или фамилия, имя и отчество
                            (последнее - при наличии) физического лица, в залоге у которого находится имущество.
                        </div>
                    </div>
                    </br>
                    <p>Драгоценности, в том числе ювелирные украшения, и другие предметы роскоши</p>
                    <div class="form-group-one clearfix" data-section="_jewelry" style="    margin-bottom: 90px;">
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_2_6_1_kind_property_jewelry[]" type="text" class="form-control "
                                       placeholder="Вид и наименование имущества">
                            </div>
                            <div class="form-group">
                                <input name="form_2_6_2_price_jewelry[]" type="text" class="form-control "
                                       placeholder="Стоимость (сумма и валюта) (18)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_6_3_plcae_have_jewelry[]" type="text" class="form-control "
                                       placeholder="Место нахождения/место хранения (19)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_6_4_total_info_jewelry[]" type="text" class="form-control "
                                       placeholder="Сведения о залоге и залогодержателе (20)">
                            </div>
                        </div>
                        <a href="#" class="add-form form-2-6">Добавить ещё предмет</a>
                    </div>
                    <p>Предметы искусства</p>
                    <div class="form-group-one clearfix" data-section="_artobjects" style="    margin-bottom: 90px;">
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_2_6_1_kind_property_artobjects[]" type="text" class="form-control "
                                       placeholder="Вид и наименование имущества">
                            </div>
                            <div class="form-group">
                                <input name="form_2_6_2_price_artobjects[]" type="text" class="form-control "
                                       placeholder="Стоимость (сумма и валюта) (18)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_6_3_plcae_have_artobjects[]" type="text" class="form-control "
                                       placeholder="Место нахождения/место хранения (19)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_6_4_total_info_artobjects[]" type="text" class="form-control "
                                       placeholder="Сведения о залоге и залогодержателе (20)">
                            </div>
                        </div>
                        <a href="#" class="add-form form-2-6">Добавить ещё предмет</a>
                    </div>
                    <p>Имущество, необходимое для профессиональных занятий</p>
                    <div class="form-group-one clearfix" data-section="_property" style="    margin-bottom: 90px;">
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_2_6_1_kind_property_property[]" type="text" class="form-control "
                                       placeholder="Вид и наименование имущества">
                            </div>
                            <div class="form-group">
                                <input name="form_2_6_2_price_property[]" type="text" class="form-control "
                                       placeholder="Стоимость (сумма и валюта) (18)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_6_3_plcae_have_property[]" type="text" class="form-control "
                                       placeholder="Место нахождения/место хранения (19)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_6_4_total_info_property[]" type="text" class="form-control "
                                       placeholder="Сведения о залоге и залогодержателе (20)">
                            </div>
                        </div>
                        <a href="#" class="add-form form-2-6">Добавить ещё имущество</a>
                    </div>
                    <p>Иное ценное имущество</p>
                    <div class="form-group-one clearfix" data-section="_propertyother" style="    margin-bottom: 90px;">
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_2_6_1_kind_property_propertyother[]" type="text" class="form-control "
                                       placeholder="Вид и наименование имущества">
                            </div>
                            <div class="form-group">
                                <input name="form_2_6_2_price_propertyother[]" type="text" class="form-control "
                                       placeholder="Стоимость (сумма и валюта) (18)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_6_3_plcae_have_propertyother[]" type="text" class="form-control "
                                       placeholder="Место нахождения/место хранения (19)">
                            </div>
                            <div class="form-group">
                                <input name="form_2_6_4_total_info_propertyother[]" type="text" class="form-control "
                                       placeholder="Сведения о залоге и залогодержателе (20)">
                            </div>
                        </div>
                        <a href="#" class="add-form form-2-6">Добавить ещё имущество</a>
                    </div>

                </div>

            </div>

            <input class="btn btn-primary btn-lg btn-block btn-form-page-gen-doc" type="submit"
                   name="form_2_submit" value="Сформировать документ"/>
        </form>
    </div>
</div>
