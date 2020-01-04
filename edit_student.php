<?php  
$student_name = $_POST['student_name'];
$father_name = $_POST['father_name'];
$email = $_POST['email'];
$class = $_POST['class'];
$age = $_POST['age'];
$phone_number = $_POST['phone_number'];
$id = $_POST['id'];
$con = mysqli_connect('localhost','root','','practice');
 $query = "UPDATE `students` SET `student_name`='$student_name',`father_name`='$father_name',`email`='$email',`class`='$class',`age`='$age',`phone_number`='$phone_number' WHERE `id`='$id'";
$run = mysqli_query($con,$query);
if ($run == TRUE) {
	header('location:student_details.php?updated=success');
	exit();
}
else
{
	echo "failed";
	exit();
}
?>