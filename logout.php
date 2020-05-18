<?php 
session_start();//session start
session_destroy();// destroying all set session
header("Location:login.php"); //redirecting to login page
?>