<?php
/**
 *  Template Name: User Page Profile
 */

get_header(); ?>

<div class="wrap">
	<div class="breadscrumb blue" >
		<div class="container">
			<div class="col-lg-6">
				<a href="#" class="user-page-link-breadscrumb current">
						Ваш профиль
				</a>
			</div>
			<div class="col-lg-6 no-padding">
				<a href="#" class="user-page-link-breadscrumb ">
					Оформление документов
				</a>
			</div>

		</div>
	</div>
	<div class="container">
    <p>Заполните ваши личные данные, они будут использоваться для формирования документов</p>
		<form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
			<div class="clearfix">
				<h3 class=" ">ЛИЧНЫЕ ДАННЫЕ</h3>
				<div class="col-lg-3">
					<div class="form-group">
						<label>Фамилия</label>
						 <input name="firstName" type="text" class="form-control"  placeholder="Фамилия" />
					</div>
					<div class="form-group">
						<label>Имя</label>
						 <input name="secondName" type="text" class="form-control"  placeholder="Имя" />
					</div>
					<div class="form-group">
						<label>Отчество</label>
						 <input name="lastName" type="text" class="form-control"  placeholder="Отчество" />
					</div>

					<div class="form-group">
						<label>День Рождения</label>
						 <input name="birdDay" type="date" class="form-control" placeholder="День Рождения" />
					</div>

					<div class="form-group">
						<label>Место Рождения</label>
						 <input name="placeBirdDay" type="text" class="form-control" placeholder="Место Рождения" />
					</div>
					<div class="form-group">
						<label>Прежние фамилии</label>
						 <input name="PreviousFirstName" type="text" class="form-control" placeholder="Прежние фамилии" />
					</div>

					<div class="form-group">
						<label>Место проживания</label>
						 <input name="PlaceLive" type="text" class="form-control"  placeholder="Место проживания"/>
					</div>
				</div>
				<div class="col-lg-3">
					<h3 class=" ">ПАСПОРТ</h3>

						<div class="form-group">
							<label>Номер </label>
							 <input name="NumberPassport" type="text" class="form-control"  placeholder="Номер"  />
						</div>
						<div class="form-group">
							<label>Серия</label>
							 <input name="SeriaPassport" type="text" class="form-control"  placeholder="Серия"  />
						</div>
						<div class="form-group">
							<label>Кем Выдан</label>
							 <input name="WhoGetPassport" type="text" class="form-control"  placeholder="Кем Выдан"  />
						</div>
						<div class="form-group">
							<label>Дата Выдачи</label>
							 <input name="datPassport" type="date" class="form-control"    />
						</div>
						<div class="form-group">
							<label>Код подразделения</label>
							 <input name="KeyDepartmentPassport" type="text" class="form-control"  placeholder="Код подразделения"  />
						</div>

				</div>


				<div class="col-lg-3">
					<h3 class=" ">ДОПОЛНИТЕЛЬНО</h3>

						<div class="form-group">
							<label>ИНН </label>
							 <input name="additionalInn" type="text" class="form-control"  placeholder="ИНН"/>
						</div>
						<div class="form-group">
							<label>СНИЛС</label>
							 <input name="additionalSnils" type="text" class="form-control"  placeholder="СНИЛС"/>
						</div>
						<div class="form-group">
							<label>Телефон</label>
							 <input name="additionalPhone" type="text" class="form-control"  placeholder="Телефон"/>
						</div>
						<div class="form-group">
							<label>E-mail</label>
							 <input name="additionalEmail" type="text" class="form-control" placeholder="E-mail"/  />
						</div>

				</div>


				<div class="col-lg-9">
					<h3 class=" ">АДРЕС РЕГИСТРАЦИИ</h3>

						<div class="form-group">
							<label>Индекс</label>
							 <input name="registrationIndex" type="text" class="form-control"  placeholder="Индекс"/>
						</div>
						<div class="form-group">
							<label>Регион</label>
							<select class="select-box" name="registrationRegion" >
							            	                	<option value="Москва" selected="selected">Москва</option>
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
						<div class="form-group">
							<label>Населёный пункт</label>
							 <input name="registrationPoint" type="text" class="form-control"  placeholder="Населёный пункт"/>
						</div>
						<div class="form-group">
							<label>Улица</label>
							 <input name="registrationStreet" type="text" class="form-control" placeholder="Улица"/  />
						</div>

						<div class="form-group">
							<label>Номер дома</label>
							 <input name="registrationNumberHouse" type="text" class="form-control" placeholder="Номер дома"/  />
						</div>
						<div class="form-group">
							<label>Номер корпуса</label>
							 <input name="registrationNumberKorpus" type="text" class="form-control" placeholder="Номер корпуса"/  />
						</div>
						<div class="form-group">
							<label>Номер квартиры</label>
							 <input name="registrationNumberOportoment" type="text" class="form-control" placeholder="Номер квартиры"/  />
				</div>
				<div class="col-lg-3">
					<h3 class=" ">ДОСТУПЫ</h3>

						<div class="form-group">
							<label>СМЕНА ПАРОЛЯ </label>
							 <input name="accessNewPassword" type="text" class="form-control"  placeholder="Новый пароль"/>
						</div>
						<div class="form-group">
							 <input name="accessConfirmPassword" type="text" class="form-control"  placeholder="Потверждение Пароля"/>
						</div>
						<div class="form-group">
							<label>ВАШ ЛОГИН</label>
							 <input name="accessLogin" type="text" class="form-control"  placeholder="ВАШ ЛОГИН"/>
						</div>
				</div>





			</div>
			<input class="btn btn-primary btn-lg btn-block" type="submit" name="user_profile_reg_submit" value="Сохранить"/>
		</form>
  </div><!-- .container -->
</div><!-- .wrap -->

<?php get_footer();
