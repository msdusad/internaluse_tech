<?php
require_once('Common.php');
class Register{
	private $_name;
	private $_username;
    private $_password;
    private $_email;

public function __construct($name,$user,$pass,$mail){
$this->_name=mysql_real_escape_string($name);
$this->_username=mysql_real_escape_string($user);
$this->_password=mysql_real_escape_string($pass);
$this->_password=MD5($this->_password);
$this->_email=mysql_real_escape_string($mail);
return $this->register();
}

public function register(){
	$register="insert into users (username,password,email,created_at,updated_at) values('$this->_username','$this->_password','$this->_email',now(),now());";
$obj=Common::InsertData($register);
return $obj;
}

}

