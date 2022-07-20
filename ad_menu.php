<?php
	 require_once 'models/db_config.php';
	 $query="SELECT * from menu";
	         $result =get($query);
?>
<html>
     <head></head>
	 <body>
	  <style > body{
					background-color:rgb(223,223,242);
				}
				.my-font{
				font-size:25px;
				font-family:consolas;
			    }
				.btn-green{
				background-color:#6DE039;
				border:none;
				color:white;
				width:100%;
				border-radius:3px;
				padding:5px;
				margin-top:15px;
				}
				.btn-green:hover{
				background-color:#2FBB0F;
				}
				.btn-green:active{
				background-color:#014220;
				}
				.btn-red{
				background-color:#F44412;
				border:none;
				color:white;
				width:100%;
				border-radius:3px;
				padding:5px;
				margin-top:15px;
				}
				.btn-red:hover{
				background-color:#DC221D;
				}
				.btn-red:active{
				background-color:#610000;
				}
		</style>
		<div align="center">
	      <fieldset>
              <legend align="center"><h1>Food Menu</h1></legend>
		       <table align="center", border ="5" cellpadding="30", cellspacing="5">
				 <thead>
						<th>Food Id</th>
						<th>Food Name</th>
						<th>Food Price</th>
						<th>Catagory</th>
						<th></th>
						<th></th>
				 </thead>
<?php
	foreach($result as $row){
		echo "<tr>";
		echo "<td>".$row["id"]."</td>";
		echo "<td>".$row["fname"]."</td>";
		echo "<td>".$row["pp"]."</td>";
		echo "<td>".$row["type"]."</td>";
		echo '<td><a href="update_menu.php" class="btn-green">Edit</a></td>';
		echo '<td><a href="delete_menu.php" class="btn-red">Delete</a></td>';
		echo "</tr>";
	} 
?>
</table>
</fieldset>
</div>
     <script src="js/search.js"></script>
   </body>
</html>