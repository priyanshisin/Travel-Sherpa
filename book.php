
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Sherpa | book-now</title>


    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<!-- Booking header image starts -->
<div class="heading" style="background:url(assests/head-img4.png) no-repeat;">
    <!-- header section starts -->
    <section class="header">
        <div class="icon"><img src="assests/mainLogo.png"></div>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="packages.php">packages</a>
            <a href="book.php">Book Now</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars" onclick="showmenu()"></div>
    </section> 
    <!-- header section ends -->
    <h1> book now </h1>
</div>
<!-- Booking header image ends -->


<!-- booking section starts -->
<section class="booking">

    <h1 class="heading-title"> book your trip! </h1>


    <form action="book-form.php" method="post" class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" name="name" placeholder="enter your name">
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" name="email" placeholder="enter your email">
            </div>
            <div class="inputBox">
                <span>phone :</span>
                <input type="number" name="number" placeholder="enter your phone">
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" name="address" placeholder="enter your address">
            </div>
            <div class="inputBox">
                <span>where to :</span>
                <input type="text" name="location" placeholder="place you want to visit">
            </div>
            <div class="inputBox">
                <span>how many :</span>
                <input type="number" name="guests" placeholder="number of guests">
            </div>
            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name="leaving">
            </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>
<!-- booking section ends -->







<!-- footer section starts  -->
<section class="footer">

        <div class="box-container">
            <div class="box box1">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
                <a href="packages.php"><i class="fas fa-angle-right"></i> packages</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
            </div>
            <div class="box box2">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> about us</a>
                <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
            </div>
            <div class="box box3">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
                <a href="#"><i class="fas fa-envelope"></i> priyanshi.sin01@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Delhi, India - 110059</a>
            </div>
            <div class="box box4">
                <h3>Follow us</h3>
                <a href="#"><i class="fab fa-facebook"></i> facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
            </div>
        </div>
        <div class="credit"> created by <span>Ms. Priyanshi Baghela</span> | all rights reserved</div>

</section>
<!-- footer section ends -->









<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>
script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>
