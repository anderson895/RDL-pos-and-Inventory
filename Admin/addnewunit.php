<?php

include("../config.php");


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

$new_unit="";
$new_unitErr="";


if(isset($_POST["save"])){
	if(empty($_POST["new_unit"])){
		
	$new_unitErr="UNIT IS EMPTY !";
}else{
	
$new_unit=$_POST["new_unit"];

}


if($new_unit){
	
 date_default_timezone_set('Asia/Manila');
     $date = date(' h:i: a', time());
     $day = date('M d,Y | D', time());
	 
	 $check_item = mysqli_query($conn,"SELECT * from system_maintinance WHERE unit='$new_unit'");
		$check_item_row = mysqli_num_rows ($check_item);
		
		if($check_item_row  > 0){
			
			$new_unitErr=$new_unit." UNIT ALREADY EXIST !";
		}else{
	 
		//mysqli_query($conn,"INSERT INTO `system_maintinance`(`system_id`, `tax`, `unit`, `date_added`) VALUES (null,null,'$new_unit','$day,$date')");
		mysqli_query($conn,"INSERT INTO `system_maintinance`(`system_id`, `tax`, `unit`, `date_edit`) VALUES (NULL, '', '$new_unit', '$day,$date');");

echo "<script>alert('Successfully Added.'); </script> ";	

	}			
	
	}

}


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="60">
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
      width: 65%;
      background-color: transparent;
      float: left;
      height: 979px;

    }

    .lp{
      margin-left: 30px;
      float: left;
      color: white;
      margin-top: 30px;
    }

    
    .right{
      width: 35%;
      background-color: transparent;
      float: left;
      height: 979px;
      
    }

    input,button{

      height: 60px;
      border-radius: 10px;
      border: 0px;
    }

    input{
      width: 90%;
      margin-left: 30px;
      font-size: 20px;
      padding: 2px;
    }

    label{
      margin-left: 30px;
      font-size: 30px;
      color: white;
    }

    button{
      margin-top: 50px;
      background-color: #a52f2f;
      color: white;
      width: 90%;
      margin-left: 20px;
      font-size: 20px;
    }

    button:hover{
      background-color: black;
      color: white;
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
      width: 74%;
      height: 700px;
      background-color: #8a171a;
      border-radius: 10px;
      margin-top: 165px;
      margin-left: 250px;
    }

    .his2{
      width:85%;
      height: 700px;
      background-color: #8a171a;
      border-radius: 10px;
      margin-top: 40px;
    }

    .set{
      margin-left: 30px;
      float: left;
      color: white;
      background: green; 
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
</ul>
</center>
  


      <section>
	  <form method="POST">
        <div class="left">
              

                  
                      
                <div class="his1"><br><br>
                <h2 class="lp">ADD NEW UNIT</h2>
                <br><br><br><br><br><br><br><br><br>
                <label>Enter new unit</label><br><br><br>
                <input type="text" value="" name="new_unit" placeholder="<?php if(strlen($new_unit)==0)
				
					echo "insert here!";
					else
						echo $new_unitErr
					
					
						?> "><br>
				
				<br>
                <button type="submit" name="save" class="set">Save</button><br>
                
                      </div> 
              </div>
	</form>


    </section>





      <div class="right">

        <div class="time">
          <br>
                    <h2>
                      <?php echo $time ?> <p class="dt"><?php echo $date ?></p>
                    </h2>

                    
                    
                    
        </div>
    

  
  
</body>
</html>