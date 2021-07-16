<?php 
	session_start();
 $id = isset($_GET['id']) ? $_GET['id'] : $_SESSION['id1'];
	

	if(isset($_SESSION['id1']))
	{
		$_SESSION['id1']=$id;
		$user=$_SESSION['id1'];
		include "layouts/headeradmin.php"; 
		include "config.php";
		
		$sql="SELECT * FROM `chat` where name='$user'";

		$query = mysqli_query($conn,$sql);

		$sql2="SELECT * FROM `pdf` where name='$user'";

		$query2 = mysqli_query($conn,$sql2);

		$sql3="update `chat` set notify=1 where name='$user' and admin=0";
		$query3 = mysqli_query($conn,$sql3);
		

		if($_POST){
	
    $msg=$_POST['msg'];
    
	$sql1="INSERT INTO `chat`(`name`, `message`, `admin`) VALUES ('".$user."', '".$msg."', '1')";

	$query1 = mysqli_query($conn,$sql1);
	if($query1)
	{
		header('Location: new.php');

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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script>
$(document).ready(function(){
  $(".pdf-form").hide();
$(".chat").click(function(){
  $(".pdf-form").hide();
  $(".chat-form").show();  
});

$(".pdf").click(function(){
  $(".pdf-form").show();
  $(".chat-form").hide(); 
});
});
</script>
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
  <center><h2>Chat with <span style="color:#dd7ff3;"><?php echo $user ?> !</span></h2>
	<label class="chat" style="cursor: pointer;">Chat</label>&nbsp &nbsp&nbsp
	<label class="pdf" style="cursor: pointer;">Journals Uploaded</label>
  </center></br>
  <div class="chat-form">
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
<div class="pdf-form">
	 <div class="display-chat">
<?php
 
	if(mysqli_num_rows($query2)>0)
	{
		while($row2= mysqli_fetch_assoc($query2))	
		{
?>
		<div class="message">
			<p>
				<span><?php echo $row2['title']; ?> :</span>
			
				 <?php echo "<span ><a href=\"viewadmin.php?id=$row2[id]\" >view</a></span >";
				 if($row2['accepted']==1){?>
				 	<a style="float:right; color: white; cursor: context-menu;">Accepted</a> 
				<?php }
				elseif ($row2['accepted']==0) {
				 	echo "<a  style='color: red; float:right; padding-left:10px;' href=\"acc.php?id=$row2[id]&&z=2\" >Reject</a>";
					echo "<a  style='color: green; float:right' href=\"acc.php?id=$row2[id]&&z=1\" >Accept</a>"; 
				} 

				elseif($row2['accepted']==2){?>
					<a style="float:right; color: white; cursor: no-drop">Rejected</a> 
				<?php }?>
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
  
</div>
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