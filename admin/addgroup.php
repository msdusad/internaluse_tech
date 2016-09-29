<!DOCTYPE html>
<html lang="en">
<!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> -->
<body class="nav-md">
<div class="container body">
  <div class="main_container">
   
    <?php include("../include/top-nav.php"); ?>
     <?php include("../include/right-nav.php"); ?>
    <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-9 col-sm-8 col-xs-12 padding-top-10">
            <div class="x_panel tile">
              <div class="x_title">
                <div class="row">
                  <div class="col-lg-7 h4"><a href="<?php echo WEB_ROOT;?>Groups/index.php"><i class="icon-cog"></i>Admin</a></div>
                  <div class="col-lg-5 text-right MrTpMd-10"> 
               <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Create New <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="<?php echo WEB_ROOT;?>admin/Agent.php">Agent Group</a></li>
    <li><a href="<?php echo WEB_ROOT;?>admin/Requestorgroup.php">Requester Group</a></li>
    
  </ul>      
					 </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
               <div class="list-page-header row-fluid"> 
    <ul id="groups" class="tabs" data-tabs="tabs">
    	<ul  class="nav nav-pills">
			<li class="active">
        <a  href="#1" data-toggle="tab">Agents</a>
			</li>
			<li><a href="#2" data-toggle="tab">Requester Groups</a>
			</li>
    </ul>
	<div class="x_title title1">
               </div>
  </div>
  <div class="tab-content">
   <div class="tab-pane active" id="1">
  <table class="table table-striped table1 " id="1a">
    <tbody><tr>
      <td>
        <a href="/groups/4000136675/edit" class="item_info" data-toggle="modal" data-target="#add-asset1">Capacity Management Team</a>
		<div class="modal fade" id="add-asset1" role="dialog">
    <div class="modal-dialog">
      <form method="post" action="" name="asset_add_category" class="checkList">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><a href="<?php echo WEB_ROOT;?>Groups/edit.php">Edit Group</a></h4>
        </div>
        <div class="modal-body">
            <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						 
                   
<b>Group Name</b><input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>

                <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
              
<b>Group description</b>

 </p>
                    <input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>
				 <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
               
<b>Agents</b>

</p>
                    <input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>
<div class="row padding-bottom-10">
<div class="col-sm-8 col-xs-12 text-center" >
if a ticket remains un-assigned for more than : 
</div> 
<div class="col-sm-4 col-xs-12 " >
<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
   30 Minutes
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
</div>
</div>
</form>
</div>
</div>
<div class="muted">Capacity Management Team</div>
      </td>
      <td class="text-right">
        <a href="<?php echo WEB_ROOT;?>admin/edit.php" class="btn btn-mini">Edit</a>

        <a href="/groups/4000136675" class="btn btn-mini" onclick="if (confirm('Are you sure you want to delete this group?      Deleting a group will not delete the Agents in it.')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'TrgvPBUv0BEZ2Ar9tOV2+WVhsIuEWgxTrp2SEVDrLi4='); f.appendChild(s);f.submit(); };return false;"><i class="icon-trash"></i></a>
      </td>
    </tr>
    <tr>
      <td>
        <a href="/groups/4000136671/edit" class="item_info" data-toggle="modal" data-target="#add-asset1">Change Team</a>
		<div class="modal fade" id="add-asset1" role="dialog">
    <div class="modal-dialog">
      <form method="post" action="" name="asset_add_category" class="checkList">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Group</h4>
        </div>
        <div class="modal-body">
            <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						 
                   
<b>Group Name</b><input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>

                <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
              
<b>Group description</b>

 </p>
                    <input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>
				 <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
               
<b>Agents</b>

</p>
                    <input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>
