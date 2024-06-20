<?php
 
  if($_SERVER["REQUEST_METHOD"] === "POST"){
    $conn = require __DIR__ ."/../RegistrationPage/regDatabase.php";
    $sql = sprintf("SELECT * FROM owner WHERE email = '%s' ", $conn->real_escape_string($_POST["email"]));
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();

    if($user){
        if(password_verify($_POST["password"],$user["password_hash"])){
            session_start();
            $_SESSION["user_id"] = $user["id"];
            header("Location: index.php");
            exit;
        }
    }
    
  }
?>