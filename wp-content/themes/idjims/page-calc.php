<?php
/**
 *  Template Name: Calculate Page
 */

get_header(); ?>

<div class="wrap calculate-page-walp">
	<div class="breadscrumb" >
		<div class="container">
			<h1 class="title-section service center-white">Рассчитайте банкротство по выгодному тарифу</h1>
		</div>
	</div>
	<div class="container">
    <form class="form-calculate clearfix" action="" method="post">
      <div class="clearfix">
				<div class="col-md-6 ">
          <div class="calculator-page">
						<div class="field"><label>Доход, руб. <span class="red">*</span></label>

	            <input type="number" min="1" name="valueincome" class="calculate-valueincome" required>

          	</div>
          </div>

					<div class="calculator-page pagec-calc-field-total-debt">
          <!--  <div id="contentSlider">Общая сумма долга: <span id="valueidslider">1000</span> руб</div>-->

							<div >
							<div class="pagec-calc-field-total-debt-fwalp">
							<p class="custom-filed-text">Сумма долга, руб. :<span class="red">*</span></p><input type="number" class="slider-result-input" min="1" name="valuesumm" value="1000" required>
							</div>
	            <div  class="slider-ui"></div>
          		</div>
          </div>

					<div class="calculator-page">
						<div class="field"><label>Количество кредиторов <span class="red">*</span></label>

							<input type="number" min="1" name="valuecredits" class="calculate-valuecredits"  required>

						</div>
					</div>

        </div>
        <div class="col-md-6 no-padding-right">
          <div class="calculator-page">
						<div class="field"><label>Единиц имущества</span></label>

	            <input type="number" min="1" name="valuecollateral" class="calculate-valueincome"  value=""  required>

          	</div>
          </div>
					<div class="calculator-page pagec-calc-field-total-debt">
					<!--  <div id="contentSlider">Общая сумма долга: <span id="valueidslider">1000</span> руб</div>-->

							<div class="relative">
								<div class="table-page-calc">
									<div class="pagec-calc-field-total-debt-fwalp property">
									<p class="custom-filed-text">Стоимость имущества, руб.</p><input type="number"  class="calculate-valueproperty slider-result-input-property" min="1" name="valueproperty" value="1000" required>
									</div>
									<div class="question-page-calc">?


									</div>

								</div>
							<div  class="slider-ui slider-ui-property"></div>
							<span class="tooltip calc-page">
								Указывается примерная рыночная стоимость имущества, которое будет реализовано в процедуре банкротства:</br>
							• Недвижимость, за исключением единственного жилья (при условии, что оно не ипотечное);</br>
							• Автотранспорт;</br>
							• Бытовая электроника за исключением жизненно необходимой (например холодильник);</br>
							• Доли в ООО, акции в организациях;</br>
							• И иное имущество, на которое согласно статье 446 ГПК РФ может быть обращено взыскание.
							</span>
							</div>

					</div>


					<div class="calculator-page">
						<p class="class-ipoteka-text">Ипотека</p>
						<div class="check-box-ipoteka"  >
						<div class="checkboxFour clearfix">

						<input type="checkbox" id="checkboxFourInput" class="calculate-checkmortgage" name="checkmortgage" value="0">

						</div>
						</div>

					</div>
        </div>




      </div>
			<p class="red align-center">Поля отмеченные «*» обязательные</p>
      <input type="submit"  class="calculate-form-submit" value="Расcчитать">

  </form>


  <div id="result-calculate" class="clearfix overflow-hidden">
				<h3 class="choose-plan-title">Выберите план</h3>
		<ul class="table-prices clearfix">
				<li class="price-part first">
					<div class="price-overlay"></div>
					<div class="price-content">
							<div class="top-price-content">
						  <img  src="<?php  echo get_theme_file_uri( '/assets/images/cup-half.png' ) ?>">
							<h3>Пакет</br> Эконом</h3>
								<span>ОПТИМАЛЬНЫЙ</span>
							</div>
							<ul class="table-price">
								<li><img  src="<?php  echo get_theme_file_uri( '/assets/images/price-check.png' ) ?>"><p>Заключим договор и оформим нотариальную доверенность</p></li>
								<li><img  src="<?php  echo get_theme_file_uri( '/assets/images/price-check.png' ) ?>"><p>Предоставим независимого финансового управляющего</p></li>
								<li><img  src="<?php  echo get_theme_file_uri( '/assets/images/price-check.png' ) ?>"><p>Соберем все необходимые документы, составим и направим запросы в ведомства</p></li>
								<li><img  src="<?php  echo get_theme_file_uri( '/assets/images/price-check.png' ) ?>"><p>Проконтролируем процесс подачи заявления в арбитражный суд</p></li>
								<li><img  src="<?php  echo get_theme_file_uri( '/assets/images/price-check.png' ) ?>"><p>Возьмем на себя все рутинные дела по банкротству</p></li>

							</ul>



								<div class="total-price">Итог: <span>0</span>  руб.

							</div>
							<div class="price-payment-result clearfix"> </div>
					</div>


				</li>

				<li class="price-part second">
							<div class="price-overlay"></div>
							<div class="price-content">
								<div class="top-price-content">
							  <img  src="<?php  echo get_theme_file_uri( '/assets/images/cup-third.png' ) ?>">
								<h3>Пакет</br> Стандарт</h3>
								</div>
								<ul class="table-price">
									<li><img  src="<?php  echo get_theme_file_uri( '/assets/images/price-check.png' ) ?>"><p>Заключим договор и оформим нотариальную доверенность</p></li>
									<li><img  src="<?php  echo get_theme_file_uri( '/assets/images/price-check.png' ) ?>"><p>Предоставим независимого финансового управляющего</p></li>
									<li><img  src="<?php  echo get_theme_file_uri( '/assets/images/price-check.png' ) ?>"><p>Соберем все необходимые документы, составим и направим запросы в ведомства</p></li>
									<li><img  src="<?php  echo get_theme_file_uri( '/assets/images/price-check.png' ) ?>"><p>Проконтролируем процесс подачи заявления в арбитражный суд</p></li>
									<li><img  src="<?php  echo get_theme_file_uri( '/assets/images/price-check.png' ) ?>"><p>Возьмем на себя все рутинные дела по банкротству</p></li>
									<li><img  src="<?php  echo get_theme_file_uri( '/assets/images/price-check-red.png' ) ?>"><p>Оплатим судебные издержки</p></li>

								</ul>

									<div class="total-price">Итог: <span>0</span>  руб.

								</div>
								<div class="price-payment-result clearfix">

								</div>
							</div>
				</li>

				<li class="price-part third no-margin-right">
					<div class="price-overlay"></div>
					<div class="price-content">
							<div class="top-price-content clearfix">
						  <img  src="<?php  echo get_theme_file_uri( '/assets/images/cup-full.png' ) ?>">
							<h3>Пакет</br> VIP</h3>
							</div>
							<ul class="table-price">
								<li><img  src="<?php  echo get_theme_file_uri( '/assets/images/price-check.png' ) ?>"><p>Заключим договор и оформим нотариальную доверенность</p></li>
								<li><img  src="<?php  echo get_theme_file_uri( '/assets/images/price-check.png' ) ?>"><p>Предоставим независимого финансового управляющего</p></li>
								<li><img  src="<?php  echo get_theme_file_uri( '/assets/images/price-check.png' ) ?>"><p>Соберем все необходимые документы, составим и направим запросы в ведомства</p></li>
								<li><img  src="<?php  echo get_theme_file_uri( '/assets/images/price-check.png' ) ?>"><p>Проконтролируем процесс подачи заявления в арбитражный суд</p></li>
								<li><img  src="<?php  echo get_theme_file_uri( '/assets/images/price-check.png' ) ?>"><p>Возьмем на себя все рутинные дела по банкротству</p></li>
								<li><img  src="<?php  echo get_theme_file_uri( '/assets/images/price-check.png' ) ?>"><p>Оплатим судебные издержки</p></li>
								<li><img  src="<?php  echo get_theme_file_uri( '/assets/images/price-check-red.png' ) ?>"><p>Гарантия возврата денег</p></li>
								<li><img  src="<?php  echo get_theme_file_uri( '/assets/images/price-check-red.png' ) ?>"><p>Общаемся с коллекторами за Вас</p></li>

							</ul>

							<div class="total-price">Итог: <span>0</span> руб.


							</div>
							<div class="price-payment-result clearfix"> </div>
					</div>
				</li>

		</ul>


	</div>
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
