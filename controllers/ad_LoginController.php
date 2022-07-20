<?php
	require_once 'models/db_config.php';
	 $uname="";
	 $err_uname="";
	 $pass="";
	 $err_pass="";
	 $hasError=false;
     if(isset($_POST["login"]))
	 {
			 if(empty($_POST["uname"])){
				 $err_uname="<br>Username Required";
				 $hasError=true;
			 }
			 elseif(strlen($_POST["uname"])<6){
				 $err_uname="<br>Username Must Be 6 characters Long";
				 $hasError=true;
			 }
			 else{
				 $uname=$_POST["uname"];
			 }
			 if(empty($_POST["pass"])){
				 $err_pass="<br>Password Required";
				 $hasError=true;
			 }
			 elseif(strlen($_POST["pass"])<8){
				 $err_pass="<br>Password Must Be 8 Charachter Long";
				 $hasError=true;
			 }
			 else{
				 $pass=$_POST["pass"];
			 }
			 if(!$hasError){
				 authenticateUser($uname,$pass);
			 }
	 }
	 function authenticateUser($uname,$pass){
	 $query="select * from admins where uname='$uname' and pass='$pass'";
			$result = get($query);
			if(count($result)>0){
				session_start();
				$uname = $result[0];
				$_SESSION["loggedin"] = $uname["uname"];
				header("Location:admin.php");
			}
			else{
				echo "UserName or PassWord is Incorrect";
			}
	 }			
?>