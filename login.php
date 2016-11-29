<?php
session_start();
if (isset($_SESSION['user'])) {
	header("Location: http://a00999093.azurewebsites.net/index.php");
	die();
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Math Game</title>
		<style>
			.alert {
				color:red;
			}
		</style>
	</head>
	<body>
		<h1>Log in</h1>
		<form action="http://a00999093.azurewebsites.net/authentication.php" method="post">
			<input type="text" name="email" size="20" placeholder="email" />
			<br/>
			<input type="password" name="password" size="20" placeholder="password" />
			<br/>
			<input type="submit" value="Log in" />
			<!-- this error will never be visible if the user entered the correct info -->
			<p class="alert"><?php echo $_SESSION['loginerror']; ?></p>
		</form>
	</body>
</html>