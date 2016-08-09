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
      <!-- <div class="column is-one-third">
        <div class="footer-about">
          <h5>About Us</h5>
          <p>
            John-Michael and Angélique, a husband and wife creative team with... Lorem ipsum dolor sit amet, zril aliquid duo in. Ex copiosae postulant sea. Ex has probo cetero. Mea ad clita gloriatur, ut nostrud ponderum vis. No sumo meliore nominavi usu, ius an molestie gloriatur definiebas. 
          </p>
        </div>
      </div>
      <div class="column is-one-third">
        <div class="news">
          <h5>Sign up for news + updates</h5>
          <p class="control has-addons">
            <input type="text" class="input">
            <button class="button">></button>
          </p>
           <form>
            <label for=""></label>
            <input type="search" placeholder="Your email address">
            <button type="submit">></button>
          </form>
        </div>
        <div class="social">
          <h5>Get Social</h5>
          <ul class="social-buttons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="column is-one-third">
        <div class="latest-posts">
          <h5>Latest Posts</p>
          <ul class="latest">
            <li><a href="#">Blog One</a></li>
            <li><a href="#">Blog Two</a></li>
            <li><a href="#">Another Blog Post</a></li>
            <li><a href="#">One More Blog Post</a></li>
            <li><a href="#">A Post On Our Blog</a></li>
            <li><a href="#">Another Post</a></li>
          </ul>
        </div>
      </div> -->
    </div>
  </div>
</footer>
<?php } ?>	

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
