<?php

     $logout="";
	 $err_logout="";
	 
	 if($_SERVER["REQUEST_METHOD"]=="POST")
	 { if(empty($_POST["logout"]))
	 
	 { $err_logout="Select your Option";
	 }
			 else{
				 $logout=$_POST["logout"];
	 }
	 
	}
?> 
<html>
<head>
       <style>
				body{
				background-color:rgb(223,223,242);
					}
				.my-font{
					font-size:30px;
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
</head>
<body>
	      <fieldset>
              <legend align="center"><h1>Logout</h1></legend>
		       <form action="login.php" method="post">
		       <div class="my-font">
			   <table align="center">
	               	 <tr>
					    <td><span> Logout </span></td>
						<td> <input type="radio" name="logout" value=" Yes"><span> Yes</span>
						<input type="radio" name="logout" value="Cancel">Cancel<br>
					    <span><?php echo $err_logout;?></span></td>
					</tr>
					</div>
					<tr>
						<td colspan="3"><input class="my-font btn-mine" type="submit" name="submit" value="Done"></td>
					</tr>
			  </table>
		</form>
	</fieldset>

		
	</form>

	</table> 
</body>
</html>