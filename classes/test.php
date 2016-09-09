<?php
include_once('Pagination.php');
class Test{

	public $query;
	public $records_per_page;
    public $newquery;

	public  function  __construct(){
		  $this->query = "SELECT * FROM category";       
        $this->records_per_page=3;    
	}

	public function pagination_link(){
 $this->newquery = Pagination::paging($this->query,$this->records_per_page);
        Pagination::paginglink($this->query,$this->records_per_page);  
        return  Pagination::dataview($this->newquery);
	}
}
$pob=new Test();
//  $pobj=$pob->pagination_link();
// foreach($pobj as $viewd){
// echo $viewd['name']."<br>";
// }
?>