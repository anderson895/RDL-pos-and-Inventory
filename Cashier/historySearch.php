<?php

include("../config.php");


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

      .e1{
        width: 73.5%;
        height: 800px;
        background-color: #8a171a;
        border-radius: 10px;
        margin-left: 250px;
        margin-top: 40px;


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
      background-color: green;
      color: white;
      width: 15%;
      margin-left: 20px;
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
      width: 100%;
      height: 700px;
      background-color: #8a171a;
      border-radius: 10px;
      margin-top: 100px;
      margin-left: 250px;
    }

    .his2{
      width:85%;
      height: 700px;
      background-color: #8a171a;
      border-radius: 10px;
      margin-top: 40px;
    }

    .tran1{
      color: white;
      float: left;
      margin-top: 50px;
      margin-left: 30px;

    }

    .tran2{
      color: white;
      float: left;
      margin-top: 50px;
      margin-left: 30px;
    }

    .c1{

      width: 90%;
      height: 500px;
      background-color: white;
      margin-left: 30px;
      overflow: hidden;
      overflow: scroll;
      border-radius: 10px;
    }

    table{
      width: 100%;
      font-size: 20px;
      color: black;
      text-align: center;
      border: 1px solid black;
      border-collapse: collapse;
    }

    td{
      border: 1px solid black;
      height: 50px;
      border-collapse: collapse;
    }





  </style>
</head>
<body>

<center>
  <ul>
  <li><a class="logo" href="dashboard.php">
        <img src="../images/logos.png"></a></li>

  <li><a href="admin.php">

        <img src="../images/supplies.png"><br><p>SUPPLIES</p>

  </a></li>

  <li><a href="inventory.php" class="a">

        <img src="../images/inventory.png"><br><p>INVENTORY</p>

  </a></li>


  <li><a class="active" class="a" href="#contact">

        <img src="../images/history.png"><br><p>HISTORY</p>

  </a></li>

  <li><a class="a" href="settings.php">
      <img src="../images/settings.png"><br><p>SETTINGS</p>
  </a></li>
</ul>
</center>
  

    <section>
        <div class="left">
              <div class="left-up">

                    <form method="POST" action="historySearch.php">

<input type="text"   name="keyword" required="required" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>"/>
<span class="input-group-btn">
<button name="search"><h1 class="hh1">SEARCH</h1><span class="glyphicon glyphicon-search"></span></button>
</span>

</form>
              </div>
<style>
a{
	
	text-decoration:none;
	
}

</style>
              <div>
               <div class="e1">
                <h2 class="tran1">Transaction History</h2><br><br><br><br><br><br><br><br>

                <div class="c1">
                <table>
                      <tr>
                        <td width="25%"> Transaction Number</td>
                        <td width="25%"> Transaction Code</td>
                        <td width="25%"> Transaction Date </td>
                         <td width="15%"> Amount Payment </td>
                         <td width="15%"> Total Bill </td>
                         <td width="25%"> Action</td>
                      </tr>

			
<?php 


date_default_timezone_set('Asia/Manila');
$times = date(' h:i: a', time());
$dates = date('M d, Y  D', time());
$time = strtoupper($times);
$date = strtoupper($dates);

$view_query = mysqli_query($conn,"SELECT a.*,b.* FROM histoy as a 
LEFT JOIN table_product as b ON a.h_prod_id=b.item_number GROUP By tacking_number"); 
		// where account_type='0'
		$subtotal=0;
		
		while($row = mysqli_fetch_assoc($view_query)){ //<-- ginagamit tuwing kukuha ng database
			
			$db_item_number  = $row["item_number"]; 
			$db_item_name = $row["item_name"]; 
			$db_price = $row["price"]; 
			$db_h_qty = $row["h_qty"]; 
			$db_price = $row["price"]; 
			$db_stocks = $row["stocks"]; 
			$db_date_added = $row["date_added"]; 
			$db_h_date = $row["h_date"]; 
			$db_unit = $row["unit"]; 
			$db_h_total = $row["h_total"]; 
			$db_tacking_number = $row["tacking_number"]; 
			$db_bayad= $row["bayad"]; 
			
			
		}
		
?>		

                      <tr>
                        
                       <?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
		$query = mysqli_query($conn, "SELECT * FROM `histoy` WHERE `h_date` LIKE '%$keyword%' ORDER BY `h_date`") or die(mysqli_error());
		require '../config.php';
		
		$count=0;
		while($fetch = mysqli_fetch_array($query)){
			$count++;
			
		
					
	?>				<td><?php echo $count; ?></td>
					<td><?php echo $fetch['tacking_number']?></td>
					<td><?php echo $fetch['h_date']?></td>
					<td>₱ <?php echo number_format($fetch['bayad'],2)?></td>
					<td>₱ <?php echo number_format($fetch['h_total'],2)?></td>
					
                  <td>  <a href="view_transacHistory.php?histoID=<?php echo $db_tacking_number?>">VIEW</a></td>
                      </tr>
					 

	<?php }}?>

                </table>

              </div>


                </div>
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