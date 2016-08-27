<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Little_Fox
 */
$frontpage_id = get_option( 'page_on_front' );
$options = get_post_meta($frontpage_id, 'options', true );

?>

<!-- FOOTER 
===================================================== -->
<?php if((is_array($options) && in_array('footer', $options)) || (is_string($options) && $options == 'footer') ) { ?>
<footer>
  <div class="container">
    <div class="columns">
      <?php dynamic_sidebar( 'footer-widgets' ); ?>
    </div>
  </div>
</footer>
<?php } ?>	

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
