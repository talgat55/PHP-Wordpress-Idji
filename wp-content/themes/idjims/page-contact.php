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
                    <span>Адрес: </span><?= $city['address']; ?></br>
                    <?php if ($city['name'] == 'Симферополь') { ?>
                      <span>Доп. адрес: </span>Крым, г. Бахчисарай, ул. Ракитского, 1</br>
                    <?php } ?>
                    <span>Email: </span><a href="mailto:aegis@иджис.рф">aegis@иджис.рф</a>
                </div>
                <div class="col-md-5">
                    <span>Телефон: </span><span class="callibri">
                      <?= ($city['name'] == 'Симферополь') ? '<a href="tel:89781005125">8 (978) 100-51-25</a>' : '<a href="tel:88007079863">8 800 707 98 63</a>'; ?>
                    </span></br>
                    <span>Время работы: </span>с 9:00 до 17:00
                </div>
            </div>
        </div>
        <?php if (!$isRegion): ?>
        <div class="map-walp">
            <div id="map"></div>
            <div class="overlay-map"></div>
        </div>
      <?php endif; ?>
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
