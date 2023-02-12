<?php

include ("../config.php");


//admins
session_start();

if(isset($_SESSION["user_id"])){
	
			include ("../config.php");
		$user_id = $_SESSION["user_id"];
		
		$get_record = mysqli_query ($conn,"SELECT * FROM user where user_id='$user_id' ");
		$row = mysqli_fetch_assoc($get_record);
		
		 $db_first_name = $row["first_name"];
		
	
}else{
	
	echo "<script>window.location.href='../';</script>";
	
}



date_default_timezone_set('Asia/Manila');
$times = date(' h:i: a', time());
$dates = date('M d, Y  D', time());
$time = strtoupper($times);
$date = strtoupper($dates);

$username=$email=$firstname=$lastname=$contact=$password=$cpassword=$actype=$cpassword="";
$usernameErr=$emailErr=$firstnameErr=$lastnameErr=$contactErr=$passwordErr=$cpasswordErr=$actypeErr=$cpassword="";


if(isset($_POST['submit'])){
	if(empty($_POST["username"])){
		$usernameErr="Username is empty !";
		
	}else{
		$username=$_POST["username"];
	}
	//
	if(empty($_POST["email"])){
		$emailErr="Email is empty";
	}else{	
		$email=$_POST["email"];
	}
	
	 if(empty($_POST["username"])){
		$firstnameErr="Firstname is Empty";
	}else{	
		$firstname=$_POST["firstname"];
	}
	
	if(empty($_POST["lastname"])){
		$lastnameErr="Last name is empty";
	}else{
		$lastname=$_POST["lastname"];
	}
	
	if(empty($_POST["contact"])){
		$contactErr="Contact is required !";
	}else{	
		$contact=$_POST["contact"];
	}
	
	if(empty($_POST["password"])){
		$passwordErr="Password is required";
	}else{
		$password=$_POST["password"];
		
	}
	
	if(empty($_POST["cpassword"])){
		$cpasswordErr="Cunfirm password is required";
	}else{	
		$cpassword=$_POST["cpassword"];
		
	}
	
	
	if(empty($_POST["actype"])){
		$actypeErr="Select Account type";
	}else{	
		
		$actype=$_POST["actype"];
	}
	
}
	
	if($username&&$email&&$firstname&&$lastname&&$contact&&$password&&$actype){
		$username=$_POST["username"];
		$email=$_POST["email"];
		$firstname=$_POST["firstname"];
		$lastname=$_POST["lastname"];
		$contact=$_POST["contact"];
		$password=$_POST["password"];
		$cpassword=$_POST["cpassword"];
		$actype=$_POST["actype"];
		
		if($cpassword==$password){
		
 date_default_timezone_set('Asia/Manila');
     $date = date(' h:i: a', time());
     $day = date('M d,Y | D', time());
	 
	 if(strlen($username)>1){
		 
				if (preg_match('/[A-Za-z]/', $firstname) && preg_match('/[0-9]/', $firstname)){
    $firstnameErr='Dont use number on your first name !, try again';
}else{
	 	if (preg_match('/[A-Za-z]/', $lastname) && preg_match('/[0-9]/', $lastname)){
	$lastnameErr="Dont use number on your last name !, try again'!";
}else{
	
	$check_user = mysqli_query($conn,"SELECT * from user WHERE username='$username'");
		$check_user_row = mysqli_num_rows ($check_user);
		
		if($check_user_row  > 0){
			
			$usernameErr="Your Username is already exist";
		}else{
mysqli_query($conn,"INSERT INTO `user`(`username`, `password`, `account_type`, `contact`, `email`, `date_created`, `first_name`, `last_name`) 
VALUES ('$username','$password','$actype','$contact','$email','$day,$date','$firstname','$lastname')");

 echo "<script>alert('User Added Successfully .');

	window.location='settings.php';
 </script> ";
}
		}

}
				 
		}else{
			$usernameErr="Your Username is Too Short";
			
		}
	}else{
		$passwordErr="PASSWORD NOT MATCH !";
		$cpassword="PASSWORD NOT MATCH !";
		
	}
  



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
      background-color: #65121a;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 8%;
        background-color: #8a171a;
        position: fixed;
        height: 100%;
        overflow: auto;
        display: block;

      }

      li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
        height: 150px;
        margin: 10px;
      }

      li .active {
        background-color: #44040C;
        color: white;
        border-radius: 10px;
      }

      li .a:hover:not(.active) {
        background-color: #44040C;
        color: white;
        border-radius: 10px;
      }

      img{
        margin-top: 10px;
        width: 70%;
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


    .left{
      width: 80%;
      background-color: transparent;
      float: left;
      height: 979px;

    }

    
    .right{
      width: 35%;
      background-color: transparent;
      float: left;
      height: 979px;
      
    }

    

    

    

    

    .left-up{
      width: 100%;
    }

    .left-down{
      width: 77%;
      border-radius: 10px;
      background-color: #8a171a;
      height: 770px;
      margin-left: 250px;
      margin-top: 50px;
    }

    .time{
      width: 85%;
      height: 120px;
      background-color: #8a171a;
      border-radius: 10px;
      margin-top: 50px;
      color: white;
    }

    .item-list{
      margin-top: 20px;
      width: 85%;
      border-radius: 10px;
      height: 500px;
      background-color: #8a171a;

    }

    .print{
      margin-top: 20px;
      width: 85%;
      border-radius: 10px;
      height: 225px;
      background-color: white;
    }

    
    h2{
      font-size: 50px;
      text-align: center;
      margin-right: 20px;
      text-align: right;
    }

    .dt{
      font-size: 15px;
      text-align: right;
    }

    .purchased{
        width: 70%;
        margin-top: 10px;
        height: 50px;

    }

    .purchased:hover{
        background-color: black;
        color: white;
    }

    h3{
      color: white;
      margin-left: 30px;
      font-size: 30px;

    }

    .his1{
      width: 100%;
      height: 900px;
      background-color: #8a171a;
      border-radius: 10px;
      margin-top: 50px;
      margin-left: 250px;
    }

    

    .set{
      margin-left: 30px;
      float: left;
      color: white;
    }

    .set{
      margin-top: 20px;
    }

    .set:hover{
      background-color: black;
      color: white;
    }

    .g{
      background-color: green;
    }

    input{
      width: 90%;
      height: 60px;
      margin-left: 40px;
      border-radius: 10px;
      border: 0px;
      margin-top: 20px;
      font-size: 20px;
    }

    button{
      width: 90%;
      height: 50px;
      background-color: green;
      border-radius: 10px;
      border: 0px;
      margin-left: 40px;
      color: white;
    }
	.
    button{
      width: 90%;
      height: 50px;
      background-color: green;
      border-radius: 10px;
      border: 0px;
      margin-left: 40px;
      color: white;
    }

    button:hover{
      background-color: black;
      color: white;

    }

    .z1{

      width: 50%;
      background-color: transparent;
      height: 500px;
      height: 800px;

    }

    .z2{
      width: 50%;
      background-color: transparent;
      height: 800px;
      float: right;
      margin-top: -800px;
    }

    .ac{
      width: 90%;
      height: 60px;
      margin-left: 40px;
      border-radius: 10px;
    }

    label{
      margin-left: 40px;
      color: white;
      font-size: 30px;
    }





  </style>
</head>
<body>

<center>
  <ul>
  <li><a class="logo">
        <img src="../images/logos.png"></a></li>

  <li><a href="admin.php">

        <img src="../images/supplies.png"><br><p>SUPPLIES</p>

  </a></li>

  <li><a href="inventory.php" class="a">

        <img src="../images/inventory.png"><br><p>INVENTORY</p>

  </a></li>


  <li><a  class="a" href="history.php">

        <img src="../images/history.png"><br><p>HISTORY</p>

  </a></li>

  <li><a class="active" class="a" href="settings.php">
      <img src="../images/settings.png"><br><p>SETTINGS</p>
  </a></li>
</ul></center>
</center>
  
  


      <section>
        <div class="left">
              
                <form method="POST">

                  
             <!--
$username=$email=$firstname=$lastname=$contact=$password=$cpassword=$actype="";-->
              <div class="his1"><br><br>

                <h2 class="set">Add User</h2><br><br><br><br><br><br><br>
                
                  

                  <div class="z1"><form method="POST">
                              <label>Firstname</label>
                              <input type="text" name="firstname" value="<?php echo $firstname?>" placeholder="Firstname">
                              <center><br><br><span class="error"><?php echo $firstnameErr?></span></center>
                              
                              <label>Lastname</label>
                              <input type="text" name="lastname" value="<?php echo $lastname?>"  placeholder="Lastname">
                              <center><br><br><span class="error"><?php echo $lastnameErr?></span></center>
                              
                              <label>Contact</label>
                              <input type="text" name="contact"  value="<?php echo $contact?>" placeholder="Contact">
                              <center><br><br><span class="error"><?php echo $contactErr?></span></center>
                 
                              <label>Username</label>
                              <input type="text" name="username" value="<?php echo $username?>"  placeholder="Username">
                              <center><br><br><span class="error"><?php echo $usernameErr?></span></center> 
                  </div>

                  <div class="z2">
                              <label>Email</label>
                              <input type="" name="email" value="<?php echo $email?>" placeholder="Email">
                              <center><br><br><span class="error"><?php echo $emailErr?></span></center>
                              
                              <label>Password</label>
                              <input type="password" name="password" value="<?php echo $password?>" placeholder=" Password">
                              <center><br><br><span class="error"><?php echo $passwordErr?></span></center>
                            
                              <label>Confirm Password</label>
                             <input type="password" name="cpassword"  value="<?php echo $password?>" placeholder="Confirm Password">
                             <center><br><br><span class="error"><?php echo $cpasswordErr?></span></center>
                              
                              <label>Account Type</label>
                              <br><br><select name="actype" class="ac">
    
                             <option name="actype" value="" >SELECT ACCCOUNT TYPE</option>
                              <option name="actype"<?php if($actype=="2"){ echo "selected";} ?> value="2">Cashier</option>
                              <option name="actype"  <?php if($actype==1){ echo "selected";} ?> value=1>Admin</option>
      
    
    
                              </select><span class="error"> <?php echo $actypeErr; ?></span>
                  <br><br><br><br>
          
                  <button type="submit" name="submit">SAVE</button> 
                  <br><br></form>
                  </div>





              </div>



    </section>





     
    

  
  
</body>
</html>