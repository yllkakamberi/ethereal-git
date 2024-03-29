
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About  </title>
    <link rel="stylesheet" href="style.css">

</head>


<style>#about-h2 {
  text-align: center;
  font-size: 26px;
  font-family: monospace;
  margin-top: 50px;
  color: #15110f;
}

#about-p {
  font-size: 15px;
  text-align: center;
  font-family: monospace;
  font-weight: 600;
  margin-bottom: 40px;
  color: rgb(98, 90, 90);
}

.container {
  position: relative;
  width: 100%;
  margin: auto;
}

.image {
  width: 100%;
  height: auto;
  display: block;
}

.text-overlay {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: white;
  font-size: 29px;
  font-family: monospace;
  font-weight: bold;
}

@media screen and (max-width: 768px) {
  #about-h2 {
    font-size: 20px;
    margin-top: 30px;
  }

  #about-p {
    font-size: 14px;
    margin-bottom: 20px;
  }
}   
  #meetteam {
            text-align: center;
            font-size: 26px;
            font-family: monospace;
            margin-top: 50px;
            color: #32271f;
            margin-right: 35px;
            }

  .arrow {
            margin-left: 720px;
            color: #927360;
         }

 .coordinators {
            text-align: center;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap; 
              }

  .coordinators img {
            width: 402px;
            height: 396px;
            margin-bottom: 20px;
            border-radius: 9px; 
                    }

 .coordinator1,
   .coordinator2,
     .coordinator3 {
            display: inline-block;
                  }

        .coordinator1 p,
        .coordinator2 p,
        .coordinator3 p {
            text-align: center;
            font-family: classico-urw;
            font-size: 14px;
            margin-left: 20px;
            color: rgb(57, 50, 50);
                       }

  .coordinator1 h2,
    .coordinator2 h2,
      .coordinator3 h2 {
          margin-left: 20px;
            font-family: monospace;
            font-size: 19px;
            color: #3c3e33;
                        }

        @media screen and (max-width: 768px) {
            .coordinators {
                flex-direction: column; 
                align-items: center; 
            }

            .coordinators img {
                width: 100%; 
            }
                                           }
    
  .featured{
    margin-top: 30px;
    margin-bottom: 40px;
    background-color: white;
  }

  .featured-images{
    background-color: white;
    display: inline;
    justify-content: space-between;
    margin-left: 100px;
  }

  .featured-images img{
    align-items: center;
    height: 140px;
    width: 170px;
    margin-left: 33px;
  }

  #featured-txt{
    text-align: center;
    font-family: monospace;
    font-size: 16px;
    font-weight: 600;
    color: #71635b;
    margin-top: 100px;
  }
  
.history-images{
  display: flex;
  width: 100%;
  justify-content: space-evenly;
}

.history-images img{
  height: 500px;
  width: 340px;
  border-radius: 7px;
}

.about-history p{
  text-align: center;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size: 19px;
  line-height: 2;
  padding: 80px;
  color: rgb(47, 45, 45);
}

.about-history h2{
    text-align: center;
    font-family: monospace;
    font-size: 23px;
     color: #1b140f;
}

.icons{
  margin-left: 60px;
}

</style>
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



<h2 id="about-h2">"Ethereal Events, your local event planning destination nestled in the scenic Carolinas and beyond."</h2>

<p id="about-p">Our exceptional team of three individuals each contributes a unique touch of personality and creative flair to the magic of Ethereal Events. <br> We take pride in crafting unforgettable experiences that perfectly encapsulate the essence of your special moments.</p>

<div class="container">
    <img src="img/abouthome.png" alt="Your Photo" class="image">
    <div class="text-overlay">We’re so happy you're here + would love to tell you a bit more about Ethereal Events.</div>
  </div>


  <div>
<h2 id="meetteam">-MEET OUR TEAM-</h2> <br>
</div>

<div class="coordinators">
    <div class="coordinator1">
<img src="img/coo1.png" alt="">
<h2>Grace|office manager</h2>
<p>Meet Grace, our extraordinary Event Maestro.  <br>With a natural flair for organization and a heart full <br> of creativity, she ensures every detail of <br> your event is seamlessly woven into a harmonious  <br>tapestry. Grace's dedication and meticulous <br> planning transform your vision into an unforgettable  <br>reality, leaving you to bask in the joy of your  <br>special day.</p>
</div>
<div class="coordinator2">
<img src="img/team.png" alt="">
<h2>Ella|event lead</h2>

