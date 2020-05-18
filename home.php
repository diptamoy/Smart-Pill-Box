<!DOCTYPE html>
<html>
<head>
 <!-- <style>
body {
  background-color: linen;
}

body {
  color: maroon;
  margin-left: 40px;
  font-size: 17px;
}
.btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #FFE4C4;
  color: black;
  font-size: 16px;
  padding: 16px 30px;
  border: 2px solid maroon;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;

}-->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" >
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</style>
</head>
<body>
<div class="container" >
          <div class="row">
              <div class="col-md-4 col-md-offset-4">
              <div class="panel panel-primary container_bg">
                  
                  <div class="panel-heading">
                      <h4>HOME page</h4>
                  </div>
                  <div class="panel-body">
                    
                    <form action="smart_pill_box.php" method="POST">
                        <div class="form-group">
                            Patient ID: <input type="text" name="PatientID" required></div>
                        <div class="form-group">
                            Patient Name: <input type="text" name="PatientName" required></div>
                        <div class="form-group">
                              Age: <input type="text" name="age"></div>
                        <div class="form-group">
                            <h>Gender:</h>
                                <select name="gender">
                                    <option value="Select">Select</option>
                                    <option value="Male">MALE</option>
                                    <option value="Female">FEMALE</option>
                                    <option value="Unspecified">Unspecified</option>
                                </select></div>
                        <div class="form-group">

                              Disease: <input type="text" name="disease"></div>
                        
                        <div class="form-group">

                            Address: <input type="text" name="address"></div>
                        <div class="form-group">
                            Doctor's Name: <input type="text" name="DrName"></div>
                        <div class="form-group">
                            Prescription ID: <input type="text" name="PrepID"></div>
                        <div class="form-group">
                            Date: <input type="text" name="date"></div>
                        
                        <button type="submit" class="btn btn-primary" style="margin-left: 40%">Submit</button>
                    </div>
                  </form>

</body>
</html>
