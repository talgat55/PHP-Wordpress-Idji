<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('/assets/images/favicon-alt.png') ?>"
          type="image/x-icon"/>
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
    <script type="text/javascript">
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";

    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116537806-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116537806-1');
</script>

</head>

<body <?php body_class(); ?> >
<div id="page" class="site">

    <header class="site-header">
        <?php
        if (!is_home()) {
            if (is_user_logged_in()) {

                echo '  <div class="top-header-user clearfix">
                            <div class="container">
                                <a href="' . wp_logout_url(LinksTheme('login')) . '"  >Выйти</a>
                                <a href="' . LinksTheme('user-profile') . '"  ><img src="' . get_theme_file_uri('/assets/images/user.png') . '" alt=""/>Личный кабинет</a>
                                
                            </div>
                        </div>';

            } else {

                echo '  <div class="top-header-user clearfix">
                            <div class="container">
                                <a href="' . LinksTheme('login') . '"><img src="' . get_theme_file_uri('/assets/images/user.png') . '" alt=""/> Войти/Зарегистрироваться</a>
                            </div>
                        </div>';

            }


        }


        ?>
        <div class="container">
            <div class="top-hedaer-block">
                <div id="logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_theme_file_uri('/assets/images/logo-a-2.png') ?>" alt="Logo">
                        <div>ИДЖИС</div>
                        <p>Живи без долгов</p>
                    </a>
                </div>
                <div class="center-top-heder">
                    <div class="center-top-heder-bre">

                        <div class="center-top-heder-walpaper clearfix">
                            <img src="<?php echo get_theme_file_uri('/assets/images/cal-a-2.png') ?>">
                            <div class="center-top-heder-holder">

                                <p>Время работы</p>
                                <div>с 9:00 до 17:00</div>

                            </div>
                        </div>
                        <div class="center-top-heder-walpaper clearfix">
                            <img src="<?php echo get_theme_file_uri('/assets/images/phone-a-2.png') ?>">
                            <div class="center-top-heder-holder">
                                <p>Звоните нам</p>
                                <div><a href="tel:+79235374667">8 923 537 46 67</a></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="right-top-header">
                    <a href="#" class="btn btn-link-modal">
                        <div>Оставить заявку</div>
                        <p>Мы перезвоним Вам</p>
                    </a>
                </div>
            </div><!-- end top hedaer-->
        </div><!-- end container-->

        <div class="bottom-header clearfix">
            <div class="container clearfix relative">
                <div class="bottom-header-wallpaper">
                    <ul class="navigation clearfix">
                        <li><a href="<?php echo home_url(); ?>">Главная</a></li>
                        <li>
                            <a class="open-ul" href="#">
                                Услуги
                                <i class="icon-down-dir"></i>
                            </a>
                            <ul class="sub-menu">
                                <!--<li><a href="#">Финансовая защита</a></li>-->
                                <li><a href="<?php echo LinksTheme('banlrotstvo-fl'); ?>">Банкротство гражданина</a>
                                </li>
                                <li><a href="<?php echo LinksTheme('bankrotstvo-ipotechikov'); ?>">Банкротство
                                        ипотечника</a></li>
                                <li><a href="<?php echo LinksTheme('bankrotstvo-poruchitelya'); ?>">Банкротство
                                        поручителя</a></li>
                                <li><a href="<?php echo LinksTheme('bankrotstvo-ip'); ?>">Банкротство ИП</a></li>
                                <li><a href="<?php echo LinksTheme('bankrotstvo-ooo'); ?>">Банкротство ООО</a></li>
                                <!--<li><a href="#">Юрист по банкротству</a></li>-->
                            </ul>

                        </li>
                        <li>
                            <a class="open-ul" href="#">
                                Полезная информация
                                <i class="icon-down-dir"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo LinksTheme('contact'); ?>">Контакты</a></li>
                                <li><a href="<?php echo LinksTheme('reviews'); ?>">Отзывы</a></li>
                                <li><a href="<?php echo LinksTheme('blog'); ?>">Блог</a></li>
                                <li><a href="<?php echo LinksTheme('question-answer'); ?>">Вопрос-ответ</a></li>
                            </ul>
                        </li>


                        <li><a href="<?php echo LinksTheme('calculate'); ?>">Калькулятор банкротства</a></li>
                        <li><a href="<?php echo LinksTheme('login'); ?>">Банкротство бесплатно</a></li>
                    </ul>

                </div>
                <div id="mobile-bar">

                    <a class="hamburger hamburger--slider">
							 	  	<span class="hamburger-box">
							 	    	<span class="hamburger-inner"></span>
							 	  	</span>
                    </a>


                </div>
                <ul class="social-top clearfix">
                    <li><a target="_blank" href="https://vk.com/bankruptcy42"><i class="icon-vkontakte"></i></a></li>
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-odnoklassniki"></i></a></li>
                </ul>
            </div>
        </div><!-- end container-->
</div><!-- end bottom header-->


</header>
<div class="overlay-layer"></div>
<div class="modal-form header-modal">
    <div class="close-modal-block">
        <div class="close-modal-block_wallpaper"></div>
    </div>
    <div class="title-section center white">Оставьте заявку</div>
    <?php echo do_shortcode('[contact-form-7 id="17" title="Untitled"]'); ?>


    <img src="<?php echo get_theme_file_uri('/assets/images/bg-modal-2.png') ?>">
</div>


<div id="content" class="site-content">
