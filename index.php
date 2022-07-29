<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--=============== REMIXICONS ===============-->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
  <link rel="stylesheet" href="styles.css">
    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css" />
      /var/www/html/silentadventurechitwan/index.php
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="/assets/css/styles.css" />

    <title>Silent Adventure Chitwan</title>
  </head>

    <header class="header" id="header">
      <nav class="nav container">
        <a href="#" class="nav__logo" style="color:blue">SilentAdventure</a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="#home" class="nav__link active-link">Home</a>
            </li>
            <li class="nav__item">
              <a href="#about" class="nav__link ">About</a>
            </li>

            <li class="nav__item">
              <a href="#place" class="nav__link">Activities</a>
            </li>
            <li class="nav__item">
              <a href="#contacts" class="nav__link">Contacts</a>
            </li>
          </ul>

          <div class="nav__dark">
            <!-- Theme change button -->
            <span class="change-theme-name">Dark mode</span>
            <i class="ri-moon-line change-theme" id="theme-button"></i>
          </div>

          <i class="ri-close-line nav__close" id="nav-close"></i>
        </div>

        <div class="nav__toggle" id="nav-toggle">
          <i class="ri-function-line"></i>
        </div>
      </nav>
    </header>

    <main class="main">
       ==================== HOME ====================-->
      <section class="home" id="home">
        <img src="assets/img/finish725_800.jpg" alt="" class="home__img" />

        <div class="home__container container grid">
          <div class="home__data">
            <span class="home__data-subtitle" style="color:black">Choose Your Activities</span>
            <h1 class="home__data-title">
              Explore The <br />
              Best
              <b
                >Beautiful <br />
                Places</b
              >
            </h1>
            <a href="field.html" class="button">Explore</a>
          </div>

          <div class="home__social">
            <a
              href="https://www.facebook.com/"
              target="_blank"
              class="home__social-link"
            >
              <i class="ri-facebook-box-fill"></i>
            </a>
            <a
              href="https://www.instagram.com/"
              target="_blank"
              class="home__social-link"
            >
              <i class="ri-instagram-fill"></i>
            </a>

          </div>

          <div class="home__info">
            <div>
              <span class="home__info-title">Best Places to visit</span>
              <a
                href="5best.html"
                class="button button--flex button--link home__info-button"
              >
                More <i class="ri-arrow-right-line"></i>
              </a>
            </div>

            <div class="home__info-overlay">
              <img src="assets/img/5d5e9bb0f0a68d4ad4f20475.jpeg" alt="" class="home__info-img" />
            </div>
          </div>
        </div>
      </section>

<!-- <style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  max-height: 1200px;;
  position: relative;
  margin: auto;

}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.3s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
.img{
  transition: 0.5s ease;
}
/* Caption text */
.text {
  color:blue;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}

}
</style>

<section>
<div class="slideshow-container" >

<div class="mySlides fade">

  <img src="assets/img/finish725_800.jpg" style="width:100%">
  <div class="text" >Elephant Ride</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="assets/img/Jungle-Walk01-min-min.jpg" style="width:100%">
  <div class="text">Jungle Walk</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="assets/img/89964932_2935998169794903_6972797478554828800_n.jpg" style="width:100%">
  <div class="text">Cultural show</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>


