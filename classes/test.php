<?php
include_once('Pagination.php');
class Test{

	public  function test(){
		  $query = "SELECT * FROM category";       
        $records_per_page=3;
        $newquery = Pagination::paging($query,$records_per_page);
        Pagination::paginglink($query,$records_per_page);  
        return  Pagination::dataview($newquery);
       
	}
}
$pob=new Test();
?>