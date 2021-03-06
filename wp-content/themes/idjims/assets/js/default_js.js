jQuery(window).resize(function() {
  "use strict";
  accordionQAPage();
  fiveblocks();
  animationblocks();
  MobileMenu();
});
jQuery(document).ready(function() {
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
  initUserVisitesPages();
  initStoreUserParams();
  jQuery(".tabs").lightTabs();
  jQuery('.wpcf7-submit').click(function(e) {
    var parentClass = jQuery(this).parent().parent().parent().parent().parent();
    var valuechechbox = parentClass.find('.checkboxFour input').val();
    var respondcf7 = parentClass.find('.wpcf7-response-output');
    if (valuechechbox != '1') {
      e.preventDefault();
      respondcf7.addClass(' wpcf7-validation-errors');
      respondcf7.html(' ');
      respondcf7.append('Вы не согласились с политикой конфиденциальности');
      respondcf7.slideDown();
    }
  });
  var myLazyLoad = new LazyLoad();
  jQuery("#map").hover(function() {
    var $this = jQuery('.overlay-map');
    $this.css('opacity', 0);
  }, function() {
    var $this = jQuery('.overlay-map');
    $this.css('opacity', 1);
  });
  jQuery("form input, form textarea").focus(function() {
    jQuery(this).parent().parent().find('label').hide();
    var $this = jQuery(this);
    $this.mouseleave(function() {
      var $thisvalue = $this.val();
      if (!$thisvalue.length) {
        $this.parent().parent().find('label').show();
      }
      jQuery(this).parent().find('.telephone').inputmask('remove');
    });
    $this.parent().find('.telephone').inputmask({
      "mask": "+7 (999) 999-9999"
    });
  });
  jQuery('form input, form textarea').on('input', function() {
    jQuery(this).parent().parent().find('label').hide();
  });
  jQuery("form label").click(function() {
    var $this = jQuery(this);
    var $thisParent = jQuery(this).parent();
    $this.hide();
    $this.parent().find('.telephone').inputmask({
      "mask": "+7 (999) 999-9999"
    });
    $this.parent().find('input').focus();
    $thisParent.mouseleave(function() {
      var $thisvalue = $thisParent.find('input').val();
      if (!$thisvalue.length) {
        $this.show();
      }
      jQuery(this).parent().find('.telephone').inputmask('remove');
    });
  });
  jQuery("form input, form textarea").focusout(function() {
    jQuery(this).parent().find('.telephone').inputmask('remove');
  });
  jQuery(".overlay-layer, .close-modal-block").click(function() {
    jQuery('.overlay-layer').removeClass('overlay-display');
    jQuery('.modal-form').removeClass(' overlay-display ');
    jQuery('.block-qa-answer').removeClass(' overlay-display ');
    return false;
  });
  jQuery(".btn-link-modal, .btn-link-to-modal, .link-login-modal").click(function() {
    jQuery('.overlay-layer').addClass('overlay-display');
    jQuery('.modal-form.header-modal').addClass(' overlay-display ');
    return false;
  });
  jQuery(".qa-btn").click(function() {
    jQuery('.overlay-layer').addClass('overlay-display');
    jQuery('.block-qa-answer').addClass(' overlay-display ');
    return false;
  });
  jQuery('.login-page-start').click(function(e) {
    e.preventDefault();
    jQuery('html, body').animate({
      scrollTop: jQuery('#first-row-login').offset().top
    }, 500);
  });
  jQuery('.checkboxFour').click(function() {
    jQuery(this).parent().toggleClass('choose-checkbox');
    if (jQuery(this).find('input').val() == 0) {
      jQuery(this).find('input').val(1);
    } else {
      jQuery(this).find('input').val(0);
    }
    return false;
  });
  jQuery('.form-calculate .checkboxFour').click(function() {
    jQuery('.form-calculate .checkboxFour').parent().removeClass('choose-checkbox');
    jQuery(this).parent().addClass('choose-checkbox');
    return false;
  });
  jQuery(".form-calculate").submit(function(e) {
    e.preventDefault();
    var valuesumm = jQuery(".slider-result-input").val();
    var valueincome = jQuery(".calculate-valueincome").val();
    var valuecredits = jQuery(".calculate-valuecredits").val();
    var checkmortgage = jQuery(".calculate-checkmortgage").val();
    var valueproperty = jQuery(".calculate-valueproperty").val();
    var numberproperty = jQuery(".number-valueproperty").val();
    var valueNumberDependents = jQuery(".calculate-number-dependents").val();
    var valueCalculateAliments = jQuery(".calculate-aliments").val();
    var valueOld = jQuery('.choose-old').data("value");
    if (isNaN(parseInt(valueNumberDependents))) {
      valueNumberDependents = 0;
    }
    if (isNaN(parseInt(valueCalculateAliments))) {
      valueCalculateAliments = 0;
    }
    var $totalvaluesum = parseInt(valuesumm) - (valueNumberDependents * parseInt(9500)) - valueCalculateAliments;
    var check_before_result = ($totalvaluesum - parseInt(valueproperty)) / (parseInt(valueincome) - 9500);
    if (check_before_result >= 36) {
      jQuery('.check-capability-payment').html('').html('<div class="border-block"><p class="text-left">Вам подходит процедура банкротства с полным списанием долгов, так как у Вас имеются признаки неплатежеспособности и недостаточности имущества. Реструктуризация долгов через процедуру банкротства невозможно.</p></div>');
    } else {
      jQuery('.check-capability-payment').html('').html('<div class="border-block"><p class="text-left">С учетом Вашего дохода и стоимости имущества, Вы можете рассчитаться со всеми долгами в течении трех лет. Вам подходит процедура реструктуризации задолженности.');
    }
    var $addCreditPrice, addText, $addproperty, $addCreditPriceEco, $numberpropertyprice;
    if (valuecredits > 5) {
      $addCreditPrice = Number(parseInt(valuecredits - 5) * 2000);
      $addCreditPriceEco = Number(parseInt(valuecredits - 5) * 1000);
    } else {
      $addCreditPrice = 0;
      $addCreditPriceEco = 0;
    }
    if (checkmortgage == 1) {
      addText = 'Для ипотечных клиентов у нас действуют скидки';
      $addproperty = 0;
    } else {
      if (valueproperty > 0) {
        $addproperty = parseInt(10000);
      } else {
        $addproperty = 0;
      }
      addText = '';
    }
    if (parseInt(numberproperty) > 0) {
      $numberpropertyprice = parseInt(numberproperty) * parseInt(5000);
    } else {
      $numberpropertyprice = 0;
    }
    if (valueOld == 0) {
      var $valueOld = parseInt(5000);
    } else {
      var $valueOld = 0;
    }
    var $resultprice = Number(100000 + $addCreditPrice + $addproperty + $numberpropertyprice - $valueOld);
    var $resulteco = Number(35000 + $addCreditPriceEco + $addproperty + $numberpropertyprice - $valueOld);
    jQuery('html, body').animate({
      scrollTop: jQuery('#result-calculate').offset().top - 100
    }, 500);
    jQuery('.price-part .total-price span').html('');
    if (addText.length) {
      jQuery('.block-for-mortage').html('').html(addText);
    } else {
      jQuery('.block-for-mortage').html('');
    }
    jQuery('.price-part.second .total-price span').html('').html($resultprice);
    jQuery('.price-part.first .total-price span').html($resulteco);
    jQuery('.price-part.third .total-price span').html($resultprice + parseInt(50000));
    if (jQuery(window).width() < 490) {
      var $heightmobile = parseInt(200);
    } else {
      var $heightmobile = '';
    }
    jQuery('#result-calculate').css('height', jQuery('.table-prices').height() + jQuery('.calculate-finish-text').height() + 350 + $heightmobile);
    jQuery('#result-calculate').removeClass('overflow-hidden');
  });
  jQuery('.accrotdions-blocks').find('h3').click(function() {
    jQuery(this).next().stop().slideToggle();
    jQuery(this).toggleClass("accordion-open");
  }).next().stop().hide();
  if (jQuery('.accordion').length) {
    jQuery('.accordion').find('a').click(function(e) {
      e.preventDefault();
      jQuery(this).next().stop().slideToggle();
    }).next().stop().hide();
  }
  if (jQuery('.add-form.form-2-6, .add-form.form-2-5, .add-form.form-2-4, .add-form.form-2-3, .add-form.form-2-2, .add-form.first, .add-form.second, .add-form.first-form-9, .add-form.form-8, .add-form.add-form-6, .add-form.form-4-1, .add-form.form-4-2, .add-form.form-3-1,.add-form.form-3-2, .add-form.form-2-1').length) {
    jQuery("body").on("click", ".add-form.first", function(e) {
      e.preventDefault();
      var $thisParent = jQuery(this).parent();
      jQuery($thisParent).append('<div class="form-group-one clearfix">' + '<div class="clearfix">' + '<div class="col-md-6-form">' + '<div class="form-group">' + '<input name="form_1_entity' + InitTypeFiledNumber(this) + '[]" type="text" class="form-control " placeholder="Содержание обязательства (1)" >' + '</div>' + '<div class="form-group">' + ' <input name="form_1_creditor' + InitTypeFiledNumber(this) + '[]" type="text" class="form-control " placeholder="Кредитор (2)" >' + '</div>' + '<div class="form-group">' + '<input name="form_1_place_life' + InitTypeFiledNumber(this) + '[]" type="text" class="form-control "  placeholder="Место нахождения (место жительства) кредитора" >' + '</div>' + '<div class="form-group no-padding">' + '<input name="form_1_main_emite' + InitTypeFiledNumber(this) + '[]" type="text" class="form-control " placeholder="Основание возникновения (3)" >' + '</div>' + '</div>' + '<div class="col-md-6-form no-padding-right">' + '<div class="form-group">' + ' <input name="form_1_total_all' + InitTypeFiledNumber(this) + '[]" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field"  placeholder="Сумма обязательства (всего) (4)" >' + '</div>' + '<div class="form-group">' + '<input name="form_1_total_all_indebtedness' + InitTypeFiledNumber(this) + '[]" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field"  placeholder="Сумма обязательства (в том числе задолженность) (5)" >' + '</div>' + '<div class="form-group">' + '<input name="form_1_penaltie_fines' + InitTypeFiledNumber(this) + '[]" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field" placeholder="Штрафы, пени и иные санкции" >' + '</div>' + '</div>' + '</div>' + '<div class="delete-row " onclick="deleterowforms(this)">Удалить Строку</div>' + '</div> ');
    });
    jQuery('.add-form.second').click(function(e) {
      e.preventDefault();
      var $thisParent = jQuery(this).parent();
      var $dataSectionNumber = jQuery(this).parent().data('section');
      if ($dataSectionNumber == '3') {
        var $thirdfield = 'Сумма к зачету или возврату, всего';
        var $fourfield = 'Сумма к зачету или возврату, проценты (16)';
      } else {
        var $thirdfield = 'Недоимка';
        var $fourfield = 'Штрафы, пени и иные санкции';
      }
      jQuery($thisParent).append('<div class="form-group-one">' + '<div class="col-md-12-form">' + '<div class="form-group">' + '<input name="form_1_row2_name_tax' + InitTypeFiledNumber(this) + '[]" type="text" class="form-control " placeholder="Наименование налога, сбора или иного обязательного платежа" >' + '</div>' + '<div class="form-group">' + '<input name="form_1_row2_arrears' + InitTypeFiledNumber(this) + '[]" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field" placeholder="' + $thirdfield + '" >' + '</div>' + '<div class="form-group">' + '<input name="form_1_row2_penaltie_fines' + InitTypeFiledNumber(this) + '[]" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field"  placeholder="' + $fourfield + '" >' + '</div>' + '</div>' + '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' + '</div>');
    });
    jQuery('.add-form.first-form-9').click(function(e) {
      e.preventDefault();
      var $thisParent = jQuery(this).parent();
      jQuery($thisParent).append(' <div class="col-md-12-form">' + '<div class="form-group">' + '<input name="form_9_name_credit_bank_mfo[]" type="text" class="form-control " placeholder="Наименование кредитора: банка, МФО, физического лица и т.д.">' + '</div>' + '<div class="form-group">' + '<input name="form_9_balance_owed[]" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field" placeholder="Остаток долга, руб.">' + '</div>' + '<div class="form-group">' + '<input name="form_9_amount_overdue_debt[]" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field" placeholder="Размер просроченной задолженности, руб.">' + '</div>' + '<div class="form-group">' + '<input name="form_9_default_period[]" type="text" class="form-control " placeholder="Срок просрочки, мес">' + '</div>' + '<div class="form-group">' + '<input name="form_9_bank_try_collect[]" type="text" class="form-control " placeholder="Каким образом банк пытается взыскать задолженность: сам, коллекторы, суд, приставы">' + '</div>' + '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' + '</div>');
    });
    jQuery('.add-form.form-8').click(function(e) {
      e.preventDefault();
      var $thisParent = jQuery(this).parent();
      jQuery($thisParent).append('<div class="form-group">' + '<input name="form_8_aplication_name[]" type="text" class="form-control " placeholder="Название приложения">' + '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' + '</div>');
    });
    jQuery('.add-form.add-form-6').click(function(e) {
      e.preventDefault();
      var $thisParent = jQuery(this).parent();
      jQuery($thisParent).append('<div class="form-group">\n' + '   <input name="form_6_creditor[]" type="text" class="form-control " placeholder="Кредитор">\n' + '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' + '</div> ');
    });
    jQuery('.add-form.form-4-1').click(function(e) {
      e.preventDefault();
      var $thisParent = jQuery(this).parent();
      jQuery($thisParent).append('<div class="form-group-one clearfix">\n' + '                                <div class="form-group">\n' + '                                    <input name="form_4_name_creditor[]" type="text" class="form-control "\n' + '                                           placeholder="Наименование кредитора полностью">\n' + '                                </div>\n' + '                                <div class="form-group">\n' + '                                    <input name="form_4_location[]" type="text" class="form-control "\n' + '                                           placeholder="Место нахождения">\n' + '                                </div>\n' + '                                <div class="form-group">\n' + '                                    <input name="form_4_inn[]" type="text" class="form-control "\n' + '                                           placeholder="ИНН">\n' + '                                </div>\n' + '                                <div class="form-group">\n' + '                                    <input name="form_4_ogrn[]" type="text" class="form-control "\n' + '                                           placeholder="ОГРН">\n' + '                                </div>\n' + '                                <div class="form-group">\n' + '                                    <input name="form_4_phone[]" type="text" class="form-control "\n' + '                                           placeholder="Телефон">\n' + '                                </div>\n' + '                                <div class="form-group">\n' + '                                    <input name="form_4_fax[]" type="text" class="form-control "\n' + '                                           placeholder="Факс">\n' + '                                </div>\n' + '                                <div class="form-group">\n' + '                                    <input name="form_4_email[]" type="text" class="form-control "\n' + '                                           placeholder="E-mail">\n' + '                                </div>\n' + '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' + '                            </div>');
    });
    jQuery('.add-form.form-4-2').click(function(e) {
      e.preventDefault();
      var $thisParent = jQuery(this).parent();
      jQuery($thisParent).append('<div class="form-group">\n' + '<input name="form_4_name_app[]" type="text" class="form-control " placeholder="Название приложение">\n' + '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' + '</div> ');
    });
    jQuery('.add-form.form-3-1').click(function(e) {
      e.preventDefault();
      var $thisParent = jQuery(this).parent();
      jQuery($thisParent).append('<div class="form-group-one clearfix">\n' + '                                <div class="form-group">\n' + '                                    <input name="form_3_name_creditor[]" type="text" class="form-control "\n' + '                                           placeholder="Наименование кредитора полностью">\n' + '                                </div>\n' + '                                <div class="form-group">\n' + '                                    <input name="form_3_location[]" type="text" class="form-control "\n' + '                                           placeholder="Место нахождения">\n' + '                                </div>\n' + '                                <div class="form-group">\n' + '                                    <input name="form_3_inn[]" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field"\n' + '                                           placeholder="ИНН">\n' + '                                </div>\n' + '                                <div class="form-group">\n' + '                                    <input name="form_3_ogrn[]" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field"\n' + '                                           placeholder="ОГРН">\n' + '                                </div>\n' + '                                <div class="form-group">\n' + '                                    <input name="form_3_phone[]" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field"\n' + '                                           placeholder="Телефон">\n' + '                                </div>\n' + '                                <div class="form-group">\n' + '                                    <input name="form_3_fax[]" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field"\n' + '                                           placeholder="Факс">\n' + '                                </div>\n' + '                                <div class="form-group">\n' + '                                    <input name="form_3_email[]" type="text" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field"\n' + '                                           placeholder="E-mail">\n' + '                                </div>\n' + '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' + '                            </div>');
    });
    jQuery('.add-form.form-3-2').click(function(e) {
      e.preventDefault();
      var $thisParent = jQuery(this).parent();
      jQuery($thisParent).append(' <div class="form-group">\n' + '                                <p> Подсказка: Введите сюда ваши обязательства. Каждое новое обязательство - в новой\n' + '                                    строчке. Например, - "обязательство по оплате по кредитному договору № 0001 от 01\n' + '                                    февраля 2015 г., заключенному с кредитором (имя кредитора)"</p>\n' + '                                <input name="form_3_obyazatelstvo[]" type="text" class="form-control ">\n' + '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' + '                            </div>');
    });
    jQuery('.add-form.form-2-1').click(function(e) {
      e.preventDefault();
      var $thisParent = jQuery(this).parent();
      jQuery($thisParent).append('<div class="col-md-12-form">\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_kinds_name' + InitTypeProperty(this) + '[]" type="text" class="form-control "\n' + '                                       placeholder="Вид и наименование имущества">\n' + '                            </div>\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_kind' + InitTypeProperty(this) + '[]" type="text" class="form-control "\n' + '                                       placeholder="Вид собственности (1)">\n' + '                            </div>\n' + '<div class="form-group">' + '<input name="form_2_place' + InitTypeProperty(this) + '[]" type="text" class="form-control " placeholder="Местонахождение (адрес)">' + '</div>' + '                            <div class="form-group">\n' + '                                <input name="form_2_area' + InitTypeProperty(this) + '[]" type="text" class="form-control "\n' + '                                       placeholder="Площадь (кв.м)">\n' + '                            </div>\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_acquisition_price' + InitTypeProperty(this) + '[]" type="text" class="form-control "\n' + '                                       placeholder="Основание приобретения (2) и стоимость (3)">\n' + '                            </div>\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_info_zalog' + InitTypeProperty(this) + '[]" type="text" class="form-control "\n' + '                                       placeholder="Сведения о залоге и залогодержателе (4)">\n' + '                            </div>\n' + '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' + '                        </div>');
    });
    jQuery('.add-form.form-2-2').click(function(e) {
      e.preventDefault();
      var $thisParent = jQuery(this).parent();
      jQuery($thisParent).append('<div class="col-md-12-form">\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_kind_marks' + InitTypeAuto(this) + '[]" type="text" class="form-control "\n' + '                                       placeholder="Вид, марка, модель транспортного средства, год изготовления">\n' + '                            </div>\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_id_number' + InitTypeAuto(this) + '[]" type="text" class="form-control "\n' + '                                       placeholder="Идентификационный номер (6)">\n' + '                            </div>\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_kinds_property' + InitTypeAuto(this) + '[]" type="text" class="form-control "\n' + '                                       placeholder="Вид собственности (7)">\n' + '                            </div>\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_palce' + InitTypeAuto(this) + '[]" type="text" class="form-control "\n' + '                                       placeholder="Место нахождения/место хранения (адрес)">\n' + '                            </div>\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_price' + InitTypeAuto(this) + '[]" type="text" class="form-control "\n' + '                                       placeholder="Стоимость (8)">\n' + '                            </div>\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_info' + InitTypeAuto(this) + '[]" type="text" class="form-control "\n' + '                                       placeholder="Сведения о залоге и залогодержателе (9)">\n' + '                            </div> \n' + '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' + '                        </div>');
    });
    jQuery('.add-form.form-2-3').click(function(e) {
      e.preventDefault();
      var $thisParent = jQuery(this).parent();
      jQuery($thisParent).append('<div class="col-md-12-form">\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_name_adress_bank[]" type="text" class="form-control "\n' + '                                       placeholder="Наименование и адрес банка или иной кредитной организации">\n' + '                            </div>\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_kind_valute_chet[]" type="text" class="form-control "\n' + '                                       placeholder="Вид и валюта счета (10)">\n' + '                            </div>\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_date_open_chet[]" type="text" class="form-control "\n' + '                                       placeholder="Дата открытия счета">\n' + '                            </div>\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_balance_chet[]" type="text" class="form-control "\n' + '                                       placeholder="Остаток на счете (11)">\n' + '                            </div> ' + '                            <div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' + '                        </div>');
    });
    jQuery('.add-form.form-2-4').click(function(e) {
      e.preventDefault();
      var $thisParent = jQuery(this).parent();
      jQuery($thisParent).append('<div class="col-md-12-form">\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_4_1_name[]" type="text" class="form-control "\n' + '                                       placeholder="Наименование и организационно-правовая форма организации (12)">\n' + '                            </div>\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_4_2_place[]" type="text" class="form-control "\n' + '                                       placeholder="Местонахождение организации (адрес)">\n' + '                            </div>\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_4_3_kapital[]" type="text" class="form-control "\n' + '                                       placeholder="Уставный, складочный капитал, паевой фонд (13)">\n' + '                            </div>\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_4_4_part_use[]" type="text" class="form-control "\n' + '                                       placeholder="Доля участия (14)">\n' + '                            </div>\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_4_5_main_use[]" type="text" class="form-control "\n' + '                                       placeholder="Основание участия (15)">\n' + '                            </div> \n' + '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' + '                        </div>');
    });
    jQuery('.add-form.form-2-5').click(function(e) {
      e.preventDefault();
      var $thisParent = jQuery(this).parent();
      jQuery($thisParent).append(' <div class="col-md-12-form">\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_5_1_kind_paper[]" type="text" class="form-control "\n' + '                                       placeholder="Вид ценной бумаги (16)">\n' + '                            </div>\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_5_2_face_release[]" type="text" class="form-control "\n' + '                                       placeholder="Лицо, выпустившее ценную бумагу">\n' + '                            </div>\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_5_3_value_obyazatelstava[]" type="text" class="form-control "\n' + '                                       placeholder="Номинальная величина обязательства (руб.)">\n' + '                            </div>\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_5_4_total_count[]" type="text" class="form-control "\n' + '                                       placeholder="Общее количество">\n' + '                            </div>\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_5_5_total_price[]" type="text" class="form-control "\n' + '                                       placeholder="Общая стоимость (17)">\n' + '                            </div>\n' + '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' + '                        </div>');
    });
    jQuery('.add-form.form-2-6').click(function(e) {
      e.preventDefault();
      var $thisParent = jQuery(this).parent();
      jQuery($thisParent).append('  <div class="col-md-12-form">\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_6_1_kind_property' + InitTypeVI(this) + '[]" type="text" class="form-control "\n' + '                                       placeholder="Вид и наименование имущества">\n' + '                            </div>\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_6_2_price' + InitTypeVI(this) + '[]" type="text" class="form-control "\n' + '                                       placeholder="Стоимость (сумма и валюта) (18)">\n' + '                            </div>\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_6_3_plcae_have' + InitTypeVI(this) + '[]" type="text" class="form-control "\n' + '                                       placeholder="Место нахождения/место хранения (19)">\n' + '                            </div>\n' + '                            <div class="form-group">\n' + '                                <input name="form_2_6_4_total_info' + InitTypeVI(this) + '[]" type="text" class="form-control "\n' + '                                       placeholder="Сведения о залоге и залогодержателе (20)">\n' + '                            </div>\n' + '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>' + '                        </div>');
    });
  }
  jQuery('.сheckbox-with-input').change(function() {
    if (jQuery(this).is(":checked")) {
      jQuery(this).parent().addClass('showInput');
    } else {
      jQuery(this).parent().removeClass('showInput');
    }
  });
  jQuery('.spisanie-row .col-md-4').equalHeightResponsive();
  jQuery('.benefit-cols .benefit-block').equalHeightResponsive();
  jQuery('.blog-item').equalHeightResponsive();
  jQuery('.block-dont-self').equalHeightResponsive();
  jQuery('.instuction-table-block-walp').equalHeightResponsive();
  jQuery('.instuction-icon-block').equalHeightResponsive();
  jQuery('.live-idji-walp .live-idji-block').equalHeightResponsive();
  jQuery('.dont-wait-block-auto-height .dont-wait-block').equalHeightResponsive();
  var $getcookie = Cookies.get('user');
  if ($getcookie) {
    jQuery('.spec-help-block').slideUp();
  }
  if (jQuery('.registration-scroll').length > 0) {
    jQuery('html, body').animate({
      scrollTop: jQuery('.alert.registration-scroll').offset().top - 100
    }, 500);
  }
});

