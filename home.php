<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Sherpa | Home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!-- home section starts -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url(assests/image-8.jpg) no-repeat;">

                    <!-- header section starts -->
                    <section class="header">
                        <div class="icon"><img src="assests/mainLogo.png"></div>
                        <nav class="navbar">
                            <a href="home.php">home</a>
                            <a href="about.php">about</a>
                            <a href="packages.php">packages</a>
                            <a href="book.php">Book Now</a>
                        </nav>
                        <div id="menu-btn" class="fas fa-bars" onclick="showmenu()" ></div>
                    </section> 
                    <!-- header section ends -->

                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="packages.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(assests/slide1.jpg) no-repeat;">
                    
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
                    <!-- header section ends  -->

                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="packages.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(assests/bg1.jpg) no-repeat;">
                    
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

                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worldwide</h3>
                        <a href="packages.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- home section ends -->


    <!-- services section starts -->
    <section class="services">
        <h1 class="heading-title">our services</h1>
        <div class="s-box-container">
            <div class="s-box box1">
                <img src="assests/adventure-icon.jpg">
                <h3>adventure</h3>
            </div>
            <div class="s-box box2">
                <img src="assests/tour-guide-icon.jpg">
                <h3>tour guide</h3>
            </div>
            <div class="s-box box3">
                <img src="assests/trekking-icon.jpg">
                <h3>trekking</h3>
            </div>
            <div class="s-box box4">
                <img src="assests/camping-icon.jpg">
                <h3>camping</h3>
            </div>
            <div class="s-box box4">
                <img src="assests/off-road-icon.jpg">
                <h3>off-road</h3>
            </div>
            <div class="s-box box4">
                <img src="assests/camp-fire-icon.jpg">
                <h3>camp fire</h3>
            </div>
        </div>
    </section>
    <!-- services section end -->


    <!-- home about section starts -->
    <section class="home-about">
        <div class="image">
            <img src="assests/about-us-main.jpg" >
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate a inciduntvoluptatum alias deserunt ipsa doloremque tempore corporis, soluta sed! Perspiciatisaliquid neque voluptatibus similique impedit assumenda, alias quam beatae.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <!-- home about section ends -->


    <!-- home packages section starts -->
    <section class="home-packages">
        <h1 class="heading-title"> our packages </h1>
        
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="assests/TajMahal.jpg">
                </div>
                <div class="content">
                    <h3> Taj Mahal, Agra </h3>
                    <p>An immense mausoleum of white marble, built in Agra,is the jewel of Muslim art in India and one of the universally admired masterpieces of the world's heritage.</p>
                    <a href="book.php" class="btn">book now</a>
                    <p>only at &#8377 6999 per person</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assests/Jaipur.jpg">
                </div>
                <div class="content">
                    <h3> Hawa Mahal, Jaipur </h3>
                    <p>Jaipur-the pink city is a major sightseeing destination in Rajasthan.The city is a treasure trove of must-visit attractions, with the Hawa Mahal(Palace of Winds) standing as an iconic symbol of Jaipur's architectural prowess.</p>
                    <a href="book.php" class="btn">book now</a>
                    <p>only at &#8377 7500 per person</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assests/Manali.jpg">
                </div>
                <div class="content">
                    <h3> Manali, Himachal Pradesh</h3>
                    <p>Gifted to the world by the mighty Himalayas.Besides natural beauty,Manali is known for its unlimited adventure, the famous Hadimba Temple, the scenic Rohtang Pass, the snow-laden Solang Valley and its delightful culinary scene.</p>
                    <a href="book.php" class="btn">book now</a>
                    <p>only at &#8377 10,999 per person</p>
                </div>
            </div>
        </div>
        <div class="load-more"><a href="packages.php" class="btn">load more</a></div>        
    
    </section>
    <!-- home packages section ends -->


    <!-- home-offer section starts -->
    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ipsum similique doloremque unde tenetur a natus amet ad illo quo!</p>
            <a href="book.php" class="btn"> book now </a>
        </div>
    </section>
    <!-- home-offer section ends -->


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
</body>
</html>