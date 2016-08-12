<?php
require_once('Common.php');
require_once('Extrnal/NumberToWordConverter.php');
class Category{
 public $data=array();
 public $index=array();
public $id;
public $parent_id;
public $cat_name;
public $cat_level;

public function get_category(){

// for getting all category from db

$getdata="SELECT id, parent_id, name FROM category ORDER BY id asc";
$query=Common::FetchData($getdata);
foreach ($query as $row) {
    $this->id= $row["id"];
    $this->parent_id= $row["parent_id"] === NULL ? "NULL" : $row["parent_id"];
    $this->data[$this->id] = $row;
    $this->index[$this->parent_id][] = $this->id;

}
}



function display_child_nodes($parent_id, $level)
{
	// for divide into category and sub category

    global $data, $index;
    $parent_id = $parent_id === NULL ? "NULL" : $parent_id;
    if (isset($this->index[$parent_id])) {
        foreach ($this->index[$parent_id] as $id) {
           //echo str_repeat('<span class="category"><i class="icon-angle-double-right"></i></span>', $level) . $this->data[$id]["name"] . "<br>";
        	// $this->cat_level=$level;
        	// $this->cat_name=$this->data[$id]["name"];
            $lv=1;
            $newlevel=convertNum($lv);
            $lv++;

           
			   if($level==0){
			   		   
                            echo '<ul class="assetsCategory"><li><a href="javascript:void(0)" data-toggle="collapse" data-target="#'.$lv.'">'. $this->data[$id]["name"] .'</a></li></ul>';
                               
		   }

else{
  echo ' <div id="'.$lv.'" class="collapse category">
    '. $this->data[$id]["name"] .'
  </div>';
}

           

        	





            $this->display_child_nodes($id, $level + 1);
        }
       
    }
}

}
$category_object=new Category();
$cat_obj_result=$category_object->get_category();
//$res=$category_object->display_child_nodes(NULL, 0);
//print_r($res);

