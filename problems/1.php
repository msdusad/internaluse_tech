<!DOCTYPE html>
<html lang="en">
<body class="nav-md">
<div class="container body">
  <div class="main_container">
    <?php include("../include/right-nav.php"); ?>
    <?php include("../include/top-nav.php"); ?>
    <div class="right_col" role="main">
      <div class="row">
        <div class="col-sm-7 col-md-8 col-lg-9 margin-top-10">
          <div class="x_panel tile">
            <div class="x_title">
			<ol class="breadcrumb noBorderRadius noMargin">
			  <li><a href="../problems/index.php">Problems</a></li>
			  <li>#PRB-1</li>
			</ol>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                 <ul class="list-unstyled timeline">
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>Entertainment</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                      </h2>
                          <div class="byline">
                            <span>13 hours ago</span> by <a>Jane Smith</a>
                          </div>
                          <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>Entertainment</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                      </h2>
                          <div class="byline">
                            <span>13 hours ago</span> by <a>Jane Smith</a>
                          </div>
                          <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>Entertainment</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                      </h2>
                          <div class="byline">
                            <span>13 hours ago</span> by <a>Jane Smith</a>
                          </div>
                          <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
            </div>
          </div>
        </div>
		<div class="col-sm-5 col-md-4 col-lg-3 col-xs-12 margin-top-10">
          <div class="x_panel tile">
            <div class="x_title">
              <h2>Filter Problems</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <form action="#">
                <h5 class="weight-600 padding-top-10">Created</h5>
                <div class="form-group">
                  <select class="select2_group form-control">
                    <option selected="selected" value="">Select Groups Name</option>
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                    <option value="CA">California</option>
                    <option value="NV">Nevada</option>
                    <option value="OR">Oregon</option>
                    <option value="WA">Washington</option>
                    <option value="AZ">Arizona</option>
                    <option value="CO">Colorado</option>
                    <option value="ID">Idaho</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NM">New Mexico</option>
                    <option value="ND">North Dakota</option>
                    <option value="UT">Utah</option>
                    <option value="WY">Wyoming</option>
                  </select>
                </div>
                <h5 class="weight-600 padding-top-10">Status</h5>
                <div class="form-group">
                  <select class="select2_single form-control" tabindex="-1">
                    <option>&nbsp;</option>
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                    <option value="CA">California</option>
                    <option value="NV">Nevada</option>
                    <option value="OR">Oregon</option>
                  </select>
                </div>
                <p><a href="#"><i class="icon-plus-circled"></i>More...</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include("../include/footer.php"); ?>
  </div>
</div>
<div class="modal fade" id="bulkAction" role="dialog">
  <div class="modal-dialog">
    <form action="#" class="checkList">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Bulk Actions</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-4 col-xs-12 padding-top-10">
              <p>
                <input type="checkbox" id="status" />
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
            <div class="col-sm-4 col-xs-12 padding-top-10">
              <p>
                <input type="checkbox" id="priority" />
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
            <div class="col-sm-4 col-xs-12 padding-top-10">
              <p>
                <input type="checkbox" id="group" />
                <label for="group">Group</label>
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
            <div class="col-sm-4 col-xs-12 padding-top-10">
              <p>
                <input type="checkbox" id="assign1" />
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
            <div class="col-sm-4 col-xs-12 padding-top-10">
              <p>
                <input type="checkbox" id="department" />
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
            <div class="col-sm-4 col-xs-12 padding-top-10">
              <p>
                <input type="checkbox" id="tag" />
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
          <p class="padding-top-10">
            <input type="checkbox" id="bulk" />
            <label for="bulk">Add Bulk Reply</label>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-dark" data-dismiss="modal">Update</button>
        </div>
      </div>
    </form>
  </div>