<p>Ella, our Logistics Luminary, is the logistical  <br>genius behind the scenes. Her organizational prowess and  <br>calm demeanor make her the go-to person for <br> handling timelines, coordinating with vendors, <br> and ensuring every logistical aspect of your <br> event is executed flawlessly. Ella's precision and  <br>efficiency create a stress-free experience,  <br>allowing you to fully enjoy your celebration.</p>
</div>
<div class="coordinator3">
<img src="img/team2.png" alt="">
<h2>Aria|coordinator</h2>

<p>Aria, our Creative Visionary, brings dreams to life  <br>with her artistic touch. Whether it's crafting breathtaking  <br>decor or conceptualizing unique themes, Aria's <br> creativity knows no bounds. Her passion  <br>for design and keen eye for aesthetics result <br> in events that are not just celebrations but <br> true reflections of your personal style and  <br>story. With Aria, every detail becomes a work of art.</p>
</div>

</div>

<div class="about-history">
<p><em style="font-size: 22px;">Ethereal Events </em> has gained a strong reputation in the Northwest wedding industry as innovative coordinators, willing to go the extra mile to ensure that your event is as unique and exceptional as you are. Our team has received countless accolades and awards from brides to industry leaders alike.

<br>  Our passion for weddings, creative spirit, undivided attention for you, and open and affirming attitude sets Bridal Bliss apart. We bring a fresh perspective to event design, and work with your budget and ideas to create an extraordinary event with timeless style and elegance.
  
  </p>

<div class="history-images">
  <img src="img/history1.png" alt="">
  <img src="img/history2.png" alt="">
  <img src="img/history3.png" alt="">

</div>


<p>
  Ethereal Events  specializes in comprehensive wedding planning services across Portland, Central Oregon, and Seattle. Our dedicated team of experienced consultants ensures your event is not only memorable but also effortlessly executed. From Full-Service to Day-Of coordination, elopement packages, and special events, we make planning fun and innovative. Our extensive vendor relationships allow us to provide top-tier events and exclusive discounts. Recognized nationally by Bride’s Magazine, Wedding Wire, and Wedding Industry Experts, we take pride in our reputation for creating stylish and elegant weddings. Recently honored as Seattle’s Best Day-Of Coordinator by Seattle Bride Magazine, Ethereal  Events continues to be featured in various media outlets, showcasing our love for crafting extraordinary weddings</p>

 
</div>

 
<div class="ceo">

<div class="thecouple">
    <div class="ceo-container">
      <div class="ceo-images">
        <img src="img/coupleee.png" alt="" class="ceo-image">
     
      </div>
      <div class="ceo-text">
        <p style="font-size: 19px;"> We're <em style="font-size: 19px;color: #28180e;"> Michael and Alexia </em>, <br> the creative minds behind <em style="font-size: 19px;color:#28180e;;">Ethereal Events</em>,</p> <p> and we're thrilled to be your partners in crafting a celebration as unique as your love story. Nestled in the heart of Raleigh, NC, our passion for unforgettable moments is matched only by our love for coffee, the delicate beauty of florals, and the art of a perfectly mixed gin cocktail (looking at you, Alexia!). <br> Family is at our core, from our charming two-year-old, Harvey, to our fur babies, Ella Mae and Tuck Tuck, who might just steal the spotlight at one of our cozy client meetings. Grounded in our faith, we embrace inclusivity, diversity, and a commitment to living life fully. Michael is our steady force, adding his touch of magic as not only your trusted photographer but also our in-house officiant. <br> With Alexia's background in marketing and project management, we lead our dynamic team to curate Ethereal Events into a true reflection of your love story. Our approach is rooted in conversation, art, honesty, and the celebration of diversity. We're devoted to rooting your special day in its unique narrative. At Ethereal Events, we don't just plan weddings; we curate experiences filled with love, laughter, and unforgettable moments. We can't wait to connect with you and embark on this beautiful journey together.  <br> <br></p><p>
     <p><em style="font-size: 19px;color:#28180e;;"> "Cherish each other as we have cherished you." - John 15:12 </em></p>
        </div>
    </div>
  </div>

<h2 id="featured-txt">-WE'RE FEATURED IN-</h2>

<div class="featured">
  <div class="featured-images">
  <img src="img/featured1.png" alt="">

<img src="img/featured2.png" alt="">
<img src="img/featured3.png" alt="">
<img src="img/featured4.png" alt="">

<img src="img/featured5.png" alt="">
<img src="img/featured6.png" alt="">

</div>

</div>
<hr>


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
        <img src="img/hands-footer.png" alt="" style="width: 450px; height: 200px;">
        <p>© 2023 ETHEREAL EVENTS. | FOREVER BEGINS WITH US </p>
      </div>
  </div>
  
</footer>  
    </body>
    </html>