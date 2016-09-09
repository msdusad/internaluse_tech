<?php
$dbHost='localhost';
		$dbUser='root';
		$dbPass='';
		$dbName='techvedic';
		function SQL($d)
	{
		global $db;
		$e=$db->real_escape_string($d);
		return $e;
	}

$db=new mysqli($dbHost,$dbUser,$dbPass,$dbName);
	if($db->connect_errno)
	{
		echo "Failed to connect to MySQL: (" . $db->connect_errno .")".$db->connect_error;
	}
	global $db;
$eID=SQL('v-0752');
		$eMail=SQL('mehender.singh@techvedic.co.in');

	$chk_qry=$db->query("SELECT emp_reg_id FROM tv_emp_registration WHERE emp_off_email='$eMail' AND emp_id='".$eID."'");
			$rows=$chk_qry->num_rows;
			if($rows==1) { echo "valid"; }
			else{
				echo "no";
			}
		