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
          <div class="x_panel">
            <div class="x_title">
              <div class="row">
                <div class="col-lg-7 col-xs-12">
                  <div class="btn-group">
                      <a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle h3">All Contracts <i class="caret"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a>
                        </li>
                        <li><a href="#">Another action</a>
                        </li>
                        <li><a href="#">Something else here</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a>
                        </li>
                      </ul>
                </div>
                </div>
                <div class="col-lg-5 col-xs-12 text-right MrTpMd-10 visible-sm-right-left">
                  <a href="new.php" class="btn btn-danger btn-round">Add New</a>
                </div>
              </div>
            </div>
            <div class="x_content">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="media">
                    <div class="media-left">
                      <button type="button" class="btn btn-default btn-round" disabled="disabled">Delete</button>
                    </div>
                    <div class="media-left">
                      <div class="input-group noMargin">
                        <input class="form-control" placeholder="Search for..." type="text">
                        <span class="input-group-btn">
                        <button class="btn btn-dark" type="button"><i class="icon-search-2"></i></button>
                        </span> 
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 text-right col-xs-12 visible-sm-right-left"> Showing 1 to 1 of 1  &nbsp;&nbsp;&nbsp;
                  <button type="button" class="btn btn-default btn-round" disabled="disabled"><i class="icon-left-dir"></i></button>
                  <button type="button" class="btn btn-default btn-round" disabled="disabled"><i class="icon-right-dir"></i></button>
                </div>
              </div>
              <div class="table-responsive margin-top-20">
                <table class="table table-striped jambo_table bulk_action p-xs">
                  <thead>
                    <tr>
                      <th> <input type="checkbox" id="test1" />
                        <label for="test1" class="column-title weight-600" style="padding-top:3px;">Contract Name</label>
                      </th>
                      <th>Type </th>
                      <th>Status </th>
                      <th>Renewal Status </th>
                      <th>Contract No.</th>
                      <th>Vendor </th>
                      <th>Expiry</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="a-center "><input type="checkbox" id="laptop" />
                        <label for="laptop" class="column-title">Sample Adobe Photoshop CS6 Contract</label></td>
                      <td>Software License</td>
                      <td>Active </td>
                      <td></td>
                      <td>CNTR-1</td>
                      <td>Adobe</td>
                      <td>1 Jul, 2017</td>
                    </tr>
                    <tr>
                      <td class="a-center "><input type="checkbox" id="laptop1" />
                        <label for="laptop1" class="column-title" style="padding-top:3px;">Display Name</label></td>
                      <td>121000040</td>
                      <td>May 23</td>
                      <td>121000210 <i class="success fa fa-long-arrow-up"></i></td>
                      <td>John Blank</td>
                      <td>Paid</td>
                      <td>John</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12 margin-top-10">
              <div class="x_panel tile overflow_hidden">
                <div class="x_title">
                  <h2>Contracts</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa icon-up-open"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa icon-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa icon-cancel"></i></a>
                    </li>
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
<div class="modal fade" id="requester" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content noBorderRadius">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Requester</h4>
      </div>
      <div class="modal-body">
        <form action="#" class="checkList">
          <p>
            <label>Name</label>
            <input type="text" class="form-control">
          </p>
          <p>
            <label>Email</label>
            <input type="email" class="form-control">
          </p>
          <p>
            <label>Phone no</label>
            <input type="text" class="form-control">
          </P>
          <p>
            <label>Department</label>
            <input type="text" class="form-control" placeholder="Enter Department Name">
          </p>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default noBorderRadius">Cancel</button>
        <button type="button" class="btn btn-dark noBorderRadius">Create</button>
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