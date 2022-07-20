<?php
	 include 'controllers/SigninController.php';
?>
<html>
     <head></head>
	 <body>
	  <style>
		    body{
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
	 </style> 
	      <fieldset>
              <legend align="center"><h1> Sign Up </h1></legend>
		       <form action="" onsubmit="return validateSignup()" method="post">
		       <table align="center", border ="5" cellpadding="50", cellspacing="5">
			         <tr>
					    <th><span>Name</span></th>
						<td><input type="text" name="name" id="name" placeholder="First Name">
						<span id="err_name"><?php echo $err_name;?></span></td>
					</tr>
			        <tr>
					    <th><span>Username</span></th>
						<td><input type="text" name="uname" onfocusout="checkUsername(this)" id="uname" placeholder="Username">
						<span id="err_uname"><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
					    <th><span>Email</span></th>
						<td><input type="text" name="email" id="email" placeholder="Email">
						<span id="err_email"><?php echo $err_email;?></span></td>
					</tr>
					<tr>
					    <th><span>Password</span></th>
						<td><input type="password" name="pass" id="pass" placeholder="Password">
						<span id="err_pass"><?php echo $err_pass;?></span></td>
					</tr>
					<tr>
						<td colspan="3"><input class="my-font btn-mine" type="submit" name="signin" value="Sign Up"></td>
					</tr>
			  </table>
		</form>
	</fieldset>
	<script src="js/signup.js"></script>
  </body>
</html>