<?php
session_start();

$_SESSION['login_user'] = "a@a.a";
$_SESSION['password_user'] = "aaa";
# todo:
# create a form and ue it to post username and password
# create a new page to authenticate info and redirect as needed
?>
<!DOCTYPE html>
<html lang="en">
	<body>
		<form action="http://a00999093.azurewebsites.net/authentication.php" method="post">
			<input type="text" name="email" size="20" placeholder="email" />
			<input type="password" name="email" size="20" placeholder="password" />
			<input type="submit" value="Log in" />
		</form>
	</body>
</html>