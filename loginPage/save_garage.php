<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "garage_profiles";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $about = $_POST['about'];
    $word1 = $_POST['word1'];
    $word2 = $_POST['word2'];
    $word3 = $_POST['word3'];
    $services = $_POST['services'];
    $gName = $_POST['g-name'];
    $contactPhone = $_POST['contact-phone'];
    $contactEmail = $_POST['contact-email'];
    $address = $_POST['address'];
    $workingHours = $_POST['working_hours'];

    // Insert record into database
    $insertSql = "INSERT INTO garages (about, word1, word2, word3, services, name, phone, email, address, working_hours)
                  VALUES ('$about', '$word1', '$word2', '$word3', '$services', '$gName', '$contactPhone', '$contactEmail', '$address', '$workingHours')";

    if ($conn->query($insertSql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insertSql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
