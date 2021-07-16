<?php 
	session_start();
	if(isset($_SESSION['name']))
	{
		$user=$_SESSION['name'];
		include "layouts/header2.php"; 
		include "config.php"; 
		
		$sql="SELECT * FROM `chat` where name='$user'";

		$query = mysqli_query($conn,$sql);

		if($_POST)
{
	$name=$_SESSION['name'];
    $msg=$_POST['msg'];
    
	$sql1="INSERT INTO `chat`(`name`, `message`) VALUES ('".$name."', '".$msg."')";

	$query1 = mysqli_query($conn,$sql1);
	if($query1)
	{
		header('Location: chatpage.php');
	}
	else
	{
		echo "Something went wrong";
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
	<label>Join the chat</label>
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
				<?php if($row['admin']==0){ ?>
				<span><?php echo $row['name']; ?> :</span>
				<?php echo $row['message']; 
				}if($row['admin']==1){ ?>
					<span>Admin :</span>
				<?php echo $row['message']; }?>
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
				No previous chat available.
			</p>
</div>
<?php
	} 
?>

  </div>
  <form class="form-horizontal" method="post" action="">
    <div class="form-group">
      <div class="col-sm-10">          
        <textarea name="msg" class="form-control" placeholder="Type your message here..."></textarea>
      </div>
	         
      <div class="col-sm-2">
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