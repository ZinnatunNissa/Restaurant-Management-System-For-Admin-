<?php
	 require_once 'models/db_config.php';
	 $query="SELECT * from income";
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
				.btn-mine{
				background-color:rgb(185,143,221);
				border:none;
				color:white;
				width:99%;
				border-radius:3px;
				padding:5px;
				margin-top:15px;
				}
				.btn-mine:hover{
				background-color:rgb(111,77,145);
				}
				.btn-mine:active{
				background-color:rgb(97,15,115);
				}
		</style>
	      <fieldset>
              <legend align="center"><h1>Income Info</h1></legend>
		       <table align="center", border ="5" cellpadding="30", cellspacing="5">
				 <tr>
						<th>Id</th>
						<th>Rent</th>
						<th>Tax</th>
						<th>Raw Expenses</th>
						<th>Utilities</th>
						<th>Other Expenses</th>
						<th>Catering Expenses</th>
						<th>Delivery Expenses</th>
						<th>Total Expenses</th>
						<th>Total Income</th>
						<th>Profit</th>
				 </tr>					 
<?php
	foreach($result as $row){
		echo "<tr>";
		echo "<td>".$row["id"]."</td>";
		echo "<td>".$row["rent"]."</td>";
		echo "<td>".$row["tax"]."</td>";
		echo "<td>".$row["fcost"]."</td>";
		echo "<td>".$row["utilities"]."</td>";
		echo "<td>".$row["expenses"]."</td>";
		echo "<td>".$row["ccost"]."</td>";
		echo "<td>".$row["dcost"]."</td>";
		echo "<td>".$row["totalcost"]."</td>";
		echo "<td>".$row["totalincome"]."</td>";
		echo "<td>".$row["profit"]."</td>";
		echo "</tr>";
	} 
?>
			  </table>
	</fieldset>
	</body>
</html>