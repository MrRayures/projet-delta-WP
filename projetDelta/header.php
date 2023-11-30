<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/app.css" type="text/css" media="screen" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>

  <header class="c-header" role="banner">
		<div class="c-container">
		  <div class="c-header__content">
		  	<a href="https://www.facebook.com/Deathfacecharenteairsoft" class="c-header__logo">
          Death Face Charente
		  	</a>
	    </div>
	  </div>
	</header><!-- //END Header  -->

	<div id="content" class="site-content">
