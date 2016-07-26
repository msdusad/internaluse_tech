<?php
require_once('Common.php');
class Login{
private $_username;
private $_password;

public function __construct($user,$pass){
$this->_username=mysql_real_escape_string($user);
$this->_password=mysql_real_escape_string($pass);
$this->_password=MD5($this->_password);
return $this->login();
}


public  function login(){
$login="select * from users where (username='$this->_username' || email='$this->_username') && password='$this->_password'";
$obj=Common::FetchData($login);
if($obj==false){
echo "Login Failed , Wrong Username/Password";
}
else{

foreach($obj as $loginuser){
	session_start();
	$_SESSION['username']=$loginuser['username'];
      header('Location:../index.php');
}


}

}


}
//  $test_login=new Login('msdusad','msdusad');
?>