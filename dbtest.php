<?php

require_once('classes/Connection.php');
require_once('classes/Common.php');
$item_data=Common::FetchData('call abc');
foreach($item_data as $value){

echo $value['name']."<br>";
}