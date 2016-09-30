<?php
require_once('Common.php');

class UpdateAssets{



public  static function UpdateImpact(){

return "asd";
}


public static  function UpdateManagedBy(){
return "df";
}


public static function  UpdateCategory(){	

$cat_name=Common::remove_sql_injection($_POST['name']);
if ($_POST['parent_id'] === '') {
    $_POST['parent_id'] = 'NULL'; // or 'NULL' for SQL
}
$parent_id=$_POST['parent_id'];
 $id=$_POST['id'];

$add_query="update category set name='$cat_name',parent_id='$parent_id' where id='$id')";
$run_qry=Common::InsertData($add_query);
if($run_qry){

return 'Updated Sucessfully';

}

	}

public static function UpdateDepartment(){


$department_name=Common::remove_sql_injection($_POST['department_name']);
$department_description=Common::remove_sql_injection($_POST['department_description']);
$department_head=Common::remove_sql_injection($_POST['department_head']);
$department_prime_user=Common::remove_sql_injection($_POST['department_prime_user']);
$id=Common::remove_sql_injection($_POST['id']);
$add_query="update department set name='$department_name',description='$department_description',department_head='$department_head',prime_user='$department_prime_user' where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){

return 'Updated Sucessfully';

}

	}


public static  function UpdateGroup(){

$group_name=Common::remove_sql_injection($_POST['group_name']);
$group_description=Common::remove_sql_injection($_POST['group_description']);
$group_agents=Common::remove_sql_injection($_POST['group_agents']);
$id=Common::remove_sql_injection($_POST['id']);
$add_query="update groups set group_name='$group_name',description='$group_description',agents='$group_agents' where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){
return 'Updated Sucessfully';
}


}




public  function UpdateLocation(){

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
$id=Common::remove_sql_injection($_POST['id']);

$add_query="update location set location_name='$location_name',primary_contact='$primary_contact',phone='$phone',email='$email',address='$address',adderss_line2='$address2',country_id='$country',state_id='$state',city_id='$city',zip_code='$zipcode' where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){
return 'Updated Sucessfully';
}
 
}

}

if(isset($_POST['add_category_assets'])){
AddAssets::UpdateCategory();
echo Common::SuccessDailog(' New Category ');
} 
if(isset($_POST['add_new_department'])){
AddAssets::UpdateDepartment();
echo Common::SuccessDailog(' New Department ');
} 
if(isset($_POST['add_groups'])){
AddAssets::UpdateGroup();
echo Common::SuccessDailog(' New Group ');
}

if(isset($_POST['add_location'])){
AddAssets::UpdateLocation();
echo Common::SuccessDailog(' New Location ');
}

?>