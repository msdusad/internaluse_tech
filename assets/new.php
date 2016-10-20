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
        <?php include("../classes/Include_all.php"); ?>
        <form action="" method="post" class="checkList">
          <div class="x_panel tile">
            <div class="x_title">
              <div class="row">
                <div class="col-lg-12">
                  <div class="row" style="background:#fff;" data-spy="affix" data-offset-top="197">
                    <div class="col-lg-7 padding-top-10"> <a href="<?php echo WEB_ROOT;?>assets/index.php" class="h4"><i class="icon-left-small"></i>Back to Items List</a> </div>
                    <div class="col-lg-5 text-right MrTpMd-10"> <a href="<?php echo WEB_ROOT;?>assets/index.php" class="btn btn-danger btn-round">Cancel</a>
                      <div class="btn-group">
                        <input type="submit" value="Save" name="add_item" class="btn btn-dark btn-round">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <h1 class="h3 padding-bottom-10">New Assets</h1>
              <div class="row">
                <div class="col-sm-12 padding-bottom-10">
                  <label>Display Name <span class="text-red">*</span></label>
                  <input type="text" name="display_name" class="form-control" required>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label>Assets Type <span class="text-red">*</span></label>
                  <select class="form-control" name="assets_type_id">
                    <?php
                        $assets_object=Assets::Assets_type();
                        foreach ($assets_object as $view_assets_type) {
                        echo   '<option value="'.$view_assets_type["id"].'">'.$view_assets_type["name"].'</option>';
                        }
                        ?>
                  </select>
                </div>
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label>Impact <span class="text-red"></span></label>
                  <select class="form-control" name="impact_id">
                    <?php
					$impact_object=Assets::Impact();
					foreach ($impact_object as $view_impact) {
					echo   '<option value="'.$view_impact["id"].'">'.$view_impact["name"].'</option>';
					}
					?>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label>Department <span class="text-red">*</span></label>
                  <select class="form-control" name="department_id">
                    <?php
					$dept_object=Assets::Department();
					foreach ($dept_object as $view_dept) {
					echo   '<option value="'.$view_dept["id"].'">'.$view_dept["name"].'</option>';
					}
					?>
                  </select>
                </div>
              </div>
              <p class="margin-top-10">Description</p>
              <!-- start--> 
              <!--          <div class="btn-toolbar editor nav" data-role="editor-toolbar" data-target="#editor"> <a href="#" class="BoldAlign" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bold">&nbsp;</a> <a href="#" class="italicAlign" data-toggle="tooltip" data-placement="top" title="" data-original-title="Italic">&nbsp;</a> <a href="#" class="list" data-toggle="tooltip" data-placement="top" title="" data-original-title="List Circle">&nbsp;</a> <a href="#" class="listNum" data-toggle="tooltip" data-placement="top" title="" data-original-title="List Number">&nbsp;</a> <a href="#" class="shiftTab" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shift Tab">&nbsp;</a> <a href="#" class="shiftTab2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shift Tab">&nbsp;</a> <a href="#" class="fontColor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Font Color">&nbsp;</a> <a href="#" class="backColor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back Color">&nbsp;</a> <span class="dropdown"> <a href="#" class="dropdown-toggle links" data-toggle="dropdown" role="button" aria-expanded="false" title="link">&nbsp;</a>
                  <ul class="dropdown-menu">
                    <li><a href="#insertLink" data-toggle="modal" data-target="#insertLink">Insert Link ...</a></li>
                    <li><a href="#">Unlink</a></li>
                  </ul>
                </div>
                <div id="editor" class="editor-wrapper placeholderText" name="descriptions" contenteditable="true"></div> --> 
              
              <!--end-->
              
              <textarea type="text" name="description" rows="6" cols="20" style="width:100%;"></textarea>
              <p class="left_col padding-5 text-white margin-top-20">Assignment</p>
              <div class="row">
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label>Location <span class="text-red">*</span></label>
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
                </div>
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label>Managed By <span class="text-red">*</span></label>
                  <select class="form-control" name="managed_by_id">
                    <option value="5">One</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <p class="p2">Assigned on</p>
          <input type="text" name="date" value="">
      
                <p class="p2">Attach a file (File size < 15 MB)</p>
                <div class="input-group">
                  <input type="text" name="attachment" class="form-group " placeholder="1 file(s) selected" readonly>
                  <label class="input-group-btn pull-left"> <span class="btn btn-default"> Choose File
                    <input type="file" style="display: none;" multiple>
                    </span> </label>
                </div>
              </div>
            </div>
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
                      <p class="padding-top-10">
                        <label>URL</label>
                        <input type="text" class="form-control">
                      </p>
                    </div>
                    <div class="tab-pane" id="tab2">
                      <p class="padding-top-10">
                        <label>Email</label>
                        <input type="email" class="form-control">
                      </p>
                    </div>
                    <div class="tab-pane" id="tab3">
                      <p class="padding-top-10">
                        <label>Anchor</label>
                        <input type="text" class="form-control">
                      </p>
                    </div>
                  </div>
                  <p>
                    <label>text</label>
                    <input type="text" class="form-control">
                  </p>
                  <p>
                    <input type="checkbox" id="newTab" />
                    <label for="newTab">Open link in new tab</label>
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default noBorderRadius" data-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-dark noBorderRadius">Insert</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="attach" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content noBorderRadius">
                <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <p>
                        <label>Search</label>
                        <select class="form-control">
                          <option>Choose option</option>
                          <option>Option one</option>
                          <option>Option two</option>
                          <option>Option three</option>
                          <option>Option four</option>
                        </select>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p>
                        <label>Search</label>
                        <input type="text" class="form-control">
                      </p>
                    </div>
                  </div>
                  <div class="table-responsive margin-top-20">
                    <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr class="headings">
                          <th>&nbsp; </th>
                          <th>Asset Name </th>
                          <th>Used By</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="checkList">
                          <td><input type="checkbox" id="testNew" />
                            <label for="testNew">&nbsp;</label></td>
                          <td>Andrea's Laptop</td>
                          <td class=" ">Andrea</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default noBorderRadius">Attach</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php include("../include/footer.php"); ?>
</div>
</div>
</body>
</html>
<script type="text/javascript">
		$(function(){
			$('*[name=date]').appendDtpicker();
		});
</script>
            