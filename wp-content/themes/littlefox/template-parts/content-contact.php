<?php 
$contact_title = get_post_meta( 5, 'contact_title', true );
$contact_text = get_post_meta( 5, 'contact_text', true );
$contact_bg = get_field( 'contact_bg' );
$contact_choice = get_field( 'contact_bg_choice' );
$contact_bg_image = get_field( 'contact_bg_image' );
$contact_bg_color = get_field( 'contact_bg_color' );
?>

<!-- CONTACT
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php
  if( ($contact_bg == 'yes' && $contact_choice == 'image') && !empty($contact_bg_image)):
?>

  <section id="contact" data-type="background" data-speed="10" style="background: url('<?php echo $contact_bg_image['url']; ?>') ;" >

<?php
    elseif(($contact_bg == 'yes' && $contact_choice == 'color') && !empty($contact_bg_color)): 
?>
  
    <section id="contact" data-type="background" data-speed="10" style="background: none; background-color: #<?php echo $contact_bg_color; ?>; ">
   
<?php else: ?>
      
      <section id="contact" data-type="background" data-speed="10" style="background: url('/wp-content/themes/littlefox/assets/img/Textures/pink_cup.png'); " >
  
<?php endif; ?>
   
   <div class="container">
      <div class="header-title">
        <h1><?php echo $contact_title; ?></h1>
      </div><!-- .header-title -->
      <?php echo $contact_text; ?>
      
      <?php echo do_shortcode( '[contact-form-7 id="7" title="Main Page Contact"]' ); ?>

  </div><!-- .container -->
</section><!-- #contact -->


<!-- <label class="label">From</label>
<div class="control is-horizontal">
  <div class="control is-grouped">
    <p class="control is-expanded">
      [text* first-name class:input id:first-name placeholder"Joanna"]
    </p>
    <p class="control is-expanded">
      [text* last-name class:input id:last-name placeholder"Doe"]
    </p>
  </div>
</div>
<label class="label">Email</label>
<div class="control">
    <p class="control is-fullwidth">
      [email* email class:input id:email placeholder"yourname@gmail.com"]
    </p>
</div>
<label class="label">Message</label>
<div class="control">
  <p class="control is-fullwidth">
    [textarea* message class:textarea id:message placeholder"Reach out to us!"]
  </p>
</div>
<p class="control">
  [submit id:main-submit "Submit"]
</p> -->