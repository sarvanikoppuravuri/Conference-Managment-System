<?php 
	session_start();
	if(isset($_SESSION['aname']))
	{
		$user=$_SESSION['aname'];
		include "layouts/headeradmin.php"; 
		include "config.php"; 
		
		$sql="SELECT * FROM `pdf` where accepted='1'";

		$query = mysqli_query($conn,$sql);

		

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
    width: 60%;

    background-color: #26262b9e;
    padding-right:10%;
    padding-left:10%;
  }
  .btn-primary {
    background-color: #673AB7;
	}
	.display-chat{
		height:300px;
		background-color:#d69de0;
		margin-bottom:4%;
		overflow:auto;
		padding:15px;
	}
	.message{
		background-color: #c616e469;
		color: white;
		border-radius: 5px;
		padding: 5px;
		margin-bottom: 3%;
	}
  </style>
</head>
<body>
<div class="container">
  <center><h2>Welcome <span style="color:#dd7ff3;"><?php echo $_SESSION['aname']; ?> !</span></h2>
	<label>Uploaded journals</label>
  </center></br>
  <div class="display-chat">
<?php
 
	if(mysqli_num_rows($query)>0)
	{
		while($row= mysqli_fetch_assoc($query))	
		{
?>
		<div class="message">
			<p>
				<span><?php echo $row['title']; ?> :</span>
				<?php echo "<span ><a href=\"viewadmin.php?id=$row[id]\" >view</a></span >";?>
				 
	
			
			</p>
		</div>
<?php
		}
	}
	else
	{
?>
<div class="message">
			<p>
				No accepted journals.
			</p>
</div>
<?php
	} 
?>

  </div>
  
</div>

</body>
</html>
<?php
	}
	else
	{
		echo '<script>alert("Something went wrong")</script>';
	}
?>