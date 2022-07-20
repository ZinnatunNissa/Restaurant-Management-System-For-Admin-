<?php
     include 'controllers/ShippingUpdateController.php';
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
              <legend align="center"><h1>Update Shipping Information</h1></legend>
		       <form action="" method="post">
		       <table align="center", border ="5" cellpadding="35", cellspacing="5">
			         
					 <tr>
					    <th><span>Update Email</span></th>
						<td><input type="text" name="email" placeholder="Email">
						<span><?php echo $err_email;?></span></td>
					</tr>
					 <tr>
					    <th><span>Update Name</span></th>
						<td><input type="text" name="name"  placeholder="Name">
						<span><?php echo $err_name;?></span></td>
					</tr>
					<tr>
					    <th><span>Update Phone</span></th>
						<td><input type="text" name="phone" placeholder="Number" size="20">
						<span><?php echo $err_phone;?></span></td>
					</tr>
					<tr>
					    <th><span>Update Address</span></th>
						<td><input type="text" name="address" placeholder="Address" size="20"><br>
					    <input type="text" name="address" placeholder="City" size="20"><br>
					    <input type="text" name="address" placeholder="Zip Code" size="20">
						<span><?php echo $err_address;?></span></td>
					</tr>
					<tr>
                        <th><span>Shipping Date</span></th>
                        <td><select name="jday">
                        <option disabled selected>Day</option>
                        <?php
                             for($i=1;$i<=31;$i++){
                                 echo "<option>$i</option>";
                             }
                        ?>
                        </select>
                        <select name="jmon">
                        <option disabled selected>Month</option>
                        <?php
                        $month= array("January","February","March","April","May","June","July","August","September","October","November","December");
                        for($j=0;$j<count($month);$j++)
                        {
                            echo "<option>$month[$j]</option>";
                        }
                        ?>
						<span><?php echo $err_jmon;?></span>
                        </select>
                        <select name="jyr">
                        <option disabled selected>Year</option>
                        <?php
                             for($k=2021;$k<=2030;$k++){
                                 echo "<option>$k</option>";
                             }
                        ?>
						<span><?php echo $err_jyr;?></span>
                        </select>
						<span><?php echo $err_jday;?></span><br>
						<span><?php echo $err_jmon;?></span><br>
						<span><?php echo $err_jyr;?></span>
                        </td>
                    </tr>
					
					<tr>
						<td colspan="3"><input class="my-font btn-mine" type="submit" name="change" value="Insert"> 
					</tr>

			  </table>
		</form>
	</fieldset>
	</body>
	</html>