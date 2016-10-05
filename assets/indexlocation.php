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
           <a href="<?php echo WEB_ROOT;?>assets/add_location.php" class="btn btn-info"> New Location</a>
     
					 </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
               <div class="list-page-header row-fluid"> 
			   <h3>Locations</h3>
	<div class="x_title title1">
               </div>
  </div>
  <div class="tab-content">
   <div class="tab-pane active" id="1">
  <div class="row">
  <div class="padding-bottom-10">
  <i class="icon-plus-squared">America</i>
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

</body>
</html>