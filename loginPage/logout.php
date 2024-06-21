<?php
   session_start();
   session_destroy();

   header("Location: indexOwner.php");
   exit;