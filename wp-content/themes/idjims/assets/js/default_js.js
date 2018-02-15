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


// end redy function
});

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
