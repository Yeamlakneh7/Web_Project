<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "garage_profiles";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, address FROM garages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $garages[] = $row;
    }
} else {
    echo "No garages found";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HomePage</title>
    <link rel="stylesheet" href="home.css" />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body>
    <div class="container">
        <div>
            <nav class="navStyle">
                <div>
                    <img src="7885905.jpg" alt="garage logo" class="logo">
                </div>
                <header>
                    <nav>
                        <button class="menu-icon" onclick="toggleMenu()">☰</button>
                        <ul id="nav-links">
                            <li><a href="#home" style="color: red">HOME</a></li>
                            <li><a href="#about" style="color: red">ABOUT</a></li>
                            <li><a href="#garages" style="color: red">GARAGES</a></li>
                            <li><a href="#contact" style="color: red">CONTACT</a></li>
                        </ul>
                    </nav>
                    <script src="scripts.js"></script>
                </header>
                <div>
                    <a href="../RegistrationPage/register.html"><button class="main-button" style="background-color: green;">Register</button></a> 
                    </div>
                    <a href="../loginPage/login.html"><button style="background-color: green;">LogIn</button></a>
                    <a href="#" id="profile-link" style="display: none">Profile</a>
                </div>
            </nav>
        </div>
    </div>
   
    <div class="moto">
        <h1 class="fancy-title home" id="home">Fix Finder</h1>
        <h2 class="sub-title" style="color: red;">Find your Nearby Garage Here!</h2>
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
            <?php foreach($garages as $garage): ?>
            <div class="garage_link">
                <a class="link" href="../display_garages.php?id=<?php echo $garage['id']; ?>">
                    <div class="garage">
                        <h2 class="garage-name"><?php echo $garage['name']; ?></h2>
                        <p class="garage-address"><?php echo $garage['address']; ?></p>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <div class="main-container" id="contact">
        <div class="lower-container">
            <div class="address">
                <h4>Address</h4>
                <p class="addr"><i class="fa-solid fa-location-dot"></i> Ethiopia, Addis Ababa, Bole</p>
                <p class="phon"><i class="fa-solid fa-phone"></i> +251983622953</p>
                <p class="mail"><i class="fa-solid fa-envelope"></i> info@example.com</p>
            </div>
            <div class="work-hr">
                <p><b>Monday - Friday:</b></p>
                <p><i class="fa-solid fa-clock"></i> 09.00AM - 09.00PM</p>
                <p><b>Saturday - Sunday:</b></p>
                <p><i class="fa-solid fa-clock"></i> 09.00AM - 12.00PM</p>
            </div>
            <div class="servProvided">
                <p class="hover-text"><i class="fa-solid fa-arrow-right"></i>Diagnostic Test</p>
                <p class="hover-text"><i class="fa-solid fa-arrow-right"></i>Engine Servicing</p>
                <p class="hover-text"><i class="fa-solid fa-arrow-right"></i>Tire Replacement</p>
                <p class="hover-text"><i class="fa-solid fa-arrow-right"></i>Oil Changing</p>
                <p class="hover-text"><i class="fa-solid fa-arrow-right"></i>Vacuum Cleaning</p>
            </div>
        </div>
    </div>
    <footer>
        <p style="color: white">&copy; 2024 Garage Services Platform</p>
    </footer>
    <script src="home.js"></script>
</body>
</html>
