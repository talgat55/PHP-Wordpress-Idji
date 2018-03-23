// ---------------------------------------------------------
// !!!!!!!!!!!!!!!!!document ready!!!!!!!!!!!!!!!!!!!!!!!!!!
// ---------------------------------------------------------

jQuery(window).resize(function () {
    "use strict";
    accordionQAPage();
    fiveblocks();
    animationblocks();
    MobileMenu();
});

jQuery(document).ready(function () {
    "use strict";
    InitSlider();
    InitUISlider();
    InitCarouselClients();
    InitOpenContentReview();
    MobileMenu();
    backToTop();
    animationblocks();
    InitServiceOOO();
    InitUISliderPage();
    InitShowTooltip();
    InitUISliderPageProperty();
    InitActionPriceTables();
    InitChooseOld();
    InitSliderReview();
    ConfimPassword();
    fiveblocks();
    AddBlockTextInFormFields();
    accordionQAPage();
    jQuery(".tabs").lightTabs();

    /*
    * Lazy Load
     */
    var myLazyLoad = new LazyLoad();

    jQuery("#map").hover(function () {

            var $this = jQuery('.overlay-map');
            $this.css('opacity', 0);

        }, function () {
            var $this = jQuery('.overlay-map');
            $this.css('opacity', 1);
        }
    );

    /*
    * hide label in form
    */
    /*
    jQuery( "form input"  ).click(function(){
                jQuery(this).parent().parent().find('label').hide();
                var $this = jQuery(this);
                $this.mouseleave(function() {
                    var $thisvalue = $this.val();

                    if(!$thisvalue.length){

                        $this.parent().parent().find('label').show();

                    }
                    var allinputs = jQuery( "form input"  ).val();
                    alert(allinputs);
                //	if(!allinputs.length){

                //		allinputs.parent().parent().find('label').show();

                //	}



                });

                jQuery('.telephone').inputmask({"mask": "+7 (999) 999-9999"});
    });*/

    jQuery("form input, form textarea").focus(function () {

        jQuery(this).parent().parent().find('label').hide();
        var $this = jQuery(this);
        $this.mouseleave(function () {
            var $thisvalue = $this.val();

            if (!$thisvalue.length) {
                $this.parent().parent().find('label').show();
            }
            jQuery(this).parent().find('.telephone').inputmask('remove');
        });

        $this.parent().find('.telephone').inputmask({"mask": "+7 (999) 999-9999"});

    });
    /*
    jQuery( "form input"  ).hover(function() {
        jQuery(this).parent().parent().find('label').hide();
        var $this = jQuery(this);
        $this.mouseleave(function() {
            var $thisvalue = $this.val();

            if(!$thisvalue.length){
                $this.parent().parent().find('label').show();
            }

        });
    });
    */
    jQuery('form input, form textarea').on('input', function () {
        jQuery(this).parent().parent().find('label').hide();

    });
    jQuery("form label").click(function () {
        var $this = jQuery(this);
        var $thisParent = jQuery(this).parent();
        $this.hide();
        $this.parent().find('.telephone').inputmask({"mask": "+7 (999) 999-9999"});

        $this.parent().find('input').focus();
        $thisParent.mouseleave(function () {
            var $thisvalue = $thisParent.find('input').val();

            if (!$thisvalue.length) {
                $this.show();
            }
            jQuery(this).parent().find('.telephone').inputmask('remove');

        });


    });

    jQuery("form input, form textarea").focusout(function () {

        jQuery(this).parent().find('.telephone').inputmask('remove');
    });
    /*
    * Modal Form
    */

    jQuery(".overlay-layer, .close-modal-block").click(function () {

        jQuery('.overlay-layer').removeClass('overlay-display');
        jQuery('.modal-form').removeClass(' overlay-display ');
        jQuery('.block-qa-answer').removeClass(' overlay-display ');

        return false;
    });

    jQuery(".btn-link-modal, .btn-link-to-modal").click(function () {

        jQuery('.overlay-layer').addClass('overlay-display');
        jQuery('.modal-form.header-modal').addClass(' overlay-display ');

        return false;
    });

    jQuery(".qa-btn").click(function () {

        jQuery('.overlay-layer').addClass('overlay-display');
        jQuery('.block-qa-answer').addClass(' overlay-display ');

        return false;
    });


    /*
    * Click Events for   Check
    **/

    jQuery('.checkboxFour').click(function () {

        jQuery(this).parent().toggleClass('choose-checkbox');

        if (jQuery(this).find('input').val() == 0) {

            jQuery(this).find('input').val(1);

        } else {

            jQuery(this).find('input').val(0);

        }


        return false;

    });
    /*
    * Update for Calc Page checkbox
    **/
    jQuery('.form-calculate .checkboxFour').click(function () {

        jQuery('.form-calculate .checkboxFour').parent().removeClass('choose-checkbox');
        jQuery(this).parent().addClass('choose-checkbox');
        return false;

    });


    jQuery(".form-calculate").submit(function (e) {

        e.preventDefault();
        //jQuery('#result-calculate').html('');
        var valuesumm = jQuery(".slider-result-input").val();
        var valueincome = jQuery(".calculate-valueincome").val();
        var valuecredits = jQuery(".calculate-valuecredits").val();
        var checkmortgage = jQuery(".calculate-checkmortgage").val();
        var valueproperty = jQuery(".calculate-valueproperty").val();
        var numberproperty = jQuery(".number-valueproperty").val();
        var checkproperty = jQuery(".checkboxprop").val();


        var check_before_result = (parseInt(valuesumm) - parseInt(valueproperty)) / (parseInt(valueincome) - 9500);
//console.log('Долг:  '+ valuesumm,'Доход: '+valueincome,'Количекство кредитов: '+ valuecredits,'Ипотека: '+checkmortgage,'Имущество: '+valueproperty,check_before_result);
        if (check_before_result >= 36) {

            jQuery('#result-calculate').html('Процедура реструктуризации невозможна.');

        } else {

            var $addCreditPrice, addText, $addproperty;
            if (valuecredits > 5) {
                $addCreditPrice = Number(parseInt(valuecredits) * 2000);
            } else {
                $addCreditPrice = 0;
            }

            if (checkmortgage == 1) {
                addText = 'Для ипотечных клиентов у нас действуют скидки';
                $addproperty = 0;
            } else {
                if (numberproperty > 1) {

                    $addproperty = parseInt(10000);

                } else {

                    $addproperty = 0;

                }
                addText = '';
            }


            var $resultprice = Number(100000 + $addCreditPrice + $addproperty);

            jQuery('html, body').animate({scrollTop: jQuery('#result-calculate').offset().top - 100}, 500);

            //jQuery('#result-calculate').html('Cуд может утвердить план реструктуризации, нужна консультация специалиста, подробнее можно прочесть в соответствующем разделе сайта </br> <div>Цена наших услуг:'+ $resultprice+' руб.</div></br><p>'+ addText+'</p>');
            jQuery('.price-part .total-price span').html('');
            jQuery('.price-part.second .total-price span').html($resultprice);
            jQuery('.price-part.first .total-price span').html($resultprice - parseInt(40000));
            jQuery('.price-part.third .total-price span').html($resultprice + parseInt(50000));

            jQuery('#result-calculate').css('height', jQuery('.table-prices').height());
            jQuery('#result-calculate').removeClass('overflow-hidden');


        }


    });

    /**
     * Accordion menu  block in first bllocks
     */



    jQuery('.accrotdions-blocks').find('h3').click(function () {
        jQuery(this).next().stop().slideToggle();
        jQuery(this).toggleClass("accordion-open");
    }).next().stop().hide();


    /*
    * Accordion
    **/

    if (jQuery('.accordion').length) {
        jQuery('.accordion').find('a').click(function (e) {
            e.preventDefault();
            jQuery(this).next().stop().slideToggle();
        }).next().stop().hide();

    }


    /*
    * Add row form 1 row form
    */

    if (jQuery('.add-form.form-2-6, .add-form.form-2-5, .add-form.form-2-4, .add-form.form-2-3, .add-form.form-2-2, .add-form.first, .add-form.second, .add-form.first-form-9, .add-form.form-8, .add-form.add-form-6, .add-form.form-4-1, .add-form.form-4-2, .add-form.form-3-1,.add-form.form-3-2, .add-form.form-2-1').length) {

      //  jQuery('.add-form.first').click(function (e) {
        jQuery("body").on( "click", ".add-form.first", function(e) {

            e.preventDefault();
            var $thisParent = jQuery(this).parent();

            jQuery($thisParent).append('<div class="form-group-one clearfix">' +
                '<div class="clearfix">' +
                '<div class="col-md-6-form">' +
                '<div class="form-group">' +
                '<input name="form_1_entity' + InitTypeFiledNumber(this) + '[]" type="text" class="form-control " placeholder="Содержание обязательства (1)" >' +
                '</div>' +
                '<div class="form-group">' +
                ' <input name="form_1_creditor' + InitTypeFiledNumber(this) + '[]" type="text" class="form-control " placeholder="Кредитор (2)" >' +
                '</div>' +
                '<div class="form-group">' +
                '<input name="form_1_place_life' + InitTypeFiledNumber(this) + '[]" type="text" class="form-control "  placeholder="Место нахождения (место жительства) кредитора" >' +
                '</div>' +
                '<div class="form-group no-padding">' +
                '<input name="form_1_main_emite' + InitTypeFiledNumber(this) + '[]" type="text" class="form-control " placeholder="Основание возникновения (3)" >' +
                '</div>' +
                '</div>' +
                '<div class="col-md-6-form no-padding-right">' +
                '<div class="form-group">' +
                ' <input name="form_1_total_all' + InitTypeFiledNumber(this) + '[]" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field"  placeholder="Сумма обязательства (всего) (4)" >' +
                '</div>' +
                '<div class="form-group">' +
                '<input name="form_1_total_all_indebtedness' + InitTypeFiledNumber(this) + '[]" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field"  placeholder="Сумма обязательства (в том числе задолженность) (5)" >' +
                '</div>' +
                '<div class="form-group">' +
                '<input name="form_1_penaltie_fines' + InitTypeFiledNumber(this) + '[]" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field" placeholder="Штрафы, пени и иные санкции" >' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="delete-row " onclick="deleterowforms(this)">Удалить Строку</div>' +
                '</div> ');


        });

        jQuery('.add-form.second').click(function (e) {
            e.preventDefault();

            var $thisParent = jQuery(this).parent();

            jQuery($thisParent).append('<div class="form-group-one">' +
                '<div class="col-md-12-form">' +
                '<div class="form-group">' +
                '<input name="form_1_row2_name_tax' + InitTypeFiledNumber(this) + '[]" type="text" class="form-control " placeholder="Наименование налога, сбора или иного обязательного платежа" >' +
                '</div>' +
                '<div class="form-group">' +
                '<input name="form_1_row2_arrears' + InitTypeFiledNumber(this) + '[]" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field" placeholder="Недоимка" >' +
                '</div>' +
                '<div class="form-group">' +
                '<input name="form_1_row2_penaltie_fines' + InitTypeFiledNumber(this) + '[]" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field"  placeholder="Штрафы, пени и иные санкции" >' +
                '</div>' +
                '</div>' +
                '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' +
                '</div>');


        });
        jQuery('.add-form.first-form-9').click(function (e) {
            e.preventDefault();
            var $thisParent = jQuery(this).parent();
            jQuery($thisParent).append(' <div class="col-md-12-form">' +
                '<div class="form-group">' +
                '<input name="form_9_name_credit_bank_mfo[]" type="text" class="form-control " placeholder="Наименование кредитора: банка, МФО, физического лица и т.д.">' +
                '</div>' +
                '<div class="form-group">' +
                '<input name="form_9_balance_owed[]" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field" placeholder="Остаток долга, руб.">' +
                '</div>' +
                '<div class="form-group">' +
                '<input name="form_9_amount_overdue_debt[]" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field" placeholder="Размер просроченной задолженности, руб.">' +
                '</div>' +
                '<div class="form-group">' +
                '<input name="form_9_default_period[]" type="text" class="form-control " placeholder="Срок просрочки, мес">' +
                '</div>' +
                '<div class="form-group">' +
                '<input name="form_9_bank_try_collect[]" type="text" class="form-control " placeholder="Каким образом банк пытается взыскать задолженность: сам, коллекторы, суд, приставы">' +
                '</div>' +
                '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' +
                '</div>');
        });

        jQuery('.add-form.form-8').click(function (e) {
            e.preventDefault();
            var $thisParent = jQuery(this).parent();
            jQuery($thisParent).append('<div class="form-group">' +
                '<input name="form_8_aplication_name[]" type="text" class="form-control " placeholder="Название приложения">' +
                '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' +
                '</div>');

        });

        jQuery('.add-form.add-form-6').click(function (e) {
            e.preventDefault();
            var $thisParent = jQuery(this).parent();
            jQuery($thisParent).append('<div class="form-group">\n' +
                '   <input name="form_6_creditor[]" type="text" class="form-control " placeholder="Кредитор">\n' +
                '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' +
                '</div> ');
        });

        jQuery('.add-form.form-4-1').click(function (e) {
            e.preventDefault();
            var $thisParent = jQuery(this).parent();
            jQuery($thisParent).append('<div class="form-group-one clearfix">\n' +
                '                                <div class="form-group">\n' +
                '                                    <input name="form_4_name_creditor[]" type="text" class="form-control "\n' +
                '                                           placeholder="Наименование кредитора полностью">\n' +
                '                                </div>\n' +
                '                                <div class="form-group">\n' +
                '                                    <input name="form_4_location[]" type="text" class="form-control "\n' +
                '                                           placeholder="Место нахождения">\n' +
                '                                </div>\n' +
                '                                <div class="form-group">\n' +
                '                                    <input name="form_4_inn[]" type="text" class="form-control "\n' +
                '                                           placeholder="ИНН">\n' +
                '                                </div>\n' +
                '                                <div class="form-group">\n' +
                '                                    <input name="form_4_ogrn[]" type="text" class="form-control "\n' +
                '                                           placeholder="ОГРН">\n' +
                '                                </div>\n' +
                '                                <div class="form-group">\n' +
                '                                    <input name="form_4_phone[]" type="text" class="form-control "\n' +
                '                                           placeholder="Телефон">\n' +
                '                                </div>\n' +
                '                                <div class="form-group">\n' +
                '                                    <input name="form_4_fax[]" type="text" class="form-control "\n' +
                '                                           placeholder="Факс">\n' +
                '                                </div>\n' +
                '                                <div class="form-group">\n' +
                '                                    <input name="form_4_email[]" type="text" class="form-control "\n' +
                '                                           placeholder="E-mail">\n' +
                '                                </div>\n' +
                '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' +
                '                            </div>');


        });

        jQuery('.add-form.form-4-2').click(function (e) {
            e.preventDefault();
            var $thisParent = jQuery(this).parent();
            jQuery($thisParent).append('<div class="form-group">\n' +
                '<input name="form_4_name_app[]" type="text" class="form-control " placeholder="Название приложение">\n' +
                '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' +
                '</div> ');
        });

        jQuery('.add-form.form-3-1').click(function (e) {
            e.preventDefault();
            var $thisParent = jQuery(this).parent();
            jQuery($thisParent).append('<div class="form-group-one clearfix">\n' +
                '                                <div class="form-group">\n' +
                '                                    <input name="form_3_name_creditor[]" type="text" class="form-control "\n' +
                '                                           placeholder="Наименование кредитора полностью">\n' +
                '                                </div>\n' +
                '                                <div class="form-group">\n' +
                '                                    <input name="form_3_location[]" type="text" class="form-control "\n' +
                '                                           placeholder="Место нахождения">\n' +
                '                                </div>\n' +
                '                                <div class="form-group">\n' +
                '                                    <input name="form_3_inn[]" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field"\n' +
                '                                           placeholder="ИНН">\n' +
                '                                </div>\n' +
                '                                <div class="form-group">\n' +
                '                                    <input name="form_3_ogrn[]" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field"\n' +
                '                                           placeholder="ОГРН">\n' +
                '                                </div>\n' +
                '                                <div class="form-group">\n' +
                '                                    <input name="form_3_phone[]" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field"\n' +
                '                                           placeholder="Телефон">\n' +
                '                                </div>\n' +
                '                                <div class="form-group">\n' +
                '                                    <input name="form_3_fax[]" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field"\n' +
                '                                           placeholder="Факс">\n' +
                '                                </div>\n' +
                '                                <div class="form-group">\n' +
                '                                    <input name="form_3_email[]" type="text" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field"\n' +
                '                                           placeholder="E-mail">\n' +
                '                                </div>\n' +
                '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' +
                '                            </div>');
        });

        jQuery('.add-form.form-3-2').click(function (e) {
            e.preventDefault();
            var $thisParent = jQuery(this).parent();
            jQuery($thisParent).append(' <div class="form-group">\n' +
                '                                <p> Подсказка: Введите сюда ваши обязательства. Каждое новое обязательство - в новой\n' +
                '                                    строчке. Например, - "обязательство по оплате по кредитному договору № 0001 от 01\n' +
                '                                    февраля 2015 г., заключенному с кредитором (имя кредитора)"</p>\n' +
                '                                <input name="form_3_obyazatelstvo[]" type="text" class="form-control ">\n' +
                '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' +
                '                            </div>');
        });

        jQuery('.add-form.form-2-1').click(function (e) {
            e.preventDefault();
            var $thisParent = jQuery(this).parent();
            jQuery($thisParent).append('<div class="col-md-12-form">\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_kinds_name' + InitTypeProperty(this) + '[]" type="text" class="form-control "\n' +
                '                                       placeholder="Вид и наименование имущества">\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_kind' + InitTypeProperty(this) + '[]" type="text" class="form-control "\n' +
                '                                       placeholder="Вид собственности (1)">\n' +
                '                            </div>\n' +
                '<div class="form-group">' +
                '<input name="form_2_place' + InitTypeProperty(this) + '[]" type="text" class="form-control " placeholder="Местонахождение (адрес)">' +
                '</div>' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_area' + InitTypeProperty(this) + '[]" type="text" class="form-control "\n' +
                '                                       placeholder="Площадь (кв.м)">\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_acquisition_price' + InitTypeProperty(this) + '[]" type="text" class="form-control "\n' +
                '                                       placeholder="Основание приобретения (2) и стоимость (3)">\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_info_zalog' + InitTypeProperty(this) + '[]" type="text" class="form-control "\n' +
                '                                       placeholder="Сведения о залоге и залогодержателе (4)">\n' +
                '                            </div>\n' +
                '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' +
                '                        </div>');
        });
        jQuery('.add-form.form-2-2').click(function (e) {
            e.preventDefault();
            var $thisParent = jQuery(this).parent();
            jQuery($thisParent).append('<div class="col-md-12-form">\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_kind_marks' + InitTypeAuto(this) + '[]" type="text" class="form-control "\n' +
                '                                       placeholder="Вид, марка, модель транспортного средства, год изготовления">\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_id_number' + InitTypeAuto(this) + '[]" type="text" class="form-control "\n' +
                '                                       placeholder="Идентификационный номер (6)">\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_kinds_property' + InitTypeAuto(this) + '[]" type="text" class="form-control "\n' +
                '                                       placeholder="Вид собственности (7)">\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_palce' + InitTypeAuto(this) + '[]" type="text" class="form-control "\n' +
                '                                       placeholder="Место нахождения/место хранения (адрес)">\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_price' + InitTypeAuto(this) + '[]" type="text" class="form-control "\n' +
                '                                       placeholder="Стоимость (8)">\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_info' + InitTypeAuto(this) + '[]" type="text" class="form-control "\n' +
                '                                       placeholder="Сведения о залоге и залогодержателе (9)">\n' +
                '                            </div> \n' +
                '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' +
                '                        </div>');
        });
        jQuery('.add-form.form-2-3').click(function (e) {
            e.preventDefault();
            var $thisParent = jQuery(this).parent();
            jQuery($thisParent).append('<div class="col-md-12-form">\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_name_adress_bank[]" type="text" class="form-control "\n' +
                '                                       placeholder="Наименование и адрес банка или иной кредитной организации">\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_kind_valute_chet[]" type="text" class="form-control "\n' +
                '                                       placeholder="Вид и валюта счета (10)">\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_date_open_chet[]" type="text" class="form-control "\n' +
                '                                       placeholder="Дата открытия счета">\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_balance_chet[]" type="text" class="form-control "\n' +
                '                                       placeholder="Остаток на счете (11)">\n' +
                '                            </div> ' +
                '                            <div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' +
                '                        </div>');
        });
        jQuery('.add-form.form-2-4').click(function (e) {
            e.preventDefault();
            var $thisParent = jQuery(this).parent();
            jQuery($thisParent).append('<div class="col-md-12-form">\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_4_1_name[]" type="text" class="form-control "\n' +
                '                                       placeholder="Наименование и организационно-правовая форма организации (12)">\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_4_2_place[]" type="text" class="form-control "\n' +
                '                                       placeholder="Местонахождение организации (адрес)">\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_4_3_kapital[]" type="text" class="form-control "\n' +
                '                                       placeholder="Уставный, складочный капитал, паевой фонд (13)">\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_4_4_part_use[]" type="text" class="form-control "\n' +
                '                                       placeholder="Доля участия (14)">\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_4_5_main_use[]" type="text" class="form-control "\n' +
                '                                       placeholder="Основание участия (15)">\n' +
                '                            </div> \n' +
                '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' +
                '                        </div>');
        });
        jQuery('.add-form.form-2-5').click(function (e) {
            e.preventDefault();
            var $thisParent = jQuery(this).parent();
            jQuery($thisParent).append(' <div class="col-md-12-form">\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_5_1_kind_paper[]" type="text" class="form-control "\n' +
                '                                       placeholder="Вид ценной бумаги (16)">\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_5_2_face_release[]" type="text" class="form-control "\n' +
                '                                       placeholder="Лицо, выпустившее ценную бумагу">\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_5_3_value_obyazatelstava[]" type="text" class="form-control "\n' +
                '                                       placeholder="Номинальная величина обязательства (руб.)">\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_5_4_total_count[]" type="text" class="form-control "\n' +
                '                                       placeholder="Общее количество">\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_5_5_total_price[]" type="text" class="form-control "\n' +
                '                                       placeholder="Общая стоимость (17)">\n' +
                '                            </div>\n' +
                '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' +
                '                        </div>');

        });
        jQuery('.add-form.form-2-6').click(function (e) {
            e.preventDefault();
            var $thisParent = jQuery(this).parent();
            jQuery($thisParent).append('  <div class="col-md-12-form">\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_6_1_kind_property' + InitTypeVI(this) + '[]" type="text" class="form-control "\n' +
                '                                       placeholder="Вид и наименование имущества">\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_6_2_price' + InitTypeVI(this) + '[]" type="text" class="form-control "\n' +
                '                                       placeholder="Стоимость (сумма и валюта) (18)">\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_6_3_plcae_have' + InitTypeVI(this) + '[]" type="text" class="form-control "\n' +
                '                                       placeholder="Место нахождения/место хранения (19)">\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                <input name="form_2_6_4_total_info' + InitTypeVI(this) + '[]" type="text" class="form-control "\n' +
                '                                       placeholder="Сведения о залоге и залогодержателе (20)">\n' +
                '                            </div>\n' +
                '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' +
                '                        </div>');

        });


// end
    }
    /*
    * Show input if check in form pages
     */

    jQuery('.сheckbox-with-input').change(function () {
        if (jQuery(this).is(":checked")) {
            jQuery(this).parent().addClass('showInput');
        } else {
            jQuery(this).parent().removeClass('showInput');
        }
    });

    /*
    * Response Height in bloks  Same
    */

    jQuery('.benefit-cols .benefit-block').equalHeightResponsive();
    jQuery('.block-dont-self').equalHeightResponsive();
    jQuery('.live-idji-walp .live-idji-block').equalHeightResponsive();
    jQuery('.dont-wait-block-auto-height .dont-wait-block').equalHeightResponsive();


// end redy function
});

