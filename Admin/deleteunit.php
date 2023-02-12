<?php 
include("../config.php");
//mysqli_query($conn,"INSERT INTO `system_maintinance`(`system_id`, `tax`, `unit`, `date_edit`) VALUES (NULL, '', '$new_unit', '$day,$date');");

//mysqli_query($conn,"UPDATE table_product SET product_status='1' where item_number='$item_number' ");
	$system_id =$_GET["system_id"];
	
	mysqli_query($conn,"DELETE FROM system_maintinance WHERE system_id ='$system_id '");
	
	echo "<script>alert('Remove Unit Successfully .');

	window.location='remove_unit.php';
 </script> ";
	


?>