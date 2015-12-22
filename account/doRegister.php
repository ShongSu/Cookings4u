<?php

  $insertName = $_POST['name'];
  $insertEmail = $_POST['email'];
  $insertPwd = $_POST['password'];
  $insertConfirmPwd = $_POST['confirm'];
  $insertType = $_POST['userType'];


  echo $insertName."<br/>";
	echo $insertEmail."<br/>";
	echo $insertPwd."<br/>";
	echo $insertConfirmPwd."<br/>";
  echo $insertType."<br/>";

?>
