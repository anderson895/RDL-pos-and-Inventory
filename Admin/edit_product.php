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



$item_number = $_GET["editid"];

date_default_timezone_set('Asia/Manila');
$times = date(' h:i: a', time());
$dates = date('M d, Y  D', time());
$time = strtoupper($times);
$date = strtoupper($dates);

$i_name=$i_price=$i_stock=$i_image=$varunit="";
$i_nameErr=$i_priceErr=$i_stockErr=$i_imageErr=$varunitErr="";

if(isset($_POST['btnsubmit'])){
	if(empty($_POST["i_name"])){
		$i_nameErr="product name is required !";
	}else{
		$i_name=$_POST["i_name"];
	}
	//
	if(empty($_POST["i_price"])){
		$i_priceErr="Price is required !";
	}else{
		$i_price=$_POST["i_price"];
	}
	//
	if(empty($_POST["i_stock"])){
		$i_stockErr="Stocks is required !";
	}else{
		$i_stock=$_POST["i_stock"];
	}
	//
////
	if(empty($_POST["unit"])){
		$varunitErr="unit is required !";
	}else{
		$varunit=$_POST["unit"];
	}

		//start script for upload image
$p_image = $_FILES['p_image']['name'];
  $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = '../upload/'.$p_image;
	//end script for upload image
	
//
	


if($i_name && $i_price && $i_stock){
	
 date_default_timezone_set('Asia/Manila');
     $date = date(' h:i: a', time());
     $day = date('M d,Y | D', time());
	 if(is_numeric($i_price)){
		  if(is_numeric($i_stock)){
	 if($i_price >0){
		
		 
		 mysqli_query($conn,"UPDATE table_product SET item_name='$i_name',unit='$varunit',price='$i_price',stocks='$i_stock',image='$i_image' where item_number='$item_number' ");

	   move_uploaded_file($p_image_tmp_name, $p_image_folder);
	   
	   echo "<script>alert('Update Tax Successfully .');

	window.location='inventory.php';
 </script> ";
		
	}else{
	
		$i_priceErr="Error, Product Value is 0 !!!";
	 }
	 }else{
			$i_stockErr="Enter Numeric Or Decimal Value Only";
		}
		}else{
			$i_priceErr="Enter Numeric Or Decimal Value Only";
		}
  
}


/*
<label class="ad">Item Name</label><br><br> 
                <input class="b" type="" name="i_name"><br><br> 
                <label class="ad">Price</label><br><br> 
                <input class="b" type="" name="i_price"><br><br>  
                <label class="ad">Stock</label><br><br> 
                <input class="b" type="" name="i_stock"><br><br>  
                <label class="ad">Image</label><br><br> 
                <input class="c" type="file" name="i_image"><br><br> 
                <button class="d" type="submit" name="btnsubmit">ADD PRODUCT</button>
*/









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
	  text-align:center;
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
      width: 74%;
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
      font-size: 50px;
      margin-top: 50px;
      margin-left: 30px;
      float: left;
    }

    .tran2{

      color: white;
      font-size: 50px;
      float: left;
      margin-left: 30px;
      margin-top: 50px;
    }

    .ad{
      margin-left: 30px;
      color: white;
      font-size: 20px;

    }

    .b{
      width: 80%;
      margin-left: 30px;
      height: 40px;
    }

    .c{
      color: white;
      margin-left: 30px;
      font-size: 20px;
      width: 100%;
    }

    .d{
	
      width: 80%;
      height: 50px;
	  border-radius:10px;
	  margin-top:-50px;
	  margin-left:30px;
      
      
    }
	.Inventory1{
      width: 93%;
      background-color: white;
      height: 75%;
      border-radius: 10px;
      margin-left: 30px;
      overflow: hidden;
      overflow: scroll;


    }

    table{
      width: 100%;
      border-collapse: collapse;
      border: 1px solid black;
      color: black;
	  text-align:center;
    }

    td{
      border: 1px solid black;
      height: 50px;
      padding: 10px;
    }

    .e{
      width: 40%;
      height: 30px;
      margin-top: -10px;
    }




	a{
		
		text-decoration:none;
	}


