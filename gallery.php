

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery  </title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php
session_start();
?>



    <style>

        * {
          box-sizing: border-box;
        }
        h1{
          text-align: center;
          color: #554f4a;
          font-size: 25px;
          font-family: monospace;
          font-weight: 600;
        }
        body {
          margin: 0;
          font-family: Arial;
        }
        
        
        .row {
          display: -ms-flexbox; /* IE10 */
          display: flex;
          -ms-flex-wrap: wrap; /* IE10 */
          flex-wrap: wrap;
          padding: 10px;
        }
        
        /* Create four equal columns that sits next to each other */
        .column {
          -ms-flex: 25%; 
          flex: 25%;
          max-width: 25%;
          padding: 10px;
        }
        
        .column img {
          margin-top: 8px;
          vertical-align: middle;
          width: 100%;
        }
        
        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 800px) {
          .column {
            -ms-flex: 50%;
            flex: 50%;
            max-width: 50%;
          }
        }
       

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          .column {
            -ms-flex: 100%;
            flex: 100%;
            max-width: 100%;
          }
        }
        .text{
            text-align: center;
            font-family: classico-urw ;
            font-size: 17px;
            color: rgb(4, 43, 4);
        }
        
        .footer-images{
            padding-bottom: 100px;
            display: flexbox;
            
        }
        .footer-imagess{
            text-decoration-color: black;
        }
        .text h2{
            
        text-align: center;
        font-family: monospace;
        font-weight: 600;
        font-size: 25px;
        color: #374710;
        margin-top: 20px;


    }
    h6{
        font-size: 12px;
        font-weight: 600;
        font-family: monospace
    }
    .icons{
  margin-left: 60px;
}
        
        </style>
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


          <h1>-OUR PORTOFOLIO-</h1>
        
          <div class="row"> 
            <div class="column">
              <img src="img/gall3.jpg" style="width:100%">
              <img src="img/gall4.jpg" style="width:100%">
              <img src="img/gallery.jpg" style="width:100%">
              <img src="img/gallery1.jpg" style="width:100%">
              <img src="img/gallc.jpg" style="width:100%">
              <img src="img/gallery3.jpg" style="width:100%">
              <img src="img/gallery4.jpg" style="width:100%">
            
            </div>
            <div class="column">
              <img src="img/gallery5.jpg" style="width:100%">
              <img src="img/gallery6.jpg" style="width:100%">
              <img src="img/gallery7.jpg" style="width:100%">
              <img src="img/ere2.jpg" style="width:100%">
              <img src="img/gallerybo.jpg" style="width:100%">
             
            </div>  
            <div class="column">
              <img src="img/galld.jpg" style="width:100%">
              <img src="img/gall2.jpg" style="width:100%">
              <img src="img/gall13.jpg" style="width:100%">
              <img src="img/gall10.jpeg" style="width:100%">
              <img src="img/gall9.jpg" style="width:100%">
              <img src="img/gall7.jpeg" style="width:100%">
              
        
             
            </div>
            <div class="column">
              <img src="img/galla.jpg" style="width:100%">
              <img src="img/gall5.jpg" style="width:100%">
              <img src="img/gall6.jpg" style="width:100%">
              <img src="img/galla.jpg" style="width:100%">
              <img src="img/gallb.jpg" style="width:100%">
              <img src="img/ere1.jpg" style="width:100%">
              
              
              
             
            </div>
          </div>


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
        <div class="icons">
              <a href="https://www.instagram.com/"> <img src="img/instagram.png" alt=""></a>
              <a href="https://www.google.com/maps/place/Seattle,+WA,+USA/@47.6131554,-122.5068725,11z/data=!3m1!4b1!4m6!3m5!1s0x5490102c93e83355:0x102565466944d59a!8m2!3d47.6061389!4d-122.3328481!16zL20vMGQ5anI?entry=ttu"><img src="img/location.jpg" alt=""></a> 
             <img src="img/phone.jpg" alt="">
            </div>
    </footer>  
    </footer>
    </body>
    </html>
 




