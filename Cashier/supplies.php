<?php


//admins
session_start();

if(isset($_SESSION["user_id"])){
	
			include ("../config.php");
		$user_id = $_SESSION["user_id"];
		
		$get_record = mysqli_query ($conn,"SELECT * FROM user where user_id='$user_id' ");
		$row = mysqli_fetch_assoc($get_record);
		
		 $db_user_id  = $row["user_id"];
		 $db_first_name = $row["first_name"];
		
	
}else{
	
	echo "<script>window.location.href='../';</script>";
	
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RDL-Cashier</title>
	<link rel="shortcut icon" href="../images/logos.png">
	<style type="text/css">

		*{
			padding: 0px;
			margin: 0px;
		}

		body{
			font-family: helvetica;
			background-color: #8A181B;
		}

		ul {
			  list-style-type: none;
			  margin: 0;
			  padding: 0;
			  width: 8%;
			  background-color: #661219;
			  position: fixed;
			  height: 100%;
			  overflow: auto;

			}

			li a {
			  display: block;
			  color: #000;
			  padding: 8px 16px;
			  text-decoration: none;
			  height: 150px;
			  margin: 10px;
			}

			li .a.active {
			  background-color: #04AA6D;
			  color: white;
			}

			li .a:hover:not(.active) {
			  background-color: #44040C;
			  color: white;
			  border-radius: 10px;
			}

			img{
				margin-top: 20px;
				width: 90%;
			}

			p{
				color: white;
			}

			.welc{
				width: 20%;
				height: 500px;
				background-color: white;
				border-radius: 10px;
				float: right;
				margin-right: 700px;
				margin-top: 150px;

			}

			h2{
				color: black;
				text-align: center;
				margin: 100px;
			}





	</style>
</head>
<body>

<center>
	<ul>
  <li><a class="logo

  	.logo"><img src="../images/logos.png"></a></li>
  <li><a class="a" href="#news">

  			<img src="../images/supplies.png"><br><p>SUPPLIES</p>

	</a></li><br>


  <li><a class="a" href="#contact">

  			<img src="../images/history.png"><br><p>HISTORY</p>

  </a></li>

  <li><a class="a" href="#about">
  		<img src="../images/settings.png"><br><p>SETTINGS</p>
  </a></li>
</ul>
</center>

		<div class="welc">
			<h2>WELCOME CASHIER</h2>
		</div>

		

	
	
</body>
</html>