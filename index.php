<?php
session_start();
if (!isset($_SESSION['user'])) {
	header("Location: http://a00999093.azurewebsites.net/login.php");
	die();
}

if(isset($_POST['answer'])) {
	if ($_POST['answer'] == $_SESSION['total']) {
		$_SESSION['correct'] += 1;
	}
	$_SESSION['answered'] += 1;
}

$number1 = rand(0,20);
$number2 = rand(0,20);
$_SESSION['total'] = $number1 + $number2;

?>
<!DOCTYPE html>
<html lang="en">
	<body>
	<p><?php echo $number1 . " + " . $number2 ?></p>
		<form action="http://a00999093.azurewebsites.net/authentication.php" method="post">
			<input type="text" name="answer" placeholder="Enter answer" />
			<input type="submit" value="Submit" />
		</form>
	<p><?php echo $_SESSION['correct'] . "/" . $_SESSION['answered'] ?></p>
	</body>
</html>