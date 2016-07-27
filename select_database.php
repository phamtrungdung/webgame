<?php
$post_id = $_REQUEST["postid"];
//$post_id=1;

require_once("db.php");

$dbobj=new db_gafam;
$servername = "localhost";
$username = "gafam";
$password = "gafam0101";
$dbname="gafam";
$table_name="post_tb";
$select_vars="love";
$condition = "id=$post_id";
$newlove=0;
$setvalues;
$dbobj->connectDB($servername, $username, $password, $dbname);
//echo "IMPORTED".$display.$thumb.$kind.$url."SUCCESSFUL";
if($dbobj->selectFromTable($table_name,$select_vars,$condition)){
    while($row = $dbobj->result->fetch_assoc()) {
		$newlove=$row["love"]+1;
		//echo "SELECTED: ".$newlove." "." SUCCESSFUL";
	}
	$setvalues="love=$newlove";
	//echo $setvalues.$condition;
	if($dbobj->updateTable($table_name,$setvalues,$condition)){
		echo $newlove;
	}
}
else {
	echo "ERROR IN IMPORTING...";
}


?>