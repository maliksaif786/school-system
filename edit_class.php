<?php  
$class_name = $_POST['class_name'];
$id = $_POST['id'];
$con = mysqli_connect('localhost','root','','practice');
$query = "UPDATE `classes` SET `class_name`='$class_name' WHERE `id`='$id'"; 
$run = mysqli_query($con,$query);
if ($run == TRUE) {
	header('location:class_detail.php');
	exit();
}
else
{
	echo "sorry something went wrong";
	exit();
}
?>