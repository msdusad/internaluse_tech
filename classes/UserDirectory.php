<?php
require_once('Connection.php');
require_once('Common.php');
 class UserDirectory extends common{

private static $directory_name;
public static function userdirectories(){
	 	if(!isset($_SESSION)){
session_start();
 	}
 	self::$directory_name=("../docs/1/");

if (file_exists(self::$directory_name)) {
        echo "The directory".self::$directory_name." exists";
    } else {
        mkdir("../docs/".self::$directory_name, 0777);
        echo "The directory ".self::$directory_name." was successfully created.";
    }
}



 }

 UserDirectory::userdirectories();

?>