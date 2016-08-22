<?php
$frontpage_id = get_option( 'page_on_front' );
$main_title = get_post_meta( $frontpage_id, 'main_title', true );
$cover_image = get_field( 'cover_image' );
$cover_image_url = $cover_image['url'];
$main_headline_choice = get_field( 'main_headline_choice' );
$main_headline_text = get_field( 'main_headline_text' );
$main_logo_choice = get_field( 'main_logo_choice' );
$main_logo = get_field( 'main_logo' );
?>


<!-- MAIN 
===================================================== -->
<section id="main" data-type="background" data-speed="10" style="background: url('<?php echo $cover_image_url; ?>') center center no-repeat fixed; background-size: cover;">
 <div class="container">
  
  <?php if($main_logo_choice == 'yes' && !empty($main_logo)): ?> 
  <div class="header-title">
    <img src="<?php echo $main_logo['url']; ?>" alt="<?php echo $main_logo['alt']; ?>" class="main-page-logo" />
  </div><!-- .header-title -->
  <?php elseif($main_logo_choice == 'no' || empty($main_logo)): ?>
  <div class="header-title">
    <h1><a href="/"><?php echo $main_title; ?></a></h1>
  </div><!-- .header-title -->
  <?php endif; ?>
  <div class="header">
    <!-- <nav>
      <ul class="navigation inline-list" id="main-nav">
        <li><a href="/">Home</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="/blog">Blog</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>#main-nav
    </nav> --><!-- nav -->
    <?php if($main_headline_choice == 'no'): ?>
    <div class="headline-box">
      <h3><?php echo $main_headline_text; ?></h3>
    </div><!-- .headline-box -->
    <?php endif; ?>
  </div><!-- .header -->
  </div><!-- .container -->
</section><!-- #main -->