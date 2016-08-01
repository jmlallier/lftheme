<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Little_Fox
 */

get_header(); ?>


<!-- BLOG CONTENT 
===================================================== -->
<div class="container">
  <div class="row" id="primary">
    <main id="content" class="twelve columns">

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
    
      </article><!-- #post-## -->

    </main><!-- #content 10 columns offset by one -->
  </div><!-- .row #primary -->
</div><!-- .container -->

<?php
get_footer();
