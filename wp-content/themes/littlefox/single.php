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
<section id="main" data-type="background" data-speed="10" style="background: url('<?php the_post_thumbnail_url(); ?>') center center no-repeat fixed; background-size: cover;">
  <div class="container">
    <div class="header">
      <div class="headline-box">
        <h3><?php the_title(); ?></h3>
      </div><!-- .headline-box -->
    </div><!-- .header -->
  </div>
</section>
<div class="container" id="primary">
  <main id="content" >
    <div class="columns">
       <div class="column">  
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          
          <?php
            while ( have_posts() ) : the_post();

              get_template_part( 'template-parts/content-single', get_post_format() );


              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;

            endwhile; // End of the loop.
          ?>

        </article><!-- #post-## -->

      </div>
    </div>
  </main><!-- #content 10 columns offset by one -->
</div><!-- .container -->

<?php
get_footer();
