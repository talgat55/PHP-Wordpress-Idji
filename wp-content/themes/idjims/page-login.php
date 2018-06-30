<?php
/**
 *  Template Name: Login Page
 */

get_header(); ?>
<?php
if (is_user_logged_in()) {
    wp_redirect(LinksTheme('user-doc'));
    exit;

}
$ValueForHash = wp_create_nonce('ASMART');

?>

    <div class="wrap">

        <div class="breadscrumb breadscrumb-login">
            <img class="login-img-bred" src="<?php echo get_theme_file_uri('/assets/images/bg-first.png') ?>"/>
            <div class="container ">

                <div class="col-md-6 login-first-text">
                    <p>
                        <b>Сэкономьте Ваши деньги</b>, подготовьте необходимые документы для своей финансовой защиты или
                        защиты  банкротством. Бесплатно.<br>

                        <a href="#" class="login-page-start">Начать</a>
                    </p>

                </div>
                <div class="col-md-6">

                </div>
            </div>

        </div>
        <section id="first-row-login" class="first-row-login">
            <div class="container  ">
                <div class="first-table">
                    <!--<div class="spec-help-block">
                        <div class="border-block">

                            <p>
                                Зная обо всех финансовых трудностях наших земляков, команда ИДЖИС разработала сервис бесплатного
                                банкротства, включающий в себя онлайн-конструктор документов для банкротства физического лица и
                                инструкцию по самостоятельному прохождению процедуры банкротства. Указанные инструменты позволят
                                самостоятельно подготовить все необходимые документы и пройти процедуру банкротства без
                                привлечения квалифицированных специалистов!
                                <br/>
                                <br/>
                                Для того, чтобы воспользоваться нашим сервисом и получить бесплатный доступ в личный кабинет,
                                нужно зарегистрироваться на сайте.

                            </p>

                        </div>
                    </div>-->
                    <div class="text">
                        <h3>
                            Инструкция по банкротству написана простым и понятным языком для тех, кто ценит свое время и
                            желает самостоятельно во всем разобраться.

                        </h3>
                        <p>
                            Нет необходимости читать законы от корки до корки, вся необходимая информация представленав
                            достаточном объеме, в удобном для восприятия виде.
                        </p>
                        <a href="#" class="link-login-modal">Остались вопросы?</a>
                    </div>
                    <div class="img">
                        <!--<img src="<?php echo get_theme_file_uri('/assets/images/img-1-compressor.jpg') ?>"/>-->
                        <img src="<?php echo get_theme_file_uri('/assets/images/1.gif') ?>"/>
                    </div>

                </div>
            </div>
        </section>
        <section class="second-row-login">
            <div class="container  ">
                <div class="first-table">


                    <div class="img">
                        <img src="<?php echo get_theme_file_uri('/assets/images/3.gif') ?>"/>
                    </div>
                    <div class="text">
                        <h3>
                            Онлайн - конструктор документов создан специально для граждан, чье финансовое положение
                            затрудняет получение квалифицированной юридической помощи.
                        </h3>
                        <p>
                            Самостоятельно подготовьте полный комплект документов для подачи заявления о банкротстве в
                            суд. Все необходимое в одном месте:
                        </p>
                        <ul class="login-page-list">
                            <li><img src="<?php echo get_theme_file_uri('/assets/images/check-login.png') ?>"/> список
                                необходимых документов;
                            </li>
                            <li><img src="<?php echo get_theme_file_uri('/assets/images/check-login.png') ?>"/> запросы
                                в кредитные организации;
                            </li>
                            <li><img src="<?php echo get_theme_file_uri('/assets/images/check-login.png') ?>"/>
                                заявление о банкротств;
                            </li>
                            <li><img src="<?php echo get_theme_file_uri('/assets/images/check-login.png') ?>"/>
                                приложения к заявлению, ходатайства и пр.
                            </li>
                        </ul>
                        <a href="#" class="link-login-modal">Остались вопросы?</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="third-row-login">
            <div class="container  ">
                <div class="first-table">

                    <div class="text">
                        <h3>
                            Для тех, кому не подходит банкротство – самое необходимое для защиты от давления коллекторов
                            и незаконных требований кредиторов (банков и МФО).
                        </h3>
                        <p>
                            Законно откажитесь от общения с коллекторами и кредитными организациями. Дайте отпор банкам
                            и МФО в суде. Отмените судебный приказ.
                        </p>
                        <a href="#" class="link-login-modal">Остались вопросы?</a>
                    </div>
                    <div class="img">
                        <img src="<?php echo get_theme_file_uri('/assets/images/2.gif') ?>"/>
                    </div>

                </div>
            </div>
        </section>

        <div class="last-block-login-page ">
            <div class="login-page login-page-block clearfix">
                <div class="col-md-6">
                    <div class="title-login-page-block">Бесплатно. Быстро. Удобно.</div>
                    <p class="text-login-page-block">
                        Окажем необходимую помощь при использовании сервиса.
                        Дадим рекомендации по составлению документов.
                    </p>
                    <div class="errors">
                        <?php
                        if (isset($_SESSION['error_login'])) {
                            ?>
                            <p class="alert alert-danger"><?php echo $_SESSION['error_login']; ?></p>
                            <?php unset($_SESSION['error_login']); ?>
                        <?php } ?>
                    </div>
                    <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>"
                          onSubmit="yaCounter48236498.reachGoal(" login_form
                    ");">
                    <div class="login-form">
                        <div class="form-group">
                            <input name="login_name" type="text" class="form-control login-field" value=""
                                   placeholder="Ваш логин" id="login-name"/>
                            <!--<label class="login-field-icon fui-user" for="login-name"></label> -->
                        </div>

                        <div class="form-group">
                            <input name="login_password" type="password" class="form-control login-field" value=""
                                   placeholder="Ваш пароль" id="login-pass"/>
                            <input name="_crsf" type="hidden" value="<?php echo $ValueForHash; ?>"/>
                            <!-- <label class="login-field-icon fui-lock" for="login-pass"></label> -->

                        </div>
                        <input class="btn btn-primary btn-lg btn-block btn-form-login" type="submit"
                               name="login_submit" value="Войти"/>

                        <span class="login-text">Вы не зарегистрированы? <a
                                    href="<?php echo LinksTheme('registration'); ?>"
                                    onClick="yaCounter48236498.reachGoal('link_registration');">Зарегистрируйтесь</a></span>
                    </div>
                    </form>

                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_theme_file_uri('/assets/images/bg-login.png') ?>">
                </div>
            </div><!-- #primary -->

        </div>


    </div><!-- .wrap -->

<?php get_footer();
