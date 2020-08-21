<?php

require_once "header.php";

?>
      <div class="form-container">
        <form class="form-log-in" action="includes/logout.inc.php" method="POST">
          <fieldset>
            <legend>Log out</legend>
          <button type="submit" name="submit" >Log out</button>
        </form>
      </div>
      <img src="images/couplefit.jpeg" alt="couple" class="couple-fit"> 
      <footer>
        <div class="footer-container">
          <div class="to-top">
            <a href="#"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
          </div>
          <div class="footer-info">
            <div class="footer-info-about animate-top">
              <h4>Fit with Friends </h4>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
      <img src="images/powder.jpeg" alt="couple" class="couple-fit">
    </div>
  </body>
</html>

