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
              <h1 class="h3 padding-bottom-10">Add New</h1>
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
                  <label>Impact</label>
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
                <style>

              .panel-heading.collapsed{margin-bottom: 25px !important;}

              </style>


              <p class="margin-top-10">Description</p>
              <textarea type="text" name="description" rows="6" cols="20" style="width:100%; border:1px solid #ccc"></textarea>
              <div class="accordion-down">
                <div class="accordion padding-top-30" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h4 class="panel-title">DocumentProperties</h4>
                    </a>
                    <div id="collapseOne" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="headingOne">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Status</label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Type</label>
                           <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Version</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                        
                      </div>
                      
                    </div>
                  </div>

                 
                </div>
              </div>
              <p class="left_col padding-13 text-white">Assignment</p>
              <div class="row">
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
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
                </div>
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label>Managed By</label>
                  <select class="form-control" name="managed_by_id">
                    <option value="5">One</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label>Department</label>
                  <input type="text" name="display_name" class="form-control" required>
                </div>
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label>Used By</label>
                  <input type="text" name="display_name" class="form-control" required>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label class="padding-top-5">Assigned on</label>
                  <input type="text" name="assign_date" class="form-control" id="datetimepicker_dark"/>
                </div>
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label class="padding-top-5">Attach a file (File size < 15 MB)</label>
                  <div class="input-group no-left">
                    <input type="text" class="form-control" placeholder="1 file(s) selected" readonly>
                    <label class="input-group-btn"> <span class="btn btn-success"> Choose File
                      <input type="file" style="display: none;" multiple>
                      </span> </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="new-pro" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content noBorderRadius">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">New Product</h4>
                  </div>
                  <div class="modal-body">                    
                     <div class="row">
                        <div class="col-sm-6 col-xs-12 padding-bottom-10">
                          <label>Product Name <span class="text-red">*</span></label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-12 padding-bottom-10">
                          <label>Manufacturer <span class="text-red">*</span></label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default noBorderRadius" data-dismiss="modal">Close</button> 
                    <button type="button" class="btn btn-default noBorderRadius">Create</button>
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
