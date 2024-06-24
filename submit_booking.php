<?php
// Database connection details
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if garage_id is set
    if (!isset($_POST['garage_id'])) {
        die("Garage ID not provided");
    }

    // Get form data and sanitize
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $service = $conn->real_escape_string($_POST['service']);
    $date = $conn->real_escape_string($_POST['date']);
    $specialRequest = $conn->real_escape_string($_POST['special-request']);
    $garage_id = intval($_POST['garage_id']);

    // Assuming you have a way to get user_id
    $user_id = 1; // Replace with actual user_id

    // Prepare the SQL statement
    $serviceDetail = $service . ': ' . $specialRequest;
    $sql = "INSERT INTO bookings (user_id, garage_id, name, email, service_details, booking_date, created_at) 
            VALUES ('$user_id', '$garage_id', '$name', '$email', '$serviceDetail', '$date', NOW())";

    // Execute statement
    if ($conn->query($sql) === TRUE) {
        echo "Booking saved successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>
