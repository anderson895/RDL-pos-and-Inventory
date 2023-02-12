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



date_default_timezone_set('Asia/Manila');
$times = date(' h:i: a', time());
$dates = date('M d, Y  D', time());
$time = strtoupper($times);
$date = strtoupper($dates);

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
      width: 40%;
      margin-left: 250px;
      font-size: 20px;
      padding: 2px;
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
  <li><a href="dashboard.php" class="logo">
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
        <div class="left">
              

                  
                      
                <div class="his1"><br><br>
                <h2 class="set">REMOVE UNIT</h2>
                <br>Choose Unit You want to delete <br>
				<?php
						$view_query = mysqli_query($conn,"SELECT * from system_maintinance where unit=unit"); 
		
		$count=0;
		while($row = mysqli_fetch_assoc($view_query)){ //<-- ginagamit tuwing kukuha ng database
			
			$db_system_id = $row["system_id"]; 
			$db_unit = $row["unit"]; 
			
			
				?>
               <button class="set" onclick="window.location.href='deleteunit.php?system_id=<?php echo $db_system_id?>';"><?php echo $db_unit ?></button><br>
               <?php }?>
			   <button class="set" onclick="window.location.href='settings.php';">Back</button><br>
                
                      </div> 
              </div>



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