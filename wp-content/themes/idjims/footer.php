<?php global $city; ?>

		</div><!-- #content -->

		<footer  class="site-footer" >
			<div class="container">
			<div class="top-hedaer-block">
					<div id="logo">
						<a href="<?php echo home_url(); ?>" >
							<img src="<?php  echo get_theme_file_uri( '/assets/images/logo-a-1.png' ) ?>" alt="Logo">
							<!-- <div>ИДЖИС</div> -->
							<p>Живи без долгов</p>
						</a>
					</div>
					<div class="center-top-heder">
					<div class="center-top-heder-bre">

							<div class="center-top-heder-walpaper clearfix">
									<img src="<?php  echo get_theme_file_uri( '/assets/images/cal-a-2.png' ) ?>">
									<div class="center-top-heder-holder">

									<p>Время работы</p>
									<div>с 9:00 до 17:00</div>

								</div>
							</div>
								<div  class="center-top-heder-walpaper clearfix">
									<img src="<?php  echo get_theme_file_uri( '/assets/images/phone-a-2.png' ) ?>">
									<div class="center-top-heder-holder">
									<p>Звоните нам</p>
									<div><a href="tel:88007079863">8 800 707 98 63</a><span class="center-top-heder-holder__freecall">(звонок бесплатный)</span></div>
									<!-- <div class="callibri"><a href="tel:+79235374767">8 923 537 47 67</a></div> -->
									<!--<div class="last"><a href="tel:88007079863">8 800 707 98 63</a></div>-->
									</div>
								</div>

					</div>
					</div>
					<div class="right-top-header">
						<a href="#" class="btn btn-link-modal">
								<div>Оставить заявку</div>
								<p>Мы перезвоним Вам</p>
						</a>
					</div>
			</div><!-- end top hedaer-->
			</div><!-- end container-->
			<div class="bottom-header clearfix">
				<div class="container">
					<div class="bottom-header-wallpaper">
						 <ul class="footer-block-list clearfix">
							 <li><?= $city['address']; ?></li>
							 <li>e-mail:<a href="mailto:aegis@xn--d1aeec9b.xn--p1ai">aegis@иджис.рф</a></li>
							 <li>ООО "Иджис", ОГРН 1174205021407</li>
						 </ul>
						 <ul class="social-top clearfix">
							 <li><a href="https://vk.com/bankruptcy42" target="_blank"><i class="icon-vkontakte"></i></a></li>
							 <li><a href="#"><i class="icon-facebook"></i></a></li>
							 <li><a href="https://ok.ru/group/55245396115708" target="_blank"><i class="icon-odnoklassniki"></i></a></li>
						 </ul>
					</div>
				</div><!-- end container-->
			</div><!-- end bottom header-->
            <!-- Go To Top -->
            <a id="back_to_top" href="#">
			<span>
				<svg   width="23" height="23" viewBox="0 0 23 23">
                <path fill="#fff" d="M12.313 8.107l-0.813-0.813-6.506 6.506 1.626 1.626 4.879-4.878 4.879 4.878 1.626-1.626z"></path>
                </svg>
			</span>
            </a>
			<p class="footer-oth" ><a target="_blank" title="Перейти на сайт разработчика" href="http://asmart-group.ru/">Сайт создан в  IT-Company ASMART</a></p>
		</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;subset=cyrillic" rel="stylesheet">
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48236498 = new Ya.Metrika({
                    id:48236498,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48236498" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script data-skip-moving="true">
        (function(w,d,u){
                var s=d.createElement('script');s. async=1;s.src=u+'?'+(Date.now( )/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode. insertBefore(s,h);
        })(window,document,'https://cdn.bitrix24.ru/b6697771/crm/site_button/loader_2_f7w4ye.js');
</script>
<script src="//cdn.callibri.ru/callibri.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>
