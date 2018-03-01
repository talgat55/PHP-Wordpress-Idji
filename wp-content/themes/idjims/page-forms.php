<?php
/**
 *  Template Name: Page forms
 */

get_header(); ?>


<div class="wrap">
	 
    <?php
      while ( have_posts() ) : the_post();

      if(get_the_content() == '[form1]'){

          get_template_part('template-parts/forms/page-form-1');

      }



      endwhile;
     ?>

</div><!-- .wrap -->

<?php get_footer();
