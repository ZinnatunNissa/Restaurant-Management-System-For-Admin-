<?php
	require_once 'models/db_config.php';
	 $name="";
	 $err_name="";
	 $email="";
	 $err_email="";
	 $phone="";
	 $err_phone="";
	 $address="";
	 $err_address="";
	 $jday="";
	 $err_jday="";
	 $jmon="";
	 $err_jmon="";
	 $jyr="";
	 $err_jyr="";
	 $gender="";
	 $err_gender="";
	 $hasError=false;
     if(isset($_POST["add_manager"]))	 
	 {
		     if(empty($_POST["name"])){
				 $err_name="Name Required";
			 }
			 elseif(isset($_POST[""])){
		         echo htmlspecialchars($_POST["name"]);
		     }
			 else{
				 $name=$_POST["name"];
			 }
			  if (empty($_POST["email"])) {
                 $err_email = "Email is required";
             }
             elseif(!strpos($_POST["email"],"@")){
			     $err_email="[Email must contain @]";
		     }			 
			 else {
                 $email =$_POST["email"];
             }
			 if(empty($_POST["phone"])){
				 $err_phone="Insert Your Phone Number";
			 }
			 elseif(!is_numeric($_POST["phone"])){
			     $err_phone="[Phone number should contain Numeric values only]";
		     }
			 else{
				 $phone=$_POST["phone"];
			 }
			  if(empty($_POST["address"])){
                $err_address= " Insert Your Address ";
             }
             else{
             $address = $_POST["address"];
             }
			 if(empty($_POST["jday"])){
				 $err_jday="Insert Joining Day";
				 $hasError=true;
			 }
			 else{
				 $jday=$_POST["jday"];
			 }
			 if(empty($_POST["jmon"])){
				 $err_jmon="Insert Joining Month";
				 $hasError=true;
			 }
			 else{
				 $jmon=$_POST["jmon"];
			 }
			 if(empty($_POST["jyr"])){
				 $err_jyr="Insert Joining Year";
				 $hasError=true;
			 }
			 else{
				 $jyr=$_POST["jyr"];
			 }
			 if(empty($_POST["gender"])){
				 $err_gender="Select your gender";
			 }
			 else{
				 $gender=$_POST["gender"];
			 }
			 if(!$hasError){
				 insertmanager($name,$email,$phone,$address,$jday,$jmon,$jyr,$gender);
			 }
		 } 
			 function insertmanager($name,$email,$phone,$address,$jday,$jmon,$jyr,$gender){
			 $query= "INSERT INTO MANAGERS VALUES(NULL,'$name','$email','$phone','$address','$jday','$jmon','$jyr','$gender')";
			 execute($query);
		 }
?>