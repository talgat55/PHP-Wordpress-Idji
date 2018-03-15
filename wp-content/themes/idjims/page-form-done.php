<?php
/**
 *  Template Name: Page form done
 */

get_header(); ?>

<div class="breadscrumb" >
	<div class="container">
		<h1 class="title-section service center-white ">Ваш документ успешно сформирован</h1>
	</div>
</div>
<div class="wrap">

    <?php
		$url = $_SERVER['REQUEST_URI'];
		$parts = parse_url($url);
		parse_str($parts['query'], $query);
		//var_dump($query);


     ?>
		 <div class="container">

				<div class="done-generate-form-walp">
					<a target="_blank" href="<?php  echo get_theme_file_uri( '/inc/redypdf/'.$query["file"].'' ); ?>  " class="btn btn-form-page-gen-doc"> Сохранить документ</a>
					<a href="<?php echo LinksTheme('user-doc'); ?>" class="btn btn-form-page-gen-doc">Сформировать новый</a>
				</div>
		 </div>

</div><!-- .wrap -->

<?php get_footer();