<div class="row padding-bottom-10">
<div class="col-sm-8 col-xs-12 text-center" >
if a ticket remains un-assigned for more than : 
</div> 
<div class="col-sm-4 col-xs-12 " >
<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
   30 Minutes
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
</div>
</div>
</form>
</div>
</div>
<div class="muted">Change Management Team</div>
      </td>
      <td class="text-right">
        <a href="<?php echo WEB_ROOT;?>admin/edit.php" class="btn btn-mini">Edit</a>

        <a href="/groups/4000136671" class="btn btn-mini" onclick="if (confirm('Are you sure you want to delete this group?      Deleting a group will not delete the Agents in it.')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'TrgvPBUv0BEZ2Ar9tOV2+WVhsIuEWgxTrp2SEVDrLi4='); f.appendChild(s);f.submit(); };return false;"><i class="icon-trash"></i></a>
      </td>
    </tr>
    <tr>
      <td>
        <a href="/groups/4000136673/edit" class="item_info" data-toggle="modal" data-target="#add-asset1">Database Team</a>
		
		<div class="modal fade" id="add-asset1" role="dialog">
    <div class="modal-dialog">
      <form method="post" action="" name="asset_add_category" class="checkList">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Group</h4>
        </div>
        <div class="modal-body">
            <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						 
                   
<b>Group Name</b><input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>

                <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
              
<b>Group description</b>

 </p>
                    <input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>
				 <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
               
<b>Agents</b>

</p>
                    <input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>
<div class="row padding-bottom-10">
<div class="col-sm-8 col-xs-12 text-center" >
if a ticket remains un-assigned for more than : 
</div> 
<div class="col-sm-4 col-xs-12 " >
<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
   30 Minutes
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
</div>
</div>
</form>
</div>

</div>
<div class="muted">Database Management Team</div>
      </td>
      <td class="text-right">
        <a href="<?php echo WEB_ROOT;?>admin/edit.php" class="btn btn-mini">Edit</a>

        <a href="/groups/4000136673" class="btn btn-mini" onclick="if (confirm('Are you sure you want to delete this group?      Deleting a group will not delete the Agents in it.')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'TrgvPBUv0BEZ2Ar9tOV2+WVhsIuEWgxTrp2SEVDrLi4='); f.appendChild(s);f.submit(); };return false;"><i class="icon-trash"></i></a>
      </td>
    </tr>
    <tr>
      <td>
        <a href="/groups/4000136674/edit" class="item_info" data-toggle="modal" data-target="#add-asset1">Hardware Team</a>
		
		<div class="modal fade" id="add-asset1" role="dialog">
    <div class="modal-dialog">
      <form method="post" action="" name="asset_add_category" class="checkList">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Group</h4>
        </div>
        <div class="modal-body">
            <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						 
                   
<b>Group Name</b><input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>

                <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
              
<b>Group description</b>

 </p>
                    <input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>
				 <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
               
<b>Agents</b>

</p>
                    <input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>
<div class="row padding-bottom-10">
<div class="col-sm-8 col-xs-12 text-center" >
if a ticket remains un-assigned for more than : 
</div> 
<div class="col-sm-4 col-xs-12 " >
<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
   30 Minutes
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
</div>
</div>
</form>
</div>

</div>
<div class="muted">Hardware Management Team</div>
      </td>
      <td class="text-right">
        <a href="<?php echo WEB_ROOT;?>admin/edit.php" class="btn btn-mini">Edit</a>

        <a href="/groups/4000136674" class="btn btn-mini" onclick="if (confirm('Are you sure you want to delete this group?      Deleting a group will not delete the Agents in it.')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'TrgvPBUv0BEZ2Ar9tOV2+WVhsIuEWgxTrp2SEVDrLi4='); f.appendChild(s);f.submit(); };return false;"><i class="icon-trash"></i></a>
      </td>
    </tr>
    <tr>
      <td>
        <a href="/groups/4000136667/edit" class="item_info" data-toggle="modal" data-target="#add-asset1">Incident Team</a>
		
		<div class="modal fade" id="add-asset1" role="dialog">
    <div class="modal-dialog">
      <form method="post" action="" name="asset_add_category" class="checkList">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Group</h4>
        </div>
        <div class="modal-body">
            <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						 
                   
<b>Group Name</b><input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>

                <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
              
<b>Group description</b>

 </p>
                    <input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>
				 <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
               
<b>Agents</b>

</p>
                    <input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>
