<!-- NAVBAR 
===================================================== -->
<div class="navbar-spacer"></div><!-- .navbar-spacer -->
<?php
wp_nav_menu( array(
  'theme_location' => 'primary',
  'container' => 'nav',
  'container_class' => 'navbar-fixed',
  'menu_class' => 'container navbar-list '

) );
?>
<!-- <nav class="navbar-fixed">
  <div class="container">
    <ul class="navbar-list">
      <li class="navbar-item"><a href="/" class="navbar-link">Home</a></li>
      <li class="navbar-item"><a href="#portfolio" class="navbar-link">Portfolio</a></li>
      <li class="navbar-item"><a href="blog" class="navbar-link">Blog</a></li>
      <li class="navbar-item"><a href="#about" class="navbar-link">About</a></li>
      <li class="navbar-item"><a href="#contact" class="navbar-link">Contact</a></li>
    </ul>.navbar-list
  </div>.container
</nav>nav.navbar-fixed -->