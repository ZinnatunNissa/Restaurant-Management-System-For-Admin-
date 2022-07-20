<?php 
	 require_once 'models/db_config.php';
	 $name="";
	 $err_name="";
	 $email="";
	 $phone="";
	 $address="";
	 $jday="";
	 $jmon="";
	 $jyr="";
	 $gender="";
	 $hasError=false;
     if(isset($_POST["delete_manager"]))	 
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
			 if(!$hasError){
				deletemanager($name,$email,$phone,$address,$jday,$jmon,$jyr,$gender);
			 }
		 }
			function deletemanager($name,$email,$phone,$address,$jday,$jmon,$jyr,$gender){
			$query="DELETE FROM MANAGERS WHERE name='$name'";
			 $result = execute($query);
			}
?>