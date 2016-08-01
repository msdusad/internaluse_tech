<?php
require_once('Connection.php');
class Common{
# function for retrive data from database
public static function FetchData($query){
$new_query=mysql_query($query);
if($new_query){
if(mysql_num_rows($new_query)>0){
	$row=array();
while($rows=mysql_fetch_array($new_query)){
$row[]=$rows;
}

return $row;

}

else{
	return false;
	//return "No Record Found";
}
}
else{
	return false;
}

}

# insert data into database
public static function InsertData($query){
$new_query=mysql_query($query);
if(!$new_query){
return mysql_error();
}

else{
	return true;
}

}


public static function NumRows($query){
$new_query=mysql_query($query);
if(mysql_num_rows($new_query)>0){
return true;
}
else{
	return false;
}

}



}

//$obj=Common::FetchData($qury);
?>