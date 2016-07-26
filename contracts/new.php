<!DOCTYPE html>
<html lang="en">
<body class="nav-md">
<div class="container body">
  <div class="main_container">
    <?php include("../include/right-nav.php"); ?>
    <?php include("../include/top-nav.php"); ?>
    <div class="right_col" role="main">
      <div class="row checkList">
        <div class="col-md-9 col-sm-8 col-xs-12 margin-top-10">
          <div class="x_panel tile">
            <div class="x_title">
              <div class="row">
                <div class="col-lg-7 padding-top-10"> <a href="index.php" class="h4"><i class="icon-left-small"></i>Back to Contracts</a> </div>
                <div class="col-lg-5 text-right MrTpMd-10"> <a href="index.php" class="btn btn-danger btn-round">Cancel</a>
                  <div class="btn-group">
                    <button type="button" class="btn btn-dark btn-round">Save</button>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <h1 class="h3 padding-bottom-10">New Contract</h1>
              <form action="#" class="checkList">
			     <div class="row">
				     <div class="col-sm-6 padding-bottom-10">
					     <label>Contract Name <span class="text-red">*</span></label>
                         <input type="text" class="form-control">
					 </div>
					 <div class="col-sm-6 padding-bottom-10">
					     <label>Contract Number <span class="text-red">*</span></label>
                         <input type="text" class="form-control" placeholder="CNTR-2">
					 </div>
				 </div>
                <div class="row">
                  <div class="col-sm-6 col-xs-12 padding-bottom-10">
				    <label>Type <span class="text-red">*</span></label>
                    <select class="form-control">
					  <option>--Choose--</option>
					  <option>Option one</option>
					  <option>Option two</option>
					  <option>Option three</option>
					  <option>Option four</option>
					</select>
                  </div>
                  <div class="col-sm-6 col-xs-12 padding-bottom-10">
                    <label>Status <span class="text-red">*</span></label>
                    <select class="form-control" disabled>
					  <option>Draft</option>
					  <option>Option one</option>
					  <option>Option two</option>
					  <option>Option three</option>
					  <option>Option four</option>
					</select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-xs-12 padding-bottom-10">
                    <label>Approver <span class="text-red">*</span></label>
                    <select class="form-control">
					  <option>--Choose--</option>
					  <option>Option one</option>
					  <option>Option two</option>
					  <option>Option three</option>
					  <option>Option four</option>
					</select>
                  </div>
                  <div class="col-sm-6 col-xs-12 padding-bottom-10">
                    <label>Cost ($) <span class="text-red">*</span></label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </form>
			  <p class="margin-top-10">Description</p>
              <div class="panel panel-default noBorderRadius noShadow">
                <div class="panel-heading nav"> <a href="#" class="BoldAlign">&nbsp;</a> <a href="#" class="italicAlign">&nbsp;</a> <a href="#" class="list">&nbsp;</a> <a href="#" class="listNum">&nbsp;</a> <a href="#" class="shiftTab">&nbsp;</a> <a href="#" class="shiftTab2">&nbsp;</a> <a href="#" class="fontColor">&nbsp;</a> <a href="#" class="backColor">&nbsp;</a> <span class="dropdown"> <a href="#" class="dropdown-toggle links" data-toggle="dropdown" role="button" aria-expanded="false" title="link">&nbsp;</a>
                  <ul class="dropdown-menu">
                    <li><a href="#insertLink" data-toggle="modal" data-target="#insertLink">Insert Link ...</a></li>
                    <li><a href="#">Unlink</a></li>
                  </ul>
				</div>  
                <div class="panel-body panelHeight"> Text </div>
              </div>
			  <p class="left_col padding-5 text-white">Tenure of Contract</p>
              <p>
                <label>Tags</label>
                <input type="text" class="form-control">
              </p>
              <p class="margin-top-20"><a href="#" class="green h4" data-toggle="modal" data-target="#attach"><i class="icon-plus-circled-1"></i> Attach Assets </a></p>
              <div>Attach a file (File size <i class="icon-angle-left"></i> 15 MB)</div>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="1 file(s) selected" readonly>
                <label class="input-group-btn"> <span class="btn btn-success"> Choose File
                  <input type="file" style="display: none;" multiple>
                  </span> </label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12 margin-top-10">
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
<div class="modal fade" id="imageSelecter" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content noBorderRadius">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Insert Image...</h4>
      </div>
      <div class="modal-body">
        <ul class="nav nav-pills">
          <li class="active"><a href="#upload" class="btn btn-default" data-toggle="tab">Upload</a></li>
          <li><a href="#linkTap" class="btn btn-default" data-toggle="tab">Link</a></li>
        </ul>
        <div class="tab-content padding-top-10">
          <div class="tab-pane active" id="upload">
            <form action="#" class="checkList padding-top-10">
              <div class="fileUpload btn btn-danger btn-round"> <span><i class="icon-download"></i> Upload</span>
                <input type="file" class="upload" />
              </div>
            </form>
          </div>
          <div class="tab-pane" id="linkTap">
            <form action="#" class="checkList padding-top-10">
              <p>
                <label>Image URL</label>
                <input type="text" class="form-control">
              </p>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default noBorderRadius">Cancel</button>
        <button type="button" class="btn btn-dark noBorderRadius">Insert</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="attach" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content noBorderRadius">
      <div class="modal-body">
        <form action="#">
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
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default noBorderRadius">Attach</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>