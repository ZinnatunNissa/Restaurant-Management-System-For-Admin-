<?php
	session_start();
	if(!isset($_SESSION["loggedin"])){
		header("Location: ad_login.php");
	}
?>
<html>
<head>
	<style>
				body {
				  font-family: consolas;
				}
				
				.sidenav {
				  height: 100%;
				  width: 200px;
				  position: fixed;
				  z-index: 1;
				  top: 0;
				  left: 0;
				  background-color: #C6B1DC;
				  padding-top: 40px;
				}

				.sidenav a {
				  padding: 12px 6px 6px 12px;
				  text-decoration: none;
				  font-size: 23px;
				  color: #431D58;
				  display: block;
				}

				.sidenav a:hover {
				  color: #F7F7F7;
				}

				.main {
					  margin-left: 200px; 
					  font-size: 40px;
					  color : #400061;
				}
				

       </style>
			</head>
				<body>
				<div class="sidenav">
				  <a href="index.php">Home</a>
				  <a href="ad_menu.php">Menu</a>
				  <a href="manager.php">Manager List</a>
				  <a href="deliveryman.php">Deliveryman List</a>
				  <a href="delivery.php">Delivery List</a>
				  <a href="total_income.php">Total Income</a>
				  <a href="shipping.php">Shipping Info</a>
				  <a href="insert menu.php">Insert Menu</a>
				  <a href="m_insertion.php">Insert Manager Info</a>
				  <a href="d_insertion.php">Insert Deliveryman Info</a>
				  <a href="income.php">Insert Income Info</a>
				  <a href="shipping_insertion.php">Insert Shipping Info</a>
				  <a href="ad_login.php"> Log out </a>
				</div>
				<span><h1 align="right"><i><?php echo "Welcome To Admin Home ";
							echo $_SESSION["loggedin"];?></i></h1></span>
				  <div class="main">
				  <h1 align = "center "> <b> <i> <u>NS Square</u> </i> </b></h1>
				  <img align = "center" src = "image.jpg" height = "575px" width = "1488px">
				 </div> 
				   
	</body>
</html>