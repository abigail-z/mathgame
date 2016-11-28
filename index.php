<?php
session_start();
if (!isset($_SESSION['login_user'])) {
	header("Location: http://a00999093.azurewebsites.net/login.php");
	die();
}
?>
<!DOCTYPE html>
<html lang="en">
	<body>
		<?php echo $_SESSION['login_user']; ?>
	</body>
</html>