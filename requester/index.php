<!DOCTYPE html>
<html lang="en">
<body class="nav-md">
<div class="container body">
  <div class="main_container">
    <?php include("../include/top-nav.php"); ?>
    <?php include("../include/right-nav.php"); ?>
    <div class="right_col" role="main">
      <div class="row">
        <div class="col-sm-7 col-md-8 col-lg-9 col-xs-12 margin-top-10">
          <div class="x_panel tile">
            <div class="x_title">
              <div class="row">
                  <?php require_once("../classes/Include_all.php"); ?>
                  <div class="col-lg-7 col-xs-12 h4"><a href="<?php echo WEB_ROOT;?>admin/index.php">Admin</a></div>
                  <div class="col-lg-5 col-xs-12 text-right visible-sm-right-center MrTpMd-10"> 
                     <a href="<?php echo WEB_ROOT;?>requester/new.php" class="btn btn-round btn-dark">New Requester</a>
                  </div>
                </div>
              <div class="clearfix"></div>
            </div>
            <div class="x_content" id="imageSelecter">
              <div class="row margin-bottom-10">
			    <div class="col-sm-6 h4">
				    Requesters
				</div>
				<!--<div class="col-sm-6 text-right padding-top-5">
				    <span class="badge bg-red">0</span> 
					No agent seats available - <a href="#">Buy more</a>
				</div>-->
			  </div>
              <!--<ul class="nav nav-pills">
                <li class="active"><a class="btn btn-default" href="#tab1" data-toggle="tab">Full-Time <span class="badge bg-default">3</span></a></li>
                <li><a href="#tab2" class="btn btn-default" data-toggle="tab">Occasional <span class="badge bg-default">0</span></a></li>
                <li><a href="#tab3" class="btn btn-default" data-toggle="tab">Deleted</a></li>
              </ul>-->
              <div class="tab-content margin-top-20">
                <div class="tab-pane active" id="tab1">
                  <!-- start -->
                  <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                      <tbody>
                        <?php
$requester_obj=Assets::Requester('');
if($requester_obj!=''){
foreach ($requester_obj as $requester_val) {
 $pic=$requester_val['requester_image'];
echo '
   <tr>
        <td width="40">
                 <img src="';
if($pic!=""){
 echo "../docs/".$_SESSION['userid']."/Requester/".$requester_val['requester_image'];
}
else{
                echo IMAGE_ROOT."profile_blank_thumb.gif";

                 }

                 echo ' " width="40" alt="" class="img-circle">
              </td>
              <td>
                 <p><strong><a href="'.WEB_ROOT.'requester/profile.php?id='.$requester_val["id"].'" >'.$requester_val["first_name"]. " ".$requester_val['last_name'].'</a> </strong><br>
                <small class="muted"></small>
               </p>
              </td>
                          <td>
              <p>'.$requester_val["email"].'<br></p>
              </td>
              <td>
              <p>
                Last logged time<br>
              </p>
              </td>
              <td>
              <a href="'.WEB_ROOT.'requester/edit.php?id='.$requester_val["id"].'" class="btn btn-default btn-xs">Edit</a>
              <a href="#delete" data-toggle="modal" data-target="#delete" class="btn btn-default btn-xs"><i class="icon-trash"></i></a
              </td>
                </tr>';


}

}

                    ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- end -->
                </div>
                <div class="tab-pane" id="tab2">
                  <p> There are no Relationships available. <a href="addnew" class="green">Add new</a> </p>
                </div>
                <div class="tab-pane" id="tab3">
                  <p> There are no Asset available. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5 col-md-4 col-lg-3 col-xs-12 margin-top-10">
          <div class="x_panel tile">
            <div class="x_title"><h4>Agents</h4>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <p>The list shows all Agents added in your help desk. You can edit an existing agent’s permissions and access rights by hovering over the agent and clicking on “Edit”. You can add new agents by clicking on the “New Agent” button.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include("../include/footer.php"); ?>
  </div>
</div>
<div class="modal fade" id="delete" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3>Delete Agent</h3>
      </div>
      <div class="modal-body">
	    <p>
		   The deleted agent will be available as a requester in the service desk. Are you sure you want to proceed?
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Confirm</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>