<?php
get_header(); ?>
<section id="slider">

  <div class=" slider-wallpaper slick-slider">
    <?php

    $argsslideer = array(
      'posts_per_page'   => -1,
      'post_type' => 'slider'
    );

    $the_query_slider = new WP_Query($argsslideer);

      while( $the_query_slider->have_posts() ) :
          $the_query_slider->the_post();
          $post_id_slider = $the_query_slider->post->ID;
        $thumb   = get_post_thumbnail_id($post_id_slider);
        $img_url = wp_get_attachment_url( $thumb,'full'); // Get img URL
      //  $image   = aq_resize( $img_url, 1920, 720, true ); // Resize & crop img

      //	$image ? $image:$img_url;
      $WordSelect = get_post_meta($post_id_slider, 'select_meta', true);
      $ArrayText = explode(' ', get_post_meta($post_id_slider, 'text_meta', true));
      foreach ($ArrayText as $key => $value) {
        if($WordSelect == $value){

          $ArrayText[$key] = '<span>'.$value.'</span>';

        }
      }

      $RedyText = implode(" ",$ArrayText);
      echo '	<div  class="slider-walpaper" style="   background: url('.esc_url( $img_url ).');  background-position: center; ">

            <div class="slider-block-content">
            <div class="container">
            <div class="slider-block-content-walpaper">
              <div class="title-slider" >'.get_post_meta($post_id_slider, 'title_meta', true).'</div>
              <p class="text-slider" >
              '.$RedyText.'
              </p>
            </div>
            </div>
            </div>

          </div>';
      endwhile;
    ?>


  </div>
  <div class="slider-nav">
    <a href="#" class="slider-arrow-left"><span class="icon-left-open"></span></a>

    <a href="#" class="slider-arrow-right"><span class="icon-right-open"></span></a>
  </div>
</section>
<section id="about">
	<div class="container clearfix">
      <div class="col-md-7 text-justify" >
          <h1 class="title-section">Немного о нас</h1>
          <p>Мы знаем, как решить проблему с долгами КАЧЕСТВЕННО и НЕДОРОГО! </p>
          <p>Компания <b>ИДЖИС</b> специализируется на банкротствах физических лиц с момента принятия Законодателем соответствующих поправок в Федеральный закон
            "О несостоятельности (банкротстве)", касающихся банкротства граждан. К слову,  до недавнего времени возможность списать свои долги имелась только у различных фирм и индивидуальных предпринимателей, что, согласитесь, было совсем несправедливо. Так, специалисты нашей компании долгое время занимались оформлением банкротств именно этой категории должников, но теперь мы предлагаем наш опыт и знания ведения дел о банкротстве простым гражданам. Кроме того, сокращение издержек и автоматизация всех бизнес-процессов позволяет нам предложить, пожалуй, самую низкую цену банкротства физических лиц в Кемеровской области.
          </br>
          Банкротство физического лица - единственный законный способ освободиться от всех кредитных долгов, и уже сразу  после начала этой процедуры прекращаются начисления пеней и штрафов, звонки и визиты приставов и коллекторов.</p>

          <p class="italic">Начните свой путь в жизнь без долгов вместе с нами!</p>
      </div>
      <div class="col-md-5  background-about" style="background: url(<?php  echo get_theme_file_uri( '/assets/images/smart-2.png' ) ?>);">
        <img class="about-img" src="<?php  echo get_theme_file_uri( '/assets/images/woman-2.png' ) ?>">
        <h2>Светлана  Вячеславовна</h2>
        <p class="position">генеральный директор компании "Иджис"</p>
      </div>


  </div>
