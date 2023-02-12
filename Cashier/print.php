<?php 
//users
session_start();

if(isset($_SESSION["user_id"])){
	
			include ("../config.php");
		$user_id = $_SESSION["user_id"];
		$db_first_name="";
		$get_record = mysqli_query ($conn,"SELECT * FROM user where user_id='$user_id' ");
		$row = mysqli_fetch_assoc($get_record);
		 $db_first_name = $row["first_name"];
		 $db_last_name = $row["last_name"];
		 
		 $full_name = ucfirst($db_first_name).". ".ucfirst($db_last_name);
				
		 
		
	
}else{
	
	echo "<script>window.location.href='../';</script>";
	
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Receipt</title>


	<style type="text/css">
		
		*{
			background-color: #65121a;
			margin: 0px;
			font-family: helvetica;
		}

		

		table{
			border: 1px solid black;
			border-collapse: collapse;
			width: 90%; 
			height: 70px;
			text-align: center;



		}

		td{	
			border: 1px solid black;
			border-collapse: collapse;
			background-color: white;
			height: 50px;
		}

		.j1{
			
			height: 800px;
			width: 50%;
			background-color: white;
			margin-top: 30px;
		}

		.j2{
			overflow: scroll;
			overflow: hidden;
			background-color: white;
		}

		form{
			background-color: white;
		}

		h1{
			background-color: white;
		}

		.tr1{
			background-color: green;
		}

		.tr2{
			background-color: red;
		}







	</style>
</head>
<body>

<center>
 <?php
$tracking_number=$_GET["tracking_number"]; 
 include("../config.php");
 
 
			// echo $ic; 
			
			?>


			
		<div class="itemlist" id="GFG">

			<div class="j1">
		<form>


			<br><br><br><br><h1>TRANSACTION RECEIPT</h1><br><br>
		
		 	<div class="j2">
			<table>
			
			
				<tr>
					<td class="td1"> Transaction Code</td>
					
					<td colspan="4">RDL: <?php echo $tracking_number; ?></td>
				</tr>
				<tr>
			<td width="20%"> Cashier Name</td>
			<td colspan="4"><?php
	 $view_query = mysqli_query($conn,"SELECT * from histoy  WHERE `tacking_number` = '$tracking_number'");
		// where account_type='0'
		// start minus stocks
		$count=0;
		while($row = mysqli_fetch_assoc($view_query)){ //<-- ginagamit tuwing kukuha ng database
			
			
			$db_cashierDuty = $row["cashierDuty"]; 
			
		}
			echo  $db_cashierDuty?></td>
			
			</tr>
			
			

				<tr>
				<?php 


date_default_timezone_set('Asia/Manila');
$times = date(' h:i: a', time());
$dates = date('M d, Y  D', time());
$time = strtoupper($times);
$date = strtoupper($dates);


$view_query = mysqli_query($conn,"SELECT a.*,b.* FROM histoy as a 
LEFT JOIN table_product as b ON a.h_prod_id=b.item_number where tacking_number='$tracking_number'"); 
		// where account_type='0'
		
		
		while($row = mysqli_fetch_assoc($view_query)){ //<-- ginagamit tuwing kukuha ng database
			
			$db_item_number  = $row["item_number"]; 
			$db_item_name = $row["item_name"]; 
			$db_price = $row["price"]; 
			$db_h_qty = $row["h_qty"]; 
			$db_price = $row["price"]; 
			$db_stocks = $row["stocks"]; 
			$db_h_date = $row["h_date"]; 
			$db_unit = $row["unit"]; 
			$db_h_total = $row["h_total"]; 
			$db_discount = $row["discount"]; 
		}
		
?>		
					<td> Date Purchased</td>
					<td colspan="4"><?php echo ($db_h_date) ?></td>
				</tr>
		




<tr>
					<td width="20%"> Item Name</td>
					
					<td width="20%"> Price </td>
					<td width="15%"> Quantity</td>
					<td width="15%"> Unit</td>
					<td width="20%"> Amount</td>
				</tr>

			
<?php 



$view_query = mysqli_query($conn,"SELECT a.*,b.* FROM histoy as a 
LEFT JOIN table_product as b ON a.h_prod_id=b.item_number where tacking_number='$tracking_number'"); 
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
			$db_unit = $row["unit"]; 
			$db_h_total = $row["h_total"]; 
			$db_bayad = $row["bayad"]; 
			$db_cashier = $row["cashierDuty"]; 
			$db_discount = $row["discount"]; 
			$db_total_discount = $row["total_discount"]; 
			
			$amount=$db_price*$db_h_qty;
			
			$subtotal+=$amount;
			
		
?>		

				
				<tr>
					<td><?php echo $db_item_name; ?></td>

					<td><?php echo number_format($db_price,2); ?></td>
					<td><?php echo $db_h_qty; ?></td>
					<td><?php echo $db_unit ?></td>
					
					
					<td>₱ <?php 
					
					
					echo number_format($amount,2) 
					
					
					
					?></td>
				</tr>
		


	
				<tr>

			
						
						
		<?php } ?>			
		
					<td colspan="2">Subtotal</td>
					<td colspan="3">₱ <?php echo $subtotal?></td>
				</tr>
				
				
					
<?php 
					  $tax="SELECT * FROM `system_maintinance` WHERE tax IS NOT NULL AND  tax <> '' ";
                    $result = $conn->query($tax);
                    $row = $result->fetch_assoc();
						
			// echo $ic; 
			
						 ?>

						 	<?php $tax = $row['tax'];?>
<?php 

	//formula to get VAT
						$a= $tax /100;
						$b=$a*$subtotal;
					
						
		
?>					
				<tr>
				
					<td colspan="2">VAT <?php echo $row['tax'];?>%</td>
					<td colspan="3"> ₱ <?php echo number_format($b,2);?></td>
				</tr>
				<tr>
					<td colspan="2">Discount</td>
					<td colspan="3"><?php echo $db_discount; ?>%</td>
				</tr>
				<tr>
					<td colspan="2">Total Discount</td>
					<td colspan="3">₱ <?php echo number_format($db_total_discount,2); ?></td>
				</tr>
				<tr>
					<td colspan="2">TOTAL</td>
					<td colspan="3">₱ <?php echo number_format($db_h_total,2)?></td>
				</tr>
			<?php
			setlocale(LC_MONETARY,"en_US");
				$change=$db_bayad-$db_h_total;

			?>
				
				
				<tr>
					<td colspan="2">CASH</td>
					<td colspan="3">₱ <?php echo number_format($db_bayad,2); ?></td>
				</tr>
				<tr>
					<td colspan="2" style="font-size:30px;">CHANGE</td>
					<td colspan="3" style="font-size:30px;">₱ <?php echo number_format($change,2); ?> </td>
				</tr>
	<tr class="tr1">
	
	<td colspan="5"></td>
	</tr >	<td colspan="5" class="tr1"><h1  style="background-color:green; color: white;" class="tr1" style="font-size:30px" id="printPageButton" onclick="window.print()">PRINT</h1></td><tr>
	
	
	</tr> <tr>
		
		<td colspan="5" class="tr2"><h1  style="background-color:red; color: white; " class="tr1" style="font-size:30px" id="printPageButton" onClick="location.href='user.php'">DONE</h1></td>
	</tr>
			</table> </div>

			
			</div>
		</form>
	
 </div>
<!-- printing function-->

	
 
 <script>
        function printDiv() {
            var divContents = document.getElementById("GFG").innerHTML;
            var a = window.open('', '', 'height=5000, width=5000');
            a.document.write('<html>');
            a.document.write('<body > <h1><br>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>
<style>

@media print {
  #printPageButton {
    display: none;
  }
}

</style>
<!-- id="printPageButton" -->

<!-- printing function-->
</center>
	





</body>
</html>