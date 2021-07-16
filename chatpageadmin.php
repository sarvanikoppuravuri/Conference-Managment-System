<?php 
	session_start();

		include "layouts/headeradmin.php"; 
		include "config.php"; 
		
		$sql="SELECT * FROM `register` ";

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
		height:450px;
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
	a{
		color: white;
	}
   .badge {
  position: absolute;
  margin-left: 10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: #e80606cc;
  color: white;
}
  </style>
</head>
<body>
<div class="container">
  <center><h2>Welcome <span style="color:#dd7ff3;">Admin !</span></h2>
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
				<form action='' method="post">
					
				<?php $_SESSION['id1']="HI";
				 echo "<span ><a  href=\"new.php?id=$row[name]\" >$row[name]</a></span >";?> 
				 <?php $name=$row['name'];
					$result=mysqli_query($conn,"select count(*) as total from `chat` where name='$name' and admin=0 and notify=0");
					$data=mysqli_fetch_assoc($result);
					if($data['total'] > 0){?>
					<a class="badge"><?php echo $data['total']; }?></a>
				 
				</form>
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
</body>
</html>
