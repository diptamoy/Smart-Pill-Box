

<!DOCTYPE html>
<html>
<head>
	<title>
		Data Entry
	</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" >
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" >
          <div class="row">
              <div class="col-md-4 col-md-offset-4">
              <div class="panel panel-primary container_bg">
                  
                  <div class="panel-heading">
                      <h4>Information of Patients:</h4>
                  </div>
                  <div class="panel-body">
                  	<form action="s.php" method="POST " >                		
                       <div class="form-group">

							Name
							<input type="text" class="form_control" name="name" placeholder="Enter your name"></div>
						<div class="form-group">
							Email
			
							<input type="text" name="email" required></div>
						<div class="form-group">
							Phone
							<input type="phone" name="phone"></div>
						<div class="form-group">
							Password
							<input type="Password" name="password" required></div>
						<div class="form-group">
							<h>Admin:</h>
							<input type="text" name="admin" required></div>
						<button type="submit" class="btn btn-primary" style="margin-left: 40%">Submit</button>
                  
						
					</form>
					<div class="panel-footer">
                     <a href="login.php"> <p>Already having account? Skip</p></a>
                  </div>
              </div>
              </div>
          </div>
      </div>
	
	<?php
	if(isset($_POST["Submit"])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$password=$_POST['password'];
		$admin=$_POST['admin'];



		$con=mysqli_connect("localhost","root","","ui") or die(mysqli_error($con));

		$query="INSERT INTO `user`(`name`, `email`, `phone`,`password`,`admin`) VALUES ('".$name."','".$email."','".$phone."','".$password."','".$admin."')";

		$res=mysqli_query($con,$query) or die(mysqli_error($con));
		echo "Data Insetred Successfully";
	}

?>




<table style="blue">
	
		<?php
			$qr="SELECT * FROM user";
			$con=mysqli_connect("localhost","root","","ui") or die(mysqli_error($con));
			$res=mysqli_query($con,$qr);
			

		
		?>
</table>
</body>
</html>