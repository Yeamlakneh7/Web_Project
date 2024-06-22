<?php
// Database credentials
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $about = $_POST["about"];
    $theme_1 = $_POST["word1"];
    $theme_2 = $_POST["word2"];
    $theme_3 = $_POST["word3"];
    $services = $_POST["text"];
    $name = $_POST["g-name"];
    $phone = $_POST["contact-phone"];
    $email = $_POST["contact-email"];
    $address = $_POST["address"];
    $working_hours = $_POST["working-hours"];
    // Handle file upload
    $license_image = "";
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
        echo"<script> alert('image does not exist');</script>"
        ;}else{
            $filename = $_FILES["image"]["name"];
            $filesize = $FILES["image"]["size"];
            $tmpName = $FILES["image"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));
            if(!in_array($imageExtension, $validImageExtension)){
               echo"<script> alert('Invalid Image Extension');</script>"
               ;
            }
            else if($filesize > 10000000){
               echo"<script> alert('image size is too big');</script>"
               ;

            }else{

              $newImageName = uniqid();
              $newImageName .= '.' . $imageExtension;

              move_uploaded_file($tmpName, 'img/' . $newImageName);
          

            }


        }







    //     $target_dir = "uploads/";
    //     $target_file = $target_dir . basename($_FILES["image"]["name"]);
    //     if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    //         $license_image = $target_file;
    //     } else {
    //         // Handle file upload error
    //         echo "Error uploading file.";
    //         exit;
    //     }
    // }
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO garage (about, word1, word2, word3, services, name, phone, email, address, working_hours, license_image)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssss", $about, $word1, $word2, $word3, $services, $name, $phone, $email, $address, $working_hours, $license_image);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('NEW GARAGE ACCOUNT IS CREATED SUCCESSFULLY!!');</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";}

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration or Sign Up form</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body style="background-image: url(form.jpeg);">
    

<form>
    <h2>Garage Profile Contents
    </h2>
  <label for="about"> Give a description about your Garage: </label><br><textarea name="about" id="about"></textarea><br>
    <label for="garage-description">Write three theme that best describe your Garage:</label>
    <div class="three-words">
      <input type="text" id="word1" name="word1" placeholder="i.e Honesty" required>
      <input type="text" id="word2" name="word2" placeholder="second term" required>
      <input type="text" id="word3" name="word3" placeholder="third term" required>
    </div>
  
    <label for="services">List the services that your garage offer:</label>
    <div class="services">
      <textarea id="text-input" name="text" rows="5" required></textarea>
    </div>
  
    <label for="contact">Contact Information: </label>
    <div class="contact-info">
      <input type="text" id="g-name" name="g-name" placeholder="Garage Name" required>
      <input type="text" id="contact-phone" name="contact-phone" placeholder="Phone" required>
      <input type="email" id="contact-email" name="contact-email" placeholder="Email" required>
    </div>
  
    <label for="address">Address:</label>
    <textarea id="address" name="address" rows="3" placeholder="Enter your address" required></textarea>
  
   <br> <label for="working-hours">Working Hours:</label>
    <div class="working-hours">
      <input type="text" id="working-hours" name="working-hours" placeholder="Enter your working hours" required>
    </div>
  
    <button type="submit">Submit</button>
  </form>
</body>
</html>