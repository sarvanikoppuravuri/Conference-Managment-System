<?php 
	session_start();
	if(isset($_SESSION['name']))
	{
		include "layouts/header2.php"; 
		include "config.php"; 
if($_POST)
{
	$name=$_SESSION['name'];
    $title=$_POST['title'];
    $tenthcerti = $_FILES['tenthcerti']['tmp_name'];
	if($tenthcerti){
	$tenthcerti = addslashes(file_get_contents($tenthcerti));
	}
    
    
	$sql1="INSERT INTO `pdf`(`name`, `title`, `journal`, `accepted`) VALUES ('".$name."', '".$title."', '".$tenthcerti."', 0)";

	$query1 = mysqli_query($conn,$sql1);
	if($query1)
	{
		$msg="I uploaded a journal ".$title;
		$sql2 = "INSERT INTO `chat` (name, message, admin) VALUES ('$name', '$msg', 0)";
		$query2=mysqli_query($conn, $sql2);
		echo '<script>alert("Successfully Uploaded")</script>';

	}
	else
	{
		echo '<script>alert("Something went wrong")</script>';

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
  span{
	  color:#673ab7;
	  font-weight:bold;
  }
   .container {
    margin-top: 3%;
     width: 90%;
    height:90%;
    background-color: #26262b9e;
    padding-right:10%;
    padding-left:10%;
  }
  .btn-primary {
    background-color: #673AB7;
	}
	.display-chat{
		height:380px;
		background-color:#d69de0;
		margin-bottom:3%;
		overflow:auto;
		padding:15px;
	}
	.message{
		background-color: #c616e469;
		color: white;
		border-radius: 5px;
		padding: 5px;
		margin-bottom: 1%;
		width: 90%;
	}
  </style>
</head>
<body>

<div class="container">
  <center><h2>Welcome <span style="color:#dd7ff3;"><?php echo $_SESSION['name']; ?> !</span></h2>
	<label>Upload your journals with title</label>
  </center></br>

  <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
      <div class="col-sm-10">          
        <textarea name="title" class="form-control" placeholder="Type your title name..." required></textarea>
      </div>
	         
      <div class="col-sm-2">
    
      	<input  type="file" name="tenthcerti" accept=".pdf" />
        <button type="submit" class="btn btn-primary">Send</button>
      </div>

    </div>
  </form>
</div>

</body>
</html>
<?php
	}
	else
	{
		header('location:home.php');
	}
?>