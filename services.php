<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services  </title>
    <link rel="stylesheet" href="style.css">

</head>
<style>
 .container {
      position: relative;
      width: 100%;
      padding: 20px; 
      display: flex;
      justify-content: space-evenly;   }

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
      font-family:  monospace;
      font-weight: bold;
    }
    #h2-s{
        text-align: center;
        font-family: monospace;
        font-weight: 600;
        font-size: 23px;
        color: #5d493c;
        margin-top: 50px;
    }
    
    .container-ss {
      display: flex;
    }

    .left-box {
      background-color: #fff;
      padding: 20px;
      border: 1px solid #ddd;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .left-box h2 {
      margin-bottom: 10px;
    }

    .left-box p {
      margin-bottom: 0;
    }

    .right-box {
      background-color: #fff;
      padding: 20px;
      border: 1px solid #ddd;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .right-box img {
      max-width: 100%;
      height: auto;
      display: block;
      margin-top: 10px;
    }
    #service-heading{
        margin-top: 45px;
    font-size: 22px;
    font-family: monospace;
    color: rgb(165, 94, 106);
}
#service-textp{
    text-align: left;
    font-size: 15px;
    font-family: classico-urw;
    font-weight: 600;
    color: rgb(52, 50, 50);
    line-height: 2;
}
.right-box{
    width: 1500px;
}
.right-box img{
    border-radius: 7px;
}
.container-ss{
    margin: 40px;
}

@media only screen and (min-width: 768px) {
    .container-ss {
        width: 100%;
    }

    #service-heading {
        font-size: 22px;
    }

    #service-textp {
        font-size: 15px;
    }
}

</style>
<body>

<header>
       <a href="index.php"> <img src="img/logo.png" alt="Your Logo" id="logo"></a>
        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="services.php">SERVICES</a></li>
                <li><a href="gallery.php">GALLERY</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="http://localhost/ethereal-git/login/login_form.php">LOG-IN</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
      <img src="img/services-home.png" alt="Your Photo" class="image">
      <div class="text-overlay">We’re so happy you're here + would love to tell you a bit more about Ethereal Events.</div>
    </div>

    <div>
      <h2 id="h2-s">-OUR SERVICES|PLANNING|COORDINATION-</h2>
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
    

      <div class="container-ss">
        <div class="left-box">
          <h2 id="service-heading">full service planning+design</h2>
          <p id="service-textp">In the realm of full-service event planning and design, we transform your vision into reality, handling every detail from logistics to creative elements. Our meticulous approach ensures a stress-free experience, allowing you to relish the anticipation and joy of your celebration. From venue selection to vendor coordination, we curate every aspect for a uniquely tailored event. Entrust us to navigate complexities and bring your vision to life, so you can fully enjoy the magic of the moment.</p>
        </div>
        <div class="right-box">
          <img src="img/service-1.png" alt="Your Image">
        </div>
      </div>

      <div class="container-ss">
        <div class="left-box">
          <h2 id="service-heading">design & coordination
        </h2>
          <p id="service-textp">
            In the domain of design and coordination, we seamlessly blend creativity and precision. Our design services bring aesthetic brilliance to every detail, while our meticulous coordination ensures flawless execution of logistics. Collaborating closely with you, our team creates a personalized and visually captivating event. From decor to vendor management, we handle every aspect, allowing you to focus on enjoying the moment. The result is a harmonious and unforgettable experience where creativity meets seamless execution.</p>
        </div>
        <div class="right-box">
          <img src="img/service-2.png" alt="Your Image">
        </div>
      </div>
      <div class="container-ss">
        <div class="left-box">
          <h2 id="service-heading">event managment</h2>
          <p id="service-textp">Our event management services are tailored to suit various occasions, be it weddings, corporate events, or special celebrations. We leverage our expertise to curate an event that reflects your vision, taking care of the nitty-gritty details so you can focus on the celebration itself. With a commitment to excellence, we transform your ideas into a flawlessly executed reality, creating lasting memories for everyone involved.

          </p>
        </div>
        <div class="right-box">
          <img src="img/service-3.png" alt="Your Image">
        </div>
      </div>
      <div class="container-ss">
        <div class="left-box">
          <h2 id="service-heading">elopements & destination</h2>
          <p id="service-textp">
            Specializing in elopements and destination events, we curate intimate and unforgettable experiences tailored to your unique love story. For elopements, we focus on the essence of your connection, creating an intimate celebration that reflects your personalities and the love you share. Our destination event services extend beyond borders, ensuring a seamless and magical experience in the location of your dreams.</p>
        </div>
        <div class="right-box">
          <img src="img/service-4.png" alt="Your Image">
        </div>
      </div>
      


    <hr>

    <section>
      <div class="icons">
      <a href="https://www.pinterest.com/"><img src="img/pinterest.png" alt=""></a>
     <a href="https://www.instagram.com/"> <img src="img/instagram.png" alt=""></a>
     <a href="https://www.google.com/maps/place/Seattle,+WA,+USA/@47.6131554,-122.5068725,11z/data=!3m1!4b1!4m6!3m5!1s0x5490102c93e83355:0x102565466944d59a!8m2!3d47.6061389!4d-122.3328481!16zL20vMGQ5anI?entry=ttu"><img src="img/location.jpg" alt=""></a> 
      <img src="img/logo.png" alt="" id="log">
      
    <a href="https://www.facebook.com/"><img src="img/facebook.png" alt="" style="margin-left: 300px;"></a>  
     <a href="https://www.tiktok.com/explore"><img src="img/tiktok.png" alt=""></a> 
      <img src="img/phone.jpg" alt="">
      
      </div>
    </section>
 

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
                           <a href="login.php"><p>Log-in</p></a>
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