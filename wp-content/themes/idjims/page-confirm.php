<?php
/**
 *  Template Name:  Page  Confirm Phone Number
 */

get_header(); ?>
<?php

checkUser();

?>

    <div class="wrap">
        <div class="breadscrumb">
            <div class="container">
                <h1 class="title-section service center-white ">Подтверждение нового пользователя</h1>
            </div>
        </div>
        <div class="container">
            <div class="login-page">

                <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
                    <div class="confirm-form clearfix">

                        <div class="form-group">

                            <p>Введите номер телефона для подтверждения регистрации.<br/> Пример "79050344559"</p>
                            <input name="phone_number" type="number" class="form-control login-field"
                                   value="<?php echo(isset($_REQUEST['reg_email']) ? $_REQUEST['reg_email'] : null); ?>"
                                   placeholder="Номер телефона" id="reg-phone" required>

                            <input name="confirm_number" type="number" class="form-control login-field"
                                   value="<?php echo(isset($_REQUEST['reg_email']) ? $_REQUEST['reg_email'] : null); ?>"
                                   placeholder="Код подтверждения" id="reg-code" required>


                        </div>

                    </div>
                    <a href="#" class="btn btn-primary confirm btn-registration btn-block">
                        Подтвердить
                    </a>

                    <!--<input class="btn btn-primary btn-registration btn-block" type="submit" name="reg_submit"
                           value="Регистрация"/>-->
                </form>
            </div>
        </div><!-- #primary -->
    </div><!-- .wrap -->

<?php get_footer();
