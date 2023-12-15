<?php
  include '../config/database.php';
  session_start();
  if (!isset($_SESSION['user_id'])){
	  header('location:login.php');
  }
  $query=$db->query("SELECT COUNT(*) AS id FROM eleve");
  $query1=$db->query("SELECT COUNT(*) AS id FROM enseignant");
  $query2=$db->query("SELECT COUNT(*) AS id FROM ecole");
  $query3=$db->query("SELECT montant FROM vpaiement ");

?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Coordination</title>
		<link rel="icon" type="image/png" sizes="16x16" href="../assets/img/icon.png">
		
        <!-- Common Plugins -->
        <link href="../assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Vector Map Css-->
        <link href="../assets/lib/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
		
		<!-- Chart C3 -->
		<link href="../assets/lib/chart-c3/c3.min.css" rel="stylesheet">
		<link href="../assets/lib/chartjs/chartjs-sass-default.css" rel="stylesheet">

        <!-- DataTables -->
        <link href="../assets/lib/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/lib/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/lib/toast/jquery.toast.min.css" rel="stylesheet">
		
        <!-- Custom Css-->
        <link href="../assets/scss/style.css" rel="stylesheet">
       <!-- Common Plugins -->
       <link href="../assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
        <!-- Custom Css-->
        <link href="../assets/scss/style.css" rel="stylesheet">
    </head>
    <body>
			<?php
			include'topbar.php'
			?>
       <?php
	     include 'sidebar.php' 
	   ?>
      
		<div class="row page-header">
				<div class="col-lg-6 align-self-center ">
				  <h2>Dashboard</h2>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div>
			
		</div>
		
        <section class="main-content">
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header card-default">
                            Line type chart
                        </div>
                        <div class="card-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="col-md-5">
                    <div class="card">
                        <div class="card-header card-default">
                            Bar chart example
                        </div>
                        <div class="card-body">
                                <div class="flot-chart">
                                     <div class="flot-chart-content" id="flot-bar-chart"></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Pie Chart
                        </div>
                        <div class="card-body">
                           <div class="flot-chart">
                                     <div class="flot-chart-content" id="flot-pie-chart"></div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Moving chart
                        </div>
                        <div class="card-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-line-chart-moving"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                               
            <?php
			include'../footer.php'
			?>

        </section>
        <!-- Common Plugins -->
        <script src="../assets/lib/jquery/dist/jquery.min.js"></script>
		<script src="../assets/lib/bootstrap/js/popper.min.js"></script>
        <script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/lib/pace/pace.min.js"></script>
        <script src="../assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="../assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="../assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="../assets/js/custom.js"></script>
			
        <!--Chart Script-->
        <script src="../assets/lib/chartjs/chart.min.js"></script>
		<script src="../assets/lib/chartjs/chartjs-sass.js"></script>

		<!--Vetor Map Script-->
		<script src="../assets/lib/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="../assets/lib/vectormap/jquery-jvectormap-us-aea-en.js"></script>
		
		<!-- Chart C3 -->
        <script src="../assets/lib/chart-c3/d3.min.js"></script>
        <script src="../assets/lib/chart-c3/c3.min.js"></script>
	
        <!-- Datatables-->
        <script src="../assets/lib/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/lib/datatables/dataTables.responsive.min.js"></script>
        <script src="../assets/lib/toast/jquery.toast.min.js"></script>
        <script src="../assets/js/dashboard.js"></script>
		
            <!--Common Plugins-->
            <script src="../assets/lib/jquery/dist/jquery.min.js"></script>
		<script src="../assets/lib/bootstrap/js/popper.min.js"></script>
        <script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/lib/pace/pace.min.js"></script>
		<script src="../assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="../assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="../assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="../assets/js/custom.js"></script>

        <!-- Flot Chart-->
        <script src="../assets/lib/flot/jquery.flot.js"></script>
        <script src="../assets/lib/flot/jquery.flot.resize.js"></script>
        <script src="../assets/lib/flot/jquery.flot.pie.js"></script>
        <script src="../assets/lib/flot/jquery.flot.time.js"></script>
        <script src="../assets/lib/flot/jquery.flot.tooltip.min.js"></script>
        <script src="../assets/js/flot.custom.js"></script>
    </body>

</html>