/*
* Accordion for Query Ansver Page
 */

function accordionQAPage() {
    if (jQuery(window).width() < 800) {

        jQuery(".q-a-block").click(function () {

            jQuery(this).toggleClass('showaccordion')

            return false;
        });
    } else {
        jQuery(".q-a-block").click(function () {
            jQuery(this).css('height', 63);
            if (jQuery(this).hasClass('showaccordion')) {
                jQuery(this).removeClass('showaccordion');

            } else {
                var $thisblock = jQuery(this).find('.block-q-a-accordion').height();
                jQuery(this).css('height', $thisblock + 143);
                jQuery(this).addClass('showaccordion');
            }
            return false;
        });
    }
}
/*
* Service Page
 */

function InitServiceOOO() {
    jQuery(".block-acc-ooo").click(function () {

        if(jQuery(this).hasClass('show-acc')){
            jQuery(this).removeClass('show-acc');
            jQuery(this).find('.content-accordion-ooo').css('height', 0);
            jQuery(this).find('.change-state-link-accordion-ooo').html('');
            jQuery(this).find('.change-state-link-accordion-ooo').html('Подробнее');
            jQuery(this).find('.arrow-down-accordion-ooo').removeClass(' close').addClass(' open');


        }else{
            jQuery(this).addClass('show-acc');
            var $thisheight = jQuery(this).find('.content-accordion-ooo-walp').height();
            jQuery(this).find('.content-accordion-ooo').css('height', $thisheight+ 50);
            jQuery(this).find('.change-state-link-accordion-ooo').html('');
            jQuery(this).find('.change-state-link-accordion-ooo').html('Скрыть');
            jQuery(this).find('.arrow-down-accordion-ooo').removeClass(' open ').addClass('  close ');
        }

        return false;
    });
}

