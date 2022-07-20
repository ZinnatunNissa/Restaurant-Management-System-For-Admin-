<?php
	require_once 'controllers/MenuController.php';
	$key = $_GET["key"];
	$products = searchMenu($key);
	foreach ($products as $product){
		echo $product["fname"]."<br>";
	}
?>