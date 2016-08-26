<?php
/**
* The header for our theme.
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Little_Fox
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <title><?php wp_title('', true, ''); ?></title>
<meta name="description" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- FONT
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
<?php wp_head(); ?><!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body <?php body_class(); ?>>
<?php 
if(!is_front_page()){
get_template_part( 'template-parts/content', 'navbar' ); // Pull in Navbar ?>
<div id="page" class="hfeed site"><a href="#content" class="skip-link screen-reader-text"><?php _e( 'Skip to content', 'littlefox' ); ?></a>
<?php 
} else { ?>
<div id="page" class="hfeed site"><a href="#content" class="skip-link screen-reader-text"><?php _e( 'Skip to content', 'littlefox' ); ?></a>
<?php } ?>