</div>
<div class="modal fade" id="merge" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Merge Tickets</h4>
      </div>
      <div class="modal-body">
        <p>0 tickets selected (Conversations from the merged tickets will be added to the primary ticket)
        <p> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Continue</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="request1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content noBorderRadius">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Request Item</h4>
        <div class="media padding-bottom-10">
          <div class="media-left padding-top-5"> Search </div>
          <div class="media-body">
            <div class="input-group">
              <input class="form-control" placeholder="Search for..." type="text">
              <span class="input-group-btn">
              <button class="btn btn-success" type="button"><i class="icon-search"></i> Search</button>
              </span> </div>
          </div>
        </div>
        <div class="weight-600">SELECT ITEM <i class="icon-angle-double-right green"></i> PLACE REQUEST</div>
      </div>
      <div class="modal-body"> 
        <!-- start -->
        <div class="row">
          <div class="col-md-3 col-sm-4 col-xs-12 verticalTab-nav">
            <ul class="navList">
              <li class="active"><span>Hardware</span></li>
              <li><span>Software</span></li>
              <li><span>User</span></li>
              <li><span>Data</span></li>
              <li><span>Application </span></li>
            </ul>
          </div>
          <div class="col-md-9 col-sm-8 col-xs-12 verticalTab-content">
            <div class="tab-wrap active noPadding noBorder">
              <div class="acc-heading"><span>Tickets</span></div>
              <div class="acc-content"> 
                <!-- start -->
                <ul class="reportList">
                  <li> <a href="javascript:avoid(0)" data-parent="#accordion" data-toggle="collapse" data-target="#mac">Apple iMac</a>
                    <div id="mac" class="collapse margin-top-20">
                      <div class="row">
                        <div class="col-sm-4"> <img src="../images/mac.png" alt=""> </div>
                        <div class="col-sm-8">
                          <h3>Apple iMac</h3>
                          <p><strong>$ 1099.00</strong><i class="icon-clock-alt text-red"></i><span class="text-red p-xs">Approximately available in 48 hours</span></p>
                          <p class="p-xs">27-inch (diagonal) LED-backlit display with IPS technology; 2560*1440 resolution with support. <a href="#" class="green">View More</a> </p>
                          <p>
                            <label>Tags</label>
                            <input type="text" class="form-control">
                          </p>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li> <a href="javascript:avoid(0)" data-parent="#accordion" data-toggle="collapse" data-target="#apple"">Apple MacBook</a>
                    <div id="apple" class="collapse margin-top-20">
                      <div class="row">
                        <div class="col-sm-4"> <img src="../images/mac.png" alt=""> </div>
                        <div class="col-sm-8">
                          <h3>Apple iMac</h3>
                          <p><strong>$ 1099.00</strong><i class="icon-clock-alt text-red"></i><span class="text-red p-xs">Approximately available in 48 hours</span></p>
                          <p class="p-xs">27-inch (diagonal) LED-backlit display with IPS technology; 2560*1440 resolution with support. <a href="#" class="green">View More</a> </p>
                          <p>
                            <label>Tags</label>
                            <input type="text" class="form-control">
                          </p>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <!-- end --> 
              </div>
            </div>
            <div class="tab-wrap">
              <div class="acc-heading"><span>Changes</span></div>
              <div class="acc-content">
                <ul class="reportList">
                  <li> <a href="#">Agent ticket summary</a><br>
                    Compare the performance of agents based on ticket response and resolution </li>
                  <li> <a href="#">Agent ticket summary</a><br>
                    Compare the performance of agents based on ticket response and resolution </li>
                </ul>
              </div>
            </div>
            <div class="tab-wrap">
              <div class="acc-heading"><span>Assets</span></div>
              <div class="acc-content">
                <ul class="reportList">
                  <li> <a href="#">Agent ticket summary</a><br>
                    Compare the performance of agents based on ticket response and resolution </li>
                  <li> <a href="#">Agent ticket summary</a><br>
                    Compare the performance of agents based on ticket response and resolution </li>
                  <li> <a href="#">Agent ticket summary</a><br>
                    Compare the performance of agents based on ticket response and resolution </li>
                  <li> <a href="#">Agent ticket summary</a><br>
                    Compare the performance of agents based on ticket response and resolution </li>
                </ul>
              </div>
            </div>
            <div class="tab-wrap">
              <div class="acc-heading"><span>Changes</span></div>
              <div class="acc-content">
                <ul class="reportList">
                  <li> <a href="#">Agent ticket summary</a><br>
                    Compare the performance of agents based on ticket response and resolution </li>
                  <li> <a href="#">Agent ticket summary</a><br>
                    Compare the performance of agents based on ticket response and resolution </li>
                </ul>
              </div>
            </div>
            <div class="tab-wrap">
              <div class="acc-heading"><span>Assets</span></div>
              <div class="acc-content">
                <ul class="reportList">
                  <li> <a href="#">Agent ticket summary</a><br>
                    Compare the performance of agents based on ticket response and resolution </li>
                  <li> <a href="#">Agent ticket summary</a><br>
                    Compare the performance of agents based on ticket response and resolution </li>
                  <li> <a href="#">Agent ticket summary</a><br>
                    Compare the performance of agents based on ticket response and resolution </li>
                  <li> <a href="#">Agent ticket summary</a><br>
                    Compare the performance of agents based on ticket response and resolution </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- end --> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Continue</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>