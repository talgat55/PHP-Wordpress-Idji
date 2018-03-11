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
        <div >
            <div class="errors">
                <?php
                if (isset($_SESSION['error_login'])) {
                    ?>
                    <p class="alert alert-danger"><?php echo $_SESSION['error_login']; ?></p>
                    <?php unset($_SESSION['error_login']); ?>
                <?php } ?>
            </div>
            <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
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

                    <span>Вы не зарегистрированы? <a href="<?php echo LinksTheme('registration'); ?>">Зарегистрируйтесь</a></span>
                </div>
            </form>
        </div><!-- #primary -->
        </div><!-- #primary -->
    </div><!-- .wrap -->

<?php get_footer();
