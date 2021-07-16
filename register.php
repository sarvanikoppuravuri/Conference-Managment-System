<?php 
include "layouts/header.php";
include "config.php";

if($_POST)
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  $number=$_POST['number'];
  $address=$_POST['address'];
  if($cpassword == $password){
  $sql="INSERT INTO `register`(`name`, `email`, `password`, `number`, `address`) VALUES ('".$name."','".$email."','".$password."','".$number."','".$address."')";

  $query = mysqli_query($conn,$sql);
  if($query)
  {
    session_start();
    $_SESSION['name'] = $name;
    echo '<script>alert("Successfully Registered")</script>';
 
  }
  else
  {
    echo '<script>alert("Something went wrong")</script>';
 
  }
  
  
}
else{
    echo '<script>alert("Confirm Password should be same as Password")</script>';
 
  }
}
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
<style>
  h2{
color:white;
  }
  label{
color:white;
  }
  .container {
    margin-top: 5%;
    width: 50%;
    background-color: #26262b9e;
    padding-top:2%;
    padding-bottom:2%;
  }
  .btn-primary {
    background-color: #673AB7;
}
  </style>
  <script>
function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  var y = document.forms["myForm"]["email"].value;
   else if (y == "") {
    alert("Email must be filled out");
    return false;
  }
  var z = document.forms["myForm"]["password"].value;
  var cz = document.forms["myForm"]["cpassword"].value;
   else if (z != cz) {
    alert("Confirm Password should be same as Password");
    return false;
  }
   var a = document.forms["myForm"]["number"].value;
   else if (a == "") {
    alert("Number must be filled out");
    return false;
  }
   var b = document.forms["myForm"]["address"].value;
   else if (b == "") {
    alert("Address must be filled out");
    return false;
  }
}
</script>
</head>
<body>
<div class="container">

  <center><h2>Registration form</h2></center></br>
  <form name="myForm" class="form-horizontal" method="post" action="" onsubmit="return validateForm()">
    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="name">Name:</label>
	  
      <div class="col-sm-5">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="email">Email:</label>
	  
      <div class="col-sm-5">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="pwd">Password:</label>
      <div class="col-sm-5">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="pwd">Confirm Password:</label>
      <div class="col-sm-5">          
        <input type="password" class="form-control" id="cpwd" placeholder="Confirm your password" name="cpassword" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="number">Number:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="number" placeholder="Enter number" name="number" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="name">Address:</label>
	  
      <div class="col-sm-5">
        <textarea class="form-control" id="address" placeholder="Enter Address" name="address" required></textarea>
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
