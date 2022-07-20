<?php
     include 'controllers/InsertMenuController.php';
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
              <legend align="center"><h1>Food Details Insertion in Menu</h1></legend>
		       <form action="" onsubmit="return validateMenu()" method="post">
		       <table align="center", border ="5" cellpadding="60", cellspacing="5">
			         <tr>
					    <th><span>Food Name</span></th>
						<td><input type="text" name="fname" id="fname" placeholder="Food Name">
						<span id="err_fname"><?php echo $err_fname;?></span></td>
					</tr>
					<tr>
					    <th><span>Food Price</span></th>
						<td><input type="text" name="pp" id="pp" placeholder="Price" size="20">
						<span id="err_pp"><?php echo $err_pp;?></span></td>
					</tr>
					<tr>
					    <th><span>Food Catagory</span></th>
						<td><input type="text" name="type" id="type" placeholder="Catagory" size="20">
						<span id="err_type"><?php echo $err_type;?></span></td>
					</tr>
					</tr>
                    <td colspan="3"><input class="my-font btn-mine" type="submit" name="add_menu" value="Add Menu">
                    </tr>
			  </table>
		</form>
	</fieldset>
	<script src="js/menu.js"></script>
  </body>
</html>