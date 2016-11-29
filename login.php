<?php
session_start();
if (isset($_SESSION['user'])) {
	header("Location: http://a00999093.azurewebsites.net/index.php");
	die();
}

# todo:
# create a form and ue it to post username and password
# create a new page to authenticate info and redirect as needed
?>
<!DOCTYPE html>
<html lang="en">
	<body>
		<h1>Log in</h1>
		<form action="http://a00999093.azurewebsites.net/authentication.php" method="post">
			<input type="text" name="email" size="20" placeholder="email" />
			<br/>
			<input type="password" name="password" size="20" placeholder="password" />
			<br/>
			<input type="submit" value="Log in" />
			<br/>
			<?php echo $_SESSION['loginerror']; ?>
		</form>
	</body>
</html>