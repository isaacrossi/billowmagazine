<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package billowmagazine
 */

?>

  <footer class="accent-bg">

    <div  class="center container flex flex-column flex-row-l tc tl-l justify-between ph4 ph6-l pv4 ">

      <div>

        <a href="<?php echo home_url(); ?>">
          <img class="footer-logo mb2 mb3-ns" src="<?php echo get_template_directory_uri() . '/images/logo.svg'; ?>">
        </a>
        
        <nav class="flex flex-row items-end justify-start-l justify-center">
          <a href="https://www.youtube.com/" class="mr2"><img src="<?php echo get_template_directory_uri() . '/images/youtube.svg'; ?>" ></a>
          <a href="https://www.instagram.com/?hl=en" class="mr2"><img src="<?php echo get_template_directory_uri() . '/images/instagram.svg'; ?>"></a>
          <a  href="mailto: billowmag@gmail.com"><img src="<?php echo get_template_directory_uri() . '/images/email.svg'; ?>"></a>
        </nav>

        <p class="editorial f5 light ma0 mt3 lh-copy center-m mb4">Billow Magazine 2022 © <br> All Rights Reserved</p>

        </div>

        <div>
        <p class="gothic light f3 ma0 mb2 mb3-ns">Continents</p>
        <p class="editorial light f5 ma0 mb2">Oceania</p>
        <p class="editorial light f5 ma0 mb2">Asia</p>
        <p class="editorial light f5 ma0 mb2">South America</p>
        <p class="editorial light f5 ma0 mb2-l mb4">North America</p>
        </div>

        <div>
        <p class="gothic light f3 ma0 mb2 mb3-ns">About</p>
        <p class="about-text editorial light f5 ma0 mb2 lh-copy center-m">We're on a mission to help you live a more fulfilled life by sharing wicked experiences from around the globe.</p>
      </div>

    </div>

  </footer>

  <?php wp_footer(); ?>

  </div>

</body>

</html>
