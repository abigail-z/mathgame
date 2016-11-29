<?php
session_start();
if (isset($_SESSION['user'])) {
	header("Location: http://a00999093.azurewebsites.net/index.php");
	die();
}

$email = $_POST['email'];
$password = $_POST['password'];
if ($email == "a@a.a" && $password == "aaa") {
	$_SESSION['user'] = true;
	header("Location: http://a00999093.azurewebsites.net/index.php");
	die();
} else {
	$_SESSION['loginerror'] = "Invalid login credentials.";
	header("Location: http://a00999093.azurewebsites.net/login.php");
	die();
}
?>