function accordionQAPage() {
  if (jQuery(window).width() < 800) {
    jQuery(".q-a-block-hover").click(function() {
      var $this = jQuery(this).parent();
      $this.toggleClass('showaccordion');
      return false;
    });
  } else {
    jQuery(".q-a-block-hover").click(function() {
      var $this = jQuery(this).parent();
      $this.css('height', 63);
      if ($this.hasClass('showaccordion')) {
        $this.removeClass('showaccordion');
      } else {
        var $thisblock = $this.find('.block-q-a-accordion').height();
        $this.css('height', $thisblock + 143);
        $this.addClass('showaccordion');
      }
      return false;
    });
  }
}

function InitServiceOOO() {
  jQuery(".block-acc-ooo").click(function() {
    if (jQuery(this).hasClass('show-acc')) {
      jQuery(this).removeClass('show-acc');
      jQuery(this).find('.content-accordion-ooo').css('height', 0);
      jQuery(this).find('.change-state-link-accordion-ooo').html('');
      jQuery(this).find('.change-state-link-accordion-ooo').html('Подробнее');
      jQuery(this).find('.arrow-down-accordion-ooo').removeClass(' close').addClass(' open');
    } else {
      jQuery(this).addClass('show-acc');
      var $thisheight = jQuery(this).find('.content-accordion-ooo-walp').height();
      jQuery(this).find('.content-accordion-ooo').css('height', $thisheight + 50);
      jQuery(this).find('.change-state-link-accordion-ooo').html('');
      jQuery(this).find('.change-state-link-accordion-ooo').html('Скрыть');
      jQuery(this).find('.arrow-down-accordion-ooo').removeClass(' open ').addClass('  close ');
    }
    return false;
  });
}

