<?php
require_once('Common.php');

class AddAssets{



public  function AddImpact(){

}


public  function AddManagedBy(){

}


public static function  AddCategory(){	

$cat_name=Common::remove_sql_injection($_POST['name']);
$parent_id=Common::remove_sql_injection($_POST['parent_id']);
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


public  function AddGroup(){

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



}



}

if(isset($_POST['add_category_assets'])){
AddAssets::AddCategory();
} 
if(isset($_POST['add_new_department'])){
AddAssets::AddDepartment();
} 
if(isset($_POST['add_groups'])){
AddAssets::AddGroup();
}

?>