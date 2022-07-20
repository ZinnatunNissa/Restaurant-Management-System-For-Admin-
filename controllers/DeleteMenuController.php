<?php 
	 require_once 'models/db_config.php';
	 $fname="";
	 $err_fname="";
	 $pp="";
	 $type="";
	 $hasError=false;
     if(isset($_POST["delete_menu"]))	 
	 {
		     if(empty($_POST["fname"])){
				 $err_fname="Type Food Item";
				 $hasError=true;
			 }
			 elseif(isset($_POST[""])){
		         echo htmlspecialchars($_POST["fname"]);
				 $hasError=true;
		     }
			 else{
				 $fname=$_POST["fname"];
			 }
			 if(!$hasError){
				deletemenu($fname,$pp,$type);
			 }
		 }
			function deletemenu($fname,$pp,$type){
			$query="DELETE FROM MENU WHERE fname='$fname'";
			 $result = execute($query);
			 header("Location:menu.php");
			}
?>