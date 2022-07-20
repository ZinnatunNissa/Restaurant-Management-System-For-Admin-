<?php
	require 'controllers/SigninController.php';
	$uname = $_GET["uname"];
	$rs = checkUsername($uname);
	if($rs){
		echo "Valid Username";
	}
	else echo "Unvalid Username";
?>