/*
* Choose Old in Calculate Page
*/

function InitChooseOld() {

    jQuery('.calc-pointer').click(function (e) {
        e.preventDefault();

        jQuery('.calc-pointer').removeClass('choose-old');
        jQuery(this).addClass('choose-old');


    });

}


/*
* Functions for froms pages add arrays fields
*/

function InitTypeFiledNumber(Element) {

    var $dataSectionNumber = jQuery(Element).parent().data('section');
    var $redytype;
    if ($dataSectionNumber == '1') {

        return $redytype = '';

    } else if ($dataSectionNumber == '2') {

        return $redytype = '_2';

    } else if ($dataSectionNumber == '3') {

        return $redytype = '_3';

    } else if ($dataSectionNumber == '4') {

        return $redytype = '_4';
    }


}

function InitTypeProperty(Element) {

    var $dataSectionNumber = jQuery(Element).parent().data('section');

    if ($dataSectionNumber == '_property') {

        return '_property';

    } else if ($dataSectionNumber == '_home') {

        return '_home';

    } else if ($dataSectionNumber == '_rooms') {

        return '_rooms';

    } else if ($dataSectionNumber == '_garages') {

        return '_garages';
    } else if ($dataSectionNumber == '_otherproperty') {

        return '_otherproperty';
    }


}

