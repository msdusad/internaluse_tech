<?php
require_once('Common.php');

class DeleteAssets{

public  static function DeleteImpact(){
$id=Common::remove_sql_injection($_POST['id']);
$add_query="delete from impact where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){

return 'Deleted Sucessfully';

}

}


public static  function DeleteManagedBy(){
return "df";
}


public static function  DeleteCategory(){	

 $id=Common::remove_sql_injection($_POST['id']);

$add_query="delete from category where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){

return 'Deleted Sucessfully';

}

	}

public static function DeleteDepartment(){

$id=Common::remove_sql_injection($_POST['id']);
$add_query="delete from  department where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){

return 'Deleted Sucessfully';

}

	}


public static  function DeleteGroup(){

$id=Common::remove_sql_injection($_POST['id']);
$add_query="delete from groups where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){
return 'Deleted Sucessfully';
}


}




public  function DeleteLocation(){

$id=Common::remove_sql_injection($_POST['id']);

$add_query="delete from  location where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){
return 'Deleted Sucessfully';
}
 
}

}


if(isset($_POST['delete_impact'])){
DeleteAssets::DeleteImpact();
echo Common::SuccessDailog('  Category Updated');
} 

if(isset($_POST['delete_category_assets'])){
DeleteAssets::DeleteCategory();
echo Common::SuccessDailog('  Category Updated');
} 
if(isset($_POST['delete_new_department'])){
DeleteAssets::DeleteDepartment();
echo Common::SuccessDailog('  Department Updated ');
} 
if(isset($_POST['delete_groups'])){
DeleteAssets::DeleteGroup();
echo Common::SuccessDailog(' New Group Updated ');
}

if(isset($_POST['delete_location'])){
DeleteAssets::DeleteLocation();
echo Common::SuccessDailog(' New Location Updated ');
}

?>