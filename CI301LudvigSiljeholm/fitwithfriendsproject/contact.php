<?php

require_once "headercontact.php";

?> 
      <div class="form-container"> 
        <form class="form-contact"> <!-- https://www.w3schools.com/html/html_forms.asp -->
          <fieldset>
            <legend>Your contact details</legend>
            <label for="name">Name: 
              <input id="name" type="text" required />
            </label>
            <label for="email">Email: 
              <input id="email" type="email" required />
            </label>      
            <label for="tel">Mobile number: 
              <input id="tel" type="tel" />
            </label>
          </fieldset>
          <fieldset>
            <label for="message">Message: 
              <textarea id="message" required></textarea>
            </label>
          </fieldset>
          <fieldset>
            <legend>Would you like more information?</legend>
            <label for="information-yes">
              <input type="radio" id="information-yes" name="information" value="yes" />Yes please
            </label>
            <label for="information-no">
              <input type="radio" id="information-no" name="information" value="no" checked />No thanks
            </label>
          </fieldset>
          <button class="btn" type="submit" value="Click to send">Click to send</button>
        </form>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.246093661483!2d-0.11916268387963828!3d50.84512697953164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4875858a9cb6f5f5%3A0x24714ae18bd76540!2sBrighton+University!5e0!3m2!1sen!2suk!4v1514646775409" width="100%" height="450" style="border:0" allowfullscreen></iframe>
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

