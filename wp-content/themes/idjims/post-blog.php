<?php
/**
 * The template for displaying blog pages
 */

get_header(); ?>

<div class="breadscrumb">
  <div class="container">
    <h1 class="title-section service center-white "><?php echo get_the_title(get_the_ID()); ?></h1>
  </div>
</div>
<div class="wrap blog-row">
  <div class="container clearfix">
      <div class="except-blog"><?php if ( have_posts() ) : while ( have_posts() ) : the_post();  the_content();  endwhile; endif; ?></div>
  </div>
</div><!-- .wrap -->

<?php get_footer();
