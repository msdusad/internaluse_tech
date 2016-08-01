<?php

require_once('Common.php');
/**
*  
*/
class UserDetail extends Common
{
	private $_userid;
	
	public function __construct()
	{
		if(!isset($_SESSION)){
			session_start();
		}
		$this->_userid=$_SESSION['userid'];
		//$this->userdetails();
	}

public function userdetails(){
$getdetail="select * from user_detail where user_id='$this->_userid'";
//$result=Common::FetchData($getdetail);
$result=array();
$result=$this->FetchData($getdetail);
if($result==false){
echo "Error in Data Fetch";
}
else{

// foreach ($result as $details) { 
// 	echo $this->_email=$details['name'];
// 	$this->_name=$details['mobile_number'];

// }
return $result;

}

}

}

?>