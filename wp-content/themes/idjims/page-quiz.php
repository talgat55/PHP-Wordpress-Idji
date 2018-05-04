<?php
/**
 *  Template Name: Quiz
 */

?>
    <html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <meta name="yandex-verification" content="d1e66d86f8329b3a"/>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo get_theme_file_uri('/assets/images/favicon-alt.png') ?>"
              type="image/x-icon"/>
        <title>Quiz Иджис</title>

        <?php wp_head(); ?>
        <script type="text/javascript">
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";

        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116537806-1"></script>
        <script src="https://b24go.com/form/v3/aegis42.bitrix24.ru/form.js" async></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'UA-116537806-1');

            // vk
            (window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-238025-5LSOi';
        </script>
        <!— Marquiz script start —>
        <script src="//script.marquiz.ru/v1.js" type="application/javascript"></script>
        <script> document.addEventListener("DOMContentLoaded", function () {
                Marquiz.init({id: '5a82a8db6db2f600180525a3', host: '//quiz.marquiz.ru', template: 'default'});
            }); </script>
        <!— Marquiz script end —>
        <?php wp_head(); ?>
    </head>
    <body>

    <div class="wrap quiz-row clearfix">

        <div class="container clerfix">

            <div class="col-mds-6 second-quiz-block">
                <img class="logo-quiz" src="<?php echo get_theme_file_uri('/assets/images/logo_quiz.png') ?>"
                     alt="логотип">
                <h1>Что делать, если нечем<span>платить кредит?</span></h1>
                <h2>Заполните последнюю форму и получите бонусы:</h2>


                <ul>
                    <li>
                        Доступ к бесплатному сервису для списания долгов. Он поможет избавиться от звонков коллекторов и
                        банков, уменьшить процент/неустойку по кредиту, отменить судебный приказ и много другое!
                    </li>
                    <li>
                        Право на бесплатную устную консультацию с нашим юристом (по телефону или в нашем офисе).
                    </li>
                    <li>
                        Доступ к инструкции по банкротству. Понятным языком мы написали о том, что такое банкротство и
                        как пройти эту процедуру бесплатно.
                    </li>
                    <li>
                        Скидку на услуги по списанию долгов. Скидка навсегда останется за Вами!
                    </li>
                </ul>
                <div class="marquiz__container" style="text-align: left!important;"><a
                            class="marquiz__button marquiz__button_blicked marquiz__button_rounded marquiz__button_shadow"
                            href="#popup:marquiz_5a82a8db6db2f600180525a3" data-color="#0000ff"
                            data-text-color="#ffffff">Пройти тест</a></div>


            </div>
            <div class="col-mds-6 quiz-bg center  first-quiz-block">
                <img src="<?php echo get_theme_file_uri('/assets/images/quiz.png') ?>" alt="изображение">
            </div>
        </div>
    </div><!-- .wrap -->
    </body>
    </html>
<?php  
