<!DOCTYPE html>
<html>
<head>
  <style>
  table, th, td {
  border: 1px solid black;
}
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" >
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

body {
  background-color: linen;
}

body {
  color: maroon;
  margin-left: 40px;
  font-size: 20px;
}
.btn {
  position: absolute;
  top: 45%;
  left: 87%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #FFE4C4;
  color: black;
  font-size: 16px;
  padding: 3px 20px;
  border: 2px solid maroon;
  cursor: pointer;
  border-radius: 5px;
  text-align: ;
</style>
</head>
<body>
  <form action="bootstrap.php" method="POST">
<table style="width:100%">

  <?php
  $p_id=$_POST["PatientID"];
  
  $p_name=$_POST["PatientName"];
  
  $p_gender=$_POST["gender"];
  
  $p_age=$_POST["age"];
  
  $p_disease=$_POST["disease"];
    $p_address=$_POST["address"];
    $dr_name=$_POST["DrName"];
  
  $prep_id=$_POST["PrepID"];
  
  $date=$_POST["date"];
  
      echo $p_id;
    echo $p_name;
    
  
  
    
     echo $p_gender;
  
  echo $p_age;
    
  
  
    
     echo $p_address;
  
  
    
    echo $dr_name;
     echo $prep_id;
     echo $date;

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect("localhost","root", "", "ui");

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT INTO patient_details SET patient_id='$p_id',patient_name='$p_name',p_gender='$p_gender',p_age='$p_age',p_disease='$p_disease',p_address='$p_address',dr_name='$dr_name',prescription_id='$prep_id',date='$date'";

$conn->query($sql);
header("Location:bootstrap.php");
?>
<!--</table>
<form action="pill_box.php">
  

Medicine Name: <input type="text" name="MedicineName">
Day: <input type="text" name="Day">
Time: <input type="text" name="Time">
<h>Doases</h>
<select name="Doases">
    <option value="Select">Select</option>
    <option value="Before Meal">Before Meal</option>
    <option value="After Meal">After Meal</option>
  </select>
                    
                      
Medicine Name: <input type="text" name="MedicineName">
Day: <input type="text" name="Day">
Time: <input type="text" name="Time">
<h>Doases</h>
<select name="Doases">
    <option value="Select">Select</option>
    <option value="Before Meal">Before Meal</option>
    <option value="After Meal">After Meal</option>
  </select>
<button class="btn">ADD MORE</button>

<script>location.href='smart_pill_box.php';</script>
<button class="button">DONE</button>-->
<script>location.href='bootstrap.php';</script>
</form>

      
</body>
</html>
