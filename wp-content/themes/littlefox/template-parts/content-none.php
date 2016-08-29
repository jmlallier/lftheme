<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Little_Fox
 */

?>

<section id="content-none" class="has-text-centered">
  <?php
  if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

    <p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'littlefox' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

  <?php elseif ( is_search() ) : ?>

    <p><?php printf( esc_html__( 'It seems like there are no posts matching your search for %s. Try searching for something else.', 'littlefox' ), '<em>' . get_search_query() . '</em>' ); ?></p>
    <?php
      get_search_form();

  else : ?>

    <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'littlefox' ); ?></p>
    <?php
      get_search_form();

  endif; ?>
</section><!-- .no-results -->
