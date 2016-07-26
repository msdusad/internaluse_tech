<!DOCTYPE html>
<html lang="en">
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
					    <div class="col-lg-7 padding-top-10">
						  <a href="../index.php" class="h4"><i class="icon-left-small"></i>Back to Dashboard</a>
						</div>
						<div class="col-lg-5 text-right MrTpMd-10">
						 <a href="../index.php" class="btn btn-danger btn-round">Cancel</a>
						 <div class="btn-group">
						  <button type="button" class="btn btn-success btn-round">Update</button>
						</div>
						</div>
					 </div>
					
					   <div class="clearfix"></div>
					</div>
					<div class="x_content">
						<h1 class="h3 padding-bottom-10">Edit Profile</h1>
						<form action="#" class="checkList">
						    <label>Full Name</label>
							<input type="text" class="form-control margin-bottom-20" placeholder="Account Admin">
							<label>Title</label>
							<input type="text" class="form-control margin-bottom-20">
							<label>Email</label>
							<input type="eamil" placeholder="account.desk@gmx.com" class="form-control margin-bottom-20" readonly>
							<label>Phone No</label>
							<input type="text" class="form-control margin-bottom-20" placeholder="work">
							<input type="text" class="form-control margin-bottom-20" placeholder="mobile">
						</form>
						
                        <p>A Profile image of the person, it's best if the picture has the same length and height</p>
                        <form action="#" class="checkList">
                             <input type="file" class="margin-bottom-20">
							 <label>Time Zone</label>
							 <div class="form-group margin-bottom-20">
									<select class="select2_group form-control">
										<option selected="selected" value="">Select Groups Name</option>
										<optgroup label="Alaskan/Hawaiian Time Zone">
										  <option value="AK">Alaska</option>
										  <option value="HI">Hawaii</option>
										</optgroup>
										<optgroup label="Pacific Time Zone">
										  <option value="CA">California</option>
										  <option value="NV">Nevada</option>
										  <option value="OR">Oregon</option>
										  <option value="WA">Washington</option>
										</optgroup>
										<optgroup label="Mountain Time Zone">
										  <option value="AZ">Arizona</option>
										  <option value="CO">Colorado</option>
										  <option value="ID">Idaho</option>
										  <option value="MT">Montana</option>
										  <option value="NE">Nebraska</option>
										  <option value="NM">New Mexico</option>
										  <option value="ND">North Dakota</option>
										  <option value="UT">Utah</option>
										  <option value="WY">Wyoming</option>
										</optgroup>
								    </select>
							    </div>
								<label>Language</label>
								 <div class="form-group margin-bottom-20">
									<select class="select2_group form-control">
										<option selected="selected" value="">Select Groups Name</option>
										<optgroup label="Alaskan/Hawaiian Time Zone">
										  <option value="AK">Alaska</option>
										  <option value="HI">Hawaii</option>
										</optgroup>
										<optgroup label="Pacific Time Zone">
										  <option value="CA">California</option>
										  <option value="NV">Nevada</option>
										  <option value="OR">Oregon</option>
										  <option value="WA">Washington</option>
										</optgroup>
										<optgroup label="Mountain Time Zone">
										  <option value="AZ">Arizona</option>
										  <option value="CO">Colorado</option>
										  <option value="ID">Idaho</option>
										  <option value="MT">Montana</option>
										  <option value="NE">Nebraska</option>
										  <option value="NM">New Mexico</option>
										  <option value="ND">North Dakota</option>
										  <option value="UT">Utah</option>
										  <option value="WY">Wyoming</option>
										</optgroup>
									</select>
								</div>
								<label>Location</label>
								 <div class="form-group margin-bottom-20">
									<select class="select2_group form-control">
										<option selected="selected" value="">Select Location</option>
										<optgroup label="Alaskan/Hawaiian Time Zone">
										  <option value="AK">Alaska</option>
										  <option value="HI">Hawaii</option>
										</optgroup>
										<optgroup label="Pacific Time Zone">
										  <option value="CA">California</option>
										  <option value="NV">Nevada</option>
										  <option value="OR">Oregon</option>
										  <option value="WA">Washington</option>
										</optgroup>
										<optgroup label="Mountain Time Zone">
										  <option value="AZ">Arizona</option>
										  <option value="CO">Colorado</option>
										  <option value="ID">Idaho</option>
										  <option value="MT">Montana</option>
										  <option value="NE">Nebraska</option>
										  <option value="NM">New Mexico</option>
										  <option value="ND">North Dakota</option>
										  <option value="UT">Utah</option>
										  <option value="WY">Wyoming</option>
										</optgroup>
									</select>
								</div>
								<label>Reporting manager</label>
							   <input type="eamil" placeholder="Enter Reporting Manager's Name" class="form-control margin-bottom-20">
                        </form>	
						<p>Signature</p>
                        <div class="panel panel-default noBorderRadius noShadow margin-top-10">
						    <div class="panel-heading nav">	
							  <a href="#" class="BoldAlign">&nbsp;</a>
							  <a href="#" class="italicAlign">&nbsp;</a>
							  <a href="#" class="list">&nbsp;</a>
							  <a href="#" class="listNum">&nbsp;</a>
							  <a href="#" class="shiftTab">&nbsp;</a>
							  <a href="#" class="shiftTab2">&nbsp;</a>
							  <a href="#" class="fontColor">&nbsp;</a>
							  <a href="#" class="backColor">&nbsp;</a>
							  <span class="dropdown">
							  <a href="#" class="dropdown-toggle links" data-toggle="dropdown" role="button" aria-expanded="false" title="link">&nbsp;</a>
							  <ul class="dropdown-menu">
								<li><a href="#insertLink" data-toggle="modal" data-target="#insertLink">Insert Link ...</a></li>
								<li><a href="#">Unlink</a></li>
							  </ul>
							  </span>
							  <a href="#" data-toggle="modal" data-target="#imageSelecter" class="imageSelect">&nbsp;</a>
							  <a href="#" class="imageSelect2">&nbsp;</a>
							</div>
							<div class="panel-body panelHeight">
							     Text
							</div>
						</div>						
					</div>
				  </div>
               </div>
               <div class="col-md-3 col-sm-4 col-xs-12 margin-top-10">
                  <div class="x_panel tile overflow_hidden">
                    <div class="x_title">
                      <h2>Change Password</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                    	 <p id="pass_update_result"></p>
                       <form  class="checkList">
					         <label>Current password</label>
							 <input type="password" id="current_password" name="current_password" class="form-control margin-bottom-10" required>
							 <label>New password</label>
							 <input type="password" id="new_password" name="new_password" class="form-control margin-bottom-10" required>
							 <label>Confirm password</label>
							 <input type="password" name="confirm_password" class="form-control margin-bottom-20" required>
							 <p class="text-right">
							   <input id="update_password" type="button" name="update_password" value="Change Password" class="btn btn-dark noBorderRadius">
							 </p>						
					   </form>
                    </div>
                  </div>
                </div>
			</div>
        </div>
        <?php include("../include/footer.php"); ?>
      </div>
    </div>
	<div class="modal fade" id="insertLink" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content noBorderRadius">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Link</h4>
      </div>
      <div class="modal-body">
        <ul class="nav nav-pills">
          <li class="active"><a class="btn btn-default" href="#tab1" data-toggle="tab">URL</a></li>
          <li><a href="#tab2" class="btn btn-default" data-toggle="tab">Email</a></li>
          <li><a href="#tab3" class="btn btn-default" data-toggle="tab">Anchor</a></li>
        </ul>
        <div class="tab-content padding-top-10">
          <div class="tab-pane active" id="tab1">
            <form action="#" class="checkList padding-top-10">
              <p>
                <label>URL</label>
                <input type="text" class="form-control">
              </p>
            </form>
          </div>
          <div class="tab-pane" id="tab2">
            <form action="#" class="checkList padding-top-10">
              <p>
                <label>Email</label>
                <input type="email" class="form-control">
              </p>
            </form>
          </div>
          <div class="tab-pane" id="tab3">
            <form action="#" class="checkList padding-top-10">
              <p>
                <label>Anchor</label>
                <input type="text" class="form-control">
              </p>
            </form>
          </div>
        </div>
        <form action="#" class="checkList">
          <p>
            <label>text</label>
            <input type="text" class="form-control">
          </p>
          <p>
            <input type="checkbox" id="newTab" />
            <label for="newTab">Open link in new tab</label>
          </p>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default noBorderRadius">Cancel</button>
        <button type="button" class="btn btn-dark noBorderRadius">Insert</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>