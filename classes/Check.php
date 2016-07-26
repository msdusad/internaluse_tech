<?php
require_once('Common.php');
class Check{
private $_value;
private $_type;

public function __construct($value,$type){
$this->_value=mysql_real_escape_string($value);
$this->_type=mysql_real_escape_string($type);

if($this->_type=='email'){
$this->email();
}
if($this->_type=='username'){
$this->username();
}
if($this->_type=='password'){
$this->password();
}

}

public function email(){
$emailcheck="select * from users where email='$this->_value'";
$obj=Common::NumRows($emailcheck);
if($obj==false){
//echo "";
}
else{
echo "Email Already Exists";
}

}

public function username(){

	$usernamecheck="select * from users where username='$this->_value'";
$obj=Common::NumRows($usernamecheck);
if($obj==false){
//echo  "";
}
else{
echo "Username Already Exists";
}

}

public function password(){
$passwordcheck="select * from users where password='$this->_value'";
$obj=Common::NumRows($passwordcheck);
if($obj==false){
return true;
}
else{
return "Password Already Exists";
}

}


}

//new Check($_POST['search'],$_POST['search_type']);
if(isset($_POST['search'])){
$check_obj=new Check($_POST['search'],$_POST['search_type']);
//print_r($check_obj);
}