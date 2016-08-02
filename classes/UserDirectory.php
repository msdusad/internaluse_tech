<?php
//require_once('Connection.php');
require_once('Common.php');
 	if(!isset($_SESSION)){
session_start();
 	}
 	
 class UserDirectory extends common{

private static $directory_name;
private static $profile_directory_name;
private static $maildocs_directory_name;
private static $commondocs_directory_name;


public static function userdirectories(){
	
 	self::$directory_name=("../docs/".$_SESSION['userid']."/");

if (file_exists(self::$directory_name)) {
        echo "The directory".self::$directory_name." exists";
    } else {
        mkdir("../docs/".self::$directory_name, 0777);
        echo "The directory ".self::$directory_name." was successfully created.";
    }
}

public static function ProfileDirectory(){

 	self::$profile_directory_name=("../docs/".$_SESSION['userid']."/profile/");

if (file_exists(self::$profile_directory_name)) {
        echo "The directory".self::$profile_directory_name." exists";
    } else {
        mkdir("../docs/".$_SESSION['userid']."/".self::$profile_directory_name, 0777);
        echo "The directory ".self::$profile_directory_name." was successfully created.";
    }

}


public static function MailDocsDirectory(){

 	self::$maildocs_directory_name=("../docs/".$_SESSION['userid']."/MailDocs/");

if (file_exists(self::$maildocs_directory_name)) {
        echo "The directory".self::$maildocs_directory_name." exists";
    } else {
        mkdir("../docs/".$_SESSION['userid']."/".self::$maildocs_directory_name, 0777);
        echo "The directory ".self::$maildocs_directory_name." was successfully created.";
    }

}



public static function CommonDocsDirectory(){

 	self::$commondocs_directory_name=("../docs/".$_SESSION['userid']."/CommonDocs/");

if (file_exists(self::$commondocs_directory_name)) {
        echo "The directory".self::$commondocs_directory_name." exists";
    } else {
        mkdir("../docs/".$_SESSION['userid']."/".self::$commondocs_directory_name, 0777);
        echo "The directory ".self::$commondocs_directory_name." was successfully created.";
    }

}

 }

// UserDirectory::userdirectories();

?>