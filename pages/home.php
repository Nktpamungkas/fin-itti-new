<?php
ini_set("error_reporting", 1);
session_start();
include "koneksi.php";
?>



<?php
//set base constant 
if( !isset($_SESSION['usridFin']) || !isset($_SESSION['pasidFin']) ) {
 ?>
 <script>setTimeout("location.href='login.php'",500);</script> 
 <?php
 die( 'Illegal Acces' ); 
}

//request page
$page	= isset($_GET['p'])?$_GET['p']:'';
$act	= isset($_GET['act'])?$_GET['act']:'';
$id		= isset($_GET['id'])?$_GET['id']:'';
$page	= strtolower($page);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
	<meta http-equiv="refresh" content="180">
    <title>Home</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
	<script src="plugins/highcharts/code/highcharts.js"></script>
    <script src="plugins/highcharts/code/highcharts-3d.js"></script>
	<script src="plugins/highcharts/code/modules/exporting.js"></script>
    <script src="plugins/highcharts/code/modules/export-data.js"></script>
	<style type="text/css">
#container {
    height: 400px; 
    min-width: 310px; 
    max-width: 800px;
    margin: 0 auto;
}
		#container1 {
    height: 400px; 
    min-width: 310px; 
    max-width: 1200px;
    margin: 0 auto;
}
		</style>
	</head>
<body>
      <div class="callout callout-info">
        <h4>Welcome <?php echo strtoupper($_SESSION['usridFin']);?> at Indo Taichen Textile Industry</h4>
        This is a web-based Indo Taichen system
      </div>
	<!-- Main content -->
    
    <!-- /.content -->
       
</body>
</html>	
	