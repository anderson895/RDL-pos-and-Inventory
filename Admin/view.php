<?php

include("../config.php");



date_default_timezone_set('Asia/Manila');
$times = date(' h:i: a', time());
$dates = date('M d, Y  D', time());
$time = strtoupper($times);
$date = strtoupper($dates);

$sql = "SELECT * FROM table_product";
$item_number = $conn->query($sql) or die ($conn->error);
$row = $item_number->fetch_assoc();




if(isset($_POST['btnAdd'])) {
  $id=$_POST['btnAdd'];

  $qty=$_POST['qty'];

        $insert = "INSERT INTO `temporary_item_list`(`item_name`, 'quantity')
                   SELECT item_name, quantity FROM table_product WHERE item_number = '$id'";
        $result = $conn->query($insert);
        
}

if(isset($_POST['view'])) {

  header("location: view.php");

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
      font-size: 50px;

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
      height: 75%;
      background-color: white;
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
    height: 350px;
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


.img{
	width: 100%;
	height: 100%;
	border-radius: 10px;
	
}
  .up_image{

    width: 40%;
    height: 450px;
   
   
    border-radius: 10px;
    margin-left: 50px;

  }


  .tbs1{
    width: 50%;
    margin-top: -350px;
    margin-left: 400px;
    font-size: 30px;

  }

  td{
  	height: 50px;
  }


  .wr1{

      margin: 10px;
      height: 50px;
      border: 1px solid black;
      width: 80%;
  }
	
	

  </style>
</head>
<body>

<center>
  <ul>
  <li><a class="logo">
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

                    <input type="" name="">
                    <button>SEARCH</button>
              </div>

              <div class="left-down"><br><br>
                      <h3>
                        Item Details
                      </h3> <br><br>

                      <div class="scroll1"><br><br><br><br>
					               

                            
<?php 

$item_number=$_GET["item_number"];

$view_query = mysqli_query($conn,"SELECT * from table_product where item_number ='$item_number' "); 
		// where account_type='0'
		
		while($row = mysqli_fetch_assoc($view_query)){ //<-- ginagamit tuwing kukuha ng database
			
			$db_item_number  = $row["item_number"]; 
			$db_item_name = $row["item_name"]; 
			$db_price = $row["price"]; 
			$db_stocks = $row["stocks"]; 
			$db_unit = $row["unit"]; 
			$db_unit = $row["unit"]; 
			$db_image = $row["image"]; 
		
			// echo $ic; 
			
			?>
			   <?php }?> 
			       <div class="up_image">
                                     
									 
									 <image class="img" src="../upload/<?php echo $db_image ?>">
                                </div>

                    
                                <table class="tbs1">
                                      
                                      <tr>
                                          <td>ITEM CODE</td>
                                          <td><?php echo $db_item_number ?></td>
                                      </tr>

                                      <tr>
                                          <td> ITEM NAME</td>
                                          <td> <?php echo $db_item_name  ?></td>
                                      </tr>

                                      <tr>
                                          <td> PRICE</td>
                                          <td><?php echo $db_price  ?></td>
                                      </tr>

                                      <tr>
                                          <td> STOCKS</td>
                                          <td> <?php echo $db_stocks ?></td>
                                      </tr>

                                      
                                         
                                          
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



        
                          

   
                            
                            <table >
                              
                                <tr>
								
								
                                        
                                     


                                </tr>

                                <tr>
                                       
                                            

                                        </td>


                                </tr>


                            </table>      



                          </div>
					  
        </div>














      </div> 
    </section>

    

  
  
</body>
</html>