function InitTypeAuto(Element) {

    var $dataSectionNumber = jQuery(Element).parent().data('section');

    if ($dataSectionNumber == '_light') {

        return '_light';

    } else if ($dataSectionNumber == '_cargo') {

        return '_cargo';

    } else if ($dataSectionNumber == '_moto') {

        return '_moto';

    } else if ($dataSectionNumber == '_agricultural_machinery') {

        return '_agricultural_machinery';

    } else if ($dataSectionNumber == '_water_machinery') {

        return '_water_machinery';

    } else if ($dataSectionNumber == '_air_machinery') {

        return '_air_machinery';

    } else if ($dataSectionNumber == '_other_machinery') {

        return '_other_machinery';

    }


}

function InitTypeVI(Element) {

    var $dataSectionNumber = jQuery(Element).parent().data('section');

    if ($dataSectionNumber == '_jewelry') {

        return '_jewelry';

    } else if ($dataSectionNumber == '_artobjects') {

        return '_artobjects';

    } else if ($dataSectionNumber == '_property') {

        return '_property';

    } else if ($dataSectionNumber == '_propertyother') {

        return '_propertyother';

    }
}


/*
* Action for Price Tables
*/
function InitActionPriceTables() {


//jQuery('.table-prices .price-part').click(function(e){
    jQuery('.view-plan-play-calc-page').click(function (e) {
        e.preventDefault();
        var $this = jQuery(this);


        $this.parent().parent().parent().find('.price-part').removeClass('active-price-choose');
        $this.parent().parent().parent().find('.price-payment-result').css('height', '0');
        $this.parent().parent().parent().find('.price-payment-result').html('');


        $this.parent().parent().addClass('active-price-choose');
        if ($this.hasClass('showpayment')) {
            $this.html('');
            $this.html('Посмотреть платеж');
            $this.removeClass('showpayment');
            $this.parent().parent().removeClass('active-price-choose');
            $this.parent().find('.price-payment-result').css('height', '0');
            $this.parent().find('.price-payment-result').html('');
            return false;
        } else {

            $this.html('');
            $this.html('Скрыть платеж');
            $this.addClass(' showpayment ');
        }

        var $method = 'plain';   // may be  'percent' and  'plain'
        var $currentPrice = $this.parent().parent().find('.total-price span').html();
        var $firstTwoPayment;
        var $firstMountPayment;
        var $secondMountPayment;
        var $mountPayment;
        var $fiveMountPayment;
        var lastPayment;

        if ($method == 'percent') {

            $firstMountPayment = parseInt($currentPrice) / 5;
            $secondMountPayment = parseInt($currentPrice) / 4;
            $firstTwoPayment = $firstMountPayment + $secondMountPayment;

            $mountPayment = parseInt($currentPrice) / 10;


        } else {

            $firstTwoPayment = parseInt(20000 + 25000);
            $firstMountPayment = parseInt(20000);
            $secondMountPayment = parseInt(25000);
          //  $mountPayment = parseInt(10000);
            $mountPayment = parseInt($currentPrice) / 10;


        }


        var $priceWithOutFirstTwoMouth = parseInt($currentPrice) - $firstTwoPayment;

        var Subtotal = $priceWithOutFirstTwoMouth - $fiveMountPayment;
        var Subtotal = Math.floor($priceWithOutFirstTwoMouth / $mountPayment);


        $fiveMountPayment = parseInt($mountPayment * Subtotal);

        var $lastMountPayment = parseInt($priceWithOutFirstTwoMouth - $fiveMountPayment);
        var $lastMountPayment = parseInt($priceWithOutFirstTwoMouth - $fiveMountPayment);

        if ($lastMountPayment > 0) {

            lastPayment = true;

        } else {

            lastPayment = false;
        }
        //lastPayment = false;
        if (lastPayment) {
            var template = '<li><p>3 месяц: <span>' + $mountPayment + '</span> руб.</p></li>';
            var template2 = '';
            var temporarytemplate = '';
            var redytemplate;
            var maxvalue = Subtotal + parseInt(3);
            var lastmounth = maxvalue + 1;

            for (var i = 4; i <= maxvalue; i++) {

                temporarytemplate = '<li><p>' + i + ' месяц: <span>' + $mountPayment + '</span> руб.</p></li>';
                template2 = template2.concat(temporarytemplate);

            }
            redytemplate = template.concat(template2);

            redytemplate = redytemplate.concat('<li><p>' + lastmounth + ' месяц: <span>' + $lastMountPayment + '</span> руб.</p></li>');
            //console.log(redytemplate);


            $this.parent().parent().find('.price-payment-result').html('<h3> Оплата</h3>' +
                '<ul class="tables-ten-mounth-payments clearfix">' +
                '<li>' +
                '<p>1 месяц Аванс: <span>' + $firstMountPayment + '</span> руб.</p>' +
                '</li>' +
                '<li>' +
                '<p>2 месяц Депозит суда: <span>' + $secondMountPayment + '</span> руб.</p>' +
                '</li>' + redytemplate + '</ul>');


            var heighBlock = jQuery('.tables-ten-mounth-payments').height();
            $this.parent().parent().find('.price-payment-result').css('height', heighBlock + 36);

            //	$this.find('.price-payment-result').html();
        } else {
            $this.parent().parent().find('.price-payment-result').html('Оплата суммы происходит в рассрочку по 10 000 то в месяц, подробности у специалиста');

        }


    });


}


