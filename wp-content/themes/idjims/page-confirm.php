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
            <div class="spec-help-block">
                <div class="border-block">

                    <p>
                        Для подтверждения регистрации остался последний шаг: мы должны убедиться, что
                        Вы-настоящий человек, а не вирусная программа. Для этого укажите свой телефонный
                        номер, на который мы вышлем код подтверждения регистрации
                    </p>

                </div>
                <div class="feature-service  border-one-5   margin-top-30  clearfix">
                    <img class="self-width-img margin-right-30"
                         data-src="<?php echo get_theme_file_uri('/assets/images/warning-2.png') ?>">
                    <p class="text-left normal-weight">
                        Важно: Ваши персональные данные будут надежно защищены нашим протоколом шифрования
                        данных https, а также «Законом о защите персональных данных – будьте уверены, все
                        вводимые на нашем сайте данные под надежной защитой!»
                    </p>
                </div>
            </div>
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
