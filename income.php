<?php
    include 'controllers/IncomeController.php';
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
				border:none;
				color:white;
				width:100%;
				background-color:rgb(185,143,221);
				border-radius:3px;
				padding:7px;
				margin-top:8px;
			}	
		</style>
	      <fieldset>
              <legend align="center"><h1 id="font">Income Details</h1></legend>
		       <form action="" onsubmit="return validateIncome()" method="post">
			   <div class="my-font">
		     <table align="center", border ="3" cellpadding="15", cellspacing="5">
			        
					<tr>
						<th><span>Rent</span></th>
						<td><input type="text" name="rent" id="rent" placeholder="Rent">
						<span id="err_rent"><?php echo $err_rent;?></span></td>
					</tr>
					
					
					<tr>
						<th><span>Tax</span></th>
						<td><input type="text" name="tax" id="tax" placeholder="Tax">
						<span id="err_tax"><?php echo $err_tax;?></span></td>
					</tr>
					
					<tr>
						<th><span>Raw Expenses</span></th>
						<td><input type="text" name="fcost" id="fcost" placeholder="Food cost">
						<span id="err_fcost"><?php echo $err_fcost;?></span></td>
					</tr>
					
					
					<tr>
						<th><span>Utilities</span></th>
						<td><input type="text" name="utilities" id="utilities" placeholder="Utilities">
						<span id="err_utilities"><?php echo $err_utilities;?></span></td>
					</tr>
					
					<tr>
						<th><span>Other Expenses</span></th>
						<td><input type="text" name="expenses" id="expenses" placeholder="Other Expenses">
						<span id="err_expenses"><?php echo $err_expenses;?></span></td>
					</tr>

					<tr>
						<th><span>Catering Expenses</span></th>
						<td><input type="text" name="ccost" id="ccost" placeholder="Catering cost">
						<span id="err_ccost"><?php echo $err_ccost;?></span></td>
					</tr>
					
					<tr>
						<th><span>Delivery Expenses</span></th>
						<td><input type="text" name="dcost" id="dcost" placeholder="Delivery cost">
						<span id="err_dcost"><?php echo $err_dcost;?></span></td>
					</tr>
					
					
					<tr>
						<th><span>Total Expenses</span></th>
						<td><input type="text" name="totalcost" id="totalcost" placeholder="Total cost">
						<span id="err_totalcost"><?php echo $err_totalcost;?></span></td>
					</tr>
					
						
					<tr>
						<th><span>Total Income</span></th>
						<td><input type="text" name="totalincome" id="totalincome" placeholder="Total Income">
						<span id="err_totalincome"><?php echo $err_totalincome;?></span></td>
					</tr>
					
						
					<tr>
						<th><span>Profit</span></th>
						<td><input type="text" name="profit" id="profit" placeholder="profit">
						<span id="err_profit"><?php echo $err_profit;?></span></td>
					</tr>
					
					
					</div>
					<tr>
						<td colspan="3"><input class="my-font btn-mine" type="submit" name="input" value="Store"></td>
					</tr>
			  </table>
		</form>
	</fieldset>
	<script src="js/income.js"></script>
  </body>
</html>