<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Little_Fox
 */

?>
<div class="column is-half-desktop">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if ( has_post_thumbnail() ) { // check for feature image ?>
  
  <div class="portfolio-post-image">
    
    
      
    <?php echo '<a href="' . get_permalink($post->ID) . '" >';
      the_post_thumbnail();
      echo '</a>'; ?>
    <div class="overlay">
      <?php the_title( '<a href="' . esc_url( get_permalink() ) . '" class="info" rel="bookmark">', '</a>' ); ?>
    </div>
    
  </div><!-- .post-image -->
  <?php } ?>
</article><!-- #post-## -->
</div>