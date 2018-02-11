// ---------------------------------------------------------
// !!!!!!!!!!!!!!!!!document ready!!!!!!!!!!!!!!!!!!!!!!!!!!
// ---------------------------------------------------------

jQuery(document).ready(function(){
	"use strict";
InitSlider();
InitUISlider();

/*
* hide label in form
*/
jQuery( "form input" ).click(function(){
			jQuery(this).parent().parent().find('label').hide();


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
/*
* Calculate
*/
function InitUISlider(){

jQuery( "#slider-ui" ).slider({
 value : 0,//Значение, которое будет выставлено слайдеру при загрузке
 min : -150,//Минимально возможное значение на ползунке
 max : 150,//Максимально возможное значение на ползунке
 step : 1,//Шаг, с которым будет двигаться ползунок
 create: function( event, ui ) {
	 val = jQuery( "#slider-ui" ).slider("value");//При создании слайдера, получаем его значение в перемен. val
	 jQuery( "#valueidslider" ).html( val );//Заполняем этим значением элемент с id contentSlider
 },
		 slide: function( event, ui ) {
 jQuery( "#valueidslider" ).html( ui.value );//При изменении значения ползунка заполняем элемент с id contentSlider

		 }
 });
}
