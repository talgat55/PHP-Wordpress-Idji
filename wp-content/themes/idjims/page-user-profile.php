<?php
/**
 *  Template Name: User Page Profile
 */

get_header();
 checkUser(); // check logged user

$user_info = get_userdata(get_current_user_id());

$cur_user_id = get_current_user_id();

//	$cur_user_id =1;
global $wpdb;
$table_name = $wpdb->prefix . "addition_informaion";
$results = $wpdb->get_results("SELECT * FROM " . $table_name . " WHERE id_user ='" . $cur_user_id . "'");

?>

    <div class="wrap">
        <div class="breadscrumb blue">
            <div class="container">
                <div class="col-lg-4">
                    <a href="#" class="user-page-link-breadscrumb current no-hover">
                        Ваш профиль
                    </a>
                </div>
                <div class="col-lg-4 ">
                    <a href="<?php echo LinksTheme('instruction'); ?>" class="user-page-link-breadscrumb ">
                        Инструкция по банкротству
                    </a>
                </div>
                <div class="col-lg-4 no-padding">
                    <a href="<?php echo LinksTheme('user-doc'); ?>" class="user-page-link-breadscrumb ">
                        Оформление документов
                    </a>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="page-user-profile">
                <p>Заполличные данныените ваши , они будут использоваться для формирования документов</p>
                <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
                    <div class="clearfix">
                        <div class="clearfix">

                            <div class="col-lg-3">
                                <h3 class="first-block-user-profile-title">ЛИЧНЫЕ ДАННЫЕ</h3>
                                <div class="form-group">
                                    <div class="form-group-walp">
                                        <div>Фамилия</div>
                                        <input name="firstName" type="text" class="form-control" value="<?php echo $results[0]->first_name; ?>" placeholder="Фамилия"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group-walp">
                                        <div>Имя</div>
                                        <input name="secondName" type="text" class="form-control"  value="<?php echo $results[0]->second_name; ?>" placeholder="Имя"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group-walp">
                                        <div>Отчество</div>
                                        <input name="lastName" type="text" class="form-control"  value="<?php echo $results[0]->third_name; ?>" placeholder="Отчество"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-group-walp">
                                        <div>День Рождения</div>
                                        <input name="birdDay" type="date"  class="form-control"  value="<?php echo $results[0]->bird_day; ?>"
                                               placeholder="День Рождения"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-group-walp">
                                        <div>Место Рождения</div>
                                        <input name="placeBirdDay" type="text" class="form-control"  value="<?php echo $results[0]->place_bird; ?>"
                                               placeholder="Место Рождения"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group-walp">
                                        <div>Прежние фамилии</div>
                                        <input name="PreviousFirstName"  value="<?php echo $results[0]->last_name; ?>" type="text" class="form-control"
                                               placeholder="Прежние фамилии"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-group-walp">
                                        <div>Место проживания</div>
                                        <input name="PlaceLive" type="text"  value="<?php echo $results[0]->place_live; ?>" class="form-control"
                                               placeholder="Место проживания"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h3 class=" ">ПАСПОРТ</h3>

                                <div class="form-group">
                                    <div class="form-group-walp">
                                        <div>Номер </div>
                                        <input name="NumberPassport"  value="<?php echo $results[0]->passport_serial; ?>" type="text" class="form-control"
                                               placeholder="Номер"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group-walp">
                                        <div>Серия</div>
                                        <input name="SeriaPassport"  value="<?php echo $results[0]->passport_number; ?>" type="text" class="form-control"
                                               placeholder="Серия"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group-walp">
                                        <div>Кем Выдан</div>
                                        <input name="WhoGetPassport"  value="<?php echo $results[0]->passport_issued_by; ?>" type="text" class="form-control"
                                               placeholder="Кем Выдан"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group-walp">
                                        <div>Дата Выдачи</div>
                                        <input name="datPassport"  value="<?php echo $results[0]->passport_issued_date; ?>" type="date" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group-walp">
                                        <div>Код подразделения</div>
                                        <input name="KeyDepartmentPassport"  value="<?php echo $results[0]->passport_issued_key; ?>" type="text" class="form-control"
                                               placeholder="Код подразделения"/>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-3">
                                <h3 class=" ">ДОПОЛНИТЕЛЬНО</h3>

                                <div class="form-group">
                                    <div class="form-group-walp">
                                        <div>ИНН </div>
                                        <input name="additionalInn"  value="<?php echo $results[0]->extra_inn; ?>" type="text" class="form-control" placeholder="ИНН"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group-walp">
                                        <div>СНИЛС</div>
                                        <input name="additionalSnils"  value="<?php echo $results[0]->extra_snils; ?>" type="text" class="form-control"
                                               placeholder="СНИЛС"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group-walp">
                                        <div>Телефон</div>
                                        <input name="additionalPhone"  value="<?php echo $results[0]->extra_phone; ?>" type="text" class="form-control"
                                               placeholder="Телефон"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group-walp">
                                        <div>E-mail</div>
                                        <input name="additionalEmail" type="text" class="form-control" value="<?php echo $user_info->user_email; ?>"
                                               placeholder="E-mail"/
                                        />
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="col-lg-9">
                            <h3 class=" ">АДРЕС РЕГИСТРАЦИИ</h3>

                            <div class="form-group">
                                <div class="form-group-walp">
                                    <div>Индекс</div>
                                    <input name="registrationIndex"  value="<?php echo $results[0]->registrtation_index; ?>" type="text" class="form-control"
                                           placeholder="Индекс"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div>Регион</div>
                                <select class="select-box" name="registrationRegion">
                                    <?php   if($results[0]->registrtation_city){

                                        echo '<option value="'.$results[0]->registrtation_city.'" selected="selected">'.$results[0]->registrtation_city.'</option>';

                                    }else{

                                        echo '<option value="Москва" selected="selected">Москва</option>';
                                    }
                                    ?>

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
                                    <option value="Кабардино-Балкарская Республика">Кабардино-Балкарская Республика
                                    </option>
                                    <option value="Калининградская область">Калининградская область</option>
                                    <option value="Калмыкия Республика">Калмыкия Республика</option>
                                    <option value="Калужская область">Калужская область</option>
                                    <option value="Камчатский край">Камчатский край</option>
                                    <option value="Карачаево-Черкесская Республика">Карачаево-Черкесская Республика
                                    </option>
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
                                    <option value="Северная Осетия-Алания Республика">Северная Осетия-Алания Республика
                                    </option>
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
                                    <option value="Ханты-Мансийский автономный округ Югра">Ханты-Мансийский автономный
                                        округ
                                        Югра
                                    </option>
                                    <option value="Челябинская область">Челябинская область</option>
                                    <option value="Чеченская Республика">Чеченская Республика</option>
                                    <option value="Чувашская Республика">Чувашская Республика</option>
                                    <option value="Чукотский автономный округ">Чукотский автономный округ</option>
                                    <option value="Ямало-Ненецкий автономный округ">Ямало-Ненецкий автономный округ
                                    </option>
                                    <option value="Ярославская область">Ярославская область</option>
                                    <!--<option  value="Республика Мордовия">Республика Мордовия</option>
                    <option  value="Московская область">Московская область</option>
                    <option  value="Нижегородская область">Нижегородская область</option>-->
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="form-group-walp">
                                    <div>Населёный пункт</div>
                                    <input name="registrationPoint"  value="<?php echo $results[0]->registrtation_locality; ?>"  type="text" class="form-control"
                                           placeholder="Населёный пункт"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group-walp">
                                    <div>Улица</div>
                                    <input name="registrationStreet"  value="<?php echo $results[0]->registrtation_street; ?>" type="text" class="form-control"
                                           placeholder="Улица"/
                                    />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-group-walp">
                                    <div>Номер дома</div>
                                    <input name="registrationNumberHouse"  value="<?php echo $results[0]->registrtation_number_hourse; ?>" type="text" class="form-control"
                                           placeholder="Номер дома"/ />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group-walp">
                                    <div>Номер корпуса</div>
                                    <input name="registrationNumberKorpus"  value="<?php echo $results[0]->registrtation_number_housing; ?>" type="text" class="form-control"
                                           placeholder="Номер корпуса"/ />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group-walp">
                                    <div>Номер квартиры</div>
                                    <input name="registrationNumberOportoment"  value="<?php echo $results[0]->registrtation_number_apartments; ?>" type="text" class="form-control"
                                           placeholder="Номер квартиры"/ />
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h3 class=" ">ДОСТУПЫ</h3>

                                <div class="form-group">
                                    <div class="form-group-walp">
                                        <div>СМЕНА ПАРОЛЯ </div>
                                        <input name="accessNewPassword" type="password" class="form-control"
                                               placeholder="Новый пароль" id="reg-pass" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group-walp">
                                        <input name="accessConfirmPassword" type="password" class="form-control"
                                               placeholder="Потверждение Пароля" id="confim-reg-pass"  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group-walp">
                                        <div>ВАШ ЛОГИН</div>
                                        <input name="accessLogin" type="text" class="form-control" value="<?php echo $user_info->user_login; ?>"
                                               placeholder="ВАШ ЛОГИН"/>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <input class="btn btn-primary btn-lg btn-block-user-profile" type="submit" name="user_profile_reg_submit"
                           value="Сохранить"/>
                </form>
            </div>
        </div><!-- .container -->
    </div><!-- .wrap -->

<?php get_footer();
