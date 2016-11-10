<!DOCTYPE html>
<html lang="en">
<body class="nav-md">
<div class="container body">
  <div class="main_container">
       <?php include("../include/top-nav.php"); 
     include("../include/right-nav.php"); ?>
    <div class="right_col" role="main">
      <div class="row checkList">
        <div class="col-md-9 col-sm-8 col-xs-12 margin-top-10">
            <div class="x_panel tile">
              <div class="x_title">
                <div class="row">
                    <?php require_once("../classes/Include_all.php"); ?>
				  <div class="col-lg-12">
				  <div class="row affix-top" style="background:#fff;" data-spy="affix" data-offset-top="197">
             <form action="" method="post"  enctype="multipart/form-data">
                  <div class="col-lg-7 padding-top-10"> <a href="<?php echo WEB_ROOT;?>requester/index.php" class="h4"><i class="icon-left-small"></i>Back to Requesters</a> </div>
                  <div class="col-lg-5 text-right MrTpMd-10"> <a href="<?php echo WEB_ROOT;?>requester/index.php" class="btn btn-dark btn-round" style="margin-top:3px; position:relative">Cancle</a>
                    <div class="btn-group">
                      <input type="submit" value="Update" data-inline="true" data-rel="back"  name="add_agent" class="btn btn-success btn-round">
                    </div>
					<div class="btn-group">
                      <input type="reset" value="Delete" data-inline="true" data-rel="back"  name="add_agent" class="btn btn-danger btn-round">
                    </div>
                  </div>
				 </div> 
				 </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h1 class="h3 padding-bottom-10">Edit Requester</h1>
                <div class="row">
                  <div class="col-sm-4 col-xs-12 padding-bottom-10">
                     <div class="bgProfile">
						<div class="panel-body ">
							<p><img src="<?php echo IMAGE_ROOT;?>profile_blank_thumb.gif" id="output"  alt="profile" class="pull-left profilePic"></p>
						    <input type="file" name="agent_image_sent"  onchange="loadFile(event)" accept="image/*">
						  <p class="p-xs padding-top-5">A Profile image of the person, it's best if the picture has the same length and height</p>
						</div> 	

            <script>
    // code for show uploaded file
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
						
					</div>	
                  </div>
                  <div class="col-sm-8 col-xs-12 padding-bottom-10">
                    <!--<div class="row">
					    <div class="col-sm-2">
						  <p><strong>Agent Type</strong></p>
						</div>
						<div class="col-sm-5">
						  <div>
						    <input type="radio" name="agent_type" value="Full Time">
							<label for="test1">Full time</label>
						  </div>
						</div>
						<div class="col-sm-5">
						  <div>
						    <input type="radio" name="agent_type" value="Occasional">
							<label for="test2">Occasional</label>
						  </div>  
						</div>
					</div>-->
					<h4 class="h4 padding-top-10 weight-600">Requester information</h4>
				
        
					    <p class="margin-top-10">
						  <label>Full Name</label>
						  <input type="text" name="requster-name" id="name" class="form-control">
						</p>
						<p class="margin-top-10">
						  <label>Last Name</label>
						  <input type="text" name="last_name" id="name" class="form-control">
						</p>
						
						
						<p style="margin-bottom:0">
							<label>Email</label>
							
							  <div data-duplicate="email" data-duplicate-min="0" style="margin-top:5px" >
								  <span data-duplicate-add="email" class="btn btn-sm btn-success">Add Another Email</span>
								  <span data-duplicate-remove="email" class="btn btn-sm btn-danger">Remove</span>
								  <input type="text" name="last_name" id="name" class="form-control">
							  </div>
						</p>
					  
						<p class="margin-top-10">
						  <label>Title</label>
						  <input type="text" name="title" id="title" class="form-control">
						</p>
						<p class="margin-top-10">
						  <label>Work Phone</label>
						  <input type="text" name="phone_number" id="phone" class="form-control">
						</p>
						<p class="margin-top-10">
						  <label>Mobile Phone</label>
						  <input type="text" name="phone_number" id="phone" class="form-control">
						</p>
						<p class="margin-top-10">
						  <label>Department</label>
						  <input type="text" placeholder="Enter Department Name" name="mobile_number" id="mob" class="form-control">
						</p>
						<p class="margin-top-10">
						  <label>Reporting Manager</label>
						  <input type="text" placeholder="Enter Reporting Manager Name" name="mobile_number" id="mob" class="form-control">
						</p>
						<div class="margin-top-10">
						  <label>Address</label>
						  <!-- start-->
							<!-- <div class="btn-toolbar editor nav" data-role="editor-toolbar" data-target="#editor"> <a href="#" class="BoldAlign" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bold">&nbsp;</a> <a href="#" class="italicAlign" data-toggle="tooltip" data-placement="top" title="" data-original-title="Italic">&nbsp;</a> <a href="#" class="list" data-toggle="tooltip" data-placement="top" title="" data-original-title="List Circle">&nbsp;</a> <a href="#" class="listNum" data-toggle="tooltip" data-placement="top" title="" data-original-title="List Number">&nbsp;</a> <a href="#" class="shiftTab" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shift Tab">&nbsp;</a> <a href="#" class="shiftTab2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shift Tab">&nbsp;</a> <a href="#" class="fontColor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Font Color">&nbsp;</a> <a href="#" class="backColor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back Color">&nbsp;</a> <span class="dropdown"> <a href="#" class="dropdown-toggle links" data-toggle="dropdown" role="button" aria-expanded="false" title="link">&nbsp;</a>
							  <ul class="dropdown-menu">
								<li><a href="#insertLink" data-toggle="modal" data-target="#insertLink">Insert Link ...</a></li>
								<li><a href="#">Unlink</a></li>
							  </ul>
							</div> -->
							<div id="editor" class="editor-wrapper placeholderText" contenteditable="true"></div>
							<textarea name="signature" id="descr" style="display:none;"></textarea>
						  <!--end-->
						</div>
						
						<p class="margin-top-10">
						  <label>Location</label>
						  <select class="form-control" name="location_id">
                            <?php
