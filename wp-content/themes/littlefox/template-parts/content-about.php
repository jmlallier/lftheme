<?php 
$about_us_title = get_field('about_us_title');
$about_us_content = get_field('about_us_content');
?>


<!-- ABOUT
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="header-title">
        <h1><?php echo $about_us_title; ?></h1>
      </div><!-- .header-title -->
      <?php echo $about_us_content; ?>

      <!--
      <p>We're a husband and wife team, passionate about doing life together. Our style is <strong>natural light</strong> and <strong>photojournalistic</strong>. We love travel and <span style="border-bottom:1px solid #000;">adventure</span>. Lorem ipsum dolor sit amet, zril aliquid duo in. Ex copiosae postulant sea. Ex has probo cetero. Mea ad clita gloriatur, ut nostrud ponderum vis. No sumo meliore nominavi usu, ius an molestie gloriatur definiebas.</p>
      <img src="<?php //bloginfo('stylesheet_directory'); ?>/assets/img/JohnMichaelAngelique-81.jpg" alt="">
      <p>Lorem ipsum dolor sit amet, zril aliquid duo in. Ex copiosae postulant sea. Ex has probo cetero. Mea ad clita gloriatur, ut nostrud ponderum vis. No sumo meliore nominavi usu, ius an molestie gloriatur definiebas. Quem tritani quo no, commodo tractatos est in. Augue epicuri iudicabit ex nec, case primis essent ne eum. Ut oblique adipiscing usu, odio decore vivendo ad his. Agam tincidunt qui te, idque harum eam in, stet purto propriae ut est. Vim doming deleniti hendrerit in, eam ad veniam ubique nominati.</p>
-->
    </div><!-- .row -->
  </div><!-- .container -->
</section><!-- #about -->