<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script> -->
<!-- </section> -->

      <!--==================== ABOUT ====================-->
      <section class="about section" id="about">
        <div class="about__container container grid">
          <div class="about__data">
            <h2 class="section__title about__title">
              More Information <br />
              About The Activities
            </h2>
            <p class="about__description">
              You can find the most beautiful and pleasant and thrilling activities at the best
              prices with special discounts, you choose the place we will guide
              you all the way to wait, get your place now.
            </p>
            <a href="#contacts" class="button">Reserve your activities</a>
          </div>

          <div class="about__img">
            <div class="about__img-overlay">
              <img
                src="assets/img/finish725_800.jpg"
                alt=""
                class="about__img-one"
              />
            </div>

            <div class="about__img-overlay">
              <img src="assets/img/58.jpg" alt="" class="about__img-two" />
            </div>
          </div>
        </div>
          <!--==================== DISCOVER ====================-->
      <section class="discover section" id="discover">
        <h2 class="section__title">
          Discover the most <br />
          attractive places
        </h2>

        <div class="discover__container container swiper-container">
          <div class="swiper-wrapper">
            <!--==================== DISCOVER 1 ====================-->
            <div class="discover__card swiper-slide">
              <img
                src=assets/img/tower-night-banner.jpg
                alt=""
                class="discover__img"
              />
              <div class="discover__data">
                <h2 class="discover__title">Tower Night</h2>
                <span class="discover__description"></span>
              </div>
            </div>

            <!--==================== DISCOVER 2 ====================-->
            <div class="discover__card swiper-slide">
              <img
                src="assets/img/bar-looking-over-the.jpg"
                alt=""
                class="discover__img"
              />
              <div class="discover__data">
                <h2 class="discover__title">Tharu HomeStay</h2>
                <span class="discover__description"></span>
              </div>
            </div>



            <!--==================== DISCOVER 3 ====================-->
            <div class="discover__card swiper-slide">
              <img
                src="assets/img/0351e120008u4827s8AD2.jpg"
                alt=""
                class="discover__img"
              />
              <div class="discover__data">
                <h2 class="discover__title">Canoening</h2>
                <span class="discover__description"></span>
              </div>
            </div>
          </div>
        </div>
      </section>

      </section>


      <!--==================== EXPERIENCE ====================-->
      <section class="experience section">
        <h2 class="section__title">
          With Our Experience <br />
          We Will Serve You
        </h2>

        <div class="experience__container container grid">
          <div class="experience__content grid">
            <div class="experience__data">
              <h2 class="experience__number">20</h2>
              <span class="experience__description"
                >Year <br />
                Experience in Guide</span
              >
            </div>

            <div class="experience__data">
              <h2 class="experience__number">275</h2>
              <span class="experience__description"
                >Complete <br />
                tours</span
              >
            </div>

            <div class="experience__data">
              <h2 class="experience__number">20+</h2>
              <span class="experience__description"
                >Local <br />
                Destination</span
              >
            </div>
          </div>


      </section>

      <!--==================== VIDEO ====================-->
      <section class="video section">
        <h2 class="section__title">Video Tour</h2>

        <div class="video__container container">
          <p class="video__description">
            Find out more with our video of the most beautiful and pleasant
            places for you and your family.
          </p>

          <div class="video__content">
            <video id="video-file">
              <source src="assets/video/video-1658561388.mp4" type="video/mp4" />
            </video>

            <button class="button button--flex video__button" id="video-button">
              <i class="ri-play-line video__button-icon" id="video-icon"></i>
            </button>
          </div>
        </div>
      </section>

      <!--==================== PLACES ====================-->
      <section class="place section" id="place">
        <h2 class="section__title">Choose Your Place</h2>

        <div class="place__container container grid">
          <!--==================== PLACES CARD 1 ====================-->
          <div class="place__card">
            <img src="assets/img/58.jpg" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number"></span>
              </span>

              <div class="place__data">
                <h3 class="place__title">Jungle Tower</h3>
                <span class="place__subtitle">Sauaraha</span>
                <span class="place__price">Rs 1599</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>

          <!--==================== PLACES CARD 2 ====================-->
          <div class="place__card">
            <img src="assets/img/0351e120008u4827s8AD2.jpg" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number"></span>
              </span>

              <div class="place__data">
                <h3 class="place__title">Canoeing</h3>
                <span class="place__subtitle">Rapti River</span>
                <span class="place__price">Rs 1200</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>

          <!--==================== PLACES CARD 3 ====================-->
          <div class="place__card">
            <img src="assets/img/place3.jpg" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number"></span>
              </span>

              <div class="place__data">
                <h3 class="place__title">Jeep Safari</h3>
                <span class="place__subtitle">Chitwan National park</span>
                <span class="place__price">2hrs Rs 4499 </span>
                <span class="place__price"> fullday Rs 5000</span>
                   <span class="place__price"> 2-fullday Rs 5000</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>

          <!--==================== PLACES CARD 4 ====================-->
          <div class="place__card">
            <img src="assets/img/5e246b0b992bfa21ce2c9eb5_20000-lake-tours.jpg" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number"></span>
              </span>

              <div class="place__data">
                <h3 class="place__title">20000 Lake</h3>
                <span class="place__subtitle">Chitwan National Park</span>
                <span class="place__price">Rs 1200</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>

          <!--==================== PLACES CARD 5 ====================-->
          <div class="place__card">
            <img src="assets/img/tower-night-banner.jpg" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number"></span>
              </span>

              <div class="place__data">
                <h3 class="place__title">Tower Night Stay</h3>
                <span class="place__subtitle">Inside National park</span>
                <span class="place__price">Rs 4999</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>

            <!--==================== PLACES CARD 6 ====================-->
          <div class="place__card">
            <img src="assets/img/finish725_800.jpg" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number"></span>
              </span>

              <div class="place__data">
                <h3 class="place__title">Elephant Safari</h3>
                <span class="place__subtitle">Sauraha</span>
                <span class="place__price">$1999</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>



        </div>

      </section><br>
      <br>
      <br>




  <!--==========Contacts-->


