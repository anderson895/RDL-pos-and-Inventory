																																																																																																																																															<?php 

include("config.php");
session_start();



if(isset($_SESSION["user_id"])){
		$user_id  = $_SESSION["user_id"];
		
		$get_record = mysqli_query ($conn,"SELECT * FROM user where user_id ='$user_id' ");
		$row = mysqli_fetch_assoc($get_record);
		$account_type = $row ["account_type"];
		
		
		if($account_type ==1){
					//redirect admin
						echo "<script>window.location.href='Admin/dashboard.php';</script>";	
					
				}else{
					//redirect user
					echo "<script>window.location.href='Cashier/user.php'</script>";	
				}
}
$username = $password="";
$usernameErr = $passwordErr="";

if(isset($_POST["btnLogin"])){
	
	
	//Login
if(empty($_POST["username"])){
	
	$usernameErr ="username is Required !";
}else{
	
	$username = $_POST["username"];
	
	
	//PAssword
}if(empty($_POST["password"])){
	
	$passwordErr ="Password is Required !";
}else{
	
	$password = $_POST["password"];
}
	if($username AND $password){
		
		$check_username = mysqli_query($conn,"SELECT * from user WHERE username='$username'");
		$check_username_row = mysqli_num_rows ($check_username);
		
		if($check_username_row  > 0){
			
			$row = mysqli_fetch_assoc($check_username);
			$user_id  = $row["user_id"];
			$db_password = $row["password"];
			$accountype= $row["account_type"];
			
			if($password==$db_password){
				
			$_SESSION["user_id"]=$user_id; 
			
				if($accountype==1){
					//redirect admin
						echo "<script>window.location.href='Admin/dashboard.php';</script>";	
						$_SESSION['user_id']=$user_id;
					
				}else{
					//redirect user
					echo "<script>window.location.href='Cashier/user.php'</script>";	
					$_SESSION['user_id']=$user_id;
				}
				
			}else{
				
				$passwordErr="Password incorrect !";
				
			}
		}else{
			
			$usernameErr = "username is Not Registered !";
		}
		
		
		
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RDL-Login</title>
	<link rel="shortcut icon" href="images/logos.png">
	<style type="text/css">

		*{
			padding: 0px;
			margin: 0px;
		}

		body{
			font-family: helvetica;
			background-color: #8A181B;
		}



		
		.desc{
			width: 42%;
			height: 1000px;
			

		}

		.desc1{
			width: 42%;
			float: right;
			margin-top: -339px;
		}

		.logo{
			width: 25%;
			margin-left: 300px;
			margin-top: -500px;
		}

				form{
			background-color: #FFFFFF;
			width: 30%;
			height: 700px;
			margin-top: -850px;
			border: 1px solid black;
			border-radius: 10px;
			float: right;
			margin-right: 230px;
		}

		input,label{
			width: 80%;
			margin-left: 50px;
			height: 40px;
			border-radius: 10px;

		}

		input{
			font-size: 20px;
			padding-left: 10px;
		}

		label{
			font-size: 25px;
		}

		button{
			width: 83%;
			margin-left: 50px;
			height: 70px;
			border-radius: 10px;
			border: 0px;
			background-color: #661219; 
			color: white;
			font-size: 25px;
		}

		h2{
			color: #661219;
			font-size: 70px;
		}

		.log{
			margin-top: -300px;
		}

		button:hover{
			background-color: #38040A;
		}

		.error{
			color: red;
			margin-left: 50px;
		}




	</style>
</head>
<body>
	
		<div>
			<img src="images/design back.png" class="desc">
		</div>
		

		<div>
			<img src="images/design back 1.png" class="desc1">
		</div>

		<div class="log">
			<img src="images/logos.png" class="logo">	
		</div>

		<form method="POST"><br><br><br><br><br><br>
		<center><h2>LOGIN</h2></center><br><br><br><br>
		<label>Username</label><br>
		<input type="text" name="username" value="<?php echo $username; ?>" placeholder="username"><br><br>
		<span class="error"><?php echo $usernameErr; ?></span><br><br>
		<label>Password</label><br><br>
		<input type="password" name="password" value="" placeholder="Password"><br><br>
		<span class="error"><?php echo $passwordErr; ?></span><br><br>
		<button type="submit" name="btnLogin">LOGIN</button><br><br>
	</form>

		

	
	
</body>
</html>