<?php
/**
 *  Template Name: User Page
 */

get_header(); ?>

<div class="wrap">
	<div class="breadscrumb blue" >
		<div class="container">
			<div class="col-lg-6">
				<a href="#" class="user-page-link-breadscrumb">
						Ваш профиль
				</a>
			</div>
			<div class="col-lg-6 no-padding">
				<a href="#" class="user-page-link-breadscrumb current">
					Оформление документов
				</a>
			</div>

		</div>
	</div>
	<div class="container page-custom-margin">


			<div class="block-user-page-first">
				<h1  >Вы можете бесплатно сформировать,</br> в режиме онлайн документы:</h1>
				<p>Процесс банкротства физических лиц:</p>
			</div>
			<div class="clearfix">
				<div class="col-md-7-doc block-user-page-second">
					<h3>Собираем документы на банкротство:</h3>
						<ul class="list-docs-user-page">
							<li>
								<a href="#">  <img src="<?php  echo get_theme_file_uri( '/assets/images/doc-icon-2.png' ) ?>">
									<p>
										Перечень документов необходимых для банкротства
									</p>
								</a>
							</li>
							<li>
								<a href="#">  <img src="<?php  echo get_theme_file_uri( '/assets/images/doc-icon-2.png' ) ?>">
									<p>
										Запрос в банк о предоставлении сведений по счетам и вкладам
									</p>
								</a>
							</li>
							<li>
								<a href="#">  <img src="<?php  echo get_theme_file_uri( '/assets/images/doc-icon-2.png' ) ?>">
									<p>
										Заявление о предоставлении сведений о задолженности
									</p>
								</a>
							</li>


						</ul>

				</div>
				<div class="col-md-5-doc block-user-page-second no-padding">
					<h3>Подаем в суд заявление о признании банкротом:</h3>
						<ul class="list-docs-user-page">
							<li>
								<a href="#">  <img src="<?php  echo get_theme_file_uri( '/assets/images/doc-icon-2.png' ) ?>">
									<p>
										Заявление о признании гражданина банкротом
									</p>
								</a>
							</li>
							<li>
								<a href="#">  <img src="<?php  echo get_theme_file_uri( '/assets/images/doc-icon-2.png' ) ?>">
									<p>
										Список кредиторов гражданина по установленной форме
									</p>
								</a>
							</li>
							<li>
								<a href="#">  <img src="<?php  echo get_theme_file_uri( '/assets/images/doc-icon-2.png' ) ?>">
									<p>
										Опись имущества гражданина по установленной форме
									</p>
								</a>
							</li>


						</ul>

				</div>
				</div>
				<div class="custom-user-page-block clearfix">
					<div class="col-lg-6 block-user-page-second  ">
						<h3>На первом судебном заседании:</h3>
							<ul class="list-docs-user-page">
								<li>
									<a href="#">  <img src="<?php  echo get_theme_file_uri( '/assets/images/doc-icon-2.png' ) ?>">

										<p>
											Ходатайство о введении процедуры реализации имущества минуя
											процедуру реструктуризации долгов;
										</p>
									</a>
									<div>
											  Если у Вас отсутствует доход
											на момент подачи заявления о признании банкротом, Вы вправе направить
											данное ходатайство в АС до, или во время первого судебного заседания
											по вопросу обоснованности Вашего заявления.
									</div>
								</li>
							</ul>
					</div>
					<div class="col-lg-6 block-user-page-second no-padding">
						<h3>После призания банкротом:</h3>
							<ul class="list-docs-user-page">
								<li>
									<a href="#">  <img src="<?php  echo get_theme_file_uri( '/assets/images/doc-icon-2.png' ) ?>">
										<p>
											Ходатайство об ежемесячных исключениях денежных
												средств из конкурсной массы на личные нужды.
										</p>
									</a>
								</li>
							</ul>
					</div>



				</div>

				<p class="block-title-user-page">Прочие заявления:</p>
				<ul class="list-docs-user-page">
					<li>
						<a href="#">  <img src="<?php  echo get_theme_file_uri( '/assets/images/doc-icon-2.png' ) ?>">
							<p>
								Заявление об отказе взаимодействия с кредитором, взыскателем. Вы вправе отказаться от общения с кредиторами, коллекторами, если просрочка
								превысила 4 месяца
							</p>
						</a>

					</li>
					<li>
						<a href="#">  <img src="<?php  echo get_theme_file_uri( '/assets/images/doc-icon-2.png' ) ?>">
							<p>
								Ходатайство о снижении неустойки по кредитному договору (договору займа) для самостоятельной защиты своих интересов в суде
							</p>
						</a>
					</li>
					<li>
						<a href="#">  <img src="<?php  echo get_theme_file_uri( '/assets/images/doc-icon-2.png' ) ?>">
							<p>
								Краткая информация о задолженности перед банком для бесплатного финансового анализа у нас в офисе
							</p>
						</a>
					</li>
					<li>
						<a href="#">  <img src="<?php  echo get_theme_file_uri( '/assets/images/doc-icon-2.png' ) ?>">
							<p>
								Заявление об отмене судебного приказа
							</p>
						</a>
					</li>
				</ul>





  </div><!-- .container -->
</div><!-- .wrap -->

<?php get_footer();