<div class="row padding-bottom-10">
<div class="col-sm-8 col-xs-12 text-center" >
if a ticket remains un-assigned for more than : 
</div> 
<div class="col-sm-4 col-xs-12 " >
<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
   30 Minutes
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
</div>
</div>
</form>
</div>
</div>
<div class="muted">Incident Management Team</div>
      </td>
      <td class="text-right">
        <a href="<?php echo WEB_ROOT;?>admin/edit.php" class="btn btn-mini">Edit</a>

        <a href="/groups/4000136667" class="btn btn-mini" onclick="if (confirm('Are you sure you want to delete this group?      Deleting a group will not delete the Agents in it.')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'TrgvPBUv0BEZ2Ar9tOV2+WVhsIuEWgxTrp2SEVDrLi4='); f.appendChild(s);f.submit(); };return false;"><i class="icon-trash"></i></a>
      </td>
    </tr>
    <tr>
      <td>
        <a href="/groups/4000136668/edit" class="item_info" data-toggle="modal" data-target="#add-asset1">Major Incident Team</a>
		
		<div class="modal fade" id="add-asset1" role="dialog">
    <div class="modal-dialog">
      <form method="post" action="" name="asset_add_category" class="checkList">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Group</h4>
        </div>
        <div class="modal-body">
            <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						 
                   
<b>Group Name</b><input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>

                <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
              
<b>Group description</b>

 </p>
                    <input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>
				 <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
               
<b>Agents</b>

</p>
                    <input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>
<div class="row padding-bottom-10">
<div class="col-sm-8 col-xs-12 text-center" >
if a ticket remains un-assigned for more than : 
</div> 
<div class="col-sm-4 col-xs-12 " >
<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
   30 Minutes
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
</div>
</div>
</form>
</div>

</div>
<div class="muted">Major Incident Management Team</div>
      </td>
      <td class="text-right">
        <a href="<?php echo WEB_ROOT;?>admin/edit.php" class="btn btn-mini">Edit</a>

        <a href="/groups/4000136668" class="btn btn-mini" onclick="if (confirm('Are you sure you want to delete this group?      Deleting a group will not delete the Agents in it.')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'TrgvPBUv0BEZ2Ar9tOV2+WVhsIuEWgxTrp2SEVDrLi4='); f.appendChild(s);f.submit(); };return false;"><i class="icon-trash"></i></a>
      </td>
    </tr>
    <tr>
      <td>
        <a href="/groups/4000136670/edit" class="item_info" data-toggle="modal" data-target="#add-asset1">Problem Management Team</a>
		
		<div class="modal fade" id="add-asset1" role="dialog">
    <div class="modal-dialog">
      <form method="post" action="" name="asset_add_category" class="checkList">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Group</h4>
        </div>
        <div class="modal-body">
            <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						 
                   
<b>Group Name</b><input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>

                <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
              
<b>Group description</b>

 </p>
                    <input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>
				 <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
               
<b>Agents</b>

</p>
                    <input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>
<div class="row padding-bottom-10">
<div class="col-sm-8 col-xs-12 text-center" >
if a ticket remains un-assigned for more than : 
</div> 
<div class="col-sm-4 col-xs-12 " >
<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
   30 Minutes
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
</div>
</div>
</form>
</div>

</div>
<div class="muted">Problem Management Team</div>
      </td>
      <td class="text-right">
        <a href="<?php echo WEB_ROOT;?>admin/edit.php" class="btn btn-mini">Edit</a>

        <a href="/groups/4000136670" class="btn btn-mini" onclick="if (confirm('Are you sure you want to delete this group?      Deleting a group will not delete the Agents in it.')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'TrgvPBUv0BEZ2Ar9tOV2+WVhsIuEWgxTrp2SEVDrLi4='); f.appendChild(s);f.submit(); };return false;"><i class="icon-trash"></i></a>
      </td>
    </tr>
    <tr>
      <td>
        <a href="/groups/4000136672/edit" class="item_info" data-toggle="modal" data-target="#add-asset1">Release Team</a>
		
		<div class="modal fade" id="add-asset1" role="dialog">
    <div class="modal-dialog">
      <form method="post" action="" name="asset_add_category" class="checkList">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Group</h4>
        </div>
        <div class="modal-body">
            <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						 
                   
