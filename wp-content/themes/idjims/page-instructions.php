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
                case '[form9]':
                    get_template_part('template-parts/forms/page-form-9');
                    break;
                case '[form8]':
                    get_template_part('template-parts/forms/page-form-8');
                    break;
                case '[form7]':
                    get_template_part('template-parts/forms/page-form-7');
                    break;
                case '[form6]':
                    get_template_part('template-parts/forms/page-form-6');
                    break;
                case '[form5]':
                    get_template_part('template-parts/forms/page-form-5');
                    break;
                case '[form4]':
                    get_template_part('template-parts/forms/page-form-4');
                    break;
                case '[form3]':
                    get_template_part('template-parts/forms/page-form-3');
                    break;
                case '[form2]':
                    get_template_part('template-parts/forms/page-form-2');
                    break;
                case '[form1]':
                    get_template_part('template-parts/forms/page-form-1');
                    break;
            }

        endwhile;
        ?>

    </div><!-- .wrap -->

<?php get_footer();
