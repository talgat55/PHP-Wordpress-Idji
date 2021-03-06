<?php
/**
 *  Template Name: Blog
 */

get_header(); ?>

    <div class="breadscrumb">
        <div class="container">
            <h1 class="title-section service center-white ">Блог</h1>
        </div>
    </div>
    <div class="wrap blog-row">
        <div class="container clearfix">
        <div class="row-blog">
            <ul class="blog-row-list clearfix">
                <?php
                $args = array(
                    'post_type' => 'post'
                );
                $the_query = new WP_Query($args);

                while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $post_id = $the_query->post->ID;
                    $img_url = wp_get_attachment_url(get_post_thumbnail_id($post_id), 'full');
                    $image = aq_resize($img_url, 334, 179, true); // Resize & crop img
                    echo '  <li class="blog-item">
                            <div class="blog-item-walp">
                                <a class="blog-img-link" href="' . get_the_permalink($post_id) . '">
                                    <img class="blog-img" src="' . $image . '" />
                                    <div class="overlay-layer-blog"></div>
                                    <div class="meta-blog">
                                        <img src="'.get_theme_file_uri( "/assets/images/cal-white.png" ).'"/>
                                        <span class="date-blog">'.get_the_date('Y.m.d',$post_id).'</span>
                                    </div>
                                </a>
                                
                                <div class="title-blog"><a href="' . get_the_permalink($post_id) . '">' . get_the_title($post_id) . '</a></div>
                                <div class="except-blog">' . my_string_limit_words(strip_tags(get_field('preview')), 35) . '</div>
                            </div>
                            </li>';

                endwhile;
                ?>


            </ul>
                <div class="load-more-block">
                    <a href="#" class="btn load-more blog-btn">Открыть больше</a>
                    <img class="loadmore-loader" src="<?php echo get_theme_file_uri( "/assets/images/ajax-loader.gif" ); ?>">
                </div>

        </div>
        </div>

    </div><!-- .wrap -->

<?php get_footer();
