<?php 

$pass = $_POST['password'];

$hashed = password_hash($pass, PASSWORD_DEFAULT);
echo $hashed;

?>