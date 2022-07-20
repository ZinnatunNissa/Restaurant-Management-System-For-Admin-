<?php
    include 'main_header.php';
	include 'controllers/ad_LoginController.php';
?>
<html>
    <head>
	     <style>
		    body{
				background-color:rgb(223,223,242);
			}
		    .login-div{
				border:1px solid black;
				margin:auto;
				width:20%;
				margin-top:7%;
				background-color:rgb(255,255,255);
				padding:12px;
			}
			.my-font{
				font-size:25px;
				font-family:consolas;
			}
			.my-text-field{
				width:140px;
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
	</head>
    <body>
        <div class="login-div">
		<table>
		     <tr>
		         <td><img src="Form User.png" width="150px" height="150px"</td>
				 <td><h1 align="center">Login Form</h1></td>
			 </tr>
		</table>
		    <form action="" onsubmit="return validateLogin()" method="post">
			    <table align="center">
				      <tr>
					    <th><span>Username</span></th>
						<td><input type="text" name="uname" id="uname" placeholder="Username">
						<span id="err_uname"><?php echo $err_uname;?></span></td>
					</tr>
					 <tr>
					    <th><span>Password</span></th>
						<td><input type="password" name="pass" id="pass" placeholder="Password">
						<span id="err_pass"><?php echo $err_pass;?></span></td>
					</tr>
					 <tr>
					    <td colspan="2"><input class="my-font btn-mine" id="login" type="submit" name="login" value="Login"></td>
					 </tr>
					 <tr> <td > <a href ="ad_signup.php " > Not register Yet? Signup Now</a>
					 </td>
					 </tr>
				</table>
			</form>
        </div>
		<script src="js/login.js"></script>
     </body>
</html>