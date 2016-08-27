<?php 
/**
* Portfolio Category Template
*/

get_header(); ?>


<!-- BLOG CONTENT 
===================================================== -->
<?php 
  $frontpage_id = get_option( 'page_on_front' );
  $header_image = get_field( 'p_header_image', $frontpage_id );
  $header_title = get_field( 'p_header_title', $frontpage_id );
?>
<section id="main" data-type="background" data-speed="10" style="background: url('<?php echo $header_image; ?>') center center no-repeat fixed; background-size: cover;">
  <div class="container">
    <div class="header">
      <div class="headline-box">
        <h3><?php echo $header_title; ?></h3>
      </div><!-- .headline-box -->
    </div><!-- .header -->
  </div>
</section>
<div class="container" id="category-portfolio-container">
  <!-- <h1 class="has-text-centered title is-1" id="portfolio-title"><?php //single_cat_title(); ?></h1> -->
  <main id="content" class="columns is-multiline is-gapless">


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

      </div>

  </main><!-- #content -->

</div><!-- .container -->


<?php
get_footer();