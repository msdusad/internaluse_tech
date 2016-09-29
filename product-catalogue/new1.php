<!DOCTYPE html>
<html lang="en">
<body class="nav-md">
<div class="container body">
  <div class="main_container">
        <?php include("../include/top-nav.php"); ?>
    <?php include("../include/right-nav.php"); ?>
   
    <div class="right_col" role="main">
      <div class="row checkList">
        <div class="col-md-9 col-sm-8 col-xs-12 margin-top-10">
          <form action="#" class="checkList">
            <div class="x_panel tile">
              <div class="x_title">
                <div class="row">
				  <div class="col-lg-12">
				  <div class="row" style="background:#fff;" data-spy="affix" data-offset-top="197">
                  <div class="col-lg-7 padding-top-10"> <a href="<?php echo WEB_ROOT;?>assets/index.php" class="h4"><i class="icon-left-small"></i>Products</a> </div>
                  <div class="col-lg-5 text-right MrTpMd-10"> <a href="<?php echo WEB_ROOT;?>assets/index.php" class="btn btn-dark ">Edit Product</a>
                    
                      <button type="button" class="btn btn-default ">Delete</button>
                   
                  </div>
				 </div> 
				 </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h1 class="h3 padding-bottom-10"><b>Adope Photoshop cs6</b></h1>
               <div class="row">

                 <div class="x_content">
                <h1 class="h4 padding-bottom-10">Products</h1>
				  <!-- start table -->
				     <div class="table-responsive margin-top-20">
                        <table class="table table-striped jambo_table bulk_action table-bordered text-center">
                            <thead>	
						</thead>

							<tbody>
								<tr class="assTable">
									<td class=" ">Asset Type:<b>Software</b></td>
									<td class=" ">Manufacturer:<b>Adobe</b></td>

								</tr>
								<tr class="assTable">
									<td class=" ">Status:<b>In Production</b></td>
									<td class=" ">Mode of Procurement:<b>Both</b></td>
								</tr>
							</tbody>
                        </table>
                    </div>
					<div class="content">
					 <h1 class="h4 padding-bottom-10">Vendors</h1>
					 <p>No Vendors associated &nbsp;
					 <button type="button" class="btn btn-default" data-toggle="modal" data-target="#add-vendor"> Add Vendor</button>
					 
					 </div>
					 </div>
					 </div>
					 
					 
					 
					 
					 
					 
					 </p>
					</div>
					 <h1 class="h4 padding-bottom-10">Associated Assets </h1>
				  <div class="content1">
				  <div class="pull-left">
				
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Showing: Active assets (0)<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Active assests(0)</a></li>
            <li><a href="#">Deleted assests(0)</a></li>
                     </ul>
						
						 
			</div>
					 <div class="pull-right">
					<a href="#" class="btn btn-default disabled" role="button" readonly>Delete</a>Showing 0 - 0 of 0<a href="#" class="btn btn-default disabled" role="button" readonly><i class="icon-left-dir"></i></a><a href="#" class="btn btn-default disabled" role="button" readonly><i class="icon-right-dir"></i></a>
					</div>
					</div>
					<div class="table padding-bottom-10">
					 <table class="table table-striped jambo_table bulk_action">
                            <thead>
							  <tr>
								<th>Display Name</th>
								<th>Used By</th>
								<th>License Expiry Date </th>
								<th>&nbsp;</th>
							  </tr>	
							</thead>

							<tbody>
								<tr class="assTable">
									
									<td class=" ">rgdfrgdf</td>
									<td class=" ">-</td>
									<td class=" ">Thu, 22 Sep at 11:13 am</td>
								</tr>
								
							</tbody>
                        </table>
</div>
<div class="footer1">
<p class="text-center">No assets found  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-asset"> Add Asset</button>
<div class="modal fade" id="add-asset" role="dialog">
    <div class="modal-dialog">
      <form action="#" class="checkList">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Asset</h4>
        </div>
        <div class="modal-body">
            <div class="row">
			        <div class="col-sm-6 col-xs-12 padding-top-10">
				    	<p>
							
							<label for="status">Display Name*</label>
						</p>				
					      <input type="text"  id="itil_product_name1" "name="assets_name" class="form-control" required size="30">
                 
                 
				    </div>
					
					
			</div>
			
					
			</div>
			   
         
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> 
		  <button type="button" class="btn btn-dark" data-dismiss="modal">Save</button>
        </div>
      </div>
      </form>
    </div>











</p>
</div>
</div>
              </div>
            </div>
        </div>
      </div>
    </div>
					
                     
                  </div>

               
    <?php include("../include/footer.php"); ?>
  </div>
</div>
<div class="modal fade" id="add-vendor" role="dialog">
    <div class="modal-dialog">
      <form action="#" class="checkList">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add vendor</h4>
        </div>
        <div class="modal-body">
            <div class="row">
			        <div class="col-sm-6 col-xs-12 padding-top-10">
				    	<p>
							
							<label for="status">Status</label>
						</p>				
					    <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select> 
				    </div>
					<div class="col-sm-6 col-xs-12 padding-top-10">
				    	<p>
							
							<label for="priority">Priority</label>
						</p>				
					    <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select> 
				    </div>
					
			</div>
			<div class="row padding-top-10 padding-bottom-10">
			        <div class="col-sm-6 col-xs-12 padding-top-10">
					<div class="row padding-top-10 ">
					 <div class="col-sm-6 col-xs-12 ">
				    	<p>
							
							<label for="assign1">Assigned to</label>
						</p>				
					    <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select> 
				    </div>
					<div class="col-sm-6 col-xs-12 ">
				    	<p>
							
							<label for="department">Department</label>
						</p>				
					    <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select> 
				    </div>
					</div>
					</div>
					<div class="col-sm-6 col-xs-12 padding-bottom-10 tag1">
				    	<p>
							
							<label for="tag">Tags</label>
						</p>				
					    
						 <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select> 
						
				    </div>
			</div>
			   
         
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> 
		  <button type="button" class="btn btn-dark" data-dismiss="modal">Save</button>
        </div>
      </div>
      </form>
    </div>
  </div>
 
</body>
</html>
