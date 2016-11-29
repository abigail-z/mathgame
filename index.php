<?php
session_start();
if (!isset($_SESSION['login_user'])) {
	header("Location: http://a00999093.azurewebsites.net/login.php");
	die();
}
if ($_SESSION['login_user'] != "a@a.a" && $_SESSION['password_user'] != "aaa") {
	header("Location: http://a00999093.azurewebsites.net/login.php");
	die();
	$_SESSION['login_error'] = "Invalid credentials";
}
?>
<!DOCTYPE html>
<html lang="en">
	<body>
		<?php echo $_SESSION['login_user']; ?>
	</body>
</html>