$loc_object=Assets::Location('');
if($loc_object!=''){
foreach ($loc_object as $view_loc_object) {
echo   '<option value="'.$view_loc_object["id"].'">'.$view_loc_object["location_name"].'</option>';
}
}
?>
                          </select>
						</p>
						<div class="margin-top-10 border-bottom padding-bottom-30">
						  <label>Background information</label>
						  <!-- start-->
							<!-- <div class="btn-toolbar editor nav" data-role="editor-toolbar" data-target="#editor"> <a href="#" class="BoldAlign" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bold">&nbsp;</a> <a href="#" class="italicAlign" data-toggle="tooltip" data-placement="top" title="" data-original-title="Italic">&nbsp;</a> <a href="#" class="list" data-toggle="tooltip" data-placement="top" title="" data-original-title="List Circle">&nbsp;</a> <a href="#" class="listNum" data-toggle="tooltip" data-placement="top" title="" data-original-title="List Number">&nbsp;</a> <a href="#" class="shiftTab" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shift Tab">&nbsp;</a> <a href="#" class="shiftTab2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shift Tab">&nbsp;</a> <a href="#" class="fontColor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Font Color">&nbsp;</a> <a href="#" class="backColor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back Color">&nbsp;</a> <span class="dropdown"> <a href="#" class="dropdown-toggle links" data-toggle="dropdown" role="button" aria-expanded="false" title="link">&nbsp;</a>
							  <ul class="dropdown-menu">
								<li><a href="#insertLink" data-toggle="modal" data-target="#insertLink">Insert Link ...</a></li>
								<li><a href="#">Unlink</a></li>
							  </ul>
							</div> -->
							<div id="editor" class="editor-wrapper placeholderText" contenteditable="true"></div>
							<textarea name="signature" id="descr" style="display:none;"></textarea>
						  <!--end-->
						</div>
						
						
			
                  </div>
                </div>
              </div>
            </div>
 
            <div class="modal fade" id="attach" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content noBorderRadius">
				   <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Roles</h4>
                  </div>
                  <div class="modal-body">
                    <div class="table-responsive margin-top-20 checkList">
                      <table class="table table-striped jambo_table bulk_action">
                        <tbody>
                          <tr>
                            <td>
							    <input type="checkbox" id="admin" name="associate_role[]" value="Account Admin">
								<label for="admin">Account Admin
								<div class="p-xs text-gray padding-bottom-10">Can view all Tickets in the Helpdesk</div>
								</label>
							</td>
                          </tr>
						  <tr>
							<td>
							    <input type="checkbox" id="sd" name="associate_role[]" value="SD Supervisor">
								<label for="sd">SD Supervisor
								<div class="p-xs text-gray padding-bottom-10">Can view all Tickets in the Helpdesk</div>
								</label>
							</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="modal-footer">
				    <button type="button" class="btn btn-default noBorderRadius" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-default noBorderRadius" data-dismiss="modal">Attach</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      <!--   <div class="col-md-3 col-sm-4 col-xs-12 margin-top-10">
          <div class="x_panel tile overflow_hidden">
            <div class="x_title">
              <h2>Contracts</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa icon-up-open"></i></a> </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa icon-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a> </li>
                    <li><a href="#">Settings 2</a> </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa icon-cancel"></i></a> </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <p>Freshservice's contract management module lets you manage contracts established with third-party vendors.</p>
              <p>Freshservice supports different types of contracts – from creating your very own custom contract types to supporting lease, maintenance, as well as software license contracts, by default.</p>
              <p>Note - Only users who have drafted the contract will be able to submit the contract for approval.</p>
            </div>
          </div>
        </div> -->
      </div>
    </div>
    <?php include("../include/footer.php"); ?>
  </div>
</div>
</body>
</html>


  <script>
    // not needed, just an example of listening to events triggered by the plugin
    $('body').on('duplicate.error', function(ev){
      console.log('refused to add/remove', this);
      $(ev.target).addClass('error');
      setTimeout(function(){
        $(ev.target).removeClass('error');
      }, 1500);
    });
  </script>


<script type="text/javascript">
$('#name').change(function(){
 var ss=localStorage.setItem(name, $('#name').val());
 alert(ss);
});

window.onload = function() {
    var name = localStorage.getItem(name);
     $('#name').val(name);
}

</script>

