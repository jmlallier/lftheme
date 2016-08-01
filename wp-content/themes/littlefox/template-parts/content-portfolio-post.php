<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Little_Fox
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php
    if ( is_single() ) {
      the_title( '<h3 class="entry-title">', '</h3>' );
    } else {
      the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
    }

    if ( 'post' === get_post_type() && is_author() ) : ?>

    <div class="post-details">
      <i class="fa fa-user"></i> <?php the_author(); ?>
      <i class="fa fa-clock-o"></i> <?php the_date(); ?>
      <i class="fa fa-folder"></i> <?php the_category(', '); ?>
      <i class="fa fa-tag"></i> <?php the_tags('', ', ', ''); ?>
      <div class="post-comments-badge"><a href="<?php echo get_comments_link( $post->ID ); ?>"><i class="fa fa-comments"></i> <?php comments_number( '0', '1', '%' ); ?></a></div><!-- .post-comments-badge -->
      
      <?php edit_post_link('Edit this post', '<div><i class="fa fa-pencil"></i> ', '</div>'); ?><!-- if logged in, option to edit -->
    </div><!-- .post-details -->  

    <?php
    endif; ?>
  </header><!-- .entry-header -->


  <?php if ( has_post_thumbnail() ) { // check for feature image 
  if ( is_single() ) { ?>
<div class="post-image">
  <?php echo the_post_thumbnail(); ?>
    </div>
  <?php } else { ?>
  <div class="post-image">
    <?php echo '<a href="' . get_permalink($post->ID) . '" >';
    the_post_thumbnail();
    echo '</a>'; ?>
  </div><!-- .post-image -->
  <?php }} ?>

  <div class="post-excerpt">
    <?php if ( is_single()) { 
        the_content(); 
      } else { 
        the_excerpt(); 
      } 
    ?>
  </div><!-- .post-excerpt -->
</article><!-- #post-## -->