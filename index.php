<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>

  <!-- Font-Awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

  <!-- Swiper css link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

  <!-- CSS file link -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>


  <!-- Header Section start -->

  <section class="header">
    <a href="index.php" class="logo">Traveller</a>

    <nav class="navbar">
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Package</a>
      <a href="book.php">Book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
  </section>

  <!-- Header Section end -->


  <!-- Home Section start -->

  <section class="home">
    <div class="swiper home-slider">
      <div class="swiper-wrapper">

        <div class="swiper-slide slide" style="background: url(images/home-slide-1.jpg) no-repeat">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>travel around the world</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

        <div class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>discover the new places</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

        <div class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>Make your tour worldwhile</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

    </div>
  </section>

  <!-- Home Section end -->


  <!-- Services Section start -->

  <section class="services">

    <h1 class="heading-title">Our Services</h1>

    <div class="box-container">

      <div class="box">
        <img src="images/icon-1.png" alt="">
        <h3>Adventure</h3>
      </div>

      <div class="box">
        <img src="images/icon-2.png" alt="">
        <h3>Tour Guide</h3>
      </div>

      <div class="box">
        <img src="images/icon-3.png" alt="">
        <h3>Trekking</h3>
      </div>

      <div class="box">
        <img src="images/icon-4.png" alt="">
        <h3>Camp Fire</h3>
      </div>

      <div class="box">
        <img src="images/icon-5.png" alt="">
        <h3>Off Road</h3>
      </div>

      <div class="box">
        <img src="images/icon-6.png" alt="">
        <h3>Camping</h3>
      </div>

    </div>

  </section>

  <!-- Services Section end -->


  <!-- Home About Section start -->

  <section class="home-about">

    <div class="image">
      <img src="images/about-img.jpg" alt="About Image">
    </div>

    <div class="content">
      <h3>About Us</h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem, voluptatibus illo. Aliquam beatae necessitatibus obcaecati nobis laborum velit cumque tempore reprehenderit? Laborum quia eligendi ipsa maxime? Saepe, voluptas! Sit, eaque!</p>
      <a href="about.php" class="btn">Read More</a>
    </div>

  </section>

  <!-- Home About Section end -->


  <!-- Home Packages Section start -->

  <section class="home-packages">

    <h1 class="heading-title">Our Packages</h1>

    <div class="box-container">

      <div class="box">
        <div class="image">
          <img src="images/img-1.jpg" alt="Images 1">
        </div>
        <div class="content">
          <h3>Adventure and Tour</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, dicta.</p>
          <a href="book.php" class="btn">Book Now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/img-2.jpg" alt="Images 2">
        </div>
        <div class="content">
          <h3>Adventure and Tour</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, dicta.</p>
          <a href="book.php" class="btn">Book Now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/img-3.jpg" alt="Images 3">
        </div>
        <div class="content">
          <h3>Adventure and Tour</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, dicta.</p>
          <a href="book.php" class="btn">Book Now</a>
        </div>
      </div>

    </div>

    <div class="load-more">
      <a href="package.php" class="btn">Load More</a>
    </div>

  </section>

  <!-- Home Packages Section end -->


  <!-- home offer section starts  -->

  <section class="home-offer">
    <div class="content">
      <h3>upto 50% off</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
      <a href="book.php" class="btn">book now</a>
    </div>
  </section>

  <!-- home offer section ends -->


  <!-- Footer Section start -->


  <section class="footer">

    <div class="box-container">

      <div class="box">
        <h3>quick links</h3>
        <a href="index.php"><i class="fas fa-angle-right"></i> Home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
        <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
      </div>

      <div class="box">
        <h3>extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a>
        <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
        <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
        <a href="#"><i class="fas fa-angle-right"></i> Terms Of Us</a>
      </div>

      <div class="box">
        <h3>contact info</h3>
        <a href="#"><i class="fas fa-phone"></i> +91-1212121212</a>
        <a href="#"><i class="fas fa-phone"></i> +91-5656565656</a>
        <a href="#"><i class="fas fa-envelope"></i> traveller10@gmail.com </a>
        <a href="#"><i class="fas fa-map"></i> Gandhinagar, Gujarat, India </a>
      </div>

      <div class="box">
        <h3>follow us</h3>
        <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
        <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
        <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
        <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
      </div>

    </div>

    <div class="credit">Credited by <span>Urvish Patel</span> | All Rights Reserved! </div>

  </section>


  <!-- Footer Section end -->


  <!-- Swiper JS link -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  <!-- JavaScript file link -->
  <script src="js/script.js"></script>

</body>

</html>