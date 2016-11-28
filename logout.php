<?php
session_start();
session_unset();
session_destroy();
header("Location: http://a00999093.azurewebsites.net/login.php");
die();
?>