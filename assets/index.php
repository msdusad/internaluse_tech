<!DOCTYPE html>
<html lang="en">
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include("../include/right-nav.php"); ?>
        <?php include("../include/top-nav.php"); ?>
        <div class="right_col" role="main">
		  <div class="row checkList">
		    <div class="col-md-3 col-sm-4 col-xs-12 margin-top-10">
			    <div class="accordion-plus">
					<div class="panel-group noMargin accordion" id="accordion">
						<div class="panel noMargin noBorderRadius borderTop">
							<div class="panel-heading" id="headingOne"> 
								<a class="collapsed" role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> 
									<p class="panel-title"><i class="icon-chart-pie-3 green p-sm"></i> Services</p>
								</a> 
							</div>
							<div id="collapseOne" class="panel-collapse collapse" aria-labelledby="headingOne">
								<div class="panel-body">
									   <div class="panel noMargin noBorderRadius noBorder">
										<div class="panel-heading noPadding noBorder" id="heading1"> 
											<a class="collapsed" role="button" data-toggle="collapse" href="#collapse1" aria-expanded="false" aria-controls="collapse1"> 
												 <p class="panel-title">Services</p>
											</a> 
										</div>
										<div id="collapse1" class="panel-collapse collapse" aria-labelledby="heading1">
											<div class="panel-body noBorder noPaddingLeft">
												<ul class="list-right-open">
													<li><a href="#">All Tickets</a></li>
													<li><a href="#">Incidents</a></li>
													<li><a href="#">Service Requests</a></li>
												</ul>
											</div>
										</div>
									  </div>
								</div>
							</div>
						</div>
						<div class="panel noMargin noBorderRadius">
							<div class="panel-heading" id="headingTwo"> 
								<a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> 
									 <p class="panel-title">Services</p>
								</a> 
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo">
								<div class="panel-body">
									<p> You can combinetwo or more Outlook PST files at a particular instant.</p>
								</div>
							</div>
						</div>
						<div class="panel noMargin noBorderRadius">
							<div class="panel-heading" id="headingThree"> 
								<a class="collapsed" role="button" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> 
									 <p class="panel-title">Services</p>
								</a> 
							</div>
							<div id="collapseThree" class="panel-collapse collapse" aria-labelledby="headingThree">
								<div class="panel-body">
									<p> You can combinetwo or more Outlook PST files at a particular instant.</p>
								</div>
							</div>
						</div>
						
					</div>
				</div>	
			</div>
		  
		  <div class="col-md-9 col-sm-8 col-xs-12 margin-top-10">
                <div class="x_panel">
                    <div class="x_title">
						<div class="row">
							<div class="col-lg-7 col-xs-12">
							  <h2 class="h2">Services</h2>
							</div>
							<div class="col-lg-5 col-xs-12 text-right MrTpMd-10 visible-sm-right-left">
							 <a href="#export" class="btn btn-round" data-toggle="modal" data-target="#export">Export</a>
							 <a href="csv.php" class="btn btn-round">Import</a>
							 <a href="new.php" class="btn btn-danger btn-round">Add New</a>
							</div>
						</div>
                    </div>

                  <div class="x_content">
				    <div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							 <div class="media">
								<div class="media-left"><button type="button" class="btn btn-default btn-round" disabled="disabled">Delete</button></div>
								<div class="media-left">
									<div class="input-group noMargin">
										<input class="form-control" placeholder="Search for..." type="text">
										<span class="input-group-btn">
											<button class="btn btn-dark" type="button"><i class="icon-search-2"></i></button>
										</span>
									</div>
								</div>
							 </div>
						</div>
						<div class="col-sm-6 text-right col-xs-12 visible-sm-right-left">
							 Showing 1 to 1 of 1  &nbsp;&nbsp;&nbsp;
							 <button type="button" class="btn btn-default btn-round" disabled="disabled"><i class="icon-left-dir"></i></button> 
							 <button type="button" class="btn btn-default btn-round" disabled="disabled"><i class="icon-right-dir"></i></button>
						</div>
					</div>

                    <div class="table-responsive margin-top-20">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
							  <tr>
								<th>
								  <input type="checkbox" id="test1" />
								  <label for="test1" class="column-title weight-600" style="padding-top:3px;">Display Name</label>
								</th>
								<th>Invoice </th>
								<th>Invoice Date </th>
								<th>Order </th>
								<th>Bill to Name </th>
								<th>Status </th>
							  </tr>	
							</thead>

							<tbody>
								<tr>
									<td class="a-center ">
									    <input type="checkbox" id="laptop" />
								        <label for="laptop" class="column-title">Andrea's Laptop</label>
									</td>
									<td class=" ">121000040</td>
									<td class=" ">May 23, 2014 11:47:56 PM </td>
									<td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
									<td class=" ">John Blank L</td>
									<td class=" ">Paid</td>
								</tr>
								<tr>
									<td class="a-center ">
									    <input type="checkbox" id="laptop1" />
								        <label for="laptop1" class="column-title" style="padding-top:3px;">Display Name</label>
									</td>
									<td class=" ">121000040</td>
									<td class=" ">May 23, 2014 11:47:56 PM </td>
									<td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
									<td class=" ">John Blank L</td>
									<td class=" ">Paid</td>
								</tr>
							</tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
			 </div> 
        </div>
        <?php include("../include/footer.php"); ?>
      </div>
    </div>
	<div class="modal fade" id="export" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content noBorderRadius checkList">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Asset Export</h4>
		  <div class="row">
		     <div class="col-sm-4 margin-top-10">
			    <strong>Export as:</strong>
			 </div>
			 <div class="col-sm-8 margin-top-10">
			    <input type="checkbox" id="ccv" />
				<label for="ccv">CSV</label>&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="checkbox" id="excel" />
				<label for="excel">Excel</label>
			 </div>
		  </div>
		  <div class="row">
		     <div class="col-sm-4 margin-top-10">
			    Asset Type<span class="text-red">*</span>
			 </div>
			 <div class="col-sm-8 margin-top-10">
			   <form action="#">
			     <select class="form-control">
				    <option value="hardware">Hardware</option>
					<option value="abc">ABC</option>
					<option value="access">Access Point</option>
					<option value="server">Aix Server</option>
				</select>
			   </form>

			 </div>
		  </div>
        </div>
        <div class="modal-body">
		  <p><strong>Select fields to export</strong>  or  <a href="#">Select All</a><p>
		  <form action="#" class="checkList">
		      <div class="row">
			     <div class="col-sm-4 col-xs-12">
				    <input type="checkbox" id="display-name" />
				    <label for="display-name">Display Name</label>
				 </div>
				 <div class="col-sm-4 col-xs-12">
				    <input type="checkbox" id="asset-type" />
				    <label for="asset-type">Asset Type</label>
				 </div>
				 <div class="col-sm-4 col-xs-12">
				    <input type="checkbox" id="description" />
				    <label for="description">Display Name</label>
				 </div>
			  </div>
		  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger noBorderRadius" data-dismiss="modal">Cancel</button> 
		  <button type="button" class="btn btn-dark noBorderRadius" data-dismiss="modal">Export</button>
        </div>
      </div>
    </div>
  </div>
    
</body>
</html>