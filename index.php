<?php
session_start();
if (!isset($_SESSION['user'])) {
	header("Location: http://a00999093.azurewebsites.net/login.php");
	die();
}

$number1 = rand(0,20);
$number2 = rand(0,20);
$total = $number1 + $number2;

?>
<!DOCTYPE html>
<html lang="en">
	<body>
	<p><?php echo $number1 . " + " . $number2 ?></p>
		<form action="http://a00999093.azurewebsites.net/authentication.php" method="post">
			<input type="text" name="answer" placeholder="Enter answer" />
			<input type="submit" value="Submit" />
		</form>
	</body>
</html>