<div class="contacts " id="contacts" style="margin-top:35px; padding-top:50px">
  <div style="text-align:center">
    <h2 style="margin-bottom:30px">Contact Us</h2>

  </div>


    <div class="column">
      <!-- <form action="welcome.php" method="post"  >
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
         <div>
    <label for="email-input" style="width:max-content">Email</label><br>
    <input
      id="email-input"
      type="email"
      name="email"
      placeholder="email here ">
  </div>
        <br>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
  <input type="submit" value="Send Form">
      </form> -->
 <form id="fcf-form-id" class="fcf-form-class" method="post" action="welcome.php">

        <div class="fcf-form-group">
            <label for="Name" class="fcf-label">Your name</label>
            <div class="fcf-input-group">
                <input type="text" id="Name" name="Name" placeholder="your full name"        class="fcf-form-control" required>
            </div>
        </div>
   <div class="fcf-form-group2">
            <label for="phone" >Your Phone Number</label>
            <div class="fcf-input-group2">
                <input type="tel" id="Phone" name="phone" class="fcf-form-control" placeholder="enter phone number ....."    pattern="(\+977)?[9][6-9]\d{8}"     required>
            </div>
        </div>
        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Your email address</label>
            <div class="fcf-input-group">
                <input type="email" id="Email" name="Email" class="fcf-form-control" placeholder="enter email ....."         required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Your message</label>
            <div class="fcf-input-group">
                <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>

        <div class="fcf-form-group">
            <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button>
        </div>



    </form>

    </div>

       <div class="shift">
            <a href="mailto:silentadventurechitwan@gmail.com" class="text-indigo-500">silentadventurechitwan@gmail.com</a>
            <p class="leading-normal my-5">Ratnanagar-4 Sauraha Road
              <br>Bagmati province ,Chitwan ,Nepal
              <br>
              <a href="tel:+977-9865104290" class="text-indigo-500">+977-9865104290</a>

            </p>



    </div>

</div>



    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section" style="color:grey">
      <div class="footer__container container grid">
        <!-- <div class="footer__content grid">
          <div class="footer__data">
            <h3 class="footer__title">Travel</h3>
            <p class="footer__description">
              Travel you choose the <br />
              destination, we offer you the <br />
              experience.
            </p>
            <div>
              <a
                href="https://www.facebook.com/"
                target="_blank"
                class="footer__social"
              >
                <i class="ri-facebook-box-fill"></i>
              </a>
              <a
                href="https://twitter.com/"
                target="_blank"
                class="footer__social"
              >
                <i class="ri-twitter-fill"></i>
              </a>
              <a
                href="https://www.instagram.com/"
                target="_blank"
                class="footer__social"
              >
                <i class="ri-instagram-fill"></i>
              </a>
              <a
                href="https://www.youtube.com/"
                target="_blank"
                class="footer__social"
              >
                <i class="ri-youtube-fill"></i>
              </a>
            </div>
          </div>

          <div class="footer__data">
            <h3 class="footer__subtitle">About</h3>
            <ul>
              <li class="footer__item">
                <a href="" class="footer__link">About Us</a>
              </li>
              <li class="footer__item">
                <a href="" class="footer__link">Features</a>
              </li>
              <li class="footer__item">
                <a href="" class="footer__link">New & Blog</a>
              </li>
            </ul>
          </div>

          <div class="footer__data">
            <h3 class="footer__subtitle">Company</h3>
            <ul>
              <li class="footer__item">
                <a href="" class="footer__link">Team</a>
              </li>


              </li>
            </ul>
          </div>


        </div> -->

<!-- <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

<body>


<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
  <form action="welcome.php" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body> -->



        <div class="footer__rights">
          <p class="footer__copy">
            &#169; 2022 Anjan. All rigths reserved.
          </p>
          <div class="footer__terms">
            <a href="#" class="footer__terms-link">Terms & Agreements</a>
            <a href="#" class="footer__terms-link">Privacy Policy</a>
          </div>
        </div>
      </div>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="ri-arrow-up-line scrollup__icon"></i>
    </a>

    <!-- =============== SCROLL REVEAL===============-->
   <script src="assets/js/scrollreveal.min.js"></script>

    <!-- =============== SWIPER JS ===============-->
 <script src="assets/js/swiper-bundle.min.js"></script>

    <!-- <!-=============== MAIN JS ===============-->
<script src="assets/js/main.js"></script>

  </body>
</html>
