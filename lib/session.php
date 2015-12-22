<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['useremail'])){
	header("Location:login.php");
	exit();
}
$userEmail = $_SESSION['useremail'];
$userName = $_SESSION['username'];
?>
