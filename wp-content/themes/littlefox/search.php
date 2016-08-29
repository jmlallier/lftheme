<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Little_Fox
 */

get_header(); ?>


<section id="main" data-type="background" data-speed="10" style="background: url('<?php header_image(); ?>') center center no-repeat fixed; background-size: cover;">
  <div class="container">
    <div class="header">
      <div class="headline-box">
        <h3><?php printf( esc_html__( 'Search Results for: %s', 'littlefox' ), '<em>' . get_search_query() . '</em>' ); ?></h3>
      </div><!-- .headline-box -->
    </div><!-- .header -->
  </div>
</section>




    <?php
    if ( have_posts() ) : ?>

      <div class="container" id="category-portfolio-container">

        <main id="content" class="columns is-multiline is-gapless">

    <?php if ( is_home() && !is_front_page() ) : ?>

    <header>
      <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
    </header>

   
    <?php
    endif; 
    /* Start the Loop */
    while ( have_posts() ) : the_post();

    /**
     * Run the loop for the search to output the results.
     */
    get_template_part( 'template-parts/content', 'search');

    endwhile;

    the_posts_navigation(); ?>
    
        </main><!-- #content -->

      </div><!-- .container -->

    <?php 
    else :

    get_template_part( 'template-parts/content', 'none' );
        
    endif; ?>

  

<?php
get_footer();
