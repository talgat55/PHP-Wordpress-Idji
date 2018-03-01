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
				<div class="col-md-12 clearfix custom-cal-marg-bottom ">
					<div class="col-lg-2-calc clearfix">
						<div class="calculator-page check-box-choose-face clearfix">
								<div class="overlay-img-calc">
								<img  src="<?php  echo get_theme_file_uri( '/assets/images/price-fl-2.png' ) ?>">
								</div>
								<h3>Физическое лицо </h3>
								<div class="checkboxFour-walp choose-checkbox cleafix">
									<div class="checkboxFour cleafix">
										<input type="checkbox"   id="checkboxFourInput" name="fake" value="0">

									</div>
								</div>
						</div>

					</div>
					<div class="col-lg-6-calc clearfix">
						<div class="calculator-page check-box-choose-face clearfix">
								<div class="overlay-img-calc">
								<img  src="<?php  echo get_theme_file_uri( '/assets/images/price-ip-2.png' ) ?>">
								</div>
								<h3>Индивидуальный предприниматель</h3>
								<div class="checkboxFour-walp cleafix">
									<div class="checkboxFour cleafix">
										<input type="checkbox"  id="checkboxFourInput" name="fake" value="0">

									</div>
								</div>
						</div>

					</div>
					<div class="col-lg-2-calc clearfix">
						<div class="calculator-page check-box-choose-face clearfix">
								<div class="overlay-img-calc">
								<img  src="<?php  echo get_theme_file_uri( '/assets/images/price-i-2.png' ) ?>">
								</div>
								<h3>Ипотечник</h3>
								<div class="checkboxFour-walp cleafix">
									<div class="checkboxFour cleafix">

										<input type="checkbox" id="checkboxFourInput" class="calculate-checkmortgage" name="checkmortgage" value="0">

									</div>
								</div>
						</div>

					</div>
					<div class="col-lg-2-calc clearfix">
						<div class="calculator-page check-box-choose-face clearfix">
								<div class="overlay-img-calc">
								<img  src="<?php  echo get_theme_file_uri( '/assets/images/price-p-2.png' ) ?>">
								</div>
								<h3>Поручитель</h3>
								<div class="checkboxFour-walp cleafix">
									<div class="checkboxFour cleafix">
										<input type="checkbox"  id="checkboxFourInput" name="fake" value="0">

									</div>
								</div>
						</div>

					</div>

				</div>
				<div class="col-md-6 ">
					<div class="calculator-page">
						<div class="field">
							<select class="select-box" name="registrationRegion" >
							            	                		<option value="default" selected="selected">Выберите регион</option>
							            	                		<option value="Москва"  >Москва</option>
							                                	<option value="Санкт-Петербург">Санкт-Петербург</option>
							                                	<option value="Адыгея Республика">Адыгея Республика</option>
							                                	<option value="Алтай Республика">Алтай Республика</option>
							                                	<option value="Алтайский край">Алтайский край</option>
							                                	<option value="Амурская область">Амурская область</option>
							                                	<option value="Архангельская область">Архангельская область</option>
							                                	<option value="Астраханская область">Астраханская область</option>
							                                	<option value="Башкортостан Республика">Башкортостан Республика</option>
							                                	<option value="Белгородская область">Белгородская область</option>
							                                	<option value="Брянская область">Брянская область</option>
							                                	<option value="Бурятия Республика">Бурятия Республика</option>
							                                	<option value="Владимирская область">Владимирская область</option>
							                                	<option value="Волгоградская область">Волгоградская область</option>
							                                	<option value="Вологодская область">Вологодская область</option>
							                                	<option value="Воронежская область">Воронежская область</option>
							                                	<option value="Дагестан Республика">Дагестан Республика</option>
							                                	<option value="Еврейская автономная область">Еврейская автономная область</option>
							                                	<option value="Забайкальский край">Забайкальский край</option>
							                                	<option value="Ивановская область">Ивановская область</option>
							                                	<option value="Ингушетия Республика">Ингушетия Республика</option>
							                                	<option value="Иркутская область">Иркутская область</option>
							                                	<option value="Кабардино-Балкарская Республика">Кабардино-Балкарская Республика</option>
							                                	<option value="Калининградская область">Калининградская область</option>
							                                	<option value="Калмыкия Республика">Калмыкия Республика</option>
							                                	<option value="Калужская область">Калужская область</option>
							                                	<option value="Камчатский край">Камчатский край</option>
							                                	<option value="Карачаево-Черкесская Республика">Карачаево-Черкесская Республика</option>
							                                	<option value="Карелия Республика">Карелия Республика</option>
							                                	<option value="Кемеровская область">Кемеровская область</option>
							                                	<option value="Кировская область">Кировская область</option>
							                                	<option value="Коми Республика">Коми Республика</option>
							                                	<option value="Костромская область">Костромская область</option>
							                                	<option value="Краснодарский край">Краснодарский край</option>
							                                	<option value="Красноярский край">Красноярский край</option>
							                                	<option value="Крым Республика">Крым Республика</option>
							                                	<option value="Курганская область">Курганская область</option>
							                                	<option value="Курская область">Курская область</option>
							                                	<option value="Ленинградская область">Ленинградская область</option>
							                                	<option value="Липецкая область">Липецкая область</option>
							                                	<option value="Магаданская область">Магаданская область</option>
							                                	<option value="Марий Эл Республика">Марий Эл Республика</option>
							                                	<option value="Мордовия Республика">Мордовия Республика</option>
							                                	<option value="Московская область">Московская область</option>
							                                	<option value="Мурманская область">Мурманская область</option>
							                                	<option value="Ненецкий автономный округ">Ненецкий автономный округ</option>
							                                	<option value="Нижегородская область">Нижегородская область</option>
							                                	<option value="Новгородская область">Новгородская область</option>
							                                	<option value="Новосибирская область">Новосибирская область</option>
							                                	<option value="Омская область">Омская область</option>
							                                	<option value="Оренбургская область">Оренбургская область</option>
							                                	<option value="Орловская область">Орловская область</option>
							                                	<option value="Пензенская область">Пензенская область</option>
							                                	<option value="Пермский край">Пермский край</option>
							                                	<option value="Приморский край">Приморский край</option>
							                                	<option value="Псковская область">Псковская область</option>
							                                	<option value="Ростовская область">Ростовская область</option>
							                                	<option value="Рязанская область">Рязанская область</option>
							                                	<option value="Самарская область">Самарская область</option>
							                                	<option value="Саратовская область">Саратовская область</option>
							                                	<option value="Саха (Якутия) Республика">Саха (Якутия) Республика</option>
							                                	<option value="Сахалинская область">Сахалинская область</option>
							                                	<option value="Свердловская область">Свердловская область</option>
							                                	<option value="Севастополь">Севастополь</option>
							                                	<option value="Северная Осетия-Алания Республика">Северная Осетия-Алания Республика</option>
							                                	<option value="Смоленская область">Смоленская область</option>
							                                	<option value="Ставропольский край">Ставропольский край</option>
							                                	<option value="Тамбовская область">Тамбовская область</option>
							                                	<option value="Татарстан Республика">Татарстан Республика</option>
							                                	<option value="Тверская область">Тверская область</option>
							                                	<option value="Томская область">Томская область</option>
							                                	<option value="Тульская область">Тульская область</option>
							                                	<option value="Тыва Республика">Тыва Республика</option>
							                                	<option value="Тюменская область">Тюменская область</option>
							                                	<option value="Удмуртская Республика">Удмуртская Республика</option>
							                                	<option value="Ульяновская область">Ульяновская область</option>
							                                	<option value="Хабаровский край">Хабаровский край</option>
							                                	<option value="Хакасия Республика">Хакасия Республика</option>
							                                	<option value="Ханты-Мансийский автономный округ Югра">Ханты-Мансийский автономный округ Югра</option>
							                                	<option value="Челябинская область">Челябинская область</option>
							                                	<option value="Чеченская Республика">Чеченская Республика</option>
							                                	<option value="Чувашская Республика">Чувашская Республика</option>
							                                	<option value="Чукотский автономный округ">Чукотский автономный округ</option>
							                                	<option value="Ямало-Ненецкий автономный округ">Ямало-Ненецкий автономный округ</option>
							                                	<option value="Ярославская область">Ярославская область</option>
							                                <!--<option  value="Республика Мордовия">Республика Мордовия</option>
							                <option  value="Московская область">Московская область</option>
							                <option  value="Нижегородская область">Нижегородская область</option>-->
							            </select>
						</div>
					</div>
					<div class="calculator-page pagec-calc-field-total-debt">
          <!--  <div id="contentSlider">Общая сумма долга: <span id="valueidslider">1000</span> руб</div>-->

							<div  class="field">
								<div class="pagec-calc-field-total-debt-fwalp">

									<p class="custom-filed-text">Сумма долга, руб. :<span class="red">*</span></p><input type="number" class="slider-result-input" min="1" name="valuesumm" value="1000" required>
								</div>
	            	<div  class="slider-ui"></div>
          		</div>
          </div>


				</div>
				<div class="col-md-6 no-padding-right">
					<div class="calculator-page">
						<div class="field"><label>Единиц залогового имущества</span></label>

							<input type="number" min="1" name="valuecollateral" class="calculate-valueincome"  value="" >

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

        </div>
        <div class="col-md-6  custom-cal-marg">
					<div class="calculator-page">
						<div class="field"><label>Количество кредиторов <span class="red">*</span></label>

							<input type="number" min="1" name="valuecredits" class="calculate-valuecredits"  required>

						</div>
					</div>

					<div class="calculator-page">
						<div class="field"><label>Доход, руб. <span class="red">*</span></label>

	            <input type="number" min="1" name="valueincome" class="calculate-valueincome" required>

          	</div>
          </div>

					<div class="calculator-page">
						<div class="field"><label>Кол-во иждивенцев</span></label>

							<input type="number" min="1" name="fake-izdiv" class="calculate-valueincome">

						</div>
					</div>

					<div class="calculator-page">
						<div class="field"><label>Выплаты по алиментам, %</span></label>

							<input type="number" min="1" name="fake-izdiv" class="calculate-aliments" >

						</div>
					</div>
        </div>
				<div class="col-md-6 no-padding-right  custom-cal-marg">
					<div class="calculator-page">
						<div class="field"><label>из них кредиторов, не являющихся банками и МФО</span></label>

							<input type="number" min="1" name="fake-izdiv" class="calculate-fake" >

						</div>
					</div>
					<div class="calculator-page">
						<div class="field">
								<div class="custom-old-calc">
									<div class="calc-pointer choose-old">
										<img  src="<?php  echo get_theme_file_uri( '/assets/images/teen-2.png' ) ?>">
										<h4>Трудоспособный</h4>
									</div>
									<div class="text-calc">
										<h3>Возраст</h3>

									</div>
									<div  class="calc-pointer">
										<img  src="<?php  echo get_theme_file_uri( '/assets/images/grand-2.png' ) ?>">
										<h4>Пенсионер</h4>
									</div>

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



								<div class="total-price">Итог: <span>0</span>  руб. </div>
								<a href="#" class="view-plan-play-calc-page">Посмотреть платеж</a>

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

									<div class="total-price">Итог: <span>0</span>  руб. </div>
									<a href="#" class="view-plan-play-calc-page">Посмотреть платеж</a>
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

							<div class="total-price">Итог: <span>0</span> руб. </div>
							<a href="#" class="view-plan-play-calc-page">Посмотреть платеж</a>
							<div class="price-payment-result clearfix"> </div>
					</div>
				</li>

		</ul>


	</div>
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