function InitChooseOld() {
  jQuery('.calc-pointer').click(function(e) {
    e.preventDefault();
    jQuery('.calc-pointer').removeClass('choose-old');
    jQuery(this).addClass('choose-old');
  });
}

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

function InitActionPriceTables() {
  jQuery('.view-plan-play-calc-page').click(function(e) {
    e.preventDefault();
    var $this = jQuery(this);
    $this.parent().parent().parent().find('.price-part').removeClass('active-price-choose');
    $this.parent().parent().parent().find('.price-payment-result').css('height', '0');
    $this.parent().parent().parent().find('.price-payment-result').html('');
    var parentClass = $this.parent().parent();
    parentClass.addClass('active-price-choose');
    if ($this.hasClass('showpayment')) {
      $this.html('');
      $this.html('Посмотреть платеж');
      $this.removeClass('showpayment');
      $this.parent().parent().removeClass('active-price-choose');
      $this.parent().parent().parent().find('.view-plan-play-calc-page').removeClass('showpayment');
      $this.parent().parent().parent().find('.view-plan-play-calc-page').html('');
      $this.parent().parent().parent().find('.view-plan-play-calc-page').html('Посмотреть платеж');
      $this.parent().find('.price-payment-result').css('height', '0');
      $this.parent().find('.price-payment-result').html('');
      return false;
    } else {
      $this.parent().parent().parent().find('.view-plan-play-calc-page').removeClass('showpayment');
      $this.parent().parent().parent().find('.view-plan-play-calc-page').html('');
      $this.parent().parent().parent().find('.view-plan-play-calc-page').html('Посмотреть платеж');
      $this.html('');
      $this.html('Скрыть платеж');
      $this.addClass(' showpayment ');
    }
    var $method = 'plain';
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
      if (parentClass.hasClass('first')) {
        $firstTwoPayment = parseInt(20000 + 15000);
        $firstMountPayment = parseInt(20000);
        $secondMountPayment = parseInt(15000);
        $mountPayment = parseInt($currentPrice) / 10;
        $textforTemplate = '';
      } else {
        $firstTwoPayment = parseInt(20000 + 25000);
        $firstMountPayment = parseInt(20000);
        $secondMountPayment = parseInt(25000);
        $mountPayment = parseInt($currentPrice) / 10;
        $textforTemplate = ' Депозит суда';
      }
    }
    var $priceWithOutFirstTwoMouth = parseInt($currentPrice) - $firstTwoPayment;
    var Subtotal = Math.floor($priceWithOutFirstTwoMouth / $mountPayment);
    $fiveMountPayment = parseInt($mountPayment * Subtotal);
    var $lastMountPayment = parseInt($priceWithOutFirstTwoMouth - $fiveMountPayment);
    if ($lastMountPayment >= 0) {
      lastPayment = true;
    } else {
      lastPayment = false;
    }
    if (lastPayment) {
      if ($firstTwoPayment == $currentPrice || ($currentPrice - $firstTwoPayment) < $mountPayment) {
        var template = '';
      } else {
        var template = '<li><p>3 месяц: <span>' + $mountPayment + '</span> руб.</p></li>';
      }
      var template2 = '';
      var temporarytemplate = '';
      var redytemplate;
      var maxvalue = Subtotal + parseInt(2);
      var lastmounth = maxvalue + 1;
      for (var i = 4; i <= maxvalue; i++) {
        temporarytemplate = '<li><p>' + i + ' месяц: <span>' + $mountPayment + '</span> руб.</p></li>';
        template2 = template2.concat(temporarytemplate);
      }
      redytemplate = template.concat(template2);
      if ($lastMountPayment > 0) {
        redytemplate = redytemplate.concat('<li><p>' + lastmounth + ' месяц: <span>' + $lastMountPayment + '</span> руб.</p></li>');
      }
      $this.parent().parent().find('.price-payment-result').html('<h3> Оплата</h3>' + '<ul class="tables-ten-mounth-payments clearfix">' + '<li>' + '<p>1 месяц Аванс: <span>' + $firstMountPayment + '</span> руб.</p>' + '</li>' + '<li>' + '<p>2 месяц' + $textforTemplate + ': <span>' + $secondMountPayment + '</span> руб.</p>' + '</li>' + redytemplate + '</ul>');
      var heighBlock = jQuery('.tables-ten-mounth-payments').height();
      $this.parent().parent().find('.price-payment-result').css('height', heighBlock + 36);
    } else {
      $this.parent().parent().find('.price-payment-result').html('Оплата суммы происходит в рассрочку по 10 000 то в месяц, подробности у специалиста');
      $this.parent().parent().find('.price-payment-result').css('height', 80);
    }
  });
}

