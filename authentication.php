<?php
session_start();
if (isset($_SESSION['user'])) {
	header("Location: http://a00999093.azurewebsites.net/index.php");
	die();
}

if ($email = $_POST['email'] == "a@a.a" && $_POST['password'] == "aaa") {
	$_SESSION['user'] = true;
	header("Location: http://a00999093.azurewebsites.net/index.php");
	die();
} elseif (isset($_POST['email']) && isset($_POST['password'])){
	$_SESSION['loginerror'] = "Invalid login credentials.";
	header("Location: http://a00999093.azurewebsites.net/login.php");
	die();
} else {
	unset($_SESSION['loginerror']);
	header("Location: http://a00999093.azurewebsites.net/login.php");
	die();
}
?>