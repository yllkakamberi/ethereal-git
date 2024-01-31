<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethereal Events  </title>
    <link rel="stylesheet" href="style.css">

</head>


<body>
<?php
session_start();
?>


<header>
    <a href="index.php"> <img src="img/logo.png" alt="Your Logo" id="logo"></a>
    <nav>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="services.php">SERVICES</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="wedding_locations.php">LOCATIONS</a></li>

            <?php if (isset($_SESSION['user_id'])): ?>
                <?php if ($_SESSION['user_role'] === 'admin'): ?>
                    <li><a href="add_location.php">ADD LOCATION</a></li>
                    <li><a href="login/usersdashboard.php">DASHBOARD 1</a></li>
                    <li><a href="dashboard.php">DASHBOARD 2</a></li>
                <?php endif; ?>
                <li><a href="login/logout.php">LOGOUT</a></li>
            <?php else: ?>
                <li><a href="login/login.php">LOG-IN</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
    <div class="slideshow-container">

      <div class="mySlides fade">
        <img src="img/f1.png" style="width:100%">
      </div>
    
      <div class="mySlides fade">
        <img src="img/f6.png" style="width:100%">
      </div>
    
      <div class="mySlides fade">
        <img src="img/f3.png" style="width:100%">
      </div>
    
      <div class="mySlides fade">
        <img src="img/f4.png" style="width:100%">
      </div>
    
      <div class="mySlides fade">
        <img src="img/f5,png.jpg" style="width:100%">
      </div>
    
      <div class="mySlides fade">
        <img src="img/f2.png" style="width:100%">
      </div>
   
      
      </div>
      <br>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
      <script>

        let slideIndex = 0;
      showSlides();
      
      function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 2000); 
      }
      </script>
     
<div class="after-slider">

    <P class="paragrafi1">-LOOKING FOR THE PERFECT WEDDING PLANNER?-</P> <br> <br>
      <div class="dyparagrafet">
      <p class="paragrafi2">This question is often asked when we meet with  
        couples
        vendors.  Our whole team  <br>would agree, it’s  a  mix of our heart, purpose, and passion. We  want your  event  to be <br> an experience, both  while planning ,  enjoying  the day with your closest people.  Our <br>  expertise  resides in planning, coordinating, and designing weddings.  From our site <br>services to general  questions, we would LOVE to chat with you!</p>
      <p class="paragrafi3">We started out of the strong belief that  there is something so special, significant, and <br> unbeatable about gathering with your closest friends and  family for a celebration of <br> love + life’s exciting  events. We see each one of our clients as a <b> unique + beautiful</b> <br> individual, and it gives us the greatest feeling + biggest smile to  have their trust in  <br>creating a gathering that will represent their one of a kind story.</p>
      <div class="hands-home">
        <img src="img/hands-home.png" alt="">
        </div>
        </div>
    </div>



      <div class="container-servicesimg">
        <img src="img/after-s.png" alt="Your Photo" class="image-top-services">
        <div class="text-overlay-services">More of our services-take a look at our work here. <br>
          <a href="services.php"><input type="submit" value="SERVICES" id="services-button"></a>
        </div>
      </div>
      
      
      <div class="our-services">
        <div class="ss1">
      <img src="img/ss1.png" alt=""> <br>
      <h2>ELOPEMENTS</h2>
      <p id="ss1-txt">Embark on an intimate journey with our elopements, where love takes center stage against breathtaking backdrops. It's a personal escape, a celebration of connection crafted uniquely for you.</p>
      </div>
      
      <div class="ss2">
      <img src="img/ss2.png" alt=""> <br>
      <h2>
        WEDDINGS
      </h2><p id="ss2-txt">Celebrate love in a grand symphony with our weddings. We weave together traditions and modernity to create a joyous union, crafting memories that resonate with your unique story.</p>
      </div>
      
      <div class="ss3">
      <img src="img/ss3.png" alt=""> <br>
      <h2>
        STYLED SHOOTS
      </h2>
      <p id="ss3-txt">Immerse yourself in creativity with our styled shoots. These curated visions of beauty inspire your dream wedding, blending unique styles and trends to tailor an unforgettable experience, crafted just for you.</p>
      </div>
      </div>
      
      
      <div class="thecouple">
          <div class="ceo-container">
            <div class="ceo-images">
              <img src="img/coupleee.png" alt="" class="ceo-image">
           
            </div>
            <div class="ceo-text">
              <p style="font-size: 19px;"> We're <em style="font-size: 19px;color: #28180e;"> Michael and Alexia </em>, <br> the creative minds behind <em style="font-size: 19px;color: #28180e;;">Ethereal Events</em>,</p> <p> and we're thrilled to be your partners in crafting a celebration as unique as your love story. Nestled in the heart of Raleigh, NC, our passion for unforgettable moments is matched only by our love for coffee, the delicate beauty of florals, and the art of a perfectly mixed gin cocktail (looking at you, Alexia!). <br> Family is at our core, from our charming two-year-old, Harvey, to our fur babies, Ella Mae and Tuck Tuck, who might just steal the spotlight at one of our cozy client meetings. Grounded in our faith, we embrace inclusivity, diversity, and a commitment to living life fully. Michael is our steady force, adding his touch of magic as not only your trusted photographer but also our in-house officiant. <br> With Alexia's background in marketing and project management, we lead our dynamic team to curate Ethereal Events into a true reflection of your love story. Our approach is rooted in conversation, art, honesty, and the celebration of diversity. We're devoted to rooting your special day in its unique narrative. At Ethereal Events, we don't just plan weddings; we curate experiences filled with love, laughter, and unforgettable moments. We can't wait to connect with you and embark on this beautiful journey together.  <br> <br></p><p>
           <p><em style="font-size: 19px;color:#23160f;;"> "Cherish each other as we have cherished you." - John 15:12 </em></p>
              </div>
          </div>
        </div>
      
      <hr>
      <p id="read-about">-BROWSE OUR PAST WORK-</p>
      <!--Kodi i njejte si fotoja me lart me tekst overlay-->
      <div class="container-servicesimg">
        <img src="img/ftt.png" alt="Your Photo" class="image-top-services">
        <div class="text-overlay-services">More of our moments-take a look at our portofolio here. <br>
          <a href="gallery.html"><input type="submit" value="GALLERY" id="services-button"></a>
        </div>
      </div>
<br>


      <footer>
            <footer class="footer">
                <div class="container">
                    <div class="section-categories">
                        <h2>Navigation</h2>
                        <div class="kategorite">
                           <a href="about.php"><p>About</p></a> 
                           <a href="services.php"><p>Services</p></a>
                           <a href="gallery.php"><p>Gallery</p></a>
                           <a href="contact.php"><p>Contact</p></a>
                        </div>
                    </div>
            
                    <div class="section contact-us">
                    <h2>Contact Us</h2>
                        <div class="contact-info">
                            <p>Phone: <span>+77 443-212-612</span></p>
                            <p>Email: <span>etherealevents@gmail.com</span></p>
                            <p>Address: <span>Seattle,near Pike Place Market</span></p>
                        </div>
                    </div>

                <div class="footer-copyright">
                  <img src="img/hands-footer.png" alt="" style="width: 450px; height: 200px; ">
                  <p>© 2023 ETHEREAL EVENTS. | FOREVER BEGINS WITH US </p>
                </div>
            </div>
            
        </footer>  
    </body>
    </html>