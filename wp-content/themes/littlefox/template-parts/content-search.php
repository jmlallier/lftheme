<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Little_Fox
 */

?>
<?php if ( has_post_thumbnail() ) { // check for feature image ?>
<div class="column is-half-desktop">
  <a href="<?php echo esc_url( get_permalink($post->ID) ) ?>"><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="category-portfolio-title title">
      <?php the_title(); ?>
    </div>
    <div class="portfolio-post-image">
      <?php the_post_thumbnail(); ?>
    </div><!-- .post-image -->

    </article></a><!-- #post-## -->
</div>
<?php } ?>