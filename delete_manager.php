<?php
     include 'controllers/DeleteManagerController.php';
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
              <legend align="center"><h1>Manager Info Deletion</h1></legend>
		       <form action="" method="post">
		       <table align="center", border ="5" cellpadding="25", cellspacing="5">
			         <tr>
					    <th><span>Name</span></th>
						<td><input type="text" name="name" placeholder="Manager Name">
						<span><?php echo $err_name;?></span></td>
					</tr>
					<tr>
						<td colspan="2"><input class="my-font btn-mine"type="submit" name="delete_manager" value="Update"></td>
					</tr>
			  </table>
		</form>
	</fieldset>
	</body>
</html>