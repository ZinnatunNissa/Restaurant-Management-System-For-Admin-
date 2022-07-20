<?php 
	include 'main_header.php';
?>
<html>
<head>
	     <style>
		    body{
				background-color:rgb(223,223,242);
			}
			.my-font{
				font-size:25px;
				font-family:consolas;
			}
			.card-product{
				border:1px solid;
				width:525px;
				height:610px;
				margin-left:10px;
				margin-right:10px;
				margin-top:15px;
				border-radius: 5px;
				text-align: center;
				padding:5px;
				
				
			}
			.card-image{
				width:525px;
				height:610px;
				border-radius: 5px;
			}
			.card-text{
				text-align:center;
				
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
	</head>
	<table>
    <div class="body my-font">
		<tr>
			<td><div class="card-product">
			<img class="card-image" src="0.jpg"></img></td></div>
	        <td><div class="card-product">
			<img class="card-image" src="1.jpg"></img></td></div>
			<td><div class="card-product">
			<img class="card-image" src="2.jpg"></img></td></div>
		</tr>
	</div>
	</table>
</html>