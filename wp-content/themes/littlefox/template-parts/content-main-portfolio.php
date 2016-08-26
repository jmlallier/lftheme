<?php 
$frontpage_id = get_option( 'page_on_front' );
$portfolio_title = get_post_meta( $frontpage_id, 'lf_mp_portfolio_title', true );
/**
 * Sample template tag function for outputting a cmb2 file_list
 *
 * @param  string  $file_list_meta_key The field meta key. ('wiki_test_file_list')
 * @param  string  $img_size           Size of image to show
 */
function lf_output_mp_portfolio_images( $portfolio_images_key, $img_size = 'small' ) {
  global $frontpage_id;
  // Get the list of images
  $images = get_post_meta( $frontpage_id, $portfolio_images_key, 1 );
  

  // Loop through them and output an image
  foreach ( (array) $images as $attachment_id => $attachment_url ) {
    echo '<li>';
    echo wp_get_attachment_image( $attachment_id, $img_size );
    echo '</li>';
  }
}

?>

<!-- PORTFOLIO
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<section id="portfolio" class="container">
    <div class="header-title">
      <h1><?php echo $portfolio_title; ?></h1>
    </div><!-- .header-title -->
    <ul id="gallery-container" class="tiles-wrap">
      <?php lf_output_mp_portfolio_images( 'lf_mp_portfolio_images', 'small'); ?>

      
    </ul>
</section><!-- #portfolio -->