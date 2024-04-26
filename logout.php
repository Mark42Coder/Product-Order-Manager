<?php
   session_start();
   unset($_SESSION["valid"]);
   unset($_SESSION["username"]);
   unset($_SESSION["timeout"]);
   header('Refresh: 2; URL = login.php');
?>