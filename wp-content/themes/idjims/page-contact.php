<?php
/**
 *  Template Name: Contact
 */

get_header(); ?>

    <div class="breadscrumb">
        <div class="container">
            <h1 class="title-section service center-white ">Контакты</h1>
        </div>
    </div>
    <div class="wrap contact-page">
        <div class="container">
            <div class="contact-page-adress clearfix">
                <div class="col-md-7">
                    <span>Адрес:</span> Кемерово, пр. Ленина, 33/2 - 403, БЦ "Томь"</br>
                    <span>Email:</span><a href="email:aegis@иджис.рф"> aegis@иджис.рф</a>
                </div>
                <div class="col-md-5">

                    <span>Телефон:</span><a href="tel:+79235374667"> 8 (923) 537-47-67</a></br>
                    <span>Время работы:</span> с 9:00 до 17:00
                </div>
            </div>
        </div>
        <div class="map-walp">
            <div id="map"></div>
            <div class="overlay-map"></div>
        </div>
    </div><!-- .wrap -->
    <section class="SendMessage">
        <div class="container">
            <div class="title-section center-white">Закажите бесплатную консультацию</div>
            <?php echo do_shortcode('[contact-form-7 id="15" title="Untitled"]'); ?>

        </div>
        <div class="SendMessage-img">
            <img data-src="<?php echo get_theme_file_uri('/assets/images/smart2-2.png') ?>">
        </div>

    </section>
<?php get_footer();
