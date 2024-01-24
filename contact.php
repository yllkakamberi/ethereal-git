<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact</title>
</head>
<style>
  /*fotoja team ,left side*/
   .contact-image img{
    width: 400px;
    height: 530px;
   }
   /*teksti posht fotos*/
   p{
    font-size: 15px;

    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
 }
 /*paragrafet posht the team photo*/
 #par1 {
    font-family: monospace;
    font-size: 27px;
    font-weight: bold;
    margin-top: 10px;
    color: rgb(42, 41, 41);
    margin-bottom: 8px;
}
#par2{
    font-size: 19px;
    color: rgb(43, 43, 42);
    font-family: 'Courier New', Courier, monospace;
    font-weight: bold;
    margin-bottom: 8px;
}
#par3{
    font-size: 14px;
    font-family: 'Courier New', Courier, monospace;
    color: rgb(75, 74, 74);
    font-weight: bold;
    line-height: 2;
}
  /*per gjith formen*/
     form{
    margin-left: 30px;
    margin-bottom: 30px;
 }
 .formdisplay{
    display: flex;
    margin-left: 120px;
 }
 /*inputat*/
   input{
    height: 38px;
    background-color: beige;
    border: 1px solid rgb(164, 155, 155);
    margin-right:10px ;
   }
   .both-names{
    display:flex;
 }
 .form-fistname{
    display: block;
 }

   label{
    font-size: 12px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
   
  }
  
 textarea{
    background-color:beige;
    border: 1px solid rgb(164, 155, 155);
 }

