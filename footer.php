<?php

wp_footer();

?>

<footer class="footer">
      <div class="footer__brand">
        <div class="footer_brand__icon center">
          <img src="<?php echo (get_template_directory_uri(). '/assets/images/footer__logo.png') ?>" alt="Logo" />
          <span>Lawliet</span>
        </div>
      </div>
      <div class="footer__content center">
        <div>
          <h3>Product</h3>
          <ul>
            <li>Overview</li>
            <li>Features</li>
            <li>Tutorials</li>
            <li>Pricing</li>
            <li>Releases</li>
          </ul>
        </div>
        <div>
          <h3>Company</h3>
          <ul>
            <li>About</li>
            <li>Press</li>
            <li>Careers</li>
            <li>Contact</li>
            <li>Partners</li>
          </ul>
        </div>
        <div>
          <h3>Support</h3>
          <ul>
            <li>Help Center</li>
            <li>Terms of service</li>
            <li>Legal</li>
            <li>Privacy Policy</li>
            <li>Status</li>
          </ul>
        </div>
      </div>
    </footer>
    <section class="copyright center">
      <span>© 2021 Lawliet. All rights reserved</span>
      <div>
        <img src="<?php echo (get_template_directory_uri(). '/assets/images/insta__logo.png') ?>" alt="Instagram Logo" />
        <img src="<?php echo (get_template_directory_uri(). '/assets/images/social__logo.png') ?>" alt="Social Logo" />
        <img src="<?php echo (get_template_directory_uri(). '/assets/images/twitter__logo.png') ?>" alt="Twitter Logo" />
        <img src="<?php echo (get_template_directory_uri(). '/assets/images/youtube__logo.png') ?>" alt="Youtube Logo" />
      </div>
    </section>
  </body>
</html>