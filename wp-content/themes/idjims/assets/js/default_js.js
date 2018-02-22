// ---------------------------------------------------------
// !!!!!!!!!!!!!!!!!document ready!!!!!!!!!!!!!!!!!!!!!!!!!!
// ---------------------------------------------------------


jQuery(document).ready(function(){
	"use strict";
InitSlider();
InitUISlider();
InitCarouselClients();
InitUISliderPage();

  jQuery(".tabs").lightTabs();
	jQuery('.telephone').inputmask({"mask": "+7 (999) 999-9999"});


if(jQuery(window).width() > 1200){


		jQuery( ".block-five-step-arrow a"  ).hover(function() {

				var $this = jQuery(this);
				var tooltipblock = $this.parent().parent().find('.tooltip-five-step');
				tooltipblock.show();


				tooltipblock.mouseleave(function() {

						tooltipblock.hide();

				});

		} );
}



/*
* hide label in form
*/

jQuery( "form input"  ).click(function(){
			jQuery(this).parent().parent().find('label').hide();
			var $this = jQuery(this);
			$this.mouseleave(function() {
				var $thisvalue = $this.val();

				if(!$thisvalue.length){
					$this.parent().parent().find('label').show();
				}

			});
});
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

jQuery( "form label"  ).click(function(){
			var $this = jQuery(this);
			var $thisParent = jQuery(this).parent();
			$this.hide();

			$this.parent().find('input').focus();
			$thisParent.mouseleave(function() {
				var $thisvalue = $thisParent.find('input').val();

				if(!$thisvalue.length){
					$this.show();
				}

			});
});
/*
* Modal Form
*/

jQuery( ".overlay-layer, .close-modal-block" ).click(function(){
	jQuery('.overlay-layer').removeClass('overlay-display');
	jQuery('.modal-form').removeClass(' overlay-display ');

			return false;
});

jQuery( ".btn-link-modal, .btn-link-to-modal" ).click(function(){

	jQuery('.overlay-layer').addClass('overlay-display');
	jQuery('.modal-form').addClass(' overlay-display ');

			return false;
});

/*
* Show Block In Page Calculate
*/

jQuery( ".checkboxprop" ).click(function(){

		jQuery(this).parent().parent().find('.check-property').toggleClass('show-block');
		//alert(jQuery(this).val());

});
/*
* Calculate form in Calculate Page
*/
jQuery('.form-calculate input[type=checkbox]').change(function() {
	 	if(jQuery(this).val() == 0){
				jQuery(this).val(1);
		}else{
				jQuery(this).val(0);
		}
});
jQuery( ".form-calculate" ).submit(function(e) {

	e.preventDefault();
	jQuery('#result-calculate').html('');
	var valuesumm =  jQuery( ".slider-result-input" ).val();
	var valueincome =  jQuery( ".calculate-valueincome" ).val();
	var valuecredits = jQuery( ".calculate-valuecredits" ).val();
	var checkmortgage = jQuery( ".calculate-checkmortgage" ).val();
	var valueproperty = jQuery( ".calculate-valueproperty" ).val();
	var checkproperty = jQuery( ".checkboxprop" ).val();


	var check_before_result = (parseInt(valuesumm) - parseInt(valueproperty) ) / (parseInt(valueincome) - 9500);
//console.log('Долг:  '+ valuesumm,'Доход: '+valueincome,'Количекство кредитов: '+ valuecredits,'Ипотека: '+checkmortgage,'Имущество: '+valueproperty,check_before_result);
	if(check_before_result >= 36){

		jQuery('#result-calculate').html('Процедура реструктуризации невозможна.');

	}else{
		var $addCreditPrice, addText, $addproperty;
			if(valuecredits > 5){
				 $addCreditPrice = Number(parseInt(valuecredits) * 2000);
			}else{
				$addCreditPrice = 0;
			}

			if(checkmortgage == 1){
				addText = 'Для ипотечных клиентов у нас действуют скидки';
				$addproperty = 0;
			}else{
				if(checkproperty == 1){

							$addproperty = Number(parseInt(valueproperty) + 10000);
				}else{
						$addproperty = 0;
				}
				addText = '';
			}



			var $resultprice = Number(100000 + $addCreditPrice + $addproperty);

		jQuery('#result-calculate').html('Cуд может утвердить план реструктуризации, нужна консультация специалиста, подробнее можно прочесть в соответствующем разделе сайта </br> <div>Цена наших услуг:'+ $resultprice+' руб.</div></br><p>'+ addText+'</p>');


	}


});
/*
* Mobile Menu
*/

jQuery('#mobile-bar').click(function(){
		jQuery('.navigation').toggleClass("menu-open");
		jQuery('#mobile-bar a').toggleClass(" is-active");

		return false;
});

/**
* Accordion menu for mobile
*/
if(jQuery(window).width() < 1200){


	jQuery('.navigation').find('li a').click(function(){
			 jQuery(this).next().stop().slideToggle();
			 jQuery(this).toggleClass("accordion-open");
		 }).next().stop().hide();
}




/*
* Accordion
**/

if(jQuery('.accordion').length){
	jQuery('.accordion').find('a').click(function(e){
		 e.preventDefault();
			 jQuery(this).next().stop().slideToggle();
		 }).next().stop().hide();

}


/*
* Add row form 1 row form
*/

if(jQuery('.add-first-form, .add-second-form').length){

	jQuery('.add-first-form').click(function(e){
		 e.preventDefault();



			 jQuery('.form-group-one-walp.one-section').append( '<div class="form-group-one">'+
				'<div class="form-group">'+
						 '<input name="form_1_entity[]" type="text" class="form-control " placeholder="Содержание обязательства (1)" >'+
				 '</div>'+
				 '<div class="form-group">'+
						 '<input name="form_1_creditor[]" type="text" class="form-control " placeholder="Кредитор (2)" >'+
				 '</div>'+
				 '<div class="form-group">'+
						 '<input name="form_1_place_life[]" type="text" class="form-control "  placeholder="Место нахождения (место жительства) кредитора" >'+
				 '</div>'+
				 '<div class="form-group">'+
						 '<input name="form_1_main_emite[]" type="text" class="form-control " placeholder="Основание возникновения (3)" >'+
				 '</div>'+
				 '<div class="form-group">'+
						 '<input name="form_1_total_all[]" type="number" class="form-control "  placeholder="Сумма обязательства (всего) (4)" >'+
				 '</div>'+
				 '<div class="form-group">'+
						 '<input name="form_1_total_all_indebtedness[]" type="number" class="form-control "  placeholder="Сумма обязательства (в том числе задолженность) (5)" >'+
				' </div>'+
				 '<div class="form-group">'+
						 '<input name="form_1_penaltie_fines[]" type="number" class="form-control "  placeholder="Штрафы, пени и иные санкции" >'+
				 '</div>'+
			 '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>'+
			 '</div>');


		 });

	jQuery('.add-second-form').click(function(e){
		 e.preventDefault();



			 jQuery('.form-group-one-walp.two-section').append( '<div class="form-group-one">'+
			 '<div class="form-group">'+
			 		'<input name="form_1_row2_name_tax[]" type="text" class="form-control " placeholder="Наименование налога, сбора или иного обязательного платежа" >'+
			'</div>'+
			 '<div class="form-group">'+
			 		'<input name="form_1_row2_arrears[]" type="number" class="form-control " placeholder="Недоимка" >'+
			 '</div>'+
			 '<div class="form-group">'+
			 		'<input name="form_1_row2_penaltie_fines[]" type="number" class="form-control "  placeholder="Штрафы, пени и иные санкции" >'+
			 '</div>'+
			 '<div class="delete-row" onclick="deleterowforms(this)">Удалить Строку</div>'+
			 '</div>');


		 });



}

// end redy function
});