function InitShowTooltip() {
  jQuery('.question-page-calc').click(function(e) {
    e.preventDefault();
    var $thisClass = jQuery(this).parent().parent().find('.tooltip.calc-page');
    if (!$thisClass.hasClass('show-tooltip')) {
      $thisClass.addClass('show-tooltip');
    } else {
      $thisClass.removeClass('show-tooltip');
    }
    jQuery('.tooltip.calc-page').click(function(e) {
      e.preventDefault();
      var $this = jQuery(this);
      $this.removeClass('show-tooltip');
    });
  });
}

function InitOpenContentReview() {
  jQuery('.review-link-readmore').click(function(e) {
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
      $thisClass.css('height', $thisClass.find('div').height());
    }
    $thisClass.toggleClass('show-content-review');
  })
}

function deleterowforms(elmnt) {
  jQuery(elmnt).parent().remove();
}

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

function InitSliderReview() {
  var arraycarousels = jQuery('.reviews-first-block-walp');
  arraycarousels.each(function() {
    jQuery(this).slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      infinite: false,
      autoplay: true,
      speed: 1000,
      arrows: false
    });
    jQuery('.reviews-first-block .slider-arrow-left').click(function(e) {
      e.preventDefault();
      jQuery(this).parent().parent().find('.reviews-first-block-walp').slick('slickPrev');
    })
    jQuery('.reviews-first-block .slider-arrow-right').click(function(e) {
      e.preventDefault();
      jQuery(this).parent().parent().find('.reviews-first-block-walp').slick('slickNext');
    })
  });
}

