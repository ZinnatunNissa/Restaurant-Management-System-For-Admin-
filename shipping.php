<?php
	 require_once 'models/db_config.php';
	 $query="SELECT * from shippings";
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
		</style>
	      <fieldset>
              <legend align="center"><h1>Shipping Info</h1></legend>
		       <table align="center", border ="5" cellpadding="40", cellspacing="5">
				 <tr>
						<th>Id</th>
						<th>Email</th>
						<th>Name</th>
						<th>Phone</th>
						<th>Address</th>
						<th>SDay</th>
						<th>SMonth</th>
						<th>SYear</th>
						<th></th>
				 </tr>					 
<?php
	foreach($result as $row){
		echo "<tr>";
		echo "<td>".$row["id"]."</td>";
		echo "<td>".$row["email"]."</td>";
		echo "<td>".$row["name"]."</td>";
		echo "<td>".$row["phone"]."</td>";
		echo "<td>".$row["address"]."</td>";
		echo "<td>".$row["jday"]."</td>";
		echo "<td>".$row["jmon"]."</td>";
		echo "<td>".$row["jyr"]."</td>";
		echo '<td><a href="update_shipping.php" class="btn-green">Edit</a></td>';
		echo "</tr>";
	} 
?>
			  </table>
	</fieldset>
	</body>
</html>