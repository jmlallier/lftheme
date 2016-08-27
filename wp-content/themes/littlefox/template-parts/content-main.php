<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo_image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>


<!-- MAIN 
===================================================== -->
<section id="main" data-type="background" data-speed="10" style="background: url('<?php header_image(); ?>') center center no-repeat fixed; background-size: cover;">
 <div class="container">
  
  <?php if( function_exists( 'the_custom_logo' ) && !empty($logo_image)): ?> 
  <div class="header-title">
    <img src="<?php echo $logo_image[0]; ?>" alt="Logo" class="main-page-logo" />
  </div><!-- .header-title -->
  <?php else : ?>
  
  
  <div class="header">
    <div class="header-title">
      <h1><a href="/"><?php echo get_bloginfo( 'name', 'display' ); ?></a></h1>
    </div><!-- .header-title -->
    <div class="headline-box">
      <h3><?php echo get_bloginfo( 'description', 'display' ); ?></h3>
    </div><!-- .headline-box -->
  </div><!-- .header -->
   <?php endif; ?>
  </div><!-- .container -->
</section><!-- #main -->