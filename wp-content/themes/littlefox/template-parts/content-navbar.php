<!-- NAVBAR 
===================================================== -->
<div class="navbar-spacer"></div><!-- .navbar-spacer -->

 <nav class="navbar primary-nav" role="navigation">
  <div class="container">
     <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="<?php echo home_url(); ?>" class="navbar-brand"><?php bloginfo('name'); ?></a>
     </div>
      <?php
      wp_nav_menu( array(
        'menu' => 'primary',
        'theme_location' => 'primary',
        'depth' => 2,
        'container' => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id' => 'primary-nav',
        'menu_class' => 'nav navbar-nav navbar-list',
        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
        'walker' => new wp_bootstrap_navwalker()

      ) );
      ?>

  </div>
</nav>
<!-- <nav class="navbar">
  <div class="container">
    
    
    <ul class="navbar-list">
      <li class="navbar-item"><a href="/" class="navbar-link">Home</a></li>
      <li class="navbar-item"><a href="#portfolio" class="navbar-link">Portfolio</a></li>
      <li class="navbar-item"><a href="blog" class="navbar-link">Blog</a></li>
      <li class="navbar-item"><a href="#about" class="navbar-link">About</a></li>
      <li class="navbar-item"><a href="#contact" class="navbar-link">Contact</a></li>
    </ul>.navbar-list
  </div>.container
</nav>nav.navbar -->

