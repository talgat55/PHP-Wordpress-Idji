<?php
/**
 *  Template Name: Page Review
 */

get_header(); ?>

<div class="wrap">
  <div class="breadscrumb" >
    <div class="container">
      <h1 class="title-section service center-white ">Отзывы наших клиентов</h1>
    </div>
  </div>
	<div class="container">
    <div class="row-reviews">

        <?php

        $args = array(
          'posts_per_page'   => 10,
          'order' => 'DESC',
          'post_type' => 'clients'
        );

        $the_query = new WP_Query($args);

        while( $the_query->have_posts() ) : $the_query->the_post();
        $post_id = $the_query->post->ID;

        //$img_url = wp_get_attachment_url( get_post_thumbnail_id($post_id),'full');
        $CityClient = get_post_meta($post_id, 'city_meta', true);
        $FileClient = rwmb_meta( 'file_meta', array( 'limit' => 1 ),$post_id );
        $FileClient = reset( $FileClient );


        $ImagesClient = rwmb_meta( 'images_meta', array( 'size' => 'full' ),$post_id);

          echo '
              <div class="reviews-block-walp">
              <div class="reviews-first-block">

                  <div class="reviews-first-block-walp   slick-slider">
                  ';
                    $key = '';
                    $key_arr = [];
                    $uniq = uniqid();
                  if($ImagesClient){
                      $light_key = 0;
                      foreach ($ImagesClient as $key => $value) {

                        array_push($key_arr,$key);
                         $fullurl = $value['full_url'];
                          $value   = aq_resize( $value['full_url'], 173, 173, true );
                          $value ? $value: $value['full_url'];
                      echo '
                          <div  class="slider-walpaper-review">
                              <div  class="slider-walpaper-review-border">
                          '; 
                          if($light_key == 0){
                            echo '
                              <a    href="';

                              echo $fullurl;

                              echo '" data-lightbox="example-set-'.$uniq.'" class="review-link-overlay"><img src="'.get_theme_file_uri( '/assets/images/zoom-2.png' ).'"/></a>';
                            }
                      echo '
                                <img src="'.$value.'"/>
                              </div>
                      ';


                      echo '

                          </div>
                        ';

                        $light_key ++;
                      }

                  }

                echo "</div>";
                if($ImagesClient){
                    $light_key_2 = 0;
                    foreach ($ImagesClient as $key => $value) {
                        $fullurl = $value['full_url'];
                      if($light_key_2 > 0){
                        echo '<a  data-lightbox="example-set-'.$uniq.'" href="';
                          echo $fullurl;
                        echo '" class="review-link-overlay"></a>';

                      }

                      $light_key_2++;
                    }
                }


                 if(count($key_arr) > 1){

                    echo '
                      <div class="slider-nav clearfix">
                        <a href="#" class="slider-arrow-left"><span class="icon-angle-left"></span></a>
                        <a href="#" class="slider-arrow-right"><span class="icon-angle-right"></span></a>
                      </div>';
                 }


                 echo '
                 <div class="meta-review clearfix">

                        <img   src="'.get_theme_file_uri( '/assets/images/calendar-rw-2.png' ).'">
                        <div>'.get_the_date('Y.m.d',$post_id).'</div>
                 </div>

                 ';

          echo '
              </div>
              <div class="reviews-second-block">
                        <div class="review-title">'.get_the_title($post_id).'</div>

                        <div class="review-city">'.$CityClient.'</div>
                        <div class="review-content">
                        <div>

                          '.get_the_content($post_id).'

                        </div>
                        </div>
                        <div class="review-block-bottom clearfix">
                          <a class="review-link-readmore" href="#" >Читать полностью</a>';
                if($FileClient['url']){

                  echo '<div class="pdf-review-block">
                        <a href="'.$FileClient['url'].'" target="_blank">
                        <img   src="'.get_theme_file_uri( '/assets/images/pdf-icon-2.png' ).'">
                        <p>Результат банкротства</p>
                        </a>
                      </div>';
                  }

          echo '

                        </div>
              </div>


              </div>
          ';

          // pagination

        endwhile;

        ?>

    </div>



	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
