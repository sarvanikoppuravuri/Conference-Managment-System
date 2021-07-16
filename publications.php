<?php 
	
		include "config.php"; 
		
		$sql="SELECT * FROM `pdf` where accepted='1'";

		$query = mysqli_query($conn,$sql);

		

		?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Your Journals</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
<style>
	.navbar-inverse {
        background-color: #3b173da8;
        border-color: #3b173da8; 
    }
    .navbar-inverse .navbar-brand {
        color: white;
    }
    a:hover{
        color: orange;
    }
    .navbar-inverse .navbar-nav>li>a {
        color: white;
    }
    a{
    	color:#08eece;
    }
  h2{
color:white;
  }
  label{
color:white;
  }
  span{
	  color:white;
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
		margin: 50px;
		height:300px;
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
  body{
        background-image:url('images/pic.jpg');
        background-repeat: repeat-y;
        width:100%;
    }
  </style>
</head>
<body>
	<header class="main_h">
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">Your Journals</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="publications.php"><span style="color: white"class="glyphicon glyphicon-book"></span> Publications</a></li>
        <li><a href="register.php"><span style="color: white" class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span style="color: white" class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container">
 
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
				No Publications.
			</p>
</div>
<?php
	} 
?>

  </div>
  
</div>

</body>
</html>
