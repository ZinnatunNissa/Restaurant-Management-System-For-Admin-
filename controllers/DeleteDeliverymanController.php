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
	 $nid="";
	 $hasError=false;
     if(isset($_POST["delete_deliveryman"]))	 
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
				deletedeliveryman($name,$email,$phone,$address,$jday,$jmon,$jyr,$gender,$nid);
			 }
		 }
			function deletedeliveryman($name,$email,$phone,$address,$jday,$jmon,$jyr,$gender,$nid){
			$query="DELETE FROM DELIVERYMANS WHERE name='$name'";
			 $result = execute($query);
			}
?>