.sel{
		width: 80%;
		margin-left: 30px; 
		height: 40px;
		border-radius: 10px;
	}

	::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: red;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: red;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: red;
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

  <li><a class="active" href="inventory.php" class="a">

        <img src="../images/inventory.png"><br><p>INVENTORY</p>

  </a></li>


  <li><a  class="a" href="history.php">

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

                    <input type="" name="">
                    <button>SEARCH</button>
                    
              </div>

              <div>
                <div class="his1">
                <h2 class="tran1">Inventory</h2>
				<div class="inventory1">
				<center>
                             <table class="tas1">
                                  <tr>
                                      <td class="sd" width="5%"> Item Number.</td>
                                    <td class="sd" width="5%"> Item Code.</td>
									 <td class="sd" width="5%"> Stocks</td>
									 <td class="sd" width="5%"> Unit</td>
                                          <td class="sd" width="15%"> Item Name</td>
                                          <td class="sd" width="10%">Original Price</td> 
                                          <td class="sd" width="10%">Current Price</td> 
                                          <td class="sd" width="20%"> Action</td>

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

                  <button type="submit" name="btnAdd"  class="b1">ADD</button>
                                            <button class="b1"><a href='view.php?item_number=<?php echo $db_item_number?>'>VIEW</a></button>
                                            </form>
<?php } ?>




                                          </td>

                                  </tr>

                          </table>



                    </center>
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

        <div class="his2">
		<?php
 $view_query = mysqli_query($conn,"SELECT * from table_product where item_number='$item_number' "); 
		// where account_type='0'
		
		while($row = mysqli_fetch_assoc($view_query)){ //<-- ginagamit tuwing kukuha ng database
			
			$db_item_number  = $row["item_number"];
			$db_item_name = $row["item_name"];
			$db_price = $row["price"];
			$db_stocks = $row["stocks"];
			$db_unit = $row["unit"];
			// echo $ic; 
			

		?>
        <form method="POST" enctype="multipart/form-data">
           <h2 class="tran2">Edit Items</h2><br><br><br><br><br><br><br>  
                <label class="ad">Item Name</label><br>
				
				<br> 
                <input  value="<?php echo $db_item_name;?>"class="b" type="text" name="i_name"><br> 
				
			<center>	<b><span class="error"><?php echo $i_nameErr; ?></span></b></center>
				<Br>
                <label  class="ad">Price</label><br> 
               <input  value="<?php echo $db_price; ?>" class="b" value="" placeholder="" type="text" name="i_price"><br>  
			<center>	<b><span class="error"><?php echo $i_priceErr; ?></span></b></center>
				<Br>
                <label class="ad">Stock</label><br> 
			
                <input value="<?php echo $db_stocks;?>" class="b" type="text" name="i_stock" value="" placeholder=""><br> 
			<center>	<b><span class="error"><?php echo $i_stockErr; ?></span></b></center>
				<Br>
                
			<select name="unit" class="sel">
				<option name="unit">SELECT UNIT</option>
				<?php $view_query = mysqli_query($conn,"SELECT * from system_maintinance where unit=unit "); 
		// where account_type='0'
		
		while($row = mysqli_fetch_assoc($view_query)){ //<-- ginagamit tuwing kukuha ng database
			
			$db_system_id   = $row["system_id"];
			$db_unit = $row["unit"];
			
			?>
			<option  class="sel"  name="<?php echo $db_unit ?>"<?php if($db_unit==$varunit){ echo "selected";} ?>  value="<?php echo $db_unit ?>"> <?php echo $db_unit; ?></option>
		<?php }?>

				
			</select><br><br>
			<label class="ad">Image</label><br>
                <input class="c" type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" required >
				<br><br> 
				<br>
				
               <button class="d" type="submit" name="btnsubmit">Update Product</button>
        </form> 
               
        </div>
		<?php } ?>






    

  
  
</body>
</html>