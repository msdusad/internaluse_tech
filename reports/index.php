<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Techvedic - Reports </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/fontello.css" rel="stylesheet">
    <link href="css/nprogress.css" rel="stylesheet"> 
    <link href="css/custom.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<!--[if lte IE 8]>
	<script type='text/javascript' src='js/html5shiv.js'></script>
	<script type='text/javascript' src='js/respond.min.js'></script>
	<![endif]-->
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include("../include/right-nav.php"); ?>
        <?php include("../include/top-nav.php"); ?>
        <div class="right_col" role="main">
	        <div class="row">
			    <div class="col-md-3 col-sm-4 col-xs-12">
				     <h3>Report Categories</h3>
				</div>
				<div class="col-ms-9 col-sm-9 col-xs-12">
				    <div class="row">
						<div class="col-sm-9 col-xs-12 padding-top-5">
							<div class="input-group noMargin">
								<input class="form-control" placeholder="Search all Reports" type="text">
								<span class="input-group-btn">
								<button class="btn btn-default" type="button">Search</button>
								</span>
						    </div>
						</div>
						<div class="col-sm-3 col-xs-12 text-right visible-sm-right-left padding-top-5">
							<a href="#" class="dropdown-toggle btn btn-success" data-toggle="dropdown" role="button">New Report</a>
						</div>
					</div>
				</div>
			</div>
			    <div class="row">
					<div class="col-md-3 col-sm-4 col-xs-12 verticalTab-nav">
					    <ul class="navList">
							<li class="active"><span><i class="icon-ticket"></i>Tickets</span></li>
							<li><span><i class="fa icon-shield"></i>Changes</span></li>
							<li><span><i class="fa icon-cube"></i>Assets</span></li>
						</ul>
					</div>
					<div class="col-md-9 col-sm-8 col-xs-12 verticalTab-content">
					    <div class="tab-wrap active">
						    <div class="acc-heading"><span>Tickets</span></div>
						    <div class="acc-content">
						        <ul class="reportList">
								    <li>
										<a href="/reports/1">Agent ticket summary</a><br>
										Compare the performance of agents based on ticket response and resolution
									</li>
									<li>
										<a href="/reports/1">Agent ticket summary</a><br>
										Compare the performance of agents based on ticket response and resolution
									</li>
									<li>
										<a href="/reports/1">Agent ticket summary</a><br>
										Compare the performance of agents based on ticket response and resolution
									</li>
									<li>
										<a href="/reports/1">Agent ticket summary</a><br>
										Compare the performance of agents based on ticket response and resolution
									</li>
								</ul>
						    </div>
						</div>
					    <div class="tab-wrap">
						    <div class="acc-heading"><span>Changes</span></div>
						    <div class="acc-content">
						        <ul class="reportList">
								     <li>
										<a href="/reports/1">Agent ticket summary</a><br>
										Compare the performance of agents based on ticket response and resolution
									</li>
									<li>
										<a href="/reports/1">Agent ticket summary</a><br>
										Compare the performance of agents based on ticket response and resolution
									</li>
								</ul>
						    </div>
						  </div>
					    <div class="tab-wrap">
						    <div class="acc-heading"><span>Assets</span></div>
						    <div class="acc-content">
						        <ul class="reportList">
								    <li>
										<a href="/reports/1">Agent ticket summary</a><br>
										Compare the performance of agents based on ticket response and resolution
									</li>
									<li>
										<a href="/reports/1">Agent ticket summary</a><br>
										Compare the performance of agents based on ticket response and resolution
									</li>
									<li>
										<a href="/reports/1">Agent ticket summary</a><br>
										Compare the performance of agents based on ticket response and resolution
									</li>
									<li>
										<a href="/reports/1">Agent ticket summary</a><br>
										Compare the performance of agents based on ticket response and resolution
									</li>
								</ul>
						    </div>
					    </div>
					</div>
				</div>

        </div>
         <?php include("../include/footer.php"); ?>
      </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/nprogress.js"></script>
	<script src="js/tab.js"></script> 
    <script src="js/custom.min.js"></script>
   </body>
</html>