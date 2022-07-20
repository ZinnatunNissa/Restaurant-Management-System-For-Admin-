<?php 
	 require_once 'models/db_config.php';
	 $fname="";
	 $err_fname="";
	 $pp="";
	 $err_pp="";
	 $type="";
	 $err_type="";
	 $hasError=false;
     if(isset($_POST["update_menu"]))	 
	 {
		     if(empty($_POST["fname"])){
				 $err_fname="Update Food Item";
				 $hasError=true;
			 }
			 elseif(isset($_POST[""])){
		         echo htmlspecialchars($_POST["fname"]);
				 $hasError=true;
		     }
			 else{
				 $fname=$_POST["fname"];
			 }
			 if(empty($_POST["pp"])){
				 $err_pp="Update Price";
				 $hasError=true;
			 }
			 elseif(!is_numeric($_POST["pp"])){
			     $err_pp="[Updated Price should contain Numeric values only]";
				 $hasError=true;
		     }
			 else{
				 $pp=$_POST["pp"];
			 }
			 if(empty($_POST["type"])){
				 $err_type="Update Food Catagory";
				 $hasError=true;
			 }
			 else{
				 $type=$_POST["type"];
			 }
			 if(!$hasError){
				 updatemenu($fname,$pp,$type);
			 }
		 }
			function updatemenu($fname,$pp,$type){
			 $query="UPDATE MENU SET pp='$pp', type='$type' WHERE fname='$fname'";
			 execute($query);
			 } 
?>