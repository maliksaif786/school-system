<?php session_start();
 ?>
<?php
$con = mysqli_connect('localhost','root','','practice');
?>
<?php include('header.php'); ?>
<br><br>
<?php 
	
	echo "You are a Bloody User";

	echo $_SESSION['first_name'];
	echo $_SESSION['last_name'];

 ?>
<form action="logout.php" method="post">
              <button type="submit" name="logout" class="btn btn-danger">Logout</button>
              </form>