/*
* Deleete row
*/
function deleterowforms(elmnt){

		 jQuery(elmnt).parent().remove();
}
//---------
// Slider
//--------

function InitSlider(){

jQuery('.slider-wallpaper').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
	dots: true,
  autoplay: true,
  speed:1000,
  prevArrow: jQuery('.slider-nav .slider-arrow-left'),
  nextArrow: jQuery('.slider-nav .slider-arrow-right')

});

}


//---------
// Carousel Clients
//--------

function InitCarouselClients(){

jQuery('.slider-wallpaper-clients').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
	dots: false,
  //autoplay: true,
  speed:1000,
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
	},    {
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
function InitUISlider(){

jQuery( "#slider-ui" ).slider({
 value : 0,//Значение, которое будет выставлено слайдеру при загрузке
 min : 1000,//Минимально возможное значение на ползунке
 max : 1500000,//Максимально возможное значение на ползунке
 step : 1000,//Шаг, с которым будет двигаться ползунок
 create: function( event, ui ) {
	 val = jQuery( "#slider-ui" ).slider("value");//При создании слайдера, получаем его значение в перемен. val
	 jQuery( "#valueidslider" ).html( val );//Заполняем этим значением элемент с id contentSlider
 },
		 slide: function( event, ui ) {
 		 			jQuery( "#valueidslider" ).html( ui.value );//При изменении значения ползунка заполняем элемент с id contentSlider
					var $result = ui.value*1.3-100000;

					if($result > 0){
						jQuery( ".result-calc span" ).html( $result );//При изменении значения ползунка заполняем элемент с id contentSlider
					}else{
						jQuery( ".result-calc span" ).html( '0' );
					}
		 }
 });
}

/*
* Calculate In Page Calculate
*/
function InitUISliderPage(){

jQuery( ".slider-ui" ).slider({
 value : 0,//Значение, которое будет выставлено слайдеру при загрузке
 min : 1000,//Минимально возможное значение на ползунке
 max : 1500000,//Максимально возможное значение на ползунке
 step : 1000,//Шаг, с которым будет двигаться ползунок
 create: function( event, ui ) {
	 val = jQuery( ".slider-ui" ).slider("value");//При создании слайдера, получаем его значение в перемен. val
	console.log(val);
	 jQuery( ".slider-result-input" ).val( val );//Заполняем этим значением элемент с id contentSlider
 },
		 slide: function( event, ui ) {
 		 			jQuery( ".slider-result-input" ).val( ui.value );//При изменении значения ползунка заполняем элемент с id contentSlider

		 }
 });
}