<b>Group Name</b><input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>

                <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
              
<b>Group description</b>

 </p>
                    <input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>
				 <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
               
<b>Agents</b>

</p>
                    <input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>
<div class="row padding-bottom-10">
<div class="col-sm-8 col-xs-12 text-center" >
if a ticket remains un-assigned for more than : 
</div> 
<div class="col-sm-4 col-xs-12 " >
<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
   30 Minutes
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
</div>
</div>
</form>
</div>
</div>
<div class="muted">Release Management Team</div>
      </td>
      <td class="text-right">
        <a href="<?php echo WEB_ROOT;?>admin/edit.php" class="btn btn-mini">Edit</a>

        <a href="/groups/4000136672" class="btn btn-mini" onclick="if (confirm('Are you sure you want to delete this group?      Deleting a group will not delete the Agents in it.')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'TrgvPBUv0BEZ2Ar9tOV2+WVhsIuEWgxTrp2SEVDrLi4='); f.appendChild(s);f.submit(); };return false;"><i class="icon-trash"></i></a>
      </td>
    </tr>
    <tr>
      <td>
        <a href="/groups/4000136677/edit" class="item_info" data-toggle="modal" data-target="#add-asset1">Service Design Team</a>
		<div class="modal fade" id="add-asset1" role="dialog">
    <div class="modal-dialog">
      <form method="post" action="" name="asset_add_category" class="checkList">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Group</h4>
        </div>
        <div class="modal-body">
            <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						 
                   
<b>Group Name</b><input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>

                <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
              
<b>Group description</b>

 </p>
                    <input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>
				 <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
               
<b>Agents</b>

</p>
                    <input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>
<div class="row padding-bottom-10">
<div class="col-sm-8 col-xs-12 text-center" >
if a ticket remains un-assigned for more than : 
</div> 
<div class="col-sm-4 col-xs-12 " >
<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
   30 Minutes
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
</div>
</div>
</form>
</div>

</div>
<div class="muted">Service Design Team</div>
      </td>
      <td class="text-right">
        <a href="<?php echo WEB_ROOT;?>admin/edit.php" class="btn btn-mini">Edit</a>

        <a href="/groups/4000136677" class="btn btn-mini" onclick="if (confirm('Are you sure you want to delete this group?      Deleting a group will not delete the Agents in it.')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'TrgvPBUv0BEZ2Ar9tOV2+WVhsIuEWgxTrp2SEVDrLi4='); f.appendChild(s);f.submit(); };return false;"><i class="icon-trash"></i></a>
      </td>
    </tr>
    <tr>
      <td>
        <a href="/groups/4000136669/edit" class="item_info" data-toggle="modal" data-target="#add-asset1">Service Request Fulfillment Team</a>
		
		
		<div class="modal fade" id="add-asset1" role="dialog">
    <div class="modal-dialog">
      <form method="post" action="" name="asset_add_category" class="checkList">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Group</h4>
        </div>
        <div class="modal-body">
            <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						 
                   
<b>Group Name</b><input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>

                <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
              
<b>Group description</b>

 </p>
                    <input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>
				 <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
               
<b>Agents</b>

</p>
                    <input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>
<div class="row padding-bottom-10">
<div class="col-sm-8 col-xs-12 text-center" >
if a ticket remains un-assigned for more than : 
</div> 
<div class="col-sm-4 col-xs-12 " >
<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
   30 Minutes
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
</div>
</div>
</form>
</div>

