<?php

  if(empty($_POST["name"])){
    // die("Name is required.");
    echo '<script>alert("PLEASE ENTER A NAME FIELD");; window.location.href = "register.html";</script>';
  }
  if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
  //  die("Valid email is required");
   echo '<script>alert("PLEASE ENTER A VALID EMAIL");; window.location.href = "register.html";</script>';
  }
  if(strlen($_POST["password"])<8){
  //  die("Password must be atleast 8 characters.");
   echo '<script>alert("PASSWORD MUST BE ATLEAST 8 CHARACTERS");; window.location.href = "register.html";</script>';
  }
  if(!preg_match("/[a-z]/i",$_POST["password"])){
    // die("Password must contain atleast 1 letter.");
    echo '<script>alert("PASSWORD MUST CONTAIN ATLEAST 1 LETTER");; window.location.href = "register.html";</script>';
  }
  if(!preg_match("/[0-9]/i",$_POST["password"])){
    die("Password must contain atleast one number.");
    echo '<script>alert("PLEASE ENTER A NAME FIELD");; window.location.href = "register.html";</script>';
  }
  if($_POST["password"]!==$_POST["confirmPassword"]){
    // die("Passwords must match.");
    echo '<script>alert("PASSWORD MUST MATCH");; window.location.href = "register.html";</script>';
  }
 
  if(isset($_POST["register_owner"])){
  $password_hash = password_hash($_POST["password"],PASSWORD_DEFAULT);
   
  $conn = require __DIR__."/regDatabase.php";
   $sql = "INSERT INTO owner (name,email,password_hash) VALUES (?,?,?);";
   $stmt = $conn->stmt_init();
   if (!$stmt->prepare($sql)){
       die("SQL error: " .$conn->error);
   }

   $stmt->bind_param("sss",$_POST["name"],$_POST["email"],$password_hash);
   if($stmt->execute()){
    echo '<script>alert("YOU HAVE REGISTERED SUCCESSFULLY!!!");; window.location.href = "../loginpage/home.php";</script>';
        // header("Location: signup-success.html");
        exit;
       }
   else{
      die($conn->error ." " . $conn->errno);
   }
  }

  else if(isset($_POST["register_user"])){
    $password_hash = password_hash($_POST["password"],PASSWORD_DEFAULT);
   
    $conn = require __DIR__."/regDatabase.php";
     $sql = "INSERT INTO user (name,email,password_hash) VALUES (?,?,?);";
     $stmt = $conn->stmt_init();
     if (!$stmt->prepare($sql)){
         die("SQL error: " .$conn->error);
     }
  
     $stmt->bind_param("sss",$_POST["name"],$_POST["email"],$password_hash);
     if($stmt->execute()){
      
      echo '<script>alert("YOU HAVE REGISTERED SUCCESSFULLY!!!");; window.location.href = "../loginpage/home.php";</script>';
          // header("Location: signup-success.html");
          exit;
         }
     else{
        die($conn->error ." " . $conn->errno);
     }
    }
  
?>