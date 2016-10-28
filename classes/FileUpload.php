<?php

require_once('Common.php');
require_once('UserDirectory.php');

class FileUpload{

	public   $create_directory_name;
	public   $image_name;
	public   $image_var;
	public   $image_name_tmp;
	public   $filesize;
	public   $rename_file;
   
    public $directory_create;

    public function __construct(){

                  if(!isset($_SESSION)){

             session_start();
    }

}



	public  function createdirectory($get_directory_name){
	
		$this->create_directory_name=$get_directory_name;
 	$this->create_directory_name="../docs/".$_SESSION['userid']."/".$this->create_directory_name."/";

if (file_exists($this->create_directory_name)) {
       // echo "The directory".self::$directory_name." exists";
    } else {
        mkdir("../docs/".$this->create_directory_name, 0777);
        //echo "The directory ".self::$directory_name." was successfully created.";
    }

	}

	public  function imagetype($img,$img_tmp,$img_type){
		$this->image_name=$img;
        $this->image_name_tmp=$img_tmp;
        $this->image_type=$img_type;

 $allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".",$this->image_name);
$extension = end($temp);
if ((($this->image_type == "image/gif")
|| ($this->image_type== "image/jpeg")
|| ($this->image_type == "image/jpg")
|| ($this->image_type == "image/pjpeg")
|| ($this->image_type == "image/x-png")
|| ($this->image_type  == "image/png"))
&& in_array($extension, $allowedExts)){
    
    //$pic=$_FILES['profilepic']['name'];
     $this->image_var=$this->create_directory_name.$this->image_name;
      
      $this->renamefile();
    //move_uploaded_file($_FILES['profilepic']['tmp_name'],$profilepic);
} 



	}

		public  function renamefile(){
           $addtional="1";
        while (file_exists($this->image_var)) {
    $info=pathinfo($this->image_var);
    $this->image_var=$info['dirname']."/".$info['filename'].$addtional.'.'.$info['extension'];
    $this->image_name=$info['filename'].$addtional.'.'.$info['extension'];
}
move_uploaded_file($this->image_name_tmp,$this->image_var);
return "Renamed and uploaded";

	}

	public static function filesize(){

	}

	public static function uploadfile(){

	}

}





?>