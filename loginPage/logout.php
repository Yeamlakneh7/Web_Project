<?php
   session_start();
   session_destroy();

   header("Location: ../homepage/home.html");
   exit;