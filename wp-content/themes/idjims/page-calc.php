<?php
/**
 *  Template Name: Calculate Page
 */

get_header(); ?>

<div class="wrap calculate-page-walp">
	<div class="container">
    <h1 class="title-section">Калькулятор банкротсва</h1>
    <form class="form-calculate clearfix" action="" method="post">
      <div class="clearfix">
        <div class="col-md-6">
          <div class="calculator-page">
          <!--  <div id="contentSlider">Общая сумма долга: <span id="valueidslider">1000</span> руб</div>-->
            <p>Сумма долга:<span class="red">*</span></p>
            <input type="number" class="slider-result-input" min="1" name="valuesumm" required>
            <div id="slider-ui" class="slider-ui"></div>

          </div>
        </div>
        <div class="col-md-6 no-padding-right">
          <div class="calculator-page">
            <p>Доход, руб. <span class="red">*</span></p>
            <input type="number" min="1" name="valueincome" class="calculate-valueincome" required>

          </div>
        </div>
        <div class="col-md-6">
          <div class="calculator-page">
            <p>Количество кредиторов<span class="red">*</span></p>
            <input type="number" min="1" name="valuecredits" class="calculate-valuecredits"  required>

          </div>
        </div>
        <div class="col-md-6  no-padding-right">
          <div class="calculator-page">
            <p>Ипотека</p>
            <div class="checkboxFour clearfix">

            <input type="checkbox"   id="checkboxFourInput" class="calculate-checkmortgage" name="checkmortgage" value="0">

            </div>

        </div>
        </div>

        <div class="col-md-6">
          <div class="calculator-page">
            <p>Наличие имущества кроме единственного жилья (движимое или недвижимое имущество)<span class="red">*</span></p>

              <div class="checkboxFour clearfix">

              <input type="checkbox"   id="checkboxFourInput" class="checkboxprop" name="checkproperty" value="0">

              </div>

              <div class="check-property">
                  <p>Введите ориентировочную стоимость имущества</p>
                  <input type="number"  min="1" class="calculate-valueproperty"  name="valueproperty">
              </div>
          </div>
        </div>



      </div>

      <input type="submit"  class="calculate-form-submit" value="Расcчитать">

  </form>


  <div id="result-calculate"></div>
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
