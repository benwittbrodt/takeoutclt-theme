<footer class="site-footer">

    <div class="site-footer__inner container container--narrow">

      <div class="group">

        <div class="site-footer__col-one">
          <h1 class="school-logo-text school-logo-text--alt-color"><a href="<?php echo site_url() ?>"><strong>Take Out</strong> CLT</a></h1>
          <style>
            p{
              margin-bottom: 5px;
            }
            .icon{
              font-size: 1.4rem;
              margin-right: 5px;
            }
          </style>
          <p><a href="https://www.benwittbrodt.com" class= "site-footer__link">Built by: Ben Wittbrodt</a></p>
          <a href="https://www.facebook.com/benwittbrodt" class="site-footer__link icon"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/benwittbrodt/" target="_blank" class="site-footer__link icon"><i class="fa fa-instagram" aria-hidden="true"></i>
          <a href="https://www.linkedin.com/in/benwittbrodt/" class="site-footer__link icon"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          <a href="https://www.twitter.com/btwittbrodt" class="site-footer__link icon"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>

        <div class="site-footer__col-two-three-group">
          <div class="site-footer__col-two">
            <h3 class="headline headline--small">Explore</h3>
            <nav>
              <ul class="nav-list min-list">
                <li><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
                <li><a href="<?php echo site_url('/restaurants') ?>">Restaurants</a></li>
                <li><a href="<?php echo site_url('/neighborhoods') ?>">Neighborhoods</a></li>
                <li><a href="<?php echo site_url('/cuisine') ?>">Cuisines</a></li>
              </ul>
            </nav>
          </div>

          <div class="site-footer__col-three">
            <h3 class="headline headline--small">Submit</h3>
            <nav>
              <ul class="nav-list min-list">
                <li><a href="<?php echo site_url('/contact') ?>">Submit a new place</a></li>
                <li><a href="<?php echo site_url('/map') ?>">Map</a></li>
                <!-- <li><a href="#">Careers</a></li> -->
              </ul>
            </nav>
          </div>
        </div>

        <div class="site-footer__col-four">
          <h3 class="headline headline--small">Follow and share</h3>
          <nav>
            <ul class="min-list social-icons-list group">
              <li><a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <!-- <li><a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
              <!-- <li><a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li> -->
              <!-- <li><a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li> -->
              <li><a href="https://www.instagram.com/takeoutclt/" target="_blank" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
            <ul class="min-list social-icons-list group">
            <li><a style="margin-top:10px; padding:5px; font-size:1rem" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=DR29U5834Y5NW&source=url" target="_blank" class="social-color-donate">Support site development with a donation</a></li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>