<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Little_Fox
 */

get_header(); ?>

<div class="container">
  <div class="row" id="primary">
		<main id="content" class="twelve columns">

      <?php
      if ( have_posts() ) :

      if ( is_home() && ! is_front_page() ) : ?>
      <header>
        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
      </header>

      <?php
      endif;

      /* Start the Loop */
      while ( have_posts() ) : the_post();

      /*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
      get_template_part( 'template-parts/content', get_post_format() );

      endwhile;

      the_posts_navigation();

      else :

      get_template_part( 'template-parts/content', 'none' );

      endif; ?>

		</main><!-- #content -->
	</div><!-- #primary -->
</div><!-- .container -->

<?php
get_footer();
