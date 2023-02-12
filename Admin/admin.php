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
		 $db_last_name = $row["last_name"];
		 
		 $full_name = ucfirst($db_first_name).". ".ucfirst($db_last_name);
				
		
	
}else{
	
	echo "<script>window.location.href='../';</script>";
	
}




if(!isset($_SESSION['cart'])){
	$_SESSION['cart']=array();

}
if(!isset($_SESSION['qty'])){
	$_SESSION['qty']=array();

}
function Search($value, $array)
{
	return (array_search($value, $array, false));
}
	// unset($_SESSION['prod']);

	if( isset($_SESSION['message'])){
		echo '
		<p style="background-color: green; color:white; padding:1%">'.$_SESSION['message'].'</p>
		';
		unset($_SESSION['message']);
	}
// $itemid=$_GET["itemid"];
//time
date_default_timezone_set('Asia/Manila');
$times = date(' h:i: a', time());
$dates = date('M d, Y  D', time());
$time = strtoupper($times);
$date = strtoupper($dates);
//time

$qty=$db_item_number="";



if(isset($_POST["btnAdd"])){
$qty=$_POST['qty'];
/*
$get_record = mysqli_query($conn,"SELECT * FROM table_product WHERE item_number ='$itemid' ");

$check_get_record = mysqli_num_rows($get_record);


if($check_get_record > 0){
	$row =mysqli_fetch_assoc($get_record);
			$db_item_number  = $row["item_number"];
			$db_item_name = $row["item_name"];
			$db_unit = $row["unit"];
			$db_price = $row["price"];
			$db_stocks = $row["stocks"];
	 
	$subtotal=$db_price*$_POST['qty'];
*/
 //mysqli_query($conn, "INSERT INTO `temporary_item_list`(`item_no`,item_name,'unit',`Quantity`,`Amount`) VALUES ('$db_item_number','$db_item_name','$db_unit','','[value-5]') where ") or die('query failed');
 mysqli_query($conn, "INSERT INTO `temporary_item_list`(`list_no`, `item_name`, `item_no`, `Quantity`, `Unit`, `Amount`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')") or die('query failed');
header("Location: admin.php");
}
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <meta http-equiv="refresh" content="60"> -->
  <title>RDL-Cashier</title>
  <link rel="shortcut icon" href="../images/logos.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
      width: 50%;
      margin-left: 250px;
      font-size: 20px;
      padding: 2px;
      
    }

    button{
      margin-top: 50px;
      background-color: green;
      color: white;
      width: 25%;
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

    table{
      width: 70%;
      padding-left: 70px;
      padding-right: 20px;
      margin-top: 20px;
	  text-align:center;
    }

    tr{
      height: 30px;
    }

    .scroll1{
      margin-left: 50px;
      width: 90%;
      height: 80%;
      background-color: white;
      overflow: hidden;
      overflow: scroll;
      border-radius: 10px;
    }

    .tas1{

      width: 100%;
      border: 1px solid black;
      margin-top: 0px;
      border-collapse: collapse;

    }

    .sd{

      height: 50px;
      border: 1px solid black;
      border-collapse: collapse;

    }

    .h1{
      
      margin-left: 10px;
      width: 80%;
      height: 50px;
      font-size: 15px;
    }

    .b1{
      width: 40%;
      margin-top: -0px;
      height: 40px;
	  
    }



	a{
		text-decoration:none;
		font-size:15px;
		color:white;
	}
	
	.b1{
		
		font-size: 15px;
	}

  .ls{
    width: 90%;
    height: 400px;
    background-color: white; 
    margin-left: 30px; 
    border-radius: 10px; 
    overflow: hidden; 
    overflow: scroll; 
  }


  .or1{
      width: 100%;
      border: 1px solid black;
      border-collapse: collapse;
      margin-top: 0px;
      text-align: center;
  }

  .td1{
      border: 1px solid black;

  }

  .d1{
    background-color: red;
    width: 70%;
    height: 30px;
    margin-top: 0px;
  }

  .th1{
    margin-top: -50px;
  }

  .hh1{
      font-family: helvetica;
      font-size: 20px;
    }

</style>
</head>
<body>

<center>
  <ul>
  <li><a class="logo" href="dashboard.php">
        <img src="../images/logos.png"></a></li>

  <li><a class="active" href="admin.php">

        <img src="../images/supplies.png"><br><p>SUPPLIES</p>

  </a></li>

  <li><a href="inventory.php" class="a">

        <img src="../images/inventory.png"><br><p>INVENTORY</p>

  </a></li>


  <li><a class="a" href="history.php">

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

                    
 <form method="POST" action="sup_search.php">

<input type="text"   name="keyword" required="required" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>"/>
<span class="input-group-btn">
<button name="search"><h1 class="hh1">SEARCH</h1><span class="glyphicon glyphicon-search"></span></button>
</span>

</form>
              </div>

              <div class="left-down"><br><br>
                      <h3>
                        ITEM SUPPLIES
                      </h3> 

                      <div class="scroll1">
					  
					      <table class="tas1">
                                  <tr>
                                      <td class="sd" width="5%"> Item Number.</td>
                                    <td class="sd" width="5%"> Item Code.</td>
									 <td class="sd" width="5%"> Stocks</td>
									 <td class="sd" width="5%"> Unit</td>
                                          <td class="sd" width="15%"> Item Name</td>
                                          
                                          <td class="sd" width="10%">Original Price</td> 
                                          <td class="sd" width="10%">Current Price</td> 
                                           <td class="sd" width="15%"> Quantity</td>
                                          <td class="sd" width="30%"> Action</td>

                                  </tr>
					  <?php

			$view_query = mysqli_query($conn,"SELECT * from table_product where product_status='0' "); 
		
		$count=0;
		while($row = mysqli_fetch_assoc($view_query)){ //<-- ginagamit tuwing kukuha ng database
			
			$db_item_number  = $row["item_number"]; 
			$db_item_name = $row["item_name"]; 
			$db_orig_price = $row["orig_price"]; 
			$db_price = $row["price"]; 
			$db_stocks = $row["stocks"]; 
			$db_unit = $row["unit"]; 
		
			$count++;
			// echo $ic; 
			
			?>
      <form method="POST" >            

                                  <tr>
                                          <td class="sd" > <?php echo $count ?></td>
										  <td class="sd" > <?php echo $db_item_number ?></td>
										  <td class="sd" > <?php echo $db_stocks ?></td>
                                          <td class="sd" ><?php echo $db_unit ?></td>
                                          <td class="sd" ><?php echo $db_item_name ?></td>
                                          <td class="sd" >₱ <?php echo number_format($db_orig_price,2) ?></td>
                                          <td class="sd" >₱ <?php echo number_format($db_price,2) ?></td>
                                         
                                           <td class="sd" > 

                                          <input type="hidden" name="id" value="<?php echo $db_item_number?>">
                                          <input type="number" class="h1" type="number" min="1" max="100" name="qty" required placeholder="Input here" >


                                           </td>

                                          <td class="sd" > 

                  <button type="submit" name="btnAdd"  class="b1">ADD</button>
                                            <button class="b1"><a href='view.php?item_number=<?php echo $db_item_number?>'>VIEW</a></button>
                                            </form>
<?php } ?>




                                          </td>

                                  </tr>

                          </table>
						 
                      </div>
                      
              </div>



        </div>
    </section>



    <section>
      <div class="right">

        <div class="time">
          <br>
                    <h2>
                      <?php echo $time ?> <p class="dt"><?php echo $date ?></p>
                    </h2>

                    
                    
                    
        </div>



        <div class="item-list"><br><br>
                          <h3>
                              ITEM LIST
                          </h3>

                          <div class="ls">
                            
                            <table class="or1">

                                <tr>
								
								
                                        <td width="30%" class="td1"> Item Name</td>
                                        <td width="10%" class="td1"> Quantity</td>
                                        <td width="10%" class="td1"> Unit</td>
                                        <td width="20%" class="td1"> Amount</td>
                                        <td width="30%" class="td1"> Action</td>


                                </tr>
                                <?php
                                $c =array_combine($_SESSION['cart'],$_SESSION['qty']);
                                $subtot=0;
                              foreach($c as $key => $value){
                                $select="SELECT * FROM table_product where item_number = '{$key}'";
                                $result = $conn->query($select);
                                $row = $result->fetch_assoc();
                                $subtot+= $value* (int)$row['price'];
                                
                                ?>
                                <tr>
                                        <td class="td1"> <?php echo $row['item_name']?></td>
                                        <td class="td1"> <?php echo $value?></td>
                                        
                                        <td class="td1"> <?php echo $row['unit']?></td>
                                        <td class="td1">₱ <?php echo number_format($row['price']*$value,2)?></td>
                                        <td class="td1"> 
                                                    <!-- <a href="delete.php?id='<?php echo $key?>'" class="d1">DELETE </a>                                             -->
                                                   <form method="POST">
                                                    <input type="hidden" name="delete-id" value="<?php echo $key?>">
                                                    <button type="submit" name="delete-item">DELETE</button>
                                                    </form>

                                        </td>


                                </tr>
                                <?php }
                              ?>
<?php
// echo '<pre>' . print_r($_SESSION, true) . '</pre>';

?>
<?php
if(isset($_POST['delete-item'])){
  $i= Search($_POST['delete-id'],$_SESSION['cart']);
  unset($_SESSION['cart'][$i]);
  unset($_SESSION['qty'][$i]);
  
  $_SESSION['message'] = 'Product Removed in cart';
 
	echo "<script><
	
	windows.location='admin.php';
	</script>";

}
?>
<?php
if(isset($_POST['btnAdd'])){
			//check if product is already in the cart
      echo $_POST['id'];
			if(!in_array($_POST['id'],$_SESSION['cart'])){
        // echo 'ajdsjda';
				array_push($_SESSION['cart'], $_POST['id']);
				array_push($_SESSION['qty'], $_POST['qty']);
				$_SESSION['message'] = 'Product added to cart';
			// 	//  header('Location:index.php');
			}
			else{
        echo'bubu';
				$i= Search($_POST['id'],$_SESSION['cart']);
				// echo $i.'<br>';
				$_SESSION['qty'][$i]=$_POST['qty'];
				$_SESSION['message'] = 'Product Updated in cart';
			// 	// header('Location:index.php');

			}
}
?>
 <?php
 $random=rand();
  if(isset($_POST['confirm'])){
	  
	  
	  
    if($_POST['bayad']>=$_POST['pricing']){
    //  echo '<pre>' . print_r($_POST, true) . '</pre>';
      $c =array_combine($_POST['id'],$_POST['qty']);
    
	
	
	foreach($c as $key => $value){
		 date_default_timezone_set('Asia/Manila');
    
     $month = date('F');
	 $discount=$_POST["discount"];
	 $convertdiscount=($discount/100)*$_POST['pricing'];
	 $deductdiscount=$_POST['pricing']-$convertdiscount;
	 
	 
        $insert="INSERT INTO `histoy` (`h_prod_id`, `h_qty`, `h_total`,`discount`,`total_discount`,h_date,bayad,tacking_number,cashierDuty) VALUES ('$key', '$value','$deductdiscount','$discount','$convertdiscount',CURRENT_TIMESTAMP(),'{$_POST['bayad']}','$random','$full_name')";
        mysqli_query($conn,$insert);
		
		 $view_query = mysqli_query($conn,"SELECT * from table_product  WHERE `table_product`.`item_number` = '$key'");
		// where account_type='0'
		// start minus stocks
		$count=0;
		while($row = mysqli_fetch_assoc($view_query)){ //<-- ginagamit tuwing kukuha ng database
			
			$db_item_number  = $row["item_number"]; 
			$db_item_name = $row["item_name"]; 
			$db_price = $row["price"]; //original price
			$db_orig_price = $row["orig_price"]; //orig_price price
			$db_stocks = $row["stocks"]; 
			$db_unit = $row["unit"]; 
			
			$count++;
			// echo $ic; 
			if($db_stocks>=$value){
			
			$totalstock=$db_stocks -$value;
			
			 mysqli_query($conn,"UPDATE `table_product` SET `stocks` = '$totalstock' WHERE `table_product`.`item_number` = '$db_item_number'");
			}else{
				
				echo ' <script>
      alert("Stocks insufficient !")
	  window.location="admin.php";
      </script>';
			}	
		}

			// end minus stocks
		
      }
	  
      unset($_SESSION['cart']);
      unset($_SESSION['qty']);
      echo'
      <script>
      alert("Success !")
	  window.location="print.php?tracking_number='.$random.'";
      </script>
      
      ';
    }else{
		
		echo '<script>
      alert("Not Enough money !")
	  window.location="admin.php";
      </script>';
	}
  }
  ?>
                            </table>      



                          </div>
        </div>



        <div class="print">
                  <br>

                  <center>
                  <table>
                    <tr> 
                          <td>SUBTOTAL</td>
                          <td>₱ <?php echo number_format($subtot,2)?></td>
                    </tr>
                    <?php
                    $tax="SELECT * FROM `system_maintinance` WHERE tax IS NOT NULL AND  tax <> '' ";
                    $result = $conn->query($tax);
                    $row = $result->fetch_assoc();

                    ?>
                    <tr> 
                          <td>TAX</td>
                          <td><?php echo $row['tax'];
                          $tax=$row['tax'] /100;
                          $tax =   $tax * $subtot;
                          $total = $subtot+$tax;
                          
                          ?>%</td>
                    </tr>

                    <tr> 
                          <td>TOTAL</td>
                          <td>₱ <?php echo number_format($total,2);?></td>
                    </tr>

                  </table>
                    
                              <button class="purchased" id="purchasebtn" data-value="<?php echo $total?>" data-bs-toggle="modal" data-bs-target="#exampleModal">PURCHASED</button>
                    </center>
                   
        </div>











      </div> 
    </section>

<!-- Modal -->
<form method="POST">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php
      foreach($c as $key => $value){ ?>
      <input type="hidden" name="id[]" value="<?php echo $key?>">
      <input type="hidden" name="qty[]" value="<?php echo $value?>">
      <?php }
      ?>
       <input type="number" name="bayad" min="1" style="border: 1px solid black;" placeholder="Payment Here !" required>
       <input type="number" name="discount" min="0" style="border: 1px solid black;" placeholder="Enter Dicount Here !" required>
       <input type="text" id="pricing" name="pricing" style="border: 1px solid black;"  placeholder="Payment"  readonly>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="confirm" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>
</form>
 

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
  $('#purchasebtn').click(function(){
    $('#pricing').val($(this).attr("data-value"))
  })
</script>