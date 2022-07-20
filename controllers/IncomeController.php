<?php
	 require_once 'models/db_config.php';
     $rent="";
	 $err_rent="";
	 $tax="";
	 $err_tax="";
	 $fcost="";
	 $err_fcost="";
	 $utilities="";
	 $err_utilities="";
	 $expenses="";
	 $err_expenses="";
	 $ccost="";
	 $err_ccost="";
	 $dcost="";
	 $err_dcost="";
	 $totalcost="";
	 $err_totalcost="";
	 $totalincome="";
	 $err_totalincome="";
	 $profit="";
	 $err_profit="";
	 $hasError=false;
     if(isset($_POST["input"]))
	 {
			 if(empty($_POST["rent"])){
				 $err_rent="Insert Rent Expenses";
				 $hasError=true;
			 }
			 elseif(!is_numeric($_POST["rent"])){
			     $err_rent="[Rent expenses should contain Numeric values only]";
				 $hasError=true;
		     }
			 else{
				 $rent=$_POST["rent"];
			 }
             if(empty($_POST["tax"])){
				 $err_tax="Insert Tax";
				 $hasError=true;
			 }
			 elseif(!is_numeric($_POST["tax"])){
			     $err_tax="[Tax should contain Numeric values only]";
				 $hasError=true;
		     }
			 else{
				 $tax=$_POST["tax"];
			 }
			 if(empty($_POST["fcost"])){
				 $err_fcost="Insert Food Expenses";
				 $hasError=true;
			 }
			 elseif(!is_numeric($_POST["fcost"])){
			     $err_fcost="[Food Expenses should contain Numeric values only]";
				 $hasError=true;
		     }
			 else{
				 $fcost=$_POST["fcost"];
			 }
			 if(empty($_POST["utilities"])){
				 $err_utilities="Insert Utility Bill";
				 $hasError=true;
			 }
			 elseif(!is_numeric($_POST["utilities"])){
			     $err_utilities="[Utility Bill should contain Numeric values only]";
				 $hasError=true;
		     }
			 else{
				 $utilities=$_POST["utilities"];
			 }
			 if(empty($_POST["expenses"])){
				 $err_expenses="Insert Expenses";
				 $hasError=true;
			 }
			 elseif(!is_numeric($_POST["expenses"])){
			     $err_expenses="[Expenses should contain Numeric values only]";
				 $hasError=true;
		     }
			 else{
				 $expenses=$_POST["expenses"];
			 }
			  if(empty($_POST["ccost"])){
				 $err_ccost="Insert Catering Expenses";
				 $hasError=true;
			 }
			 elseif(!is_numeric($_POST["ccost"])){
			     $err_ccost="[Catering Expenses should contain Numeric values only]";
				 $hasError=true;
		     }
			 else{
				 $ccost=$_POST["ccost"];
			 }
			  if(empty($_POST["dcost"])){
				 $err_dcost="Insert Delivery Charge";
				 $hasError=true;
			 }
			 elseif(!is_numeric($_POST["dcost"])){
			     $err_dcost="[Delivery Charge should contain Numeric values only]";
				 $hasError=true;
		     }
			 else{
				 $dcost=$_POST["dcost"];
			 }
			 if(empty($_POST["totalcost"])){
				 $err_totalcost="Insert Total Cost";
				 $hasError=true;
			 }
			 elseif(!is_numeric($_POST["totalcost"])){
			     $err_totalcost="[Total Cost should contain Numeric values only]";
				 $hasError=true;
		     }
			 else{
				 $totalcost=$_POST["totalcost"];
			 }
			 if(empty($_POST["totalincome"])){
				 $err_totalincome="Insert Total Income";
				 $hasError=true;
			 }
			 elseif(!is_numeric($_POST["totalincome"])){
			     $err_totalincome="[Total Income should contain Numeric values only]";
				 $hasError=true;
		     }
			 else{
				 $totalincome=$_POST["totalincome"];
			 }
			   if(empty($_POST["profit"])){
				 $err_profit="Insert Your Profit";
				 $hasError=true;
			 }
			 elseif(!is_numeric($_POST["profit"])){
			     $err_profit="[Profit should contain Numeric values only]";
				 $hasError=true;
		     }
			 else{
				 $profit=$_POST["profit"];
			 }
			 if(!$hasError){
				 income($rent,$tax,$fcost,$utilities,$expenses,$ccost,$dcost,$totalcost,$totalincome,$profit);
			 }
		 }
		 function income($rent,$tax,$fcost,$utilities,$expenses,$ccost,$dcost,$totalcost,$totalincome,$profit){
			 $query="INSERT INTO INCOME VALUES(NULL,'$rent','$tax','$fcost','$utilities','$expenses',
			 '$ccost','$dcost','$totalcost','$totalincome','$profit')";
			 execute($query);
		 }
?>