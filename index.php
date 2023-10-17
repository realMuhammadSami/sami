<?php
session_start();
if (isset($_SESSION["loggedin"])) {
    $txt = "Dashboard";
} else {
    $txt = "Login";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style2.css">
    <title>Food X</title>
</head>

<body>
    <nav>

        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa-duotone fa-bars"></i>
        </label>

        <label class="logo" id="homeLogo" onclick="reload()">Food X</label>
        <ul>
            <li><a href="#" id="home" onclick="onNavItemClick('United States')">Home</a></li>
            <li><a href="#" id="politics" onclick="onNavItemClick('Politics')">Politics</a></li>
            <li><a href="#" id="business" onclick="onNavItemClick('Business')">Business</a></li>
            <li><a href="#" id="sports" onclick="onNavItemClick('Sports')">Sports</a></li>
            <li><a href="#" id="technology" onclick="onNavItemClick('Technology')">Technology</a></li>
            <li><a href="#" id="login" onclick="window.location.href = 'login.php';">
                    <?php echo "$txt" ?>
                </a></li>
        </ul>


        <!-- <div class="nav-links">
            <ul class="flex">
                <li class="hover-link nav-item" id="ipl" onclick="onNavItemClick('ipl')">Home</li>
                <li class="hover-link nav-item" id="politics" onclick="onNavItemClick('politics')">Politics</li>
                <li class="hover-link nav-item" id="business" onclick="onNavItemClick('business')">Business</li>
                <li class="hover-link nav-item" id="sports" onclick="onNavItemClick('sports')">Sports</li>
                <li class="hover-link nav-item" id="technology" onclick="onNavItemClick('technology')">Technology</li>
            </ul>
        </div> -->


    </nav>

    <div class="hero-section">
        <h1 class="hero-text">Delicious Food<br>Delivered to Your Doorstep</h1>
        <a href="#" class="cta-button">Order Now</a>
    </div>



    <div style="margin-top: 100px; margin-bottom: 20px;">
        <h1 style="margin-bottom: 10px;">Frequently Ordered</h1>
    </div>

    <div class="order-container">
        <div class="order-box">
            <img src="images/slider-img1.png" alt="Menu 1">
            <h2>Fresh Catch Delight</h2>
            <button class="order-button">Order Now</button>
        </div>

        <div class="order-box">
            <img src="images/slider-img3.png" alt="Menu 2">
            <h2>Pulses Paradise Pleasure</h2>
            <button class="order-button">Order Now</button>
        </div>

        <div class="order-box">
            <img src="images/slider-img4.png" alt="Menu 3">
            <h2>Garden Fresh Bounty</h2>
            <button class="order-button">Order Now</button>
        </div>

        <div class="order-box">
            <img src="images/slider-img2.png" alt="Menu 4">
            <h2>Bean Bliss Delight</h2>
            <button class="order-button">Order Now</button>
        </div>
    </div>

    <!-- Cart icon and count -->
    <div class="cart-container">
        <div class="cart-icon">
            <img src="images/cart.png" alt="Cart Icon">
        </div>
        <div id="cartCount" class="cart-count">0</div>
    </div>


    <div class="rounded-box">
    <h2>Our Food Journey to Your Doorstep</h2>
    <p>
        At <strong>Food X</strong>, we believe in more than just serving delicious meals. We're on a mission to bring
        culinary delights straight to your doorstep, ensuring every bite is a memorable experience. Our chefs
        passionately craft each dish, infusing it with flavors that tantalize your taste buds.
        <br><br>
        With our door-to-door food service, we blend convenience and quality, promising a hassle-free dining
        adventure. From sizzling appetizers to mouthwatering main courses and delectable desserts, our menu is a
        symphony of tastes and textures.
        <br><br>
        Embrace the joy of dining without leaving your home. Experience the warmth of our hospitality and the
        richness of our cuisine delivered right to your door. Let us make your moments special and your meals
        extraordinary.
    </p>
</div>














    <div class="carousel-wrapper">

    <div class="carouselTitle">
            <h1>Fast Food</h1>
        <div class="carousel-container">
            <div class="carousel-slides">
                <?php
                // Array of food items and their image file names
                $foodItems = [
                    "Meat Burger" => "salad.jpg",
                    "Mexican Pizza" => "pizza.jpg",
                    "Cheese Burger" => "pasta.jpg",
                    "Chicken Burger" => "sushi.jpg",
                    "Egg Burger" => "burger.jpg",
                ];

                foreach ($foodItems as $foodName => $imageName) {
                    echo "<div class='slide'><img src='images/$imageName' alt='$foodName'><div class='caption'>$foodName</div></div>";
                }
                ?>
            </div>
            <div class="carousel-bar"></div>
        </div>
        </div>

        <div class="carouselTitle">
            <h1>Pakistani Food</h1>
        <div class="carousel-container">
            <div class="carousel-slides">
                <?php
                // Array of food items and their image file names
                $foodItems = [
                    "Pulses" => "pizza2.jpg",
                    "Rice" => "burger2.jpg",
                    "Naan" => "pasta2.jpg",
                    "Curry" => "sushi2.jpg",
                    "Samosa" => "salad2.jpg",
                ];

                foreach ($foodItems as $foodName => $imageName) {
                    echo "<div class='slide'><img src='images/$imageName' alt='$foodName'><div class='caption'>$foodName</div></div>";
                }
                ?>
            </div>
            <div class="carousel-bar"></div>
        </div>
        </div>

        <div class="carouselTitle">
            <h1>Desserts </h1>
        <div class="carousel-container">
            <div class="carousel-slides">
                <?php
                // Array of food items and their image file names
                $foodItems = [
                    "Pan Cake" => "pizza3.jpg",
                    "Chocolate" => "burger3.jpg",
                    "Dark Cake" => "pasta3.jpg",
                    "Doughnuts" => "sushi3.jpg",
                    "Jam Pan Cake" => "salad3.jpg",
                ];

                foreach ($foodItems as $foodName => $imageName) {
                    echo "<div class='slide'><img src='images/$imageName' alt='$foodName'><div class='caption'>$foodName</div></div>";
                }
                ?>
            </div>
            <div class="carousel-bar"></div>
        </div>
        </div>
    </div>






    </div>













    <div class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h2>Contact Us</h2>
                <p>Email: info@FoodX.com</p>
                <p>Phone: +92 43456-7890</p>
            </div>
            <div class="footer-section">
                <h2>Newsletter</h2>
                <form class="subscribe-form">
                    <input type="email" class="subscribe-input" placeholder="Enter your email">
                    <button type="submit" class="subscribe-button">Subscribe</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Font Awesome JS (for icons) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>






















<script src="script2.js"></script>











</body>

</html>