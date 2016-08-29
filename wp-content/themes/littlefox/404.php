<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Little_Fox
 */

get_header(); ?>
<section id="main" data-type="background" data-speed="10" style="background: url('<?php echo header_image(); ?>') center center no-repeat fixed; background-size: cover;">
  <div class="container">
    <div class="header">
      <div class="headline-box">
        <h3><?php esc_html_e( 'It seems there is nothing here. Perhaps searching can help.', 'littlefox' ); ?></h3>
      </div><!-- .headline-box -->
    </div><!-- .header -->
    <p><?php
      get_search_form(); ?></p>
  </div>
</section>

<?php
get_footer();