function InitCarouselClients() {
  jQuery('.slider-wallpaper-clients').slick({
    infinite: true,
    slidesToShow: 3,
    lazyLoad: 'progressive',
    slidesToScroll: 1,
    dots: false,
    autoplay: true,
    speed: 1000,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      }
    }, {
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
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }],
    prevArrow: jQuery('.slider-nav-clients .slider-arrow-left'),
    nextArrow: jQuery('.slider-nav-clients .slider-arrow-right')
  });
}

function InitUISlider() {
  jQuery("#slider-ui").slider({
    value: 0,
    min: 150000,
    max: 5000000,
    step: 1000,
    create: function(event, ui) {
      val = jQuery("#slider-ui").slider("value");
      jQuery("#valueidslider").html(val);
    },
    slide: function(event, ui) {
      jQuery("#valueidslider").html(ui.value);
      var $result = ui.value * 1.3 - 100000;
      if ($result > 0 && ui.value >= 150000) {
        jQuery(".result-calc span").html($result);
      } else {
        jQuery(".result-calc span").html('0');
      }
    }
  });
}

function InitUISliderPage() {
  var $this = jQuery(".slider-ui");
  $this.slider({
    value: 0,
    min: 150000,
    max: 5000000,
    step: 1000,
    create: function(event, ui) {
      val = jQuery($this).slider("value");
      console.log(val);
      $this.parent().find(".slider-result-input").val(val);
    },
    slide: function(event, ui) {
      $this.parent().find(".slider-result-input").val(ui.value);
    }
  });
}

