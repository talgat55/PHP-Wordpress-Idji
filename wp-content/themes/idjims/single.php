<?php
/**
 * The template for displaying all single posts
 *
 */
get_header(); ?>

    <div class="breadscrumb">
        <div class="container">
            <h1 class="title-section service center-white "><?php echo get_the_title(get_the_ID()); ?></h1>
        </div>
    </div>
    <div class="wrap blog-row">
        <div class="container clearfix">
                <?php
                $img_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full');

                echo '
                                    <div style="position:relative">
                                    <img src="' . $img_url . '" />
                                    <div class="overlay-layer-blog"></div>
                                    <div class="meta-blog">
                                        <img src="' . get_theme_file_uri("/assets/images/cal-white.png") . '"/>
                                        <span class="date-blog">' . get_the_date('Y.m.d', get_the_ID()) . '</span>
                                    </div>
                                    </div>
                                
                                <div class="title-blog"> ' . get_the_title(get_the_ID()) . ' </div>
                                <div class="except-blog">' .get_the_content(get_the_ID()) . '</div>
                             ';

                ?>


        </div>

    </div><!-- .wrap -->

<?php get_footer();
