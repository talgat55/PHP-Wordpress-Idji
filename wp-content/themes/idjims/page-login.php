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

        <div class="breadscrumb">
            <div class="container">
                <h1 class="title-section service center-white ">Вход в личный кабинет</h1>
            </div>
        </div>
        <div class="container login-page">
            <div class="spec-help-block">
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
            </div>
            <div>
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
                               placeholder="Логин" id="login-name"/>
                        <!--<label class="login-field-icon fui-user" for="login-name"></label> -->
                    </div>

                    <div class="form-group">
                        <input name="login_password" type="password" class="form-control login-field" value=""
                               placeholder="Пароль" id="login-pass"/>
                        <input name="_crsf" type="hidden" value="<?php echo $ValueForHash; ?>"/>
                        <!-- <label class="login-field-icon fui-lock" for="login-pass"></label> -->

                    </div>
                    <input class="btn btn-primary btn-lg btn-block btn-form-login" type="submit"
                           name="login_submit" value="Войти"/>

                    <span>Вы не зарегистрированы? <a href="<?php echo LinksTheme('registration'); ?>"
                                                     onClick="yaCounter48236498.reachGoal('link_registration');">Зарегистрируйтесь</a></span>
                </div>
                </form>
            </div><!-- #primary -->
        </div><!-- #primary -->
    </div><!-- .wrap -->

<?php get_footer();
