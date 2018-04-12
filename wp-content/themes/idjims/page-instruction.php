<?php
/**
 *  Template Name: Instruction
 */

get_header(); ?>

    <div class="breadscrumb">
        <div class="container">
            <h1 class="title-section service center-white ">Инструкция по банкротству</h1>
        </div>
    </div>
    <div class="wrap blog-row">
        <div class="container clearfix">
            <div class="row-blog">
                <ul class="blog-row-list clearfix">
                    <?php
                    /*
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
                                    <div class="except-blog">' . my_string_limit_words(get_the_content($post_id), 10) . '</div>
                                </div>
                                </li>';

                    endwhile;
                    */
                    ?>
                    <li class="blog-item">
                        <div class="blog-item-walp">
                            <a class="blog-img-link" href="<?php echo LinksTheme('instruction-page-five'); ?>">
                                <img class="blog-img"
                                     src="<?php echo get_theme_file_uri("/assets/images/i4.jpg"); ?>"/>

                            </a>

                            <div class="title-blog"><a href="<?php echo LinksTheme('instruction-page-five'); ?>">Общие
                                    положения о банкротстве</a></div>
                            <div class="except-blog">На фоне плохой экологии, обусловленной расположенной в городах
                                химической, металлургической и угольной промышленностью, постоянных переработок и
                                стрессовых ситуаций, кузбассовцы все чаще утрачивают работоспособность по состоянию
                                здоровья или теряют кормильцев.
                            </div>
                        </div>
                    </li>
                    <li class="blog-item">
                        <div class="blog-item-walp">
                            <a class="blog-img-link" href="<?php echo LinksTheme('instruction-page-one'); ?>">
                                <img class="blog-img"
                                     src="<?php echo get_theme_file_uri("/assets/images/i5.jpg"); ?>"/>

                            </a>

                            <div class="title-blog"><a href="<?php echo LinksTheme('instruction-page-one'); ?>">Процедура
                                    сбора документов для банкротства</a></div>
                            <div class="except-blog">Сбор документов для подачи на банкротство с компанией ИДЖИС обычно
                                составляет от двух недель до двух
                                месяцев, в зависимости от количества кредиторов, банки это или МФО, имеются ли на руках
                                кредитные
                                договора и
                            </div>
                        </div>
                    </li>
                    <li class="blog-item">
                        <div class="blog-item-walp">
                            <a class="blog-img-link" href="<?php echo LinksTheme('instruction-page-two'); ?>">
                                <img class="blog-img"
                                     src="<?php echo get_theme_file_uri("/assets/images/i1.jpg"); ?>"/>

                            </a>

                            <div class="title-blog"><a href="<?php echo LinksTheme('instruction-page-two'); ?>">Начало
                                    процедуры банкротства</a></div>
                            <div class="except-blog">Заявление о признании должника банкротом регистрируется в
                                канцелярии Арбитражного суда Кемеровской
                                области, и в случае, если все сделано правильно и у суда нет замечаний к заявлению и
                                приложениям, в
                                течении недели выносится определение:
                            </div>
                        </div>
                    </li>
                    <li class="blog-item">
                        <div class="blog-item-walp">
                            <a class="blog-img-link" href="<?php echo LinksTheme('instruction-page-four'); ?>">
                                <img class="blog-img"
                                     src="<?php echo get_theme_file_uri("/assets/images/i2.jpg"); ?>"/>

                            </a>

                            <div class="title-blog"><a href="<?php echo LinksTheme('instruction-page-four'); ?>">Банкротство
                                    путем реструктуризации </a></div>
                            <div class="except-blog">Та самая процедура, за которой к нам обращается 90% всех клиентов.
                                Конечная цель процедуры реализации имущества – освобождение от долгов. Законопроект о
                                банкротстве физических лиц, а точнее – поправки в «Закон о банкротстве»
                            </div>
                        </div>
                    </li>
                    <li class="blog-item">
                        <div class="blog-item-walp">
                            <a class="blog-img-link" href="<?php echo LinksTheme('instruction-page-six'); ?>">
                                <img class="blog-img"
                                     src="<?php echo get_theme_file_uri("/assets/images/i3.jpg"); ?>"/>

                            </a>

                            <div class="title-blog"><a href="<?php echo LinksTheme('instruction-page-six'); ?>">Банкротство
                                    путем реализации имущества</a></div>
                            <div class="except-blog">Если судом в отношении Вас все же была утверждена процедура
                                реструктуризации, то на ближайшие 6 месяцев о введении финальной процедуры банкротства
                                физического лица – реализации имущества, можно забыть.
                            </div>
                        </div>
                    </li>
                    <li class="blog-item">
                        <div class="blog-item-walp">
                            <a class="blog-img-link" href="<?php echo LinksTheme('instruction-page-tree'); ?>">
                                <img class="blog-img"
                                     src="<?php echo get_theme_file_uri("/assets/images/i6.jpg"); ?>"/>

                            </a>

                            <div class="title-blog"><a href="<?php echo LinksTheme('instruction-page-tree'); ?>">Итоги
                                    банкротства</a></div>
                            <div class="except-blog">По окончанию процедуры реализации имущества гражданин, признанный
                                банкротом, освобождается от
                                дальнейшего исполнения требований кредиторов, в том числе требований кредиторов, не
                                заявленных
                                при введении реструктуризации долгов гражданина или реализации имущества гражданина.
                            </div>
                        </div>
                    </li>


                </ul>


            </div>
        </div>

    </div><!-- .wrap -->

<?php get_footer();
