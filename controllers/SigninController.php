<?php
	 require_once 'models/db_config.php';	 
	 $name="";
	 $err_name="";
     $uname="";
	 $err_uname="";
	 $email="";
	 $err_email="";
	 $pass="";
	 $err_pass="";
	 $hasError=false;
     if(isset($_POST["signin"]))
	 {
		     if(empty($_POST["name"])){
				 $err_name="<br> Name Required";
				 $hasError=true;
			 }
			 elseif(isset($_POST[""])){
		         echo htmlspecialchars($_POST["name"]);
				 $hasError=true;
		     }
			 else{
				 $name=$_POST["name"];
			 }
			 if(empty($_POST["uname"])){
				 $err_uname="<br>Username Required";
				 $hasError=true;
			 }
			 elseif(isset($_POST[""])){
		         echo htmlspecialchars($_POST["uname"]);
				 $hasError=true;
		     }
			 elseif(strlen($_POST["uname"])<6){
				 $err_uname="<br>Username Must Be 6 characters Long";
				 $hasError=true;
			 }
			 elseif(strpos($_POST["uname"],"")){
				 $err_uname="<br>Username Should Not Contain White Space";
				 $hasError=true;
			 }
			 else{
				 $uname=$_POST["uname"];
			 }
			  if (empty($_POST["email"])) {
                 $err_email = "<br>Email is required";
				 $hasError=true;
             }
             elseif(!strpos($_POST["email"],"@")){
			     $err_email="[Email must contain @ ]";
				 $hasError=true;
		     }			 
			 else {
                 $email =$_POST["email"];
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
				 insertuser($name,$uname,$email,$pass);
			 }
		 }
		 function insertuser($name,$uname,$email,$pass){
			 $query="INSERT INTO admins VALUES(NULL,'$name','$uname','$email','$pass')";
			     execute($query);
		 }
		 function checkUsername($uname){
			$query="select * from admins where uname='$uname'";
			$result = get($query);
			if(count($result)>0){
				return false;
			}
			return true;
		}
?>