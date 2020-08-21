<?php

require_once "headersignup.php";

?>
      <div class="form-container">
        <form class="form-sign-up" action="includes/signup.inc.php" method="POST">
          <fieldset>
            <legend>Sign up</legend>
            <label for="name">Username: 
              <input id="name" name="uid" type="text" />
            </label>
            <label for="email">Email: 
              <input id="email" name="email" type="text" />
            </label>      
            <label for="password">Password: 
              <input id="password" name="pwd" type="password" /> <!-- Type=password to make the password invisible on the screen -->
            </label>
            <label for="password-repeat">Repeat Password: 
              <input id="password-repeat" name="pwdrpt" type="password" />
            </label>
          </fieldset>
          <fieldset>
            <legend>Would you like to receive our news letters?</legend>
            <label for="information-yes">
              <input type="radio" id="information-yes" name="newsletter" value="yes" />Yes please
            </label>
            <label for="information-no">
              <input type="radio" id="information-no" name="newsletter" value="no" checked />No thanks
            </label>
          </fieldset>
         <!--  <button type="submit" name="submit" />Sign Up</button> -->
          <button class="btn" type="submit" name="submit" />Sign Up</button>
        </form>
        <?php
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "none") {
              echo "<p>Sign up successful</p>";
            }
            if ($_GET["error"] == "usernametaken") {
              echo "<p>Username already taken</p>";
            }
          }
        ?>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6074228.9102497725!2d-80.99752127500001!3d41.9802679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d00919866dcbdd%3A0xed634e3932453a82!2sFWF%20Wellness!5e0!3m2!1sen!2suk!4v1589037375198!5m2!1sen!2suk"width="100%" height="450" style="border:0" allowfullscreen></iframe>
      <footer>
        <div class="footer-container">
          <div class="to-top">
            <a href="#"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
          </div>
          <div class="footer-info">
            <div class="footer-info-about animate-top">
              <h4>Fit with Friends </h4>
              <p> Gain confidence. Get stronger. Meet people. Improve your wellbeing. <br>
                  Celebrate your success together and most important of all...<br>
                   HAVE FUN </p>
            </div>
            <div class="footer-info-separate animate-bottom">
              <div class="social-list">
                <h4>Follow us</h4>
                <ul class="social-items">
                  <li> <!-- https://fontawesome.com/v4.7.0/icons/ -->
                    <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </li>
                </ul>
              </div>

              <div class="newsletter-sign">
                <h4>Newsletter</h4>
                <form action="" class="newsletter-form">
                  <input type="text" name="newsletter-input" placeholder="Your email address...">
                  <button class="newsletter-btn" type="submit">
                  <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- <small>&copy; 2019. Ludvig Siljeholm 07392851400</small>
        <a href="mailto:ludvig_siljeholm@hotmail.com"><small>Email Ludvig Siljeholm</small></a> -->
      </footer>
      <img src="images/powder.jpeg" alt="powder" class="powder-img"> 
    </div>
  </body>
</html>

