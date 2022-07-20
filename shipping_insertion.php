<?php
     include 'controllers/ShippingInsertionController.php';
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
					padding:5px;
					margin-top:15px;
				}	
			</style>
	      <fieldset>
              <legend align="center"><h1>Shipping Information</h1></legend>
		       <form action="" onsubmit="return validateShipping()" method="post">
		       <table align="center", border ="5" cellpadding="30", cellspacing="5">
			         
					 <tr>
					    <th><span>Email</span></th>
						<td><input type="text" name="email" id="email" placeholder="Email">
						<span id="err_email"><?php echo $err_email;?></span></td>
					</tr>
					 <tr>
					    <th><span>Name</span></th>
						<td><input type="text" name="name" id="name" placeholder="Name">
						<span id="err_name"><?php echo $err_name;?></span></td>
					</tr>
					<tr>
					    <th><span>Phone</span></th>
						<td><input type="text" name="phone" id="phone" placeholder="Number" size="20">
						<span id="err_phone"><?php echo $err_phone;?></span></td>
					</tr>
					<tr>
					    <th><span>Address</span></th>
						<td><input type="text" name="address" id="address" placeholder="Address" size="20">
						<span id="err_address"><?php echo $err_address;?></span></td>
					</tr>
					<tr>
                        <th><span>Shipping Date</span></th>
                        <td><select name="jday" id="jday">
                        <option disabled selected>Day</option>
                        <?php
                             for($i=1;$i<=31;$i++){
                                 echo "<option>$i</option>";
                             }
                        ?>
                        </select>
                        <select name="jmon" id="jmon">
                        <option disabled selected>Month</option>
                        <?php
                        $month= array("January","February","March","April","May","June","July","August","September","October","November","December");
                        for($j=0;$j<count($month);$j++)
                        {
                            echo "<option>$month[$j]</option>";
                        }
                        ?>
                        </select>
                        <select name="jyr" id="jyr">
                        <option disabled selected>Year</option>
                        <?php
                             for($k=2021;$k<=2030;$k++){
                                 echo "<option>$k</option>";
                             }
                        ?>
                        </select>
						<span id="err_jday"><?php echo $err_jday;?></span><br>
						<span id="err_jmon"><?php echo $err_jmon;?></span><br>
						<span id="err_jyr"><?php echo $err_jyr;?></span>
                        </td>
                    </tr>
					
					<tr>
						<td colspan="3"><input class="my-font btn-mine" type="submit" name="save" value="Insert"> 
					</tr>

			  </table>
		</form>
	</fieldset>
	<script src="js/shipping.js"></script>
  </body>
</html>