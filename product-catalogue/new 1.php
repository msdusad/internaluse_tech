<!DOCTYPE html>
<html lang="en">
<!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> -->
<body class="nav-md">
<div class="container body">
  <div class="main_container">
   
    <?php include("../include/top-nav.php"); ?>
     <?php include("../include/right-nav.php"); ?>
    <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-9 col-sm-8 col-xs-12 padding-top-10">
            <div class="x_panel tile">
              <div class="x_title">
                <div class="row">
                  <div class="col-lg-7 h4"><a href="<?php echo WEB_ROOT;?>admin/index.php"><i class="icon-cog"></i>Admin</a></div>
                  <div class="col-lg-5 text-right MrTpMd-10"> 
                     <a href="http://192.168.1.194:8081/currenteasyweb/product-catalogue/new.php" class="btn btn-round btn-dark">New Problem</a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h1 class="h4 padding-bottom-10">Products</h1>
				  <!-- start table -->
				     <div class="table-responsive margin-top-20">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
							  <tr>
								<th>Name</th>
								<th>Type</th>
								<th>Manufacturer</th>
								<th>Status</th>
								<th>&nbsp;</th>
							  </tr>	
							</thead>

							<tbody>
								<tr class="assTable">
									<td class=" "><a href="http://192.168.1.194:8081/currenteasyweb/product-catalogue/new1.php">121000040</a></td>
									<td class=" ">May 23, 2014 11:47:56 PM </td>
									<td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
									<td class=" ">John Blank L</td>
									<td class=" "><a href="#"><i class="icon-pencil"></i></a> &nbsp; <a href="#"><i class="icon-trash-empty"></i></a></td>
								</tr>
								<tr class="assTable">
									<td class=" ">121000040</td>
									<td class=" ">May 23, 2014 11:47:56 PM </td>
									<td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
									<td class=" ">John Blank L</td>
									<td class=" "><a href="#"><i class="icon-pencil"></i></a> &nbsp; <a href="#"><i class="icon-trash-empty"></i></a></td>
								</tr>
							</tbody>
                        </table>
                    </div>
				  <!-- end table -->
              </div>
            </div>
        </div>
      </div>
    </div>
    <?php include("../include/footer.php"); ?>
  </div>
</div>

</body>
</html>


               
             
