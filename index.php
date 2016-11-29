<?php
session_start();
// redirects to login if there is no session
if (!isset($_SESSION['user'])) {
	header("Location: http://a00999093.azurewebsites.net/login.php");
	die();
}
// sets the correct and answered values to 0 initially
if (empty($_SESSION['playing'])) {
	$_SESSION['correct'] = 0;
	$_SESSION['answered'] = 0;
	$_SESSION['playing'] = true;
}
// checks if the answer is correct and changes the score and error message
if (isset($_POST['answer']) && is_numeric($_POST['answer'])) {
	if ($_POST['answer'] == $_SESSION['total']) {
		$_SESSION['correct'] = $_SESSION['correct'] + 1;
		unset($error);
	} else {
		$total = $_SESSION['total'];
		$error = "INCORRECT! " . $_SESSION['equation'] . " = " . $total;
	}
	$_SESSION['answered'] = $_SESSION['answered'] + 1;
}
if (isset($_POST['answer']) && !is_numeric($_POST['answer'])) {
	$error = "Enter a number.";
}
// prepares the next math problem
$number1 = rand(0,20);
$number2 = rand(0,20);
$addsub = rand(0,1);
if ($addsub == 0) {
	$_SESSION['total'] = $number1 + $number2;
	$_SESSION['equation'] = $number1 . " + " . $number2;
} else {
	$_SESSION['total'] = $number1 - $number2;
	$_SESSION['equation'] = $number1 . " - " . $number2;
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
	<a href="http://a00999093.azurewebsites.net/logout.php">Logout</a>
	<h1>Math Game</h1>
	<p><?php echo $_SESSION['equation']; ?></p>
		<form action="http://a00999093.azurewebsites.net/index.php" method="post">
			<input type="text" name="answer" placeholder="Enter answer" />
			<input type="submit" value="Submit" />
		</form>
	<p>Score: <?php echo $_SESSION['correct'] . "/" . $_SESSION['answered'] ?></p>
	<p class="alert"> <?php echo $error; ?></p>
	</body>
</html>