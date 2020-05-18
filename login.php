

<!DOCTYPE html>
<html>
<head>
		<title>Insert data</title>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" >
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <p style="text-indent: 25em";>
	</head>
<body>
	<!-- <center>
	<div class="Jumbotron Jumbotron_bg">
	<h1>Official website</h1>
	
<form action="login.html" method="POST">
	<table>
		<tr>
			<td>
				Name			</td>
			<td>
				<input type="text" name="username" required="to be fill">
			</td>
		</tr>
		<tr>
			<td>
				Roll number
			</td>
			<td>
				<input type="number" name="Roll">
			</td>
		</tr>
		<tr>
			<td>
				Email
			</td>
			<td>
				<input type="text" name="Email" required>
			</td>
		</tr>
		<tr>
			<td>
				<center>
				<input type="Submit" name="Submit" align="Submit">
			     </center>
			</td>
		</tr>
	</table>
</form> -->




<div class="container" >
          <div class="row">
              <div class="col-md-4 col-md-offset-4">
              <div class="panel panel-primary container_bg">
                  
                  <div class="panel-heading">
                      <h4>Login</h4>
                  </div>
                  <div class="panel-body">
                  	<form action="home.php" method="POST ">                 		
                       <div class="form-group">
                    	<input type="Email" class="form-control" name="email" placeholder="email" required>
                      </div>
                      <div class="form-group">
                          <input type="Password" class="form-control" name="Password" placeholder="Password" required>
                      </div>
                     
                      <button type="submit" class="btn btn-primary" style="margin-left: 40%">Submit</button>
                  </div>
                  <?php if (isset($_GET['error'])) 
                  {
                  	echo $_GET['error'];
                  } 
                  if(isset($_POST['s1']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	 $sql="SELECT * FROM user WHERE email='$email' and password='$password'"; // checking both username and password in db
	$con=mysqli_connect("localhost","root","","user"); // db connection
	$r=$con->mysqli_query($sql); // fecthing results by executing the sql

	
    if($r->num_rows > 0) // if user and pass correct then it should return atleast one set of result.
	{
		while($row=$r->fetch_assoc()) // fetching the values of the result
		{
			session_start(); // session start
			$_SESSION["name"]=$row['name']; // setting session variable value
			$con->close();
			 echo "<script>location.href='home.php';</script>";
     /*redirecting to page after sucessful login*/
		}
			
	}
	else // if no result found that means wrong user pass
	echo "<h3>Wrong Username or Password Entered</h3>";

}
?>
              </form>
                  <div class="panel-footer">
                     <a href="s.php"> <p>Don't Have Account ? Click Here</p></a>
                  </div>
              </div>
              </div>
          </div>
      </div>

</body>
</html>
