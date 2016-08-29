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

}

?>