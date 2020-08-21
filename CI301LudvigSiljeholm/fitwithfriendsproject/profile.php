<?php

require_once "headerlogin.php";
if (isset($_SESSION["id"])) {
  $challengesData = challengesData($_SESSION["id"]);
}



?>
      <article>
        <header class="post">
          <h3><div class="profile-box">Welcome
        <?php
         if (isset($_SESSION["id"])) {
            echo $_SESSION["uid"];
         }
         ?></h3>
          </header>
    <div class="container-profile">
    	<div class="profile-box">
       
          <!-- <img src="images/jonte.jpg" alt="picture1"></a>
          <div class="profile-text">
            <h1><a href="#profile">Uppload profile picture</a></h1>
        </div> -->
      </div>
      <div class="box">
        <img src="images/couplefit.jpeg" alt="picture1">
          <div class="pushups-text">
            <h1><a href="#pushups-profile">This week's challenge</a></h1>
        </div>
        <div class="pushups-text-side">
            <h1><a href="#pushups-profile">
              
              <?php
              echo $challengesData["challengesName"];
              ?>
            </a></h1>
        </div>
        <div class="result-text">
            <h1><a href="#result-profile">Your score :
              <?php

              echo $challengesData["challengesScore"];
              ?>
            </a></h1>
            <button>Find a way to update individual score, probably too hard.</button>
        </div>
    </div>
    </div> 
        <div class="container-profile">
          <div class="profile-box">
            <div class="box">
        <img src="images/podium1.jpg" alt="Norway" style="width:100%;">
        <div class="text-block1">
        <?php
              challengesDataCompare();
            ?> 
          </div>
        </div>
  </div>
</div>
     
      </article>
      <p><a href="#top">Go to top</a></p>

      <a id="pushups"></a>
      <article>
        <header class="post">
          <h3>Pushups</h3>
        </header>
        <h3><strong>Traditional pushups are beneficial for building upper body strength</strong></h3>
        <p class="animate-left">They work the triceps, pectoral muscles, and shoulders. When done with proper form, they can also strengthen the lower back and core by engaging (pulling in) the abdominal muscles.Pushups are a fast and effective exercise for building strength. They can be done from virtually anywhere and don’t require any equipment.<br><strong>Healthline</strong></p></p>
        <div class="box">
    	<img src="images/couplefit.jpeg" alt="pushups">
    </div>
        <blockquote>
        <h3><a href="https://www.healthline.com/health/fitness-exercise/pushups-everyday"target="_blank">More information about pushups</a></h3>
        </blockquote>
      </article>
      <p><a href="#top">Go to top</a></p>


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
       <script src="main.js"></script> 
     </div>
  </body>
</html>
