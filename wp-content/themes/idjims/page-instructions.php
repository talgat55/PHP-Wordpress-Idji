<?php
/**
 *  Template Name: Page Post instuctions
 */
get_header(); ?>


    <div class="wrap">

        <?php

        while (have_posts()) : the_post();


            switch (get_the_content()) {

                case '[post1]':
                    get_template_part('template-parts/instructions/post-1');
                    break;
                case '[post2]':
                    get_template_part('template-parts/instructions/post-2');
                    break;
                case '[post3]':
                    get_template_part('template-parts/instructions/post-3');
                    break;
                case '[post4]':
                    get_template_part('template-parts/instructions/post-4');
                    break;
                 case '[post5]':
                    get_template_part('template-parts/instructions/post-5');
                    break;
                 case '[post6]':
                    get_template_part('template-parts/instructions/post-6');
                    break;

            }

        endwhile;
        ?>

    </div><!-- .wrap -->

<?php get_footer();
