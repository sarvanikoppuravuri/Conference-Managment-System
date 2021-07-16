<?php 
include "config.php";
$id = isset($_GET['id']) ? $_GET['id'] : '';
echo $id;
$sql="SELECT * FROM `pdf` where id='$id'";
$query = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head></head>
	<body>
		<?php
		if(mysqli_num_rows($query)>0){
		while($row= mysqli_fetch_assoc($query))	{?>
<object data="data:application/pdf;base64,<?php echo base64_encode($row['journal']) ?>" type="application/pdf" style="height:100%;width:100%"></object>
<?php  }
}  ?>
</body>

</html>