<?php 
	 require_once 'models/db_config.php';
			function searchMenu($key){
			 $query="SELECT FNAME FROM MENU WHERE FNAME LIKE '%$key%'";
			 $result =get($query);
			 return $result;
			 } 
?>