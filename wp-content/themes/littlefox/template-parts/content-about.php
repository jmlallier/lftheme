<?php 
$about_us_title = get_field('about_us_title');
$about_us_content = get_field('about_us_content');
?>


<!-- ABOUT
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<section id="about">
  <div class="container">
      <div class="header-title">
        <h1><?php echo $about_us_title; ?></h1>
      </div><!-- .header-title -->
      <?php echo $about_us_content; ?>
  </div><!-- .container -->
</section><!-- #about -->