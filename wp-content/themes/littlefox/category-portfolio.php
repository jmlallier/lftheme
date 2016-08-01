<?php 
/**
* Portfolio Category Template
*/

get_header(); ?>


<div class="overview">
  <h1><?php single_cat_title(); ?></h1>
</div>



<!-- BLOG CONTENT 
===================================================== -->
<div class="container">
  <div class="row" id="primary">
    <main id="content" class="col-lg-12">

      <?php
      if ( have_posts() ) :

      //if ( is_home() && !is_front_page() ) : ?>
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
      get_template_part( 'template-parts/content', 'portfolio-post' );

      endwhile;

      the_posts_navigation();

      //else :

      //get_template_part( 'template-parts/content', 'none' );

      //endif; ?>

    </main><!-- #content -->

  </div><!-- #primary .row -->
</div><!-- .container -->


<?php
get_footer();