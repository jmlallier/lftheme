<?php
/**
 * Template Name: Home Page
 */

// Custom Fields
$field = get_field('options');

get_header(); ?>

<?php get_template_part( 'template-parts/content', 'main' ); ?><!-- Pull 'Main' section for main page -->

<?php get_template_part( 'template-parts/content', 'navbar' ); ?><!-- Pull 'Navbar' section for main page -->

<?php //get_template_part( 'template-parts/content', 'topbutton' ); ?><!-- Pull 'topButton' section for main page -->

<?php 

if( (is_array($field) and in_array('portfolio', $field)) or 'portfolio' == $field){
 
    get_template_part( 'template-parts/content', 'main-portfolio' ); 

  }

?><!-- Pull 'Main-Portfolio' section for main page if user selects Portfolio section -->

<?php 

if( (is_array($field) and in_array('blog', $field)) or 'blog' == $field){

  get_template_part( 'template-parts/content', 'blog-draw' ); 

}

?><!-- Pull 'Blog-Draw' section for main page -->


<?php 

if( (is_array($field) and in_array('about', $field)) or 'about' == $field ){

    get_template_part( 'template-parts/content', 'about' );

  }

?><!-- Pull 'About' section for main page -->

<?php 

if( (is_array($field) and in_array('contact', $field)) or 'contact' == $field ){

    get_template_part( 'template-parts/content', 'contact' ); 

  }

?><!-- Pull 'Contact' section for main page -->

<?php
get_footer();