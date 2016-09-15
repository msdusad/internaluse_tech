<?php
require_once('Common.php');
require_once('Extrnal/NumberToWordConverter.php');
class Category{
 public $data=array();
 public $index=array();
public  $id;
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
           //echo c. $this->data[$id]["name"]."</button><br>";
        	// $this->cat_level=$level;
        	// $this->cat_name=$this->data[$id]["name"];
  
          

           if($level==0){


    echo '<div class="panel panel-info">
      <div class="panel-heading">'.$this->data[$id]["name"].'</div>
   
    ';

           }
           else{
          
            echo '<div class="panel-body" style="padding:5px;">'.str_repeat('<span class="glyphicon-pencil text-primary" style=""></span>', $level).$this->data[$id]["name"].'</div>';
          
        }

                if($level==0){
    
echo '</div>';

           }

           
        

            $this->display_child_nodes($id, $level + 1);
        }



       
    }
}


public  static function View_Cat(){

$view_cat_data="SELECT * FROM category";
$view_cat_query=Common::FetchData($view_cat_data);
return $view_cat_query;

}

}
$category_object=new Category();
$cat_obj_result=$category_object->get_category();
//$res=$category_object->display_child_nodes(NULL, 0);
//print_r($res);

