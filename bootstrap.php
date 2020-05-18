<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>




<div class="container">
  <div class="row"> 
              <div class="col-md-4 col-md-offset-4">
              <div class="panel panel-primary container_bg">
                <div class="panel-heading">
              <h2>Medicine Details:</h2><h6><input type="button" value ="LOGOUT" style="margin-left: 60%" onclick="location.href='logout.php'"></h6></div>
               <div class="panel-body">
               <form action="Pill_box.php" method="POST">
              <table border="2" >
<tbody><br><tr>
<th>Medicine's Name</th><td><input type="text" name="medicine_name"></td>
</tr>
<tr>
<th> Day</th><td><input type="text" name="Day"></td>
</tr><tr>
<th>  Time</th><td><input type="text" name="Time"></td>
</tr><tr>
<th> Dosages</th><td><input type="text" name="Dosages">
</td>
</tr><tr>
<th> Pin</th><td><input type="text" name="Pin"></td>
</tr>
<tr>
<th> Quantity of Medicine</th><td><input type="text" name="quantity_of_medicine"></td>
</tr>
  


</tbody></table>

<button id = "button" class="btn btn-primary" style="margin-left: 10%">ADD MEDICINE</button>
  <!-- Trigger the modal with a button -->
  <button type="button" id="button" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal" style="margin-left: 50%">See Medicine List</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Medicine Lists:</h4>
        </div>
        <div class="modal-body">
          <p><?php
$conn=mysqli_connect("localhost","root","","ui");
$r=$conn->query("SELECT * FROM pill_box");
?>


<table  border="2" style="text-align: center;">
<tr>
<th>Medicine Name</th>
<th> Day</th>
<th>  Time</th>
<th> Dosage</th>
<th> Quantity of Medicine</th>
<th> Remaining Medicine</th>
</tr> <?php
while($row=$r->fetch_assoc())
{
?>
<tr>
  <td> <?php echo $row['medicine_name']; ?>  </td>
  <td> <?php echo $row['day']; ?>  </td>
  <td> <?php echo $row['time']; ?>  </td>
  <td> <?php echo $row['doases']; ?>  </td>
  <td> <?php echo $row['quantity_of_medicine']; ?>  </td>
  <td> <?php echo $row['available_medicine']; ?>  </td>

</tr>

<?php

}
?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
