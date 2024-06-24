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

if (!isset($_GET['id'])) {
    echo "Garage ID not specified";
    exit;
}

$garage_id = intval($_GET['id']);
$sql = "SELECT about, word1, word2, word3, services, name, phone, email, address, working_hours FROM garages WHERE id = $garage_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row["name"];
    $about = $row["about"];
    $theme1 = $row["word1"];
    $theme2 = $row["word2"];
    $theme3 = $row["word3"];
    $booking = $row["services"];
    $phone = $row["phone"];
    $email = $row["email"];  
    $address = $row["address"];
    $work_hours = $row["working_hours"];
    
} else {
    echo "Garage not found";
    exit;
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $name ?></title>
    <link rel="stylesheet" href="./finalHomePage/backupfiles/CSS/style.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
<style>
  .h1welcome {
    padding: 20px;
    background-image: url('./finalHomePage/backupfiles/StockCake-Car Cleaning Service_1718544333.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
    color: white;
  }
</style>
  </head>
  <body>
    <header>
      <nav>
        <button class="menu-icon" onclick="toggleMenu()">☰</button>
        <ul id="nav-links">
          <li><a href="#welcome" style="color: red">HOME</a></li>
          <li><a href="#about" style="color: red">ABOUT</a></li>
          <li><a href="#booking" style="color: red">BOOKING</a></li>
          <li><a href="#servicess" style="color: red">SERVICES</a></li>
          <li><a href="#contact" style="color: red">CONTACT</a></li>
          <!-- <li> <span><img src="/image/211817_search_strong_icon.png" alt=""></span><input type="search" name="search" id="search" /></li> -->
        </ul>
      </nav>
      <script src="script.js"></script>
    </header>

    <div class="h1welcome" id="welcome">
      
     <h1 style="text-align: center; margin: 100px; color: white">WEL<b style="color: red;">COME</b> TO <?php echo $name; ?></h1>
      <span style="margin: 150px">
        <a style="color: white" href="#services">services/</a>
        <a style="color: white" href="#about">about us/</a>
        <a style="color: white" href="#contact">contact</a></span
      >
    </div>
<br>
    <div class="about-section" id="about">
      <div class="image-container">
        <img src="./finalHomePage/backupfiles/redmefcha.jpg" alt="Garage Image" class="about-image" />
      </div>

      <div class="about-text">
        <h2 style="color: red">About Our Garage</h2>
        <p style="color: black">
          <?php echo $about; ?>
	</p>
      </div>
    </div>

    <section id="services" class="service">
      <div class="serviceList">
        <div class="serv1">
          01
          <hr style="width: 200px" ; />
          <h2 style="color: red"><?php echo $theme1; ?></h2>
          <p>
            <?php echo $theme1; ?> is our first identity. Before everything, we prioritize and give attention to <?php echo $theme1; ?>, to help our users be satisfied in our services.
          </p>
        </div>
        <div class="serv2">
          02
          <hr style="width: 200px" />
          <h2 style="color: red"><?php echo $theme2; ?></h2>
          <p>
            Second to <?php echo $theme1; ?>, we do give attention to <?php echo $theme2; ?> We work relentlessely to achieve this for the sake of our customers needs.
          </p>
        </div>
        <div class="serv3">
          03
          <hr style="width: 200px" />
          <h2 style="color: red"><?php echo $theme3; ?></h2>
          <p>
            The other focus of <?php echo $name; ?> Garage is <?php echo $theme3; ?>. We will increase the satisfaction of our users by working through the best practices of <?php echo $theme3; ?> 
          </p>
          <hr />
        </div>
      </div>
      <hr />
    </section>
    <div class="explore">
      <p
        style="
          color: red;
          text-align: center;
          background-color: white;
          padding: 10px;
          opacity: 0.6;
        "
      >
        //E X P L O R E OUR SERVICES//
      </p>
    </div>
    <section class="service2" id="servicess" >
      <div class="serTitels">
        <div class="digno" id="diagnostic">
          <div class="section-title">
            <i class="icon fa-solid fa-car"></i>
          </div>
          <p style="color: red">DIAGNOSTIC TEST</p>
        </div>

        <div class="Engine" id="engine">
          <div class="section-title">
            <i class="icon fa-solid fa-car-on"></i>
          </div>
          <p style="color: red">ENGINE SERVICING</p>
        </div>

        <div class="tire"  id="tires">
          <div class="section-title">
            <i class="icon fa-solid fa-car-burst"></i>
          </div>
          <p style="color: red">TIRES REPLACING</p>
        </div>
        <div class="oil" id="oil">
          <div class="section-title">
            <i class="icon fa-solid fa-oil-can"></i>
          </div>
          <p style="color: red">OIL CHANGING</p>
        </div>
      </div>

      <div class="imageP">
        <img
          class="firstimage" id="serviceImage"
          src="./finalHomePage/backupfiles/engin-akyurt-f4UbPVbJcjw-unsplash.jpg"
          style="width: 400px; margin-top: 50px; margin-left: 50px"
          alt=""
        />
      </div>
      <div class="discrip">
        <p id="serviceDescription">
          <b>15 Years Of Experience</b> <br />
          <br />
          In Auto Servicing Tempor erat elitr rebum at clita. Diam dolor diam
          ipsum sit. <br />
          Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
          stet <br />lorem sit clita duo justo magna dolore erat amet Quality
          Servicing Expert Workers Modern Equipment
        </p>
      </div>
    </section>
    <div class="wrapper" id="booking">
      <div class="container">
        <div class="left-section">
          <h1>Why Book Your Services In <?php echo $name; ?> garage ?</h1>
          <p>
            <!--Booking your car service in advance with us not only guarantees you
            a slot at your convenience but also comes with a host of exclusive
            benefits. Enjoy priority service, which means your vehicle gets
            attended to faster, reducing your wait time significantly.
            Additionally, advance bookings are eligible for special discounts,
            allowing you to save on essential maintenance and repairs. This
            ensures that your car remains in top condition without breaking the
            bank. Don't miss out on these advantages—schedule your service today
            and experience the premium care and savings that come with planning
            ahead! -->
		<?php echo $booking; ?>
          </p>
        </div>
        <div class="right-section">
          <h2>Book For A Service</h2>
        <form action="submit_booking.php" method="POST">
            <div class="form-group">
                <input type="text" id="name" name="name" placeholder="Your Name" required />
                <input type="email" id="email" name="email" placeholder="Your Email" required />
            </div>
            <div class="form-group">
                <select id="service" name="service" required>
                    <option value="">Select A Service</option>
                    <option value="oil-change">Oil Change</option>
                    <option value="brake-repair">Brake Repair</option>
                    <option value="tire-replacement">Tire Replacement</option>
                </select>
                <input type="date" id="date" name="date" required />
            </div>
            <div class="form-group">
                <textarea id="special-request" name="special-request" placeholder="Special Request" rows="4"></textarea>
            </div>
            <input type="hidden" id="garage_id" name="garage_id" value="<?php echo $garage_id; ?>" />
            <button type="submit" class="btn-primary">Book Now</button>
        </form>

        </div>
      </div>
    </div>

    <div class="main-container" id="contact">
      <div class="lower-container">
        <div class="address">
          <h4>Address</h4>
          <p class="addr">
          <i class="fa-solid fa-location-dot"></i>
            <?php echo $address; ?>
          </p>
          <p class="phon">
            <i class="fa-solid fa-phone"></i>
            <?php echo $phone; ?>
          </p>
          <p class="mail">
           <i class="fa-solid fa-envelope"></i>
            <?php echo $email; ?>
          </p>
        </div>
        <div class="work-hr">
          <p>
            
            <b>Monday - Friday:</b>
          </p>
          <p>
            <i class="fa-solid fa-clock"></i>
            <?php echo $work_hours; ?></p>
          <br />
          <p><b>Saturday - Sunday:</b></p>
          <p><i class="fa-solid fa-clock"></i>
            <?php echo $work_hours; ?></p>
        </div>

        <div class="servProvided">
          <p class="hover-text"><i class="fa-solid fa-arrow-right"></i>Diagnostic Test</p>

          <p class="hover-text"><i class="fa-solid fa-arrow-right"></i>Engine Servicing</p>

          <p class="hover-text"><i class="fa-solid fa-arrow-right"></i>Tirea Replacement</p>

          <p class="hover-text"><i class="fa-solid fa-arrow-right"></i>Oil Changing</p>

          <p class="hover-text"><i class="fa-solid fa-arrow-right"></i>Vacume Cleaning</p>
        </div>
      </div>
    </div>

    <footer>
      <p style="color: white">&copy; 2024 Garage Services Platform</p>
    </footer>

    <script>
        function toggleMenu() {
            var navLinks = document.getElementById("nav-links");
            if (navLinks.style.display === "block") {
                navLinks.style.display = "none";
            } else {
                navLinks.style.display = "block";
            }
        }
    </script>
  </body>
</html>
