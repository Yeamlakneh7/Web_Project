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
                header("Location: indexOwner.php");
                exit;
            }
            else{
              echo"Please enter a valid password!";
            }
        }
        else{
          echo"The email doesn't exist.";
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
            header("Location: indexUser.php");
            exit;
        }
        else{
          echo"Please enter a valid password!";
        }
    }
    else{
      echo"The email doesn't exist.";
    }

  }
}
?>