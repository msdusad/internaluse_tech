<!DOCTYPE html>
<html lang="en">
<!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> -->
<body class="nav-md">
<div class="container body">
  <div class="main_container">
   
    <?php require_once("../include/top-nav.php"); 
      require_once("../include/right-nav.php"); 

      require_once("../classes/Include_all.php"); 
?>

    <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-9 col-sm-8 col-xs-12 padding-top-10">
            <div class="x_panel tile">
              <div class="x_title">
                <div class="row">
                  <div class="col-lg-7 h4"><a href="<?php echo WEB_ROOT;?>admin/index.php"><i class="icon-cog"></i>Admin</a></div>
                  <div class="col-lg-5 text-right MrTpMd-10"> 
                     <a href="<?php echo WEB_ROOT;?>admin/addnewdepartment.php"><button class="btn btn-info dropdown-toggle" type="button">Add New Department</button></a>
    
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
    <h4 class="modal-title"><strong>Departments</strong></h4>
	<div class="x_title title1">
               </div>
  </div>
<div class="table-responsive margin-top-20"> 
<table class="table table-striped jambo_table bulk_action table-bordered text-center">
                            <thead>	
							<th>Departments</th>
							<th>Department Head</th>
							<th>Prim user</th>
							<th></th>
						</thead>

							<tbody>
<?php
$dep_obj=Assets::Department();
foreach ($dep_obj as $dep_value) {
	echo '<tr class="assTable">
									<td class=" "><a href="'.WEB_ROOT.'admin/editdepartment.php">'.$dep_value["name"].'</a></td>
									<td class=" ">'.$dep_value["department_head"].'</td>
<td class=" ">'.$dep_value["prime_user"].'</td>
<td class=""><a href="'.WEB_ROOT.'admin/editdepartment.php"><i class="icon-pencil"></i></a> &nbsp; <a href="#"><i class="icon-trash"></i></a></td></td>
								</tr>';
}

?>

								
		
							</tbody>
                        </table>
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