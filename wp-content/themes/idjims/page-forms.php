<?php
/**
 *  Template Name: Page forms
 */
ob_start();  // fix bag redirect
get_header(); ?>


    <div class="wrap">

        <?php
        checkUser(); // check logged user
        while (have_posts()) : the_post();


            switch (get_the_content()) {

                case '[form11]':
                    get_template_part('template-parts/forms/page-form-11');
                    break;
                case '[form10]':
                    get_template_part('template-parts/forms/page-form-10');
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