</section>
<section id="get-use-our">
	<div class="container clearfix">
    <div class="title-section">Что вы получите от обращения к нам?</div>
    <div class="col-md-6">
      <div class="block-use-our">
        <div id="contentSlider">Общая сумма долга: <span id="valueidslider">500000</span> руб</div>
        <div  id="slider-ui"  ></div>
        <div class="block-calc clearfix">
          <img src="<?php  echo get_theme_file_uri( '/assets/images/mon-2.jpg' ) ?>">
          <p>Вы получите :</p>
          <div class="result-calc"><span>550000</span> руб.</div>
        </div>
      </div>
    </div>
    <div class="col-md-6  no-padding-right">
      <div class="block-use-our">
        <a href="#" class="btn btn-link-to-modal">Узнать, как получить выгоду</a>
        <p class="spec-block-text-use-our">Оставьте заявку и наш специалист бесплатно расскажет, как получить указанную сумму</p>
      </div>
    </div>
    <div class="border-use-our"></div>
    <div class="col-md-6">
      <div class="block-use-our">
        <a href="http://idgis.trekweb.ru/calculate/" class="block-use-our-walp-2 clearfix">

            <h3>Калькулятор <span>банкротства</span></h3>
            <p>Узнайте, подходит ли банкротство в Вашем
              случае, а также узнайте стоимость наших услуг!</p>
            <img class="align-right" style="height: 127px;" src="<?php  echo get_theme_file_uri( '/assets/images/calc-2.png' ) ?>">

        </a>
      </div>

    </div>
    <div class="col-md-6 no-padding-right">
      <div class="block-use-our">
        <div class="block-use-our-walp-2 clearfix">
            <h3>Бесплатное <span>банкротство</span></h3>
            <p>Зарегистрируйтесь на сайте и получите
              возможность бесплатно  подготовить все документы
              для прохождения процедуры банкротства  своими силами!</p>
            <img class="align-right" src="<?php  echo get_theme_file_uri( '/assets/images/paper1-2.png' ) ?>">
        </div>

      </div>
    </div>


  </div>
</section>
<section id="benefit" class="padding-bottom">
  <div class="container">
    <div class="title-section center-white">Почему выгодно с нами работать?</div>
    <div>
    <div class="col-md-3 benefit-cols">
        <div class="benefit-block">
          <img src="<?php  echo get_theme_file_uri( '/assets/images/shape6-2.jpg' ) ?>">
          <h3>Низкая стоимость процедуры</h3>
          <p>Работая с нашим управляющим напрямую, вы избегаете финансовых издержек, навязываемых посредниками.</p>
        </div>
    </div>
    <div class="col-md-3 benefit-cols">
        <div class="benefit-block">
          <img src="<?php  echo get_theme_file_uri( '/assets/images/shape5-2.jpg' ) ?>">
          <h3>Профессионализм</h3>
          <p>Арбитражный управляющий - эксперт по банкротству, работа с которым— гарантия успешного завершения процедуры банкротства!</p>
        </div>
    </div>
    <div class="col-md-3  benefit-cols no-padding-right">
        <div class="benefit-block">
          <img src="<?php  echo get_theme_file_uri( '/assets/images/shape4-2.jpg' ) ?>">
          <h3>Рассрочка платежа</h3>
          <p>Мы заботимся о своих клиентах и знаем, с какими финансовыми трудностями им пришлось столкнуться. Поэтому мы готовы дать Вам рассрочку по оплате за оказываемые услуги</p>
        </div>
    </div>
    <div class="col-md-3 benefit-cols">
        <div class="benefit-block">
          <img src="<?php  echo get_theme_file_uri( '/assets/images/shape3-2.jpg' ) ?>">
          <h3>Гарантия возврата денег </h3>
          <p>Если суд не признает Вас банкротом— вернем деньги. Это прописано в договоре!</p>
        </div>
    </div>
    <div class="col-md-3 benefit-cols">
        <div class="benefit-block">
          <img src="<?php  echo get_theme_file_uri( '/assets/images/shape2-2.jpg' ) ?>">
          <h3>Представительство в суде</h3>
          <p>Вам не придется лично присутствовать на судебных заседаниях— этим за Вас займется наш профессиональный юрист. Мы работаем-Вы отдыхаете!</p>
        </div>
    </div>
    <div class="col-md-3 benefit-cols no-padding-right">
        <div class="benefit-block">
          <img src="<?php  echo get_theme_file_uri( '/assets/images/shape1-2.jpg' ) ?>">
          <h3>Юридическая поддержка</h3>
          <p>Заявление о банкротстве, ходатайства, возражения, отзывы и дополнения, справки и доверенности, запросы и переписка с кредиторами— за Вас все это сделает наш профессиональный юрист!</p>
        </div>
    </div>
    </div>

  </div>
