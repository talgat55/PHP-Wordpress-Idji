<?php
/**
 *  Template Name: Login Page
 */

get_header(); ?>
<?php

 $ValueForHash = wp_create_nonce('ASMART');

 ?>

<div class="wrap">
	<div class="container">
		<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
     <div class="login-form">
         <div class="form-group">
             <input name="login_name" type="text" class="form-control login-field" value="" placeholder="Username" id="login-name" />
             <label class="login-field-icon fui-user" for="login-name"></label>
         </div>

         <div class="form-group">
             <input  name="login_password" type="password" class="form-control login-field" value="" placeholder="Password" id="login-pass" />
             <input  name="_crsf" type="hidden" value="<?php echo $ValueForHash; ?>" />
             <label class="login-field-icon fui-lock" for="login-pass"></label>
         </div>
         <input class="btn btn-primary btn-lg btn-block" type="submit"  name="login_submit" value="Войти" />
         </div>
 		 </form>
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