</div>
<div class="muted">Service Request Fulfillment Team</div>
      </td>
      <td class="text-right">
        <a href="<?php echo WEB_ROOT;?>admin/edit.php" class="btn btn-mini">Edit</a>

        <a href="/groups/4000136669" class="btn btn-mini" onclick="if (confirm('Are you sure you want to delete this group?      Deleting a group will not delete the Agents in it.')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'TrgvPBUv0BEZ2Ar9tOV2+WVhsIuEWgxTrp2SEVDrLi4='); f.appendChild(s);f.submit(); };return false;"><i class="icon-trash"></i></a>
      </td>
    </tr>
    <tr>
      <td>
        <a href="/groups/4000136676/edit" class="item_info" data-toggle="modal" data-target="#add-asset1">Supplier Management Team</a>
		
		<div class="modal fade" id="add-asset1" role="dialog">
    <div class="modal-dialog">
      <form method="post" action="" name="asset_add_category" class="checkList">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Group</h4>
        </div>
        <div class="modal-body">
            <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						 
                   
<b>Group Name</b><input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>

                <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
              
<b>Group description</b>

 </p>
                    <input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>
				 <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
               
<b>Agents</b>

</p>
                    <input type="text"  name="name" placeholder="Category Name" class="form-control" required >
                  </div>
                 </div>
<div class="row padding-bottom-10">
<div class="col-sm-8 col-xs-12 text-center" >
if a ticket remains un-assigned for more than : 
</div> 
<div class="col-sm-4 col-xs-12 " >
<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
   30 Minutes
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
</div>
</div>
</form>
</div>
</div>
<div class="muted">Supplier Management Team</div>
      </td>
      <td class="text-right">
        <a href="<?php echo WEB_ROOT;?>admin/edit.php" class="btn btn-mini">Edit</a>

        <a href="/groups/4000136676" class="btn btn-mini" onclick="if (confirm('Are you sure you want to delete this group?      Deleting a group will not delete the Agents in it.')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'TrgvPBUv0BEZ2Ar9tOV2+WVhsIuEWgxTrp2SEVDrLi4='); f.appendChild(s);f.submit(); };return false;"><i class="icon-trash"></i></a>
      </td>
    </tr>
</tbody></table>
</div>
<!--2ndtable-->
<div class="tab-pane" id="2">
<table class="table table-striped">
    <tbody><tr id="itil_requester_group_4000031781">
      <td>
        <a href="/itil/requester_groups/4000031781/edit" class="item_info">Finance Team</a>
        <div class="muted"></div>
      </td>
      <td class="text-right">
        <a href="/itil/requester_groups/4000031781/edit" class="btn btn-mini">Edit</a>
        <a href="/itil/requester_groups/4000031781" class="btn btn-mini" onclick="if (confirm('Are you sure you want to delete this group?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'g2BJBIcBDKA2VcLlNA2qtGT6ipS9iNCterm+aPnGUrQ='); f.appendChild(s);f.submit(); };return false;"><i class="icon-trash"></i></a>
      </td>
    </tr>
    <tr id="itil_requester_group_4000031780">
      <td>
        <a href="/itil/requester_groups/4000031780/edit" class="item_info">HR Team</a>
        <div class="muted"></div>
      </td>
      <td class="text-right">
        <a href="/itil/requester_groups/4000031780/edit" class="btn btn-mini">Edit</a>
        <a href="/itil/requester_groups/4000031780" class="btn btn-mini" onclick="if (confirm('Are you sure you want to delete this group?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'g2BJBIcBDKA2VcLlNA2qtGT6ipS9iNCterm+aPnGUrQ='); f.appendChild(s);f.submit(); };return false;"><i class="icon-trash"></i></a>
      </td>
    </tr>
    <tr id="itil_requester_group_4000031779">
      <td>
        <a href="/itil/requester_groups/4000031779/edit" class="item_info">Managers</a>
        <div class="muted"></div>
      </td>
      <td class="text-right">
        <a href="/itil/requester_groups/4000031779/edit" class="btn btn-mini">Edit</a>
        <a href="/itil/requester_groups/4000031779" class="btn btn-mini" onclick="if (confirm('Are you sure you want to delete this group?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'g2BJBIcBDKA2VcLlNA2qtGT6ipS9iNCterm+aPnGUrQ='); f.appendChild(s);f.submit(); };return false;"><i class="icon-trash"></i></a>
      </td>
    </tr>
</tbody></table>
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