<?php
session_start();
if (!isset($_SESSION['user'])) {
	header("Location: http://a00999093.azurewebsites.net/login.php");
	die();
}
?>
<!DOCTYPE html>
<html lang="en">
	<body>
		<p>Index!</p>
	</body>
</html>