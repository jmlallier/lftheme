<?php
/**
 * The template for displaying tag pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Little_Fox
 */

get_header(); ?>

<section id="main" data-type="background" data-speed="10" style="background: url('<?php header_image(); ?>') center center no-repeat fixed; background-size: cover;">
  <div class="container">
    <div class="header">
      <div class="headline-box">
        <?php single_tag_title(); ?>
      </div><!-- .headline-box -->
    </div><!-- .header -->
  </div>
</section>
<div class="container" id="category-portfolio-container">
 
  <main id="content" class="columns is-multiline is-gapless">


    <?php
    if ( have_posts() ) :

    //if ( is_home() && !is_front_page() ) : ?>

    <header>
      <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
    </header>

    <?php
    

    /* Start the Loop */
    while ( have_posts() ) : the_post();

    /*
               * Include the Post-Format-specific template for the content.
               * If you want to override this in a child theme, then include a file
               * called content-___.php (where ___ is the Post Format name) and that will be used instead.
               */
    get_template_part( 'template-parts/content', 'thumbnail-post' );

    endwhile;

    the_posts_navigation();

    else :

    get_template_part( 'template-parts/content', 'none' );

    endif; ?>

    </div>

  </main><!-- #content -->

</div><!-- .container -->

<?php
get_footer();
