<?php
     require_once 'models/db_config.php';
	 $fname="";
	 $err_fname="";
	 $pp="";
	 $err_pp="";
	 $type="";
	 $err_type="";
	 $hasError=false;
     if(isset($_POST["add_menu"])) 
	 {
		     if(empty($_POST["fname"])){
				 $err_fname="<br>Insert Food Name";
				 $hasError=true;
			 }
			 elseif(isset($_POST[""])){
		         echo htmlspecialchars($_POST["fname"]);
		     }
			 else{
				 $fname=$_POST["fname"];
			 }
			 if(empty($_POST["pp"])){
				 $err_pp="<br>Insert Price";
				 $hasError=true;
			 }
			 elseif(!is_numeric($_POST["pp"])){
			     $err_pp="[Price should contain Numeric values only]";
				 $hasError=true;
		     }
			 else{
				 $pp=$_POST["pp"];
			 }
			 if(empty($_POST["type"])){
				 $err_type="<br>Insert Food Catagory";
				 $hasError=true;
			 }
			 else{
				 $type=$_POST["type"];
			 }
			 if(!$hasError){
				 insertmenu($fname,$pp,$type);
			 }
	    }
			 function insertmenu($fname,$pp,$type){
			 $query= "INSERT INTO MENU VALUES(NULL,'$fname','$pp','$type')";
			 execute($query);
			 } 
?>