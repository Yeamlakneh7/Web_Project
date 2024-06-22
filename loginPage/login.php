<?php
 
  if($_SERVER["REQUEST_METHOD"] === "POST"){
  
     if(isset($_POST["login_owner"])){   
        $conn = require __DIR__ ."/../RegistrationPage/regDatabase.php";
        $sql = sprintf("SELECT * FROM owner WHERE email = '%s' ", $conn->real_escape_string($_POST["email"]));
        $result = $conn->query($sql);
        $user = $result->fetch_assoc();

        if($user){
            if(password_verify($_POST["password"],$user["password_hash"])){
                session_start();
                $_SESSION["user_id"] = $user["id"];
                header("Location: g_owner.php");
                exit;
            }
            else{
             
      echo '<script>alert("PLEASE ENTER A VALID PASSWORD");; window.location.href = "login.html";</script>';
            }
        }
        else{
          
          echo '<script>alert("PLEASE ENTER A VALID EMAIL OR SIGN UP IF YOU DO NOT HAVE AN ACCOUNT!");; window.location.href = "login.html";</script>';
        }
    
  } 
  else if(isset($_POST["login_user"])){
    $conn = require __DIR__ ."/../RegistrationPage/regDatabase.php";
    $sql = sprintf("SELECT * FROM user WHERE email = '%s' ", $conn->real_escape_string($_POST["email"]));
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();

    if($user){
        if(password_verify($_POST["password"],$user["password_hash"])){
            session_start();
            $_SESSION["user_id"] = $user["id"];
            header("Location: home.php");
            exit;
        }
        else{
          

          echo '<script>alert("ENTER A VALID PASSWORD");; window.location.href = "login.html";</script>';
        }
    }
    else{
      
      
      echo '<script>alert("PLEASE ENTER A VALID EMAIL OR SIGN UP IF YOU DO NOT HAVE AN ACCOUNT!");; window.location.href = "login.html";</script>';

  }
}}
?>