<?php
session_start();
if (!isset($_SESSION['user'])) {
	header("Location: http://a00999093.azurewebsites.net/login.php");
	die();
}
if (empty($_SESSION['playing'])) {
	$_SESSION['correct'] = 0;
	$_SESSION['answered'] = 0;
	$_SESSION['playing'] = true;
}

$answer = $_POST['answer'];
if (isset($answer)) {
	if ($answer == $_SESSION['total']) {
		$_SESSION['correct'] = $_SESSION['correct'] + 1;
		unset($wronganswer);
	} else {
		$total = $_SESSION['total'];
		$wronganswer = "INCORRECT! The correct answer was " . $total;
	}
	$_SESSION['answered'] = $_SESSION['answered'] + 1;
}

$number1 = rand(0,20);
$number2 = rand(0,20);
$addsub = rand(0,1);
if ($addsub == 0) {
	$_SESSION['total'] = $number1 + $number2;
	$equation = $number1 . " + " . $number2;
} else {
	$_SESSION['total'] = $number1 - $number2;
	$equation = $number1 . " - " . $number2;
}
?>
<!DOCTYPE html>
<html lang="en">
	<body>
	<p><?php echo $equation; ?></p>
		<form action="http://a00999093.azurewebsites.net/index.php" method="post">
			<input type="text" name="answer" placeholder="Enter answer" />
			<input type="submit" value="Submit" />
		</form>
	<p><?php echo $_SESSION['correct'] . "/" . $_SESSION['answered'] ?></p>
	<p> <?php echo $wronganswer; ?></p>
	</body>
</html>