/*
* Show tooltip in Calc Page
*/


function InitShowTooltip() {
    jQuery('.question-page-calc').click(function (e) {
        e.preventDefault();
        var $thisClass = jQuery(this).parent().parent().find('.tooltip.calc-page');
        if (!$thisClass.hasClass('show-tooltip')) {
            $thisClass.addClass('show-tooltip');

        } else {
            $thisClass.removeClass('show-tooltip');
        }
/*
        $thisClass.mouseleave(function () {
            jQuery('body').click(function (e) {
                e.preventDefault();

                    $thisClass.removeClass('show-tooltip');

            });
        });*/

        jQuery('.tooltip.calc-page').click(function (e) {

            e.preventDefault();
            var $this = jQuery(this);

                $this.removeClass('show-tooltip');


        });
    });


}

/*
* Open Content for Client Reviews
**/


function InitOpenContentReview() {
    jQuery('.review-link-readmore').click(function (e) {

        e.preventDefault();

        if (jQuery(this).text() == 'Читать полностью') {

            jQuery(this).text('Вернуть обратно');

        } else {
            jQuery(this).text('Читать полностью');
        }


        var $thisClass = jQuery(this).parent().parent().find('.review-content');
        if ($thisClass.hasClass('show-content-review')) {
            $thisClass.css('height', '164');
        } else {
            $thisClass.css('height', jQuery('.review-content div').height());
        }

        $thisClass.toggleClass('show-content-review');


    })

}

