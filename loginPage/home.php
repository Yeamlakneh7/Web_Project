<?php
session_start();

// Check if user is logged in
if (isset($_SESSION['user_id'])) {
    // User is logged in
    $loggedIn = true;
} else {
    // User is not logged in
    $loggedIn = false;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../homepage/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    
    <div class="container">
        <div>
            <nav class="navStyle">
                <div>
                    <img src="../homepage/7885905.jpg" alt="garage logo" class="logo">
                </div>
                <header>
                    <nav>
                        <button class="menu-icon" onclick="toggleMenu()">☰</button>
                        <ul id="nav-links">
                            <li><a href="home.php" style="color: red">HOME</a></li>
                            <li><a href="#about" style="color: red">ABOUT</a></li>
                            <li><a href="booking.html" style="color: red">BOOKING</a></li>
                            <li><a href="services.html" style="color: red">SERVICES</a></li>
                            <li><a href="#contact" style="color: red">CONTACT</a></li>
                        </ul>
                    </nav>
                    <script src="scripts.js"></script>
                </header>
                <div>
                <?php if ($loggedIn) { ?>
                        <!-- Show logout and profile link if logged in -->
                        <a href="g_user.php" class="button">Profile</a>
                        <a href="logout.php" class="button">Logout</a>
                    <?php } else { ?>
                        <!-- Show register and login buttons if not logged in -->
                        <a href="../RegistrationPage/register.html" class="bu">Register</a>
                        <a href="../loginPage/login.html" class="bu">Login</a>
                    <?php } ?>
                </div>
            </nav>
        </div>
    </div>
   
    <div class="moto">
        <h1 class="fancy-title home">Fix Finder</h1>
        <h2 class="sub-title" style="color: red;">Find your Nearby Garage Here !</h2>
        <p class="describe" style="color: black;">
            Make it easy to find and access local automotive repair services.
        </p>
    </div>

    <div style="background-image: url('photo_2024-06-21_16-36-36.jpg');">
        <div class="aboutUs-div" id="aboutUs-id">
            <h2 class="aboutUs" id="about">About Us</h2>
            <p>
                Our mission is to simplify the process of finding reliable and
                trustworthy garages in your area, ensuring that you get the best
                service for your vehicle with minimal hassle. At FixFinder, we
                understand how crucial it is to have a dependable mechanic you can
                trust. Whether you need routine maintenance, urgent repairs, or expert
                advice, our platform is designed to help you find the right garage
                quickly and easily. By bringing together a network of reputable
                garages, we aim to provide you with a range of options tailored to
                your specific needs.
            </p>
            <p>
                Our user-friendly interface allows you to search for garages based on
                location, services offered, customer reviews, and more. We are
                committed to transparency and quality, providing detailed profiles for
                each garage, so you can make an informed decision. Join the FixFinder
                community today and experience the convenience of finding top-notch
                automotive care right around the corner. Your vehicle deserves the
                best, and we’re here to help you find it.
            </p>
        </div>
    </div>
      
    <div class="garages-section" id="garages" style="background-color:black;">
        <h3 style="padding-bottom: 20px; color: white;">Find your nearby garage</h3>
        <div class="garages-container">
          
            <div class="garage_link1">
                <a class="link" href="../home page/backupfiles/garage1.html">
                    <div class="garage">
                        <h2 class="garage-name">Garage 1</h2>
                        <img class="garage-img" src="/.jpg" alt />
                        <p class="garage-address"></p>
                    </div>
                </a>
            </div>

            <div class="garage_link2">
                <a class="link"  href="#">
                    <div class="garage">
                        <h2 class="garage-name">Garage 2</h2>
                        <img class="garage-img" src="" alt />
                        <p class="garage-address">location:bole bulbula</p>
                    </div>
                </a>
            </div>

            <div class="garage_link3">
                <a class="link" href=""> 
                    <div class="garage">
                        <h2 class="garage-name">Garage 3</h2>
                        <img class="garage-img" src="" alt />
                        <p class="garage-address"></p>
                    </div>
                </a>
            </div>

            <div class="garage_link4">
                <a class="link" href=""> 
                    <div class="garage">
                        <h2 class="garage-name">Garage 4</h2>
                        <img class="garage-img" src="" alt />
                        <p class="garage-address"></p>
                    </div>
                </a>
            </div>
          
            <div class="garage_link5">
                <a class="link" href="">
                    <div class="garage">
                        <h2 class="garage-name">Garage 5</h2>
                        <img class="garage-img" src="" alt />
                        <p class="garage-address"></p>
                    </div>
                </a>
            </div>
          
            <div class="garage_link6">
                <a class="link" href="">  
                    <div class="garage">
                        <h2 class="garage-name">Garage 6</h2>
                        <img class="garage-img" src="" alt />
                        <p class="garage-address"></p>
                    </div>
                </a>
            </div>
        </div>
    </div>
     
    <div class="" id="contact">
        <div class="main-container" id="contact">
            <div class="lower-container">
                <div class="address">
                    <h4>Address</h4> <br>
                    <p class="addr">
                        <i class="fa-solid fa-location-dot"></i>
                        Ethiopia,Addis Ababa, Bole
                    </p> <br>
                    <p class="phon">
                        <i class="fa-solid fa-phone"></i>
                        +251983622953 
                    </p><br>
                    <p class="mail">
                        <i class="fa-solid fa-envelope"></i>
                        info@example.com
                    </p><br>
                </div>
                <div class="work-hr">
                    <p>
                        <b>Monday - Friday:</b>
                    </p> <br>
                    <p>
                        <i class="fa-solid fa-clock"></i>
                        09.00AM - 09.00PM</p>
                    <br />
                    <p><b>Saturday - Sunday:</b></p> <br>
                    <p><i class="fa-solid fa-clock"></i>
                        09.00AM - 12.00PM</p>
                </div>
                <br>
                <div class="servProvided">
                    <p class="hover-text"><i class="fa-solid fa-arrow-right"></i>Diagnostic Test</p><br>
                    <p class="hover-text"><i class="fa-solid fa-arrow-right"></i>Engine Servicing</p><br>
                    <p class="hover-text"><i class="fa-solid fa-arrow-right"></i>Tirea Replacement</p><br>
                    <p class="hover-text"><i class="fa-solid fa-arrow-right"></i>Oil Changing</p><br>
                    <p class="hover-text"><i class="fa-solid fa-arrow-right"></i>Vacume Cleaning</p><br>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p style="color: white">&copy; 2024 Garage Services Platform</p>
    </footer>

    <script src="home.js"></script>
</body>
</html>
