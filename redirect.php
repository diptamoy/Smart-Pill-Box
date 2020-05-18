<?php
$sql="SELECT * FROM user "; // checking both username and password in db
	$con=mysqli_connect("localhost","root","","user"); // db connection
	$res=mysqli_query($con,$sql) or die(mysqli_error($con));
session_start(); // start of session
if(isset($_SESSION["name"])){//checking if session is set 
$name=$_SESSION["name"]; // retrieving session value


echo "<h3> Welcome ".$name."</h3>";}
else
{	echo "<script>location.href='login.php';</script>";//Reidrection if session not set
}
?>