</section>
<section id="how-we-work" class="margin-bottom">
  <div class="container">
    <div class="title-section center">Как мы осуществляем свою работу?</div>
    <div class="tabs">
    <ul class="HowWeWorkBlockTab">
      <li><a hrerf="#">1</a></li>
      <li><a hrerf="#">2</a></li>
      <li><a hrerf="#">3</a></li>
      <li><a hrerf="#">4</a></li>
    </ul>
    <div>
          <div>
            <div class="col-md-2 margin-top">

                <img src="<?php  echo get_theme_file_uri( '/assets/images/feedback-2.jpg' ) ?>">
            </div>
            <div class="col-md-10  block-text-how-we-work margin-top">
                <h3>Оставьте заявку</h3>
                <p>Сделать это можно, позвонив по телефону <a href="tel:89235374767" class="linkInText">8-923-537-47-67</a>, либо оставив данные в форме на нашем сайте. Наш специалист обязательно перезвонит, что бы уточнить детали, ответить на все интересующие вопросы о банкротстве граждан, стоимости наших услуг и записать Вас на бесплатную консультацию!</p>
                <h3>Результат</h3>
                <p>Вы получите возможность посетить бесплатную консультацию. Обычная цена такой консультации  - 1800 рублей.</p>
            </div>
          </div>

          <div>
            <div class="col-md-2 margin-top">

                <img src="<?php  echo get_theme_file_uri( '/assets/images/feedback2-2.jpg' ) ?>">
            </div>
            <div class="col-md-10  block-text-how-we-work margin-top">
                <h3>Посетите бесплатную консультацию</h3>
                <p>В ходе бесплатной консультации Вам подробно расскажут о банкротстве граждан и подарят
                    брошюру по банкротству. Более того, наш специалист проведёт Ваш финансовый анализ
                    и  выробатывает рекомендации относительно дальнейших действий, а  также о том, как правильно выбрать компанию по банкротству.</p>
                <h3>Результат</h3>
                <p>Ясное понимание  проблемы  и способа её решения, составление “дорожной карты”
                  того, что, как и когда нужно делать для того, чтобы избавиться от долгов.</p>
            </div>
          </div>

          <div>
            <div class="col-md-2 margin-top">

                <img src="<?php  echo get_theme_file_uri( '/assets/images/feedback3-2.jpg' ) ?>">
            </div>
            <div class="col-md-10  block-text-how-we-work margin-top">
                <h3>Заключите с нами договор</h3>
                <p>После  того,  как Вы убедитесь, что сотрудничество с нами  лучший выбор, и заключите с
                  нами договор, мы подготовим необходимые документы и инициируем процедуру Вашего
                  банкротства. Вас представят финансовому управляющему, который наметит стратегию
                  дальнейшей работы </p>
                <h3>Результат</h3>
                <p>Договор с гарантией возврата денег, уверенность в скором решении
                  проблем с долгами.</p>
            </div>
          </div>

          <div>
            <div class="col-md-2 margin-top">

                <img src="<?php  echo get_theme_file_uri( '/assets/images/feedback4-2.jpg' ) ?>">
            </div>
            <div class="col-md-10  block-text-how-we-work margin-top">
                <h3>Мы решим Вашу проблему с долгами!</h3>
                <p>В ходе проведения процедуры мы постоянно будем держать Вас в курсе всех дел. По Вашему желанию, наш юрист будет представлять Ваши интересы в суде. После окончания
процедуры банкротства  Вы получите результат, которого добиваетесь: реструктиризацию
долгов или полное их списание!</p>
                <h3>Результат</h3>
                <p>Решение проблемы с долгами с минимальными потерями, достижение требуемого
результата: полного списания долгов или их реструктиризации.</p>
            </div>
          </div>

    </div>



    </div>



  </div>
</section>
<section class="SendMessage">
    <div class="container">
      <div class="title-section center-white">Закажите бесплатную консультацию</div>
      <?php echo do_shortcode('[contact-form-7 id="15" title="Untitled"]'); ?>

    </div>
    <img src="<?php  echo get_theme_file_uri( '/assets/images/smart2-2.png' ) ?>">