/*
* Deleete row
*/
function deleterowforms(elmnt) {

    jQuery(elmnt).parent().remove();
}

//---------
// Slider
//--------

function InitSlider() {

    jQuery('.slider-wallpaper').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        lazyLoad: 'progressive',
        dots: true,
        autoplay: true,
        speed: 1000,
        prevArrow: jQuery('.slider-nav .slider-arrow-left'),
        nextArrow: jQuery('.slider-nav .slider-arrow-right')

    });

}

//---------
// Slider Review
//--------

function InitSliderReview() {

    var arraycarousels = jQuery('.reviews-first-block-walp');
    arraycarousels.each(function () {
        jQuery(this).slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            infinite: false,
            autoplay: true,
            speed: 1000,
            arrows: false
        });
        jQuery('.reviews-first-block .slider-arrow-left').click(function (e) {
            e.preventDefault();
            jQuery(this).parent().parent().find('.reviews-first-block-walp').slick('slickPrev');
        })

        jQuery('.reviews-first-block .slider-arrow-right').click(function (e) {
            e.preventDefault();
            jQuery(this).parent().parent().find('.reviews-first-block-walp').slick('slickNext');
        })

    });


}


//---------
// Carousel Clients
//--------

function InitCarouselClients() {

    jQuery('.slider-wallpaper-clients').slick({
        infinite: true,
        slidesToShow: 3,
        lazyLoad: 'progressive',
        slidesToScroll: 1,
        dots: false,
        autoplay: true,
        speed: 1000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
// instead of a settings object
        ],
        prevArrow: jQuery('.slider-nav-clients .slider-arrow-left'),
        nextArrow: jQuery('.slider-nav-clients .slider-arrow-right')

    });

}


/*
* Calculate
*/
function InitUISlider() {

    jQuery("#slider-ui").slider({
        value: 0,//Значение, которое будет выставлено слайдеру при загрузке
        min: 150000,//Минимально возможное значение на ползунке
        max: 3000000,//Максимально возможное значение на ползунке
        step: 1000,//Шаг, с которым будет двигаться ползунок
        create: function (event, ui) {
            val = jQuery("#slider-ui").slider("value");//При создании слайдера, получаем его значение в перемен. val
            jQuery("#valueidslider").html(val);//Заполняем этим значением элемент с id contentSlider
        },
        slide: function (event, ui) {
            jQuery("#valueidslider").html(ui.value);//При изменении значения ползунка заполняем элемент с id contentSlider
            var $result = ui.value * 1.3 - 100000;

            if ($result > 0 && ui.value >= 500000) {
                jQuery(".result-calc span").html($result);//При изменении значения ползунка заполняем элемент с id contentSlider
            } else {
                jQuery(".result-calc span").html('0');
            }
        }
    });
}

/*
* Calculate In Page Calculate Total debts
*/
function InitUISliderPage() {
    var $this = jQuery(".slider-ui");
    $this.slider({
        value: 0,//Значение, которое будет выставлено слайдеру при загрузке
        min: 150000,//Минимально возможное значение на ползунке
        max: 15000000,//Максимально возможное значение на ползунке
        step: 1000,//Шаг, с которым будет двигаться ползунок
        create: function (event, ui) {
            val = jQuery($this).slider("value");//При создании слайдера, получаем его значение в перемен. val
            console.log(val);
            $this.parent().find(".slider-result-input").val(val);//Заполняем этим значением элемент с id contentSlider
        },
        slide: function (event, ui) {
            $this.parent().find(".slider-result-input").val(ui.value);//При изменении значения ползунка заполняем элемент с id contentSlider

        }
    });
}

/*
* Calculate In Page Calculate Total property
*/
function InitUISliderPageProperty() {
    var $this = jQuery(".slider-ui-property");
    $this.slider({
        value: 0,//Значение, которое будет выставлено слайдеру при загрузке
        min: 1000,//Минимально возможное значение на ползунке
        max: 1500000,//Максимально возможное значение на ползунке
        step: 1000,//Шаг, с которым будет двигаться ползунок
        create: function (event, ui) {
            val = jQuery($this).slider("value");//При создании слайдера, получаем его значение в перемен. val
            console.log(val);
            $this.parent().find(".slider-result-input-property").val(val);//Заполняем этим значением элемент с id contentSlider
        },
        slide: function (event, ui) {
            $this.parent().find(".slider-result-input-property").val(ui.value);//При изменении значения ползунка заполняем элемент с id contentSlider

        }
    });
}

/*
* Confim password
 */
function ConfimPassword() {
    if (jQuery(".registration-page, .page-user-profile").length) {
        var password = document.getElementById("reg-pass")
            , confirm_password = document.getElementById("confim-reg-pass");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Пароли не совпадают");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    }
}

/*
*  Tooltips for Five steps part
*/

function fiveblocks() {
    if (jQuery(window).width() > 1200) {


        jQuery(".col-five-step-block").hover(function () {

            var $this = jQuery(this);
            var tooltipblock = $this.parent().find('.tooltip-five-step');
            tooltipblock.show();


            $this.mouseleave(function () {

                tooltipblock.hide();

            });

        });

    }
}

/*
* Mobile Menu
*/
function MobileMenu() {
    jQuery('#mobile-bar').click(function (e) {
        e.preventDefault();
        jQuery('.navigation').toggleClass("menu-open");
        jQuery('#mobile-bar a').toggleClass(" is-active");


    });

    /**
     * Accordion menu for mobile
     */
    if (jQuery(window).width() < 1200) {


        jQuery('.navigation').find('li a.open-ul').click(function (e) {
            e.preventDefault();
            jQuery(this).next().stop().slideToggle();
            jQuery(this).toggleClass("accordion-open");
        }).next().stop().hide();
    }
}

/*
* Animation
*/
function animationblocks() {

    var windowwidth = jQuery(window).width();
    if (windowwidth >= 899) {
        jQuery('.animation-block').each(function () {
            jQuery(this).appear(function () {

                var $this = jQuery(this);
                var animcalass = $this.data('animation');
                $this.addClass(' animated ' + animcalass);

            }, {accX: 0, accY: -50})
        });
    } else {
        jQuery('.animation-block').addClass(' animated ');
    }
}

//  row-doc-form
//

/*
*  Add Block Text for Input for Form generate page
 */
function AddBlockTextInFormFields() {

    if (jQuery('.row-doc-form').length) {

        jQuery('input').live('input', function () {

            var $findp = jQuery(this).parent().find('p');
            var $this = jQuery(this);
            if ($findp.length == 0) {
                if ($this.is('input:text') || $this.is('.number-field')) {
                    var $value = jQuery(this).attr('placeholder');
                    jQuery(this).parent().prepend('<p class="tooltips">' + $value + '</p>');
                }
            }

        })
    }

}

// ---------------------------------------------------------
// Back To Top
// ---------------------------------------------------------
function backToTop(){
    "use strict";
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('#back_to_top').addClass('backactive');
        } else {
            jQuery('#back_to_top').removeClass('backactive');
        }
    });
    jQuery(document).on('click','#back_to_top',function(e){
        e.preventDefault();

        jQuery('body,html').animate({scrollTop: 0}, jQuery(window).scrollTop()/3, 'linear');
    });

}