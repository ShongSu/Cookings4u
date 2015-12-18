<?php
  $con = mysql_connect("localhost","root","");
	if (!$con)
	{
     die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("cookings4u", $con);
  $db = new mysqli("localhost", "root", "", "cookings4u");
?>
