



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Page</title>
  <link rel="stylesheet" href="g_user.css">
</head>
<body>
  <header>
    <h1>MY services</h1>

    <nav>
      <a href="home.php">go to home</a>
    </nav>
    
  </header>

  <main>


    <section class="current-booking">
        <h2>Current Booking</h2>
        <div class="booking-container">
          <div class="booking-image">
            <img src="photo_2024-06-22_00-19-37.jpg" alt="Current Booking">
          </div>
          <div class="booking-details">
            <h3>whatever</h3>

            <?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "garages";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get current date
$currentDate = date("Y-m-d");

// SQL query to fetch bookings
$sql = "SELECT id, name, email, booking_date FROM bookings";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $bookingDate = $row["booking_date"];

        // Compare current date with booking date
        if ($currentDate < $bookingDate) {
            // Display booking information
           
            echo "Name: " . $row["name"] . "<br>";
            echo "Email: " . $row["email"] . "<br>";
            echo "Booking Date: " . $row["booking_date"] . "<br>";
            echo "<hr>";
        } else {
            // Delete booking record (you need to implement the deletion logic)
            $bookingId = $row["id"];
            $deleteSql = "DELETE FROM bookings WHERE id = $bookingId";

            if ($conn->query($deleteSql) === TRUE) {
                echo "your booking day has passed.<br>";
            } else {
                echo "Error deleting record: " . $conn->error . "<br>";
            }
        }
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
            <button type="button" id="cancelButton">CANCEL CURRENT BOOKING</button>
          </div>
        </div>
        
      </section>

        </div>
      </section>
  </main>

  <script src="g_user.js"></script>
</body>
</html>