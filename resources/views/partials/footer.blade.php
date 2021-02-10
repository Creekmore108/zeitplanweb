<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-info">
          <img src="img/ZeitplanLogoV3.png" alt="Zeitplans.com" width="50" height="50" >
          <p>{{ $settings['footer_description'] ?? '' }}</p>
        </div>


        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
            <li><i class="fa fa-angle-right"></i> <a  href="#about" class="about-btn scrollto">About us</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#faq" class="about-btn scrollto">FAQ</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#price" class="about-btn scrollto">Pricing</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#features" class="about-btn scrollto">Features</a></li>
            
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Request a new feature</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

        <div class="col-lg-3 col-md-6 footer-contact">
          <h4>Contact Us</h4>
          <p>
            {!! $settings['footer_address'] ?? '' !!}<br>
            <strong>Phone:</strong> (720) 688-9234<br>
            <strong>Email:</strong> Zeitplans@gmail.com<br>
          </p>

          <div class="social-links">
            <!-- <a href="{{ $settings['footer_twitter'] ?? '' }}" class="twitter"><i class="fa fa-twitter"></i></a> -->
            <a href="{{ $settings['footer_facebook'] ?? '' }}" class="facebook" target="top"><i class="fa fa-facebook"></i></a>
            <a href="{{ $settings['footer_instagram'] ?? '' }}" class="instagram" target="top"><i class="fa fa-instagram"></i></a>
            <!-- <a href="{{ $settings['footer_googleplus'] ?? '' }}" class="google-plus"><i class="fa fa-google-plus"></i></a> -->
            <!-- <a href="{{ $settings['footer_linkedin'] ?? '' }}" class="linkedin"><i class="fa fa-linkedin"></i></a> -->
          </div>

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong>{{ env('APP_NAME', 'Zeitplans.com') }}</strong>. All Rights Reserved
    </div>
   <!--  <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div> -->
  </div>
</footer><!-- #footer -->