</section>
<section id="Offer">
    <div class="container">
        <div class="title-section center">Предлагаем Вам воспользоваться процедурой <span class="red">банкротства,</span> в ходе которой мы</div>
        <div class="clearfix">
        <div class="col-md-7">
          <div class="title-offer-list clearfix">
            <img src="<?php  echo get_theme_file_uri( '/assets/images/cube-2.jpg' ) ?>">
            <h3>Исключаем:</h3>
          </div>
          <ul class="offer-list">
            <li><img src="<?php  echo get_theme_file_uri( '/assets/images/check-red-2.jpg' ) ?>"><p>Долги по кредитам перед банками</p></li>
            <li><img src="<?php  echo get_theme_file_uri( '/assets/images/check-red-2.jpg' ) ?>"><p>Долги перед микрофинансовыми организациями</p></li>
            <li><img src="<?php  echo get_theme_file_uri( '/assets/images/check-red-2.jpg' ) ?>"><p>Исполнительные производства и связанные с ними аресты имущества, взыскания из заработной платы</p></li>
            <li><img src="<?php  echo get_theme_file_uri( '/assets/images/check-red-2.jpg' ) ?>"><p>Давление кредиторов</p></li>
            <li><img src="<?php  echo get_theme_file_uri( '/assets/images/check-red-2.jpg' ) ?>"><p>Преследование коллекторами</p></li>
          </ul>
        </div>

        <div class="col-md-5">
          <div class="title-offer-list clearfix">
            <img src="<?php  echo get_theme_file_uri( '/assets/images/save-2.jpg' ) ?>">
            <h3>Сохраняем:</h3>
          </div>
          <ul class="offer-list">
            <li><img src="<?php  echo get_theme_file_uri( '/assets/images/check-blue-2.jpg' ) ?>"><p>Ваш дом или квартиру</p></li>
            <li><img src="<?php  echo get_theme_file_uri( '/assets/images/check-blue-2.jpg' ) ?>"><p>Вашу мебель и бытовую технику</p></li>
            <li><img src="<?php  echo get_theme_file_uri( '/assets/images/check-blue-2.jpg' ) ?>"><p>Вашу заработную плату</p></li>
            <li><img src="<?php  echo get_theme_file_uri( '/assets/images/check-blue-2.jpg' ) ?>"><p>Ваше душевное спокойствие</p></li>
            <li><img src="<?php  echo get_theme_file_uri( '/assets/images/check-blue-2.jpg' ) ?>"><p>Ваше финансовое благополучие</p></li>
          </ul>
        </div>
        </div>
        <div class="col-md-12 ">

          <div class="block-warning">
            <img class="img-warn" src="<?php  echo get_theme_file_uri( '/assets/images/warning-2.png' ) ?>">
            <p><b>Важно:</b> Объявить себя банкротом гражданин <b>ОБЯЗАН</b> тогда, когда его общий долг превышает 500 тысяч рублей, а рассчитаться
            со всеми  он не может. Невыполнение этого требования может повлечь административную и уголовную ответственность!
            </br>
            </br>
            Кроме того, вы можете объявить о своей несостоятельности при меньшем долге в том случае, когда рассчитаться со всеми кредитами в установленный срок невозможно</p>

            <img  class="check-bg" src="<?php  echo get_theme_file_uri( '/assets/images/check-bg-2.png' ) ?>">
          </div>

        </div>
        </div>

    </div>