/*tekti mbi textarea*/
#littletext{
    font-size: 10px;
    color: rgb(75, 74, 74);
}
/*sumbit butoni*/
.submittt-button{
  padding: 11px;
    font-family: monospace;
    font-weight: 600;
    background-color: #71655d;
    color: white;
    border: none;
    border-radius: 8px;
    margin-top: 20px;
    font-size: 14px;
}
/*select dropdown*/
select{
    height: 38px;
    background-color: #fffff3
 }

 /*reponsive*/
 @media only screen and (max-width: 1024px) {
    .formdisplay {
        flex-direction: column;
        align-items: center;
    }

    .contact-image img {
        width: 100%; /* Make the image take up 100% of the width */
        height: auto; 
        border-radius: 9px; 
    }

    .form {
        margin-left: 0; 
}
}
/* Media query for 768px screens */
@media only screen and (max-width: 768px) {
    .both-names {
        flex-direction: column;
    }

    .form-fisrtname,
    .form-fisrtname label,
    input,
    textarea,
    select {
        width: 100%; 
        box-sizing: border-box; 
    }
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
                <li><a href="http://localhost/ethereal-git/login/login_form.php">LOG-IN</a></li>
            </ul>
        </nav>
    </header>
<body>
  
        <div class="formdisplay">
    <div class="contact-image">
        <img src="img/theteam.png" alt="" style="border-radius: 9px;">
        <p id="par1">We can't wait to hear <br> from you!</p>
        <p id="par2"> Serving Seattle + Beyond <br>  </p>
        <p id="par3">Looking for internship information? Click here. <br>etherealevenets@gmail.com</p>
    </div>

<form action="save_form.php" method="post">
  <div class="names">
    <p>Name (required)</p>
  <div class="both-names">
  <div class="form-fisrtname">
     <label >First name</label> <br> 
    <input type="text" name="firstname" id="firstname">
      <br> <br>
    </div>

  <div class="form-fisrtname">
    <label for="">Last name</label> <br> 
    <input type="text" name="lastname" id="lastname"> <br> <br>
  </div>
  </div>

    <p>Partner's name</p> 

    <div class="both-names">
    <div class="form-fisrtname">
        <label >First name</label> <br>
        <input type="text" name="partnersname" id="partnersname"> <br> <br>
   </div>

 <div class="form-fisrtname">
     <label for="">Last name</label> <br>
     <input type="text" name="partnerslastname" id="partnerslastname"> <br> <br>
</div>
</div>

   <p>Preferred pronouns(optional)</p>

<textarea name="pronouns" id="pronouns" cols="100" rows="6"></textarea> <br> <br>
<p>Digits</p> <br>
 <label for="">Country</label> <br>
 <input type="text" name="country" id="country"> <br> <br>
 <label for="">Number</label> <br>
 <input type="tel" name="number" id="number"> <br> <br>
 <label for="">Email adress(required)</label> <br>
 <input type="email" name="email" id="email"> <br> <br>
 <label for="">Event date</label> <br>
 <input type="date" name="date" id="date"> <br> <br>
 <label for="">Location(required)</label> <br>
 <input type="text" name="location" id="location"><br> <br>
 <label for="">Estimated guest count(required)</label><br>
 <input type="text" name="guests" id="guests"><br> <br>
 <label for="">How did you hear about us?</label><br> <br>
 <select name="" id="">
 <option value="">Word of mouth</option>
 <option value="1">Google</option>
 <option value="2">Wedding wire</option>
 <option value="3">Instagram</option>
 <option value="4">The knot</option>
 <option value="5">Vendor site</option>
 <option value="6">Past wedding event</option>
 <option value="7">Other</option>
</select><br> <br>
<label for="">What's your drink of choice ?</label><br>
  <p id="littletext">Examples: bubbly, malbec, tea, pepsi, etc.</p> <br>
  <textarea name="drink-choice" id="drink-choice" cols="100" rows="4"></textarea> <br>
  <label for="">Let us know a little bit about you and your event/project</label> <br>
  <p id="littletext">We can't wait to learn more about you, your story, + style!</p><br>
  <textarea name="about-you" id="about-you" cols="100" rows="6"></textarea> <br>
  <input type="submit" value="SUBMIT" class="submittt-button">
</div> 

</form>

</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector('form');

  const validateForm = (event) => {
    event.preventDefault();

    const firstName = document.getElementById('firstname');
    const lastName = document.getElementById('lastname');
    const partnersFirstName = document.getElementById('partnersname');
    const partnersLastName = document.getElementById('partnerslastname'); 
    const country = document.getElementById('country');
    const number = document.getElementById('number');
    const email = document.getElementById('email');
    const date = document.getElementById('date');
    const location = document.getElementById('location');
    const guests = document.getElementById('guests');
    const pronouns = document.getElementById('pronouns');
    const drinkChoice = document.getElementById('drink-choice');
    const aboutYou = document.getElementById('about-you');
    
    if (!firstName.value.trim() || !lastName.value.trim()) {
      alert("Please enter both first and last names.");
      return false;
    }

    if (!partnersFirstName.value.trim()) {
      alert("Please enter partner's first name.");
      return false;
    }

    if (!partnersLastName.value.trim()) {
      alert("Please enter partner's last name.");
      return false;
    }

    if (!country.value.trim()) {
      alert("Please enter your country.");
      return false;
    }

    if (!number.value.trim() || isNaN(number.value.trim())) {
      alert("Please enter a valid number.");
      return false;
    }

    if (!email.value.trim() || !validateEmail(email.value.trim())) {
      alert("Please enter a valid email address.");
      return false;
    }

    if (!date.value.trim()) {
      alert("Please select an event date.");
      return false;
    }

    if (!location.value.trim()) {
      alert("Please enter the event location.");
      return false;
    }

    if (!guests.value.trim() || isNaN(guests.value.trim())) {
      alert("Please enter a valid number for estimated guest count.");
      return false;
    }

    if (pronouns.value.trim() && pronouns.value.trim().length > 100) {
      alert("Preferred pronouns should be less than 100 characters.");
      return false;
    }

    if (drinkChoice.value.trim() && drinkChoice.value.trim().length > 100) {
      alert("Drink choice description should be less than 100 characters.");
      return false;
    }

    if (aboutYou.value.trim() && aboutYou.value.trim().length > 300) {
      alert("About you description should be less than 300 characters.");
      return false;
    }

    form.submit();
  };

  const validateEmail = (email) => {
    const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
    return emailRegex.test(email.toLowerCase());
  };

  form.addEventListener('submit', validateForm);
});
</script>

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
        <img src="img/hands-footer.png" alt="" style="width: 450px; height: 200px; ">
        <p>© 2023 ETHEREAL EVENTS. | FOREVER BEGINS WITH US </p>
      </div>
  </div>
</footer>  
<!--Validimi i kontakt formes me js-->

      </body>
      </html>
























