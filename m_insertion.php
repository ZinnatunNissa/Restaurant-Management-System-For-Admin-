<?php
     include 'controllers/M_InsertionController.php';
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
              <legend align="center"><h1>Manager Insertion</h1></legend>
		       <form action="" onsubmit="return validateManager()" method="post">
		       <table align="center", border ="3" cellpadding="25", cellspacing="5">
			        <tr>
					    <th><span>Name</span></th>
						<td><input type="text" name="name" id="name" placeholder="Name">
						<span id="err_name"><?php echo $err_name;?></span></td>
					</tr>
					<tr>
					    <th><span>Email</span></th>
						<td><input type="text" name="email" id="email" placeholder="Email">
						<span id="err_email"><?php echo $err_email;?></span></td>
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
                        <th><span>Joining Date</span></th>
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
					    <th><span>Gender</span></th>
						<td><input type="radio" name="gender" id="1" value="Male"><span>Male</span>
						<input type="radio" name="gender" id="2" value="Female">Female<br>
						<span id="err_gender"><?php echo $err_gender;?></span></td>
					</tr>
					<tr>
						<td colspan="2"><input class="my-font btn-mine"type="submit" name="add_manager" value="Add"></td>
					</tr>
			  </table>
		</form>
	</fieldset>
	<script src="js/manager.js"></script>
  </body>
</html>