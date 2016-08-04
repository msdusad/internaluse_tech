<!DOCTYPE html>
<html lang="en">
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<body class="nav-md">
<div class="container body">
  <div class="main_container">
    <?php include("../include/right-nav.php"); ?>
    <?php include("../include/top-nav.php"); ?>
    <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-9 col-sm-8 col-xs-12 padding-top-10">
            <div class="x_panel tile">
              <div class="x_title">
                <div class="row">
                  <div class="col-lg-7 padding-top-10"> <a href="../login/index.php" class="h4"><i class="icon-left-small"></i>Back to Dashboard</a> </div>
                  <div class="col-lg-5 text-right MrTpMd-10"> <a href="edit.php" class="btn btn-danger btn-round">Edit profile</a>
                    
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h1 class="h3 padding-bottom-10">Edit Profile</h1>
				<div class="row">
				     <div class="col-sm-3"><img src="../images/profile.gif" alt="" class="img-responsive img-thumbnail noBorderRadius"></div>
					 <div class="col-sm-9">
					    <div class="media line-height-25">
						  <div class="media-left weight-600 green">
						     Name:<br>
						     Email:<br>
							 Phone:<br>
							 Language:<br>
							 Location:<br>
							 Reporting&nbsp;manager:
						  </div>
						  <div class="media-body">
						     Abc Singh<br>
							 Abc@gmail.com<br>
							 999 99 9999<br>
							 English<br>
                             India<br>
                             bac							 
						  </div>
						</div>
						
						
					 </div>
				</div>
				<h3 class="margin-top-20 weight-600">Signature</h3>
				<p>No open and pending tickets for this agent</p>
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