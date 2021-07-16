<?php 
	session_start();
include "config.php";
$user=$_SESSION['id1']; 
$id = isset($_GET['id']) ? $_GET['id'] : '';
$z = isset($_GET['z']) ? $_GET['z'] : '';
$sql2="select * from `pdf` where id='$id'";
$query2 = mysqli_query($conn,$sql2);
$title='';
$msg='';
while($row= mysqli_fetch_assoc($query2))	
		{
			$title=$row['title'];
		}
		echo $title; 
if($z == 1){
$sql="UPDATE `pdf` SET accepted=1 WHERE id='$id'";
$msg="your journal ".$title." is accepted";
}
if($z == 2){
	$sql="UPDATE `pdf` SET accepted=2 WHERE id='$id'";
	$msg="your journal ".$title." is rejected";
}
$query = mysqli_query($conn,$sql);
$sql1 = "INSERT INTO `chat` (name, message, admin)
VALUES ('$user', '$msg', 1)";

$query1=mysqli_query($conn, $sql1);
header('Location: new.php');

?>