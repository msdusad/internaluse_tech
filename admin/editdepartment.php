<!DOCTYPE html>
<html lang="en">
<!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> -->
<body class="nav-md">
<div class="container body">
  <div class="main_container">
   
    <?php include("../include/top-nav.php"); 
      include("../include/right-nav.php");
 require_once("../classes/Include_all.php"); 
 $dep_obj=Assets::Department($_GET['id']);
foreach ($dep_obj as $dep_value) 
      ?>
    <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-9 col-sm-8 col-xs-12 padding-top-10">
            <div class="x_panel tile">
              <div class="x_title">
                <div class="row">
                  <div class="col-lg-7 h4"><a href="<?php echo WEB_ROOT;?>Groups/index.php"><i class="icon-cog"></i>Admin</a></div>
                  <div class="col-lg-5 text-right MrTpMd-10"> 
                     <button class="btn btn-default dropdown-toggle" type="button">Edit</button>
					 <button class="btn btn-dark dropdown-toggle" data-dismiss="modal"  type="button">Delete</button>
    
    
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>         </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
               <div class="list-page-header row-fluid"> 
    <h2 class="modal-title"><strong><?php echo $dep_value["name"]; ?></strong></h2>
	
  </div>
   <h4 class="h4 padding-bottom-10"><strong><?php echo $dep_value["prime_user"]; ?></strong></h4>
   <h4 class="h4 padding-bottom-10"><strong><?php echo $dep_value["department_head"]; ?></strong></h4>
   <h4 class="h4 padding-bottom-10"><strong><?php echo $dep_value["description"]; ?></strong></h4>
  
   <p>Support Team</p>
    <div class="sp">            
 <h1><strong>Members</strong></h1>
      </div>      


<div class=" panel1 padding-bottom-10">
 <div class="panel panel-default">
    <div class="panel-heading"><i class="icon-plus-circled">Add Members</i></div>
    
  </div>
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