<?php
	 require_once 'models/db_config.php';
	 $name="";
	 $err_name="";
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
	 $nid="";
	 $err_nid="";
	 $hasError=false;
     if(isset($_POST["d_add"]))
	 {
		     if(empty($_POST["name"])){
				 $err_name="<br>Name Required";
				 $hasError=true;
			 }
			 elseif(isset($_POST[""])){
		         echo htmlspecialchars($_POST["name"]);
				 $hasError=true;
		     }
			 else{
				 $name=$_POST["name"];
			 }
			  if (empty($_POST["email"])) {
                 $err_email = "Email is required";
				 $hasError=true;
             }
             elseif(!strpos($_POST["email"],"@")){
			     $err_email="[Email must contain @]";
				 $hasError=true;
		     }			 
			 else {
                 $email =$_POST["email"];
             }
			 if(empty($_POST["phone"])){
				 $err_phone="Insert Your Phone Number";
				 $hasError=true;
			 }
			 elseif(!is_numeric($_POST["phone"])){
			     $err_phone="[Phone number should contain Numeric values only]";
				 $hasError=true;
		     }
			 else{
				 $phone=$_POST["phone"];
			 }
			  if(empty($_POST["address"])){
                $err_address= " Insert Your Address ";
				$hasError=true;
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
				 $err_gender="Select Your Gender";
				 $hasError=true;
			 }
			 else{
				 $gender=$_POST["gender"];
			 }
			 if(empty($_POST["nid"])){
				 $err_nid="Please Provide NID Copy";
				 $hasError=true;
			 }
			 else{
				 $nid=$_POST["nid"];
			 }
			 if(!$hasError){
				 insertdeliveryman($name,$email,$phone,$address,$jday,$jmon,$jyr,$gender,$nid);
			 }
		 } 
		  function insertdeliveryman($name,$email,$phone,$address,$jday,$jmon,$jyr,$gender,$nid){
			 $query= "INSERT INTO DELIVERYMANS VALUES(NULL,'$name','$email','$phone','$address','$jday','$jmon','$jyr','$gender','$nid')";
			 execute($query);
		  }
?>