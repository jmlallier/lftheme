
<?php
$blog_headline = get_field( 'blog_headline' );
$blog_bg = get_field( 'blog_bg' );
$blog_choice = get_field( 'blog_bg_choice' );
$blog_bg_image = get_field( 'blog_bg_image' );
$blog_bg_color = get_field( 'blog_bg_color' );
?>

<!-- BLOG
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php
if( ($blog_bg == 'yes' && $blog_choice == 'image') && !empty($blog_bg_image)):
?>

  <section id="blog" data-type="background" data-speed="10" style="background: url('<?php echo $blog_bg_image['url']; ?>') ;" >

<?php
    elseif(($blog_bg == 'yes' && $blog_choice == 'color') && !empty($blog_bg_color)): 
?>

  <section id="blog" data-type="background" data-speed="10" style="background: none; background-color: #<?php echo $blog_bg_color; ?>; ">

<?php else: ?>

    <section id="blog" data-type="background" data-speed="10" style="background: url('/wp-content/themes/littlefox/assets/img/Textures/grey_cup.png'); " >

<?php endif; ?>
      
      
    
  <div class="container">
    <div class="row">
      <div class="headline-box" id="blog-headline">
        <a href="/blog"><h3><?php echo $blog_headline; ?></h3></a>
      </div><!-- .headline-box -->
    </div><!-- .row -->
  </div><!-- .container -->
</section><!-- #blog -->