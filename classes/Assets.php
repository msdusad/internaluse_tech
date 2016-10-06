<?php

require_once('Common.php');

Class Assets{


public static function Impact(){
$Impact_query="select * from impact";
$impact_data=Common::FetchData($Impact_query);
return $impact_data;

}
public static function Assets_type(){
	$assets_query="select * from assets_type";
$assets_data=Common::FetchData($assets_query);
return $assets_data;

}

public static function Department($var){
	if($var==''){
    	$department_query="select * from department ";
	}
	else{
	$department_query="select * from department where id='$var'";
	}


$department_data=Common::FetchData($department_query);
return $department_data;

}

public static function Location($var){
	if($var==''){
    	$location_query="select * from location ";
	}
	else{
	$location_query="select * from location where id='$var'";
	}


$location_data=Common::FetchData($location_query);
return $location_data;

}

}

?>