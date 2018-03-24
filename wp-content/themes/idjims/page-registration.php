<?php
/**
 *  Template Name: Registration Page
 */

get_header(); ?>
<?php
$ValueForHash = wp_create_nonce('ASMART');

?>

    <div class="wrap">
        <div class="breadscrumb">
            <div class="container">
                <h1 class="title-section service center-white ">Регистрация нового пользователя</h1>
            </div>
        </div>
        <div class="container">
            <div class="registration-page">
                <div class="errors">
                    <?php
                    if (isset($_SESSION['error_registration'])) {
                        ?>
                        <p class="alert alert-danger"><?php echo $_SESSION['error_registration']; ?></p>
                        <?php unset($_SESSION['error_registration']); ?>
                    <?php } ?>
                </div>
                <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
                    <div class="registration-form clearfix">
                        <div class="form-group">
                            <input name="reg_name" type="text" class="form-control login-field"
                                   value="<?php echo(isset($_REQUEST['reg_name']) ? $_REQUEST['reg_name'] : null); ?>"
                                   placeholder="Логин" id="reg-name" required>
                            <label class="login-field-icon fui-user" for="reg-name"></label>
                        </div>

                        <div class="form-group">
                            <input name="reg_email" type="email" class="form-control login-field"
                                   value="<?php echo(isset($_REQUEST['reg_email']) ? $_REQUEST['reg_email'] : null); ?>"
                                   placeholder="Email" id="reg-email" required>
                        </div>

                        <div class="form-group">
                            <input name="reg_password" type="password" class="form-control login-field"
                                   value="<?php echo(isset($_REQUEST['reg_password']) ? $_REQUEST['reg_password'] : null); ?>"
                                   placeholder="Пароль" id="reg-pass">
                            <input name="confim_reg_password" type="password" class="form-control login-field"
                                   value="<?php echo(isset($_REQUEST['confim_reg_password']) ? $_REQUEST['confim_reg_password'] : null); ?>"
                                   placeholder="Потверждение Пароля" id="confim-reg-pass">

                            <div class="form-group choose-checkbox">
                                <div class="checkboxFour">
                                    <input type="checkbox" checked name="check-998">
                                    <div class="checkboxFourInput" for="checkboxFourInput"></div>
                                </div>
                                <div class="form-policy clearfix">я согласен с <a target="_blank"
                                                                                  href="<?php echo LinksTheme('policy'); ?>">«Политикой
                                        конфиденциальности»</a>сайта
                                </div>
                            </div>
                        </div>

                    </div>
                    <input class="btn btn-primary btn-registration btn-block" type="submit" name="reg_submit"
                           value="Регистрация"/>
                </form>
            </div>
        </div><!-- #primary -->
    </div><!-- .wrap -->

<?php get_footer();
