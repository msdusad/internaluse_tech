<?php
require_once('Common.php');

class AddAssets{



public  static function AddImpact(){

$name=Common::remove_sql_injection($_POST['name']);

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

$cat_name=Common::remove_sql_injection($_POST['name']);
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


$department_name=Common::remove_sql_injection($_POST['department_name']);
$department_description=Common::remove_sql_injection($_POST['department_description']);
$department_head=Common::remove_sql_injection($_POST['department_head']);
$department_prime_user=Common::remove_sql_injection($_POST['department_prime_user']);

$add_query="insert into department (name,description,department_head,prime_user) values ('$department_name','$department_description','$department_head','$department_prime_user')";
$run_qry=Common::InsertData($add_query);
if($run_qry){

return 'Added Sucessfully';

}

	}


public static  function AddGroup(){

$group_name=Common::remove_sql_injection($_POST['group_name']);
$group_description=Common::remove_sql_injection($_POST['group_description']);
$group_agents=Common::remove_sql_injection($_POST['group_agents']);

$add_query="insert into groups (group_name,description,agents) values ('$group_name','$group_description','$group_agents')";
$run_qry=Common::InsertData($add_query);
if($run_qry){
return 'Added Sucessfully';
}


}




public  function AddLocation(){

$location_name=Common::remove_sql_injection($_POST['location_name']);
$primary_contact=Common::remove_sql_injection($_POST['primary_contact']);
$email=Common::remove_sql_injection($_POST['email']);
$phone=Common::remove_sql_injection($_POST['phone']);
$address=Common::remove_sql_injection($_POST['address']);
$address2=Common::remove_sql_injection($_POST['address2']);
$country=Common::remove_sql_injection($_POST['country']);
$state=Common::remove_sql_injection($_POST['state']);
$city=Common::remove_sql_injection($_POST['city']);
$zipcode=Common::remove_sql_injection($_POST['zipcode']);


$add_query="insert into location (location_name,primary_contact,phone,email,address,address_line2,country_id,state_id,city_id,zip_code) values ('$location_name','$primary_contact','$phone','$email','$address','$address2','$country','$state','$city','$zipcode')";
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

?>