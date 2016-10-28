<?php

require_once('Common.php');
require_once('FileUpload.php');
class AddAssets{

public  static function AddImpact(){

$name=Common::remove_sql_injection((isset($_POST['name'])) ? $_POST['name'] : null);
$add_query="insert into impact (name) values ('$name')";
$run_qry=Common::InsertData($add_query);
if($run_qry){

return 'Added Sucessfully';

}

}


public static  function AddManagedBy(){
return "df";
}


public static function  AddCategory(){	

$cat_name=Common::remove_sql_injection((isset($_POST['name'])) ? $_POST['name'] : null);
if ($_POST['parent_id'] === '') {
    $_POST['parent_id'] = 'NULL'; // or 'NULL' for SQL
}
$parent_id=$_POST['parent_id'];
$add_query="insert into category (name,parent_id) values ('$cat_name','$parent_id')";
$run_qry=Common::InsertData($add_query);
if($run_qry){

return 'Added Sucessfully';

}

	}

public static function AddDepartment(){


$department_name=Common::remove_sql_injection((isset($_POST['department_name'])) ? $_POST['department_name'] : null);
$department_description=Common::remove_sql_injection((isset($_POST['department_description'])) ? $_POST['department_description'] : null);
$department_head=Common::remove_sql_injection((isset($_POST['department_head'])) ? $_POST['department_head'] : null);
$department_prime_user=Common::remove_sql_injection((isset($_POST['department_prime_user'])) ? $_POST['department_prime_user'] : null);

$add_query="insert into department (name,description,department_head,prime_user) values ('$department_name','$department_description','$department_head','$department_prime_user')";
$run_qry=Common::InsertData($add_query);
if($run_qry){

return 'Added Sucessfully';

}

	}


public static  function AddGroup(){

$group_name=Common::remove_sql_injection((isset($_POST['group_name'])) ? $_POST['group_name'] : null);
$group_description=Common::remove_sql_injection((isset($_POST['group_description'])) ? $_POST['group_description'] : null);
$group_agents=Common::remove_sql_injection((isset($_POST['group_agents'])) ? $_POST['group_agents'] : null);

$add_query="insert into groups (group_name,description,agents) values ('$group_name','$group_description','$group_agents')";
$run_qry=Common::InsertData($add_query);
if($run_qry){
return 'Added Sucessfully';
}


}




public  function AddLocation(){
	
$location_name=Common::remove_sql_injection((isset($_POST['location_name'])) ? $_POST['location_name'] : null);
$primary_contact=Common::remove_sql_injection((isset($_POST['primary_contact'])) ? $_POST['primary_contact'] : null);
$email=Common::remove_sql_injection((isset($_POST['email'])) ? $_POST['email'] : null);
$phone=Common::remove_sql_injection((isset($_POST['phone'])) ? $_POST['phone'] : null);
$address=Common::remove_sql_injection((isset($_POST['address'])) ? $_POST['address'] : null);
$address2=Common::remove_sql_injection((isset($_POST['address2'])) ? $_POST['address2'] : null);
$country=Common::remove_sql_injection((isset($_POST['country'])) ? $_POST['country'] : null);
$state=Common::remove_sql_injection((isset($_POST['state'])) ? $_POST['state'] : null);
$city=Common::remove_sql_injection((isset($_POST['city'])) ? $_POST['city'] : null);
$zipcode=Common::remove_sql_injection((isset($_POST['zipcode'])) ? $_POST['zipcode'] : null);


$add_query="insert into location (location_name,primary_contact,phone,email,address,address_line2,country_id,state_id,city_id,zip_code) values ('$location_name','$primary_contact','$phone','$email','$address','$address2','$country','$state','$city','$zipcode')";
$run_qry=Common::InsertData($add_query);
if($run_qry){
return 'Added Sucessfully';
}
 
}




public  function AddItems(){
	
$display_name=Common::remove_sql_injection((isset($_POST['display_name'])) ? $_POST['display_name'] : null);
$assets_type_id=Common::remove_sql_injection((isset($_POST['assets_type_id'])) ? $_POST['assets_type_id'] : null);
$impact_id=Common::remove_sql_injection((isset($_POST['impact_id'])) ? $_POST['impact_id'] : null);
$description=Common::remove_sql_injection((isset($_POST['description'])) ? $_POST['description'] : null);
$location_id=Common::remove_sql_injection((isset($_POST['location_id'])) ? $_POST['location_id'] : null);
$managed_by_id=Common::remove_sql_injection((isset($_POST['managed_by_id'])) ? $_POST['managed_by_id'] : null);
$department_id=Common::remove_sql_injection((isset($_POST['department_id'])) ? $_POST['department_id'] : null);
$assign_date=Common::remove_sql_injection((isset($_POST['assign_date'])) ? $_POST['assign_date'] : null);


$add_query="insert into items (display_name,assets_type_id,impact_id,description,location_id,department_id,managed_by_id,assign_date,date) values ('$display_name','$assets_type_id','$impact_id','$description','$location_id','$department_id','$managed_by_id','$assign_date',now())";
$run_qry=Common::InsertData($add_query);
if($run_qry){
return 'Added Sucessfully';
}
 
}



public  function AddAgent(){

// code for image uplad 

$agent_pic=$_FILES['agent_image_sent']['name'];
$agent_pic_tmp=$_FILES['agent_image_sent']['tmp_name'];
$agent_pic_type=$_FILES["agent_image_sent"]["type"];

$file_upload_obj= new FileUpload();
$file_upload_obj->createdirectory('Agent');
$file_upload_obj->imagetype($agent_pic,$agent_pic_tmp,$agent_pic_type);

// code image upload end here

$agent_type=Common::remove_sql_injection((isset($_POST['agent_type'])) ? $_POST['agent_type'] : null);
$agent_name=Common::remove_sql_injection((isset($_POST['agent_name'])) ? $_POST['agent_name'] : null);
$email=Common::remove_sql_injection((isset($_POST['email'])) ? $_POST['email'] : null);
$title=Common::remove_sql_injection((isset($_POST['title'])) ? $_POST['title'] : null);
$phone_number=Common::remove_sql_injection((isset($_POST['phone_number'])) ? $_POST['phone_number'] : null);
$mobile_number=Common::remove_sql_injection((isset($_POST['mobile_number'])) ? $_POST['mobile_number'] : null);
$location_id=Common::remove_sql_injection((isset($_POST['location_id'])) ? $_POST['location_id'] : null);
$reporting_manager=Common::remove_sql_injection((isset($_POST['reporting_manager'])) ? $_POST['reporting_manager'] : null);
$signature=Common::remove_sql_injection((isset($_POST['signature'])) ? $_POST['signature'] : null);
$ticket_scope=Common::remove_sql_injection((isset($_POST['ticket_scope'])) ? $_POST['ticket_scope'] : null);
$associate_role=(isset($_POST['associate_role']) ? $_POST['associate_role'] : null);
if($associate_role!=null){

$chk="";  
foreach($associate_role as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  

}
else{
	$chk="";
}

$add_query="insert into agents (agent_type,name,email,title,phone_no,mobile_number,location_id,reporting_manager_id,signature,ticket_scope,associate_role,created_at) values ('$agent_type','$agent_name','$email','$title','$phone_number','$mobile_number','$location_id','$reporting_manager','$signature','$ticket_scope','$chk',now())";
$run_qry=Common::InsertData($add_query);
if($run_qry){
return 'Added Sucessfully';
}
 
}




}


if(isset($_POST['add_impact'])){
AddAssets::AddImpact();
echo Common::SuccessDailog(' New Impact Added ');
} 

if(isset($_POST['add_category_assets'])){
AddAssets::AddCategory();
echo Common::SuccessDailog(' New Category Added ');
} 
if(isset($_POST['add_new_department'])){
AddAssets::AddDepartment();
echo Common::SuccessDailog(' New Department Added ');
} 
if(isset($_POST['add_groups'])){
AddAssets::AddGroup();
echo Common::SuccessDailog(' New Group Added ');
}

if(isset($_POST['add_location'])){
AddAssets::AddLocation();
echo Common::SuccessDailog(' New Location Added ');
}

if(isset($_POST['add_item'])){
AddAssets::AddItems();
echo Common::SuccessDailog(' New Item Added ');
}

if(isset($_POST['add_agent'])){
AddAssets::AddAgent();
echo Common::SuccessDailog(' New Agent Added ');
}

?>