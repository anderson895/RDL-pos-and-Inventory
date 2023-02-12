<?php

$con = mysqli_connect ("localhost","root","","rdeleon");


if(!$con){
    echo "Problem in database connection..." .mysqli_error();
}else{
	$query="SELECT * ,SUM(h_total) AS sum FROM histoy GROUP by  MONTH(h_date) ORDER BY h_date";
	$query_result=mysqli_query($con,$query);
	
	$chart_data = "";
	while($row = mysqli_fetch_assoc($query_result,)){
		
		$total="".$row['sum'];
	

	
  
        
	$productname[] = date("F", strtotime($row['h_date']));
        
    
	
	$sales[] = $total;
	
	}
	
	
	
	

	

}

//<?php echo json_encode($productname);
// <?php echo json_encode($sales);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Bargraph in PHP and MYSQL</title>
     <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

     <style type="text/css">
       
      .box{
        width: 110%;
        margin-left: 60px;
        margin-top: 50px;

      }

     </style>
</head>

<body>
  <div class="row">
    <div class="box">
      <div class="card">
      <div >
	  
	  <!-- R de leon poultry supply-->
    <center>    <h1 style="color:black;  font-family:calibri;"><b> Monthly Sales</b></h1></center>
		<!-- <img src="texture.png"> -->
      </div>
          <div class="card-body">
          <canvas id="chartjs_bar"></canvas>
          </div>
      </div>
    </div>
	
  </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
	   
     
	 var myChart = new Chart(ctx,{
          type: 'bar',
          data: {
            labels:<?php echo json_encode($productname);


			?>,
            datasets: [{
                  backgroundColor: [
      'red',
      'red',
      'red',// 'rgba(54, 162, 235, 0.2)',
      'red',
      'red',
      'red',
      'red',
      'red',
      'red',
      'red',
      'red',
      'red'
    ],
                data: <?php  echo json_encode($sales);
				
				?>
				
            }]
          },
          options:{
              legend: {
                  display:true,
                  position:'bottom',
                  labels: {
                      fontColor: '#71748d',
                      fontFamily: 'Circular Std Book',
                      fontSize: 14,
                  }
              },
          }
      }
	   
	  );
	  
    </script>
</body>
</html>