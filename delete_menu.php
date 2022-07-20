<?php
     include 'controllers/DeleteMenuController.php';
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
              <legend align="center"><h1>Food Details Delete From Menu</h1></legend>
		       <form action="" method="post">
		       <table align="center", border ="5" cellpadding="60", cellspacing="5">
			         <tr>
					    <th><span>Delete Food Name</span></th>
						<td><input type="text" name="fname" placeholder="Food Name">
						<span><?php echo $err_fname;?></span></td>
					</tr>
					<tr>
						<td colspan="2"><input class="my-font btn-mine"type="submit" name="delete_menu" value="Delete"></td>
					</tr>
			  </table>
		</form>
	</fieldset>
	</body>
</html>