function InitUISliderPageProperty() {
  var $this = jQuery(".slider-ui-property");
  $this.slider({
    value: 0,
    min: 0,
    max: 1500000,
    step: 1000,
    create: function(event, ui) {
      val = jQuery($this).slider("value");
      console.log(val);
      $this.parent().find(".slider-result-input-property").val(val);
    },
    slide: function(event, ui) {
      $this.parent().find(".slider-result-input-property").val(ui.value);
    }
  });
}

function ConfimPassword() {
  if (jQuery(".registration-page, .page-user-profile").length) {
    var password = document.getElementById("reg-pass"),
      confirm_password = document.getElementById("confim-reg-pass");

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

function fiveblocks() {
  if (jQuery(window).width() > 1200) {
    jQuery(".col-five-step-block").hover(function() {
      var $this = jQuery(this);
      var tooltipblock = $this.parent().find('.tooltip-five-step');
      tooltipblock.show();
      $this.mouseleave(function() {
        tooltipblock.hide();
      });
    });
  }
}

function MobileMenu() {
  jQuery('#mobile-bar').click(function(e) {
    e.preventDefault();
    jQuery('.navigation').toggleClass("menu-open");
    jQuery('#mobile-bar a').toggleClass(" is-active");
  });
  if (jQuery(window).width() < 1200) {
    jQuery('.navigation').find('li a.open-ul').click(function(e) {
      e.preventDefault();
      jQuery(this).next().stop().slideToggle();
      jQuery(this).toggleClass("accordion-open");
    }).next().stop().hide();
  }
}

function animationblocks() {
  var windowwidth = jQuery(window).width();
  if (windowwidth >= 899) {
    jQuery('.animation-block').each(function() {
      jQuery(this).appear(function() {
        var $this = jQuery(this);
        var animcalass = $this.data('animation');
        $this.addClass(' animated ' + animcalass);
      }, {
        accX: 0,
        accY: -50
      })
    });
  } else {
    jQuery('.animation-block').addClass(' animated ');
  }
}

function AddBlockTextInFormFields() {
  if (jQuery('.row-doc-form').length) {
    jQuery('input').live('input', function() {
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

function backToTop() {
  "use strict";
  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('#back_to_top').addClass('backactive');
    } else {
      jQuery('#back_to_top').removeClass('backactive');
    }
  });
  jQuery(document).on('click', '#back_to_top', function(e) {
    e.preventDefault();
    jQuery('body,html').animate({
      scrollTop: 0
    }, jQuery(window).scrollTop() / 3, 'linear');
  });
}

function initStoreUserParams() {
  "use strict";
  var namekey = ['utm_source', 'utm_campaign', 'utm_medium', 'utm_term', 'utm_content'];

  function parseGET(url) {
    if (!url || url == '') url = decodeURI(document.location.search);
    if (url.indexOf('?') < 0) return 'none';
    url = url.split('?');
    url = url[1];
    var GET = [],
      params = [],
      key = [];
    if (url.indexOf('#') != -1) {
      url = url.substr(0, url.indexOf('#'));
    }
    if (url.indexOf('&') > -1) {
      params = url.split('&');
    } else {
      params[0] = url;
    }
    for (var r = 0; r < params.length; r++) {
      for (var z = 0; z < namekey.length; z++) {
        if (params[r].indexOf(namekey[z] + '=') > -1) {
          if (params[r].indexOf('=') > -1) {
            key = params[r].split('=');
            GET[key[0]] = key[1];
          }
        }
      }
    }
    return (GET);
  }
  var $_GET = parseGET();
  var Objects = [];
  for (var z = 0; z < namekey.length; z++) {
    if (!!$_GET[namekey[z]]) {
      var namefield = namekey[z];
      var value = $_GET[namekey[z]];
      var objTest = {
        namefield: namefield,
        valuefield: value
      };
      Objects.push(objTest);
    }
  }
  console.log(Objects);
  Cookies.remove('utm');
  Cookies.set('utm', JSON.stringify(Objects));
}

function initUserVisitesPages() {
  "use strict";
  var path = window.location.pathname;
  var viespages = Cookies.get('views_pages');
  if (path == '/') {
    path = 'home';
  }
  if (viespages !== undefined) {
    var viewpath = viespages.concat(' ' + path);
  } else {
    var viewpath = ' ' + path;
  }
  Cookies.set('views_pages', viewpath);
}
document.addEventListener('wpcf7mailsent', function(event) {
  if (event.detail.contactFormId == "17") {
    yaCounter48236498.reachGoal('Stay_statement');
  } else if (event.detail.contactFormId == "15") {
    yaCounter48236498.reachGoal('Stay_statement_home');
  } else if (event.detail.contactFormId == "16") {
    yaCounter48236498.reachGoal('Statement_sale');
  }
  Cookies.remove('utm');
  Cookies.remove('views_pages');
}, false);
