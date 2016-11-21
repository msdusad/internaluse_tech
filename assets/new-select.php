<!DOCTYPE html>
<html lang="en">
<body class="nav-md">
<style>.panel-heading.collapsed {
    margin-bottom: 20px !important;
}</style>
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
              
              
              <!--end-->
              
              <textarea type="text" name="description" rows="6" cols="20" style="width:100%; border:solid 1px #ccc;  "></textarea>


              <!-- =================================== ABC ::::::::::: Start ===================================================== -->

              <div class="accordion-down">
                <div class="accordion padding-top-30" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading1" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                    <h4 class="panel-title">Business ServiceProperties</h4>
                    </a>
                    <div id="collapse1" class="panel-collapse collapse in padding-top-10 padding-bottom-20"  role="tabpanel" aria-labelledby="heading1">
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>SLA(Availability in %)</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- =================================== ABC ::::::::::: Closed ===================================================== -->



              <!-- =================================== Access Point ::::::::::: Start =============================================== -->

                <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading2" data-toggle="collapse" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                    <h4 class="panel-title">Business ServiceProperties</h4>
                    </a>
                    <div id="collapse2" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading2">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="assign_date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="assign_date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State<span class="text-red">*</span></label>
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
                          <label>Asset Tag</label>
                          <input type="text" name="tag" id="tag" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" id="serial-number" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading3" data-toggle="collapse" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                    <h4 class="panel-title">Access PointProperties</h4>
                    </a>
                    <div id="collapse3" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading3">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Firmware</label>
                          <input type="text" name="firmware" id="firmware" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" id="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>IP Address</label>
                          <input type="text" name="ip-address" id="ip-address" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Ports</label>
                          <input type="text" name="ports" id="ports" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>MAC Address</label>
                          <input type="text" name="mac-address" id="mac-address" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Subnet Mask</label>
                          <input type="text" name="subnet-mask" id="subnet-mask" class="form-control" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <!-- =================================== Access Point ::::::::::: Closed =============================================== -->



              <!-- =================================== Aix Server ::::::::::: Start =============================================== -->

                <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading4" data-toggle="collapse" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse4" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading4">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="assign_date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="assign_date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State<span class="text-red">*</span></label>
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
                          <label>Asset Tag</label>
                          <input type="text" name="tag" id="tag" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" id="serial-number" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading5" data-toggle="collapse" href="#collapse5" aria-expanded="true" aria-controls="collapse5">
                    <h4 class="panel-title">ComputerProperties</h4>
                    </a>
                    <div id="collapse5" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading5">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS</label>
                          <select class="form-control">
                            <option>.....</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS Version</label>
                          <input type="text" name="os-version" id="os-version" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS Service Pack</label>
                          <input type="text" name="os-service" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Memory(GB)</label>
                          <input type="text" name="memory" id="memory" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Disk Space(GB)</label>
                          <input type="text" name="disk-space" id="disk-space" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>CPU Speed(GHz)</label>
                          <input type="text" name="cpu-speed" id="cpu-speed" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>CPU Core Count</label>
                          <input type="text" name="cpu-core" id="cpu-core" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>MAC Address</label>
                          <input type="text" name="address" id="address" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>UUID</label>
                          <input type="text" name="uuid" id="uuid" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Hostname</label>
                          <input type="text" name="hostname" id="hostname" class="form-control" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <!-- =================================== Aix Server ::::::::::: Closed =============================================== -->


              <!-- =================================== Apache ::::::::::: Closed =============================================== -->

              <div class="accordion-down">
                <div class="accordion padding-top-30" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading6" data-toggle="collapse" href="#collapse6" aria-expanded="true" aria-controls="collapse6">
                    <h4 class="panel-title">SoftwareProperties</h4>
                    </a>
                    <div id="collapse6" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading6">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition_date" id="acquisition_date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry" id="warranty-expiry" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Key</label>
                          <input type="text" name="display_name" id="license-key" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Version</label>
                          <input type="text" name="version" id="version" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Type</label>
                            <select class="form-control">
                                <option>.....</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installed Machine</label>
                            <select class="form-control">
                                <option>.....</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Path</label>
                          <input type="text" name="installation-path" id="installation-path" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <!-- =================================== Apache ::::::::::: Closed =============================================== -->


              <!-- =================================== Application ::::::::::: Start =============================================== -->

                <div class="accordion-down">
                <div class="accordion padding-top-30" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading7" data-toggle="collapse" href="#collapse7" aria-expanded="true" aria-controls="collapse7">
                    <h4 class="panel-title">SoftwareProperties</h4>
                    </a>
                    <div id="collapse7" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading7">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>License Validity</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Date</label>
                          <input type="text" name="assign_date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Expiry Date</label>
                          <input type="text" name="assign_date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Key</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Version</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                        
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Type<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Open Source</option>
                            <option>Commercial</option>
                           
                        </select>
                        </div>
                       <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installed Machine<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Mahender Item Add Moniter</option>
                                                      
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Path</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="assign_date" class="form-control" id="datetimepicker_dark"/>
                        </div>

                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>


              <!-- =================================== Application ::::::::::: Closed =============================================== -->


              <!-- =================================== AWS ::::::::::: Start =============================================== -->

                <div class="accordion-down">
                <div class="accordion padding-top-30" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading8" data-toggle="collapse" href="#collapse8" aria-expanded="true" aria-controls="collapse8">
                    <h4 class="panel-title">CloudProperties</h4>
                    </a>
                    <div id="collapse8" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading8">
                      
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="assign_date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      
                      
                      
                      
                    </div>
                  </div>
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading9" data-toggle="collapse" href="#collapse9" aria-expanded="true" aria-controls="collapse9">
                    <h4 class="panel-title">AWSProperties</h4>
                    </a>
                    <div id="collapse9" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading9">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Account</label>
                          <select class="form-control">
                            <option>.....</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Region</label>
                          <select class="form-control">
                            <option>.....</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Availity Zone</label>
                          <input type="text" name="os-service" id="os-service" class="form-control" required>
                        </div>
                        
                      </div>
                      
                      
                     
                    </div>
                  </div>
                </div>
              </div>

              <!-- =================================== AWS ::::::::::: Closed =============================================== -->


              <!-- =================================== Backup Service ::::::::::: Start =========================================== -->

                <div class="accordion-down">
                <div class="accordion padding-top-30" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading10" data-toggle="collapse" href="#collapse10" aria-expanded="true" aria-controls="collapse10">
                    <h4 class="panel-title">ITServiceProperties</h4>
                    </a>
                    <div id="collapse10" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading10">
                      
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>SLA(Availability in %)</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Operational Status</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Operational Status</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                        
                      </div>
                     
                      
                      
                    </div>
                  </div>
                 
                </div>
              </div>




              <!-- =================================== Backup Service ::::::::::: Closed ======================================== -->


              <!-- =================================== Business Service ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                    <div class="accordion padding-top-30" id="accordion" role="tablist" >
                      <div class="panel"> <a class="panel-heading" role="tab" id="heading11" data-toggle="collapse" href="#collapse11" aria-expanded="true" aria-controls="collapse11">
                        <h4 class="panel-title">Business ServiceProperties</h4>
                        </a>
                        <div id="collapse11" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading11">
                          
                          <div class="row">
                            <div class="col-sm-6 col-xs-6 padding-bottom-10">
                              <label>SLA(Availability in %)</label>
                              <input type="text" name="display_name" class="form-control" required>
                            </div>
                            <div class="col-sm-6 col-xs-6 padding-bottom-10">
                              <label>Cost</label>
                              <input type="text" name="display_name" class="form-control" required>
                            </div>
                          </div>
                                             
                          
                          
                        </div>
                      </div>
                     
                    </div>
                  </div>



              <!-- =================================== Business Service ::::::::::: Closed ======================================== -->



              <!-- =================================== Cloud ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                    <div class="accordion" id="accordion" role="tablist" >
                      <div class="panel"> <a class="panel-heading" role="tab" id="heading12" data-toggle="collapse" href="#collapse12" aria-expanded="true" aria-controls="collapse12">
                        <h4 class="panel-title">CloudProperties</h4>
                        </a>
                        <div id="collapse12" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading12">
                          
                          <div class="row">
                            <div class="col-sm-6 col-xs-6 padding-bottom-10">
                              <label>Cost</label>
                              <input type="text" name="display_name" class="form-control" required>
                            </div>
                            <div class="col-sm-6 col-xs-6 padding-bottom-10">
                              <label>Last Audit</label>
                              <input type="text" name="assign_date" class="form-control" id="datetimepicker_dark"/>
                            </div>
                          </div>
                          
                          
                          
                          
                        </div>
                      </div>
                      
                    </div>
                  </div>




              <!-- =================================== Cloud ::::::::::: Closed ======================================== -->


              <!-- =================================== Computer ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion padding-top-30" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading13" data-toggle="collapse" href="#collapse13" aria-expanded="true" aria-controls="collapse13">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse13" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading13">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>

                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
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
                          <label>Cost</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="assign_date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="assign_date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Open Source</option>
                            <option>Commercial</option>
                           
                        </select>
                        </div>
                       <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Mahender Item Add Moniter</option>
                                                      
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" />
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="assign_date" class="form-control"/>
                        </div>

                      </div>

                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="assign_date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        
                      </div>



                    </div>
                  </div>
                  
                 <div class="panel"> <a class="panel-heading" role="tab" id="heading14" data-toggle="collapse" href="#collapse14" aria-expanded="true" aria-controls="collapse14">
                    <h4 class="panel-title">ComputerProperties</h4>
                    </a>
                    <div id="collapse14" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading14">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS</label>
                          <select class="form-control">
                            <option>.....</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS Version</label>
                          <input type="text" name="os-service" id="os-service" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS Service Pack</label>
                          <input type="text" name="os-service" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Memory(GB)</label>
                          <input type="text" name="os-service" id="os-service" class="form-control" required>
                        </div>
                        
                      </div>

                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Disk Space (GB)</label>
                          <input type="text" name="os-service" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>CPU Speed(GHz)</label>
                          <input type="text" name="os-service" id="os-service" class="form-control" required>
                        </div>
                        
                      </div>
                      
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>CPU Core Count</label>
                          <input type="text" name="os-service" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>MAC Address</label>
                          <input type="text" name="os-service" id="os-service" class="form-control" required>
                        </div>
                        
                      </div>

                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>UUID</label>
                          <input type="text" name="os-service" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Hostname</label>
                          <input type="text" name="os-service" id="os-service" class="form-control" required>
                        </div>
                        
                      </div>                      
                      
                     
                    </div>
                  </div>




                </div>
              </div>


              <!-- =================================== Computer ::::::::::: Closed ======================================== -->


              <!-- =================================== Consumable ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading15" data-toggle="collapse" href="#collapse15" aria-expanded="true" aria-controls="collapse15">
                    <h4 class="panel-title">ConsumableProperties</h4>
                    </a>
                    <div id="collapse15" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading15">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>

                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
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
                          <label>State</label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                         <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Quantity</label>
                          <input type="text" name="assign_date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        
                      </div>
                      
                      
                      

                      

                      



                    </div>
                  </div>
                  
                 
                </div>
              </div>



              <!-- =================================== Consumable ::::::::::: Closed ======================================== -->



              <!-- =================================== Database ::::::::::: Start ======================================== -->

                    <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading16" data-toggle="collapse" href="#collapse16" aria-expanded="true" aria-controls="collapse16">
                    <h4 class="panel-title">SoftwareProperties</h4>
                    </a>
                    <div id="collapse16" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading16">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
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
                          <label>Cost</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>License Validity</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Date</label>
                          <input type="text" name="assign_date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Expiry Date</label>
                          <input type="text" name="assign_date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Key</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Version</label>
                          <input type="text" name="display_name" class="form-control" required>
                        </div>
                        
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Type<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Open Source</option>
                            <option>Commercial</option>
                           
                        </select>
                        </div>
                       <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installed Machine<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Mahender Item Add Moniter</option>
                                                      
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Path</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="assign_date" class="form-control" id="datetimepicker_dark"/>
                        </div>

                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>



              <!-- =================================== Database ::::::::::: Closed ======================================== -->

              

                
















































              <p class="left_col padding-5 text-white margin-top-20">Assignment</p>
              <div class="row padding-top-10">
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
              <?php
          $agent_object=Assets::Agents();
          foreach ($agent_object as $view_agent) {
          echo   '<option value="'.$view_agent["id"].'">'.$view_agent["name"].'</option>';
          }
          ?>
                  </select>
                </div>
              </div>
              <div class="row">
                  <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label>Used By <span class="text-red">*</span></label>
                  <select class="form-control" name="used_by">
              <?php
              // put here  requestor data 
              
          $requester_object=Assets::Requester('');
          foreach ($requester_object as $view_requester) {
          echo   '<option value="'.$view_requester["id"].'">'.$view_requester["first_name"]." ".$view_requester["last_name"].'</option>';
          }
          ?>
                  </select>
                </div>
                  <div class="col-sm-6 col-xs-12 padding-bottom-10">
                   <label class="padding-top-5">Attach a file (File size < 15 MB)</label>
                <div class="input-group no-left">
                  <input type="text" class="form-control" placeholder="1 file(s) selected" readonly="">
                  <label class="input-group-btn"> <span class="btn btn-success"> Choose File
                    <input type="file" style="display: none;" multiple="">
                    </span> </label>
                </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-sm-6 col-xs-12 padding-bottom-10">
                     <label class="padding-top-5">Assigned on</label>
                     <input type="text" name="assign_date" class="form-control" id="datetimepicker_dark"/>
                  </div>
                  
              </div>

            </div>
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


            