</section>
<section id="OurService" >
  <div class="container relative">
      <div class="clearfix relative">
      <div class="col-md-6 service-col">
        <div class="ourServiceBlock">
            <img  src="<?php  echo get_theme_file_uri( '/assets/images/service1-2.jpg' ) ?>">
            <div class="service-text-block">
                <h3>Банкротство гражданина</h3>
                <a href="http://idgis.trekweb.ru/banlrotstvo-fl/">Узнать подробнее</a>
            </div>
        </div>
      </div>
      <div class="col-md-6 service-col service-col-nopadding">
        <div class="ourServiceBlock">
            <img  src="<?php  echo get_theme_file_uri( '/assets/images/service2-2.jpg' ) ?>">
            <div class="service-text-block">
                <h3>Банкротство ипотечника</h3>
                <a href="http://idgis.trekweb.ru/bankrotstvo-ipotechikov/">Узнать подробнее</a>
            </div>
        </div>
      </div>
      <div class="col-md-6 service-col">
        <div class="ourServiceBlock">
            <img  src="<?php  echo get_theme_file_uri( '/assets/images/service3-2.jpg' ) ?>">
            <div class="service-text-block">
                <h3>Банкротство поручителя</h3>
                <a href="http://idgis.trekweb.ru/bankrotstvo-poruchitelya/">Узнать подробнее</a>
            </div>
        </div>
      </div>
      <div class="col-md-6 service-col service-col-nopadding">
        <div class="ourServiceBlock">
            <img  src="<?php  echo get_theme_file_uri( '/assets/images/service4-2.jpg' ) ?>">
            <div class="service-text-block">
                <h3>Банкротство ИП</h3>
                <a href="http://idgis.trekweb.ru/bankrotstvo-ip/">Узнать подробнее</a>
            </div>
        </div>
      </div>
      <div class="title-our-service">Наши услуги</div>
      </div>
      <div class="col-md-12 relative">
          <img  src="<?php  echo get_theme_file_uri( '/assets/images/service5-2.jpg' ) ?>">
          <div class="service-text-block">
              <h3>Банкротство ООО</h3>
              <a href="#">Узнать подробнее</a>
          </div>
      </div>

  </div>
</section>
<section class="SendMessage  SendMessage-2">
    <div class="container relative">

      <?php

      $argsaction = array(
        'posts_per_page'   => -1,
        'post_type' => 'action'
      );

      $the_query = new WP_Query($argsaction);

        while( $the_query->have_posts() ) :
            $the_query->the_post();
            $post_id = $the_query->post->ID;

            //$img_url = wp_get_attachment_url( get_post_thumbnail_id($post_id) ,'full'); // Get img URL

      $ShowChecbox = get_post_meta($post_id, 'check_show', true);
      if($ShowChecbox){
          echo '
          <div class="title-section white">'.get_the_title($post_id).'</div>

          <p>'.get_the_content($post_id).'</p>

          ';

      }
        endwhile;
      ?>



    <?php echo do_shortcode('[contact-form-7 id="16" title="Untitled"]'); ?>
    <img src="<?php  echo get_theme_file_uri( '/assets/images/bg-send-2.png' ) ?>">
    </div>



</section>

<section id="SendClients">
  <div class="container relative">
      <div class="title-section center">Отзывы о работе <span class="red">нашей компании</span></div>
      <div class="slider-wallpaper-clients slick-slider">
        <?php

        $argsslideer2 = array(
          'posts_per_page'   => -1,
          'post_type' => 'clients'
        );

        $the_query_slider2 = new WP_Query($argsslideer2);

          while( $the_query_slider2->have_posts() ) :
              $the_query_slider2->the_post();
              $post_id_slider = $the_query_slider2->post->ID;
            $thumb   = get_post_thumbnail_id($post_id_slider);
            $img_url = wp_get_attachment_url( $thumb,'full'); // Get img URL
            $ImagesClient = rwmb_meta( 'images_meta', array( 'size' => 'full' ),$post_id_slider);
          //  $image   = aq_resize( $img_url, 1920, 720, true ); // Resize & crop img

          //	$image ? $image:$img_url;
          $CityClient = get_post_meta($post_id_slider, 'city_meta', true);

          echo '<div  class="slider-walpaper-client" >';

          foreach ($ImagesClient as $key => $value) {
              $value   = aq_resize( $value['full_url'], 173, 173, true );
                echo '<img src="'.$value.'">';
            break;
          }
                echo '
                <div class="slider-client-title">'.get_the_title($post_id_slider).'</div>
                <div class="client-city">'.$CityClient.'</div>
                <div class="slider-content-client">

                  '.my_string_limit_words(get_the_content($post_id_slider),20).'
                </div>
              </div>';
          endwhile;
        ?>


      </div>
      <div class="slider-nav-clients">
        <a href="#" class="slider-arrow-left"><span class="icon-left-open"></span></a>

        <a href="#" class="slider-arrow-right"><span class="icon-right-open"></span></a>
      </div>
      <div class="block-link-client"><a href="http://idgis.trekweb.ru/reviews/" class="link-client-more">Читать больше</a></div>
  </div>
</section>

<?php get_footer();
