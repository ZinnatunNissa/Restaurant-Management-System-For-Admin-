<?php
	require_once 'controllers/loginController.php';

	$username=$_GET["username"];
	$res = checkUsernamee($username);
	echo $res;
	?>