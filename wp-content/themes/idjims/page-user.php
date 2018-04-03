<?php
/**
 *  Template Name: User Page
 */
ob_start();  // fix bag redirect
get_header(); ?>

    <div class="wrap user-page-doc">
        <div class="breadscrumb blue">
            <div class="container">
                <div class="col-lg-4">
                    <a href="<?php echo LinksTheme('user-profile'); ?>" class="user-page-link-breadscrumb">
                        Ваш профиль
                    </a>
                </div>
                <div class="col-lg-4 ">
                    <a href="<?php echo LinksTheme('instruction'); ?>" class="user-page-link-breadscrumb ">
                        Инструкция по банкротству
                    </a>
                </div>
                <div class="col-lg-4 no-padding">
                    <a href="#" class="user-page-link-breadscrumb current no-hover">
                        Оформление документов
                    </a>
                </div>

            </div>
        </div>
        <?php
        checkUser(); // check logged user
        /*
        * Print emty Fileds User profile
        */
        function printEmptyFieldsUser($array)
        {
/*

            if (in_array("id_user", $array)) {   // dont verify user

                wp_redirect(home_url());
                exit;
            }*/

            echo '<div class="container page-custom-margin  user-errors-profiles">';


            if (in_array("empty", $array) OR in_array("first_name", $array) OR in_array("second_name", $array) OR in_array("bird_day", $array)) {


                echo '<p class="error"><img  style="padding-right: 10px;" src="' . get_theme_file_uri('/assets/images/warning-2.png') . '"/>Личные данные в профиле заполнены не полностью! Формирование документов невозможно.</p>';
            }

            if (in_array("passport_serial", $array) OR in_array("passport_number", $array) OR in_array("passport_issued_by", $array) OR in_array("passport_issued_date", $array) OR in_array("passport_issued_key", $array) OR in_array("extra_inn", $array) OR in_array("extra_snils", $array) OR in_array("extra_phone", $array) OR in_array("registrtation_index", $array) OR in_array("registrtation_city", $array) OR in_array("registrtation_locality", $array) OR in_array("registrtation_street", $array) OR in_array("registrtation_number_hourse", $array) OR in_array("registrtation_number_housing", $array) OR in_array("registrtation_number_apartments", $array)) {

                echo '<p class="error"><img  style="padding-right: 10px;" src="' . get_theme_file_uri('/assets/images/warning-2.png') . '"/>Пожалуйста, заполните данные поля:</p>';

            }
            if (in_array("passport_serial", $array)) {

                echo '<p class="error"> Серия паспорта</p>';

            }
            if (in_array("passport_number", $array)) {

                echo '<p class="error"> Номер паспорта</p>';

            }

            if (in_array("passport_issued_by", $array)) {

                echo '<p class="error"> Кем выдан паспорт</p>';

            }
            if (in_array("passport_issued_date", $array)) {

                echo '<p class="error"> Дата выдачи паспорта</p>';

            }
            if (in_array("passport_issued_key", $array)) {

                echo '<p class="error"> Код подразделения</p>';

            }
            if (in_array("extra_inn", $array)) {

                echo '<p class="error"> ИНН</p>';

            }
            if (in_array("extra_snils", $array)) {

                echo '<p class="error"> СНИЛС</p>';

            }
            if (in_array("extra_phone", $array)) {

                echo '<p class="error"> Телефон</p>';

            }
            if (in_array("registrtation_index", $array)) {

                echo '<p class="error"> Индекс</p>';

            }
            if (in_array("registrtation_city", $array)) {

                echo '<p class="error"> Город</p>';

            }
            if (in_array("registrtation_locality", $array)) {

                echo '<p class="error">Населеный пункт</p>';

            }
            if (in_array("registrtation_street", $array)) {

                echo '<p class="error">Улица</p>';

            }
            if (in_array("registrtation_number_hourse", $array)) {

                echo '<p class="error">Номер дома</p>';

            }
            if (in_array("registrtation_number_housing", $array)) {

                echo '<p class="error">Номер корпуса</p>';

            }
            if (in_array("registrtation_number_apartments", $array)) {

                echo '<p class="error">Номер квартиры</p>';

            }
            echo '</div>';


        }

        $cur_user_id = get_current_user_id();
        //	$cur_user_id =1;
        global $wpdb;
        $table_name = $wpdb->prefix . "addition_informaion";
        $results = $wpdb->get_results("SELECT * FROM " . $table_name . " WHERE id_user ='" . $cur_user_id . "'");

        if (empty($results[0])) {
             $empty =    ['empty'];
            printEmptyFieldsUser($empty);
            $content = false;
        } else {


            $arrays_empty_fileds = [];
            foreach ($results[0] as $key => $value) {
                if (empty($value)) {
                    array_push($arrays_empty_fileds, $key);


                }

            }
            if ($arrays_empty_fileds[0]) {

                printEmptyFieldsUser($arrays_empty_fileds);
                $content = false;

            } else {
                $content = true;
            }
        }


        if ($content) {  // if all fields  user profile exist  show
            ?>
            <div class="container page-custom-margin">


                <div class="block-user-page-first">
                    <h1>Вы можете бесплатно сформировать</br> в режиме онлайн документы:</h1>
                    <p>Процесс банкротства физических лиц:</p>
                </div>
                <div class="clearfix">
                    <div class="col-md-7-doc block-user-page-second">
                        <h3>Собираем документы на банкротство:</h3>
                        <ul class="list-docs-user-page">
                            <li>
                                <a href="<?php echo LinksTheme('perechen'); ?>"> <img
                                            src="<?php echo get_theme_file_uri('/assets/images/doc-icon-2.png') ?>">
                                    <p>
                                        Перечень документов, необходимых для банкротства
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo LinksTheme('form5'); ?>"> <img
                                            src="<?php echo get_theme_file_uri('/assets/images/doc-icon-2.png') ?>">
                                    <p><span class="question-page-doc">?</span>
                                        Запрос в банк о предоставлении сведений по счетам и вкладам
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo LinksTheme('form11'); ?>"> <img
                                            src="<?php echo get_theme_file_uri('/assets/images/doc-icon-2.png') ?>">
                                    <p><span class="question-page-doc">?</span>
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
                                <a href="<?php echo LinksTheme('form3'); ?>"> <img
                                            src="<?php echo get_theme_file_uri('/assets/images/doc-icon-2.png') ?>">
                                    <p><span class="question-page-doc">?</span>
                                        Заявление о признании гражданина банкротом
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo LinksTheme('form1'); ?>"> <img
                                            src="<?php echo get_theme_file_uri('/assets/images/doc-icon-2.png') ?>">
                                    <p><span class="question-page-doc">?</span>
                                        Список кредиторов гражданина по установленной форме
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo LinksTheme('form2'); ?>"> <img
                                            src="<?php echo get_theme_file_uri('/assets/images/doc-icon-2.png') ?>">
                                    <p><span class="question-page-doc">?</span>
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
                                <a href="<?php echo LinksTheme('form4'); ?>"> <img
                                            src="<?php echo get_theme_file_uri('/assets/images/doc-icon-2.png') ?>">

                                    <p><span class="question-page-doc">?</span>
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
                                <a href="<?php echo LinksTheme('form6'); ?>"> <img
                                            src="<?php echo get_theme_file_uri('/assets/images/doc-icon-2.png') ?>">
                                    <p><span class="question-page-doc">?</span>
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
                        <a href="<?php echo LinksTheme('form7'); ?>"> <img src="<?php echo get_theme_file_uri('/assets/images/doc-icon-2.png') ?>">

                            <p><span class="question-page-doc">?</span>
                                Заявление об отказе взаимодействия с кредитором, взыскателем. Вы вправе отказаться от
                                общения с кредиторами, коллекторами, если просрочка
                                превысила 4 месяца
                            </p>
                        </a>

                    </li>
                    <li>
                        <a href="<?php echo LinksTheme('form8'); ?>"> <img src="<?php echo get_theme_file_uri('/assets/images/doc-icon-2.png') ?>">

                            <p><span class="question-page-doc">?</span>
                                Ходатайство о снижении неустойки по кредитному договору (договору займа) для
                                самостоятельной защиты своих интересов в суде
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo LinksTheme('form9'); ?>"> <img src="<?php echo get_theme_file_uri('/assets/images/doc-icon-2.png') ?>">
                            <p><span class="question-page-doc">?</span>
                                Краткая информация о задолженности перед банком для бесплатного финансового анализа у
                                нас в офисе
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo LinksTheme('form10'); ?>"> <img src="<?php echo get_theme_file_uri('/assets/images/doc-icon-2.png') ?>">

                            <p>
                                <span class="question-page-doc">?</span> Заявление об отмене судебного приказа
                            </p>
                        </a>
                    </li>
                </ul>


            </div><!-- .container -->
            <?php
        }

        ?>
    </div><!-- .wrap -->

<?php get_footer();
