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

    if ( 'post' === get_post_type() ) : ?>

    <div class="post-details">
      <i class="fa fa-user"></i> <?php print get_the_author(); ?>
      <i class="fa fa-clock-o"></i> <?php the_date(); ?>
      <?php if(has_category()) { ?> <i class="fa fa-folder"></i> <?php the_category(', '); } ?>
      <?php if(has_tag()) { ?><i class="fa fa-tag"></i> <?php the_tags('', ', ', ''); } ?>
      <?php edit_post_link('Edit', '<i class="fa fa-pencil"></i> '); ?><!-- if logged in, option to edit -->
      <div class="post-comments-badge"><a href="<?php print get_comments_link( $post->ID ); ?>"><i class="fa fa-comments"></i> <?php comments_number( '0', '1', '%' ); ?></a></div><!-- .post-comments-badge -->
      
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