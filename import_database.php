<?php
$display = $_REQUEST["sitename"];
$thumb = $_REQUEST["siteimage"];
$kind = $_REQUEST["siteattr"];
$url = $_REQUEST["siteurl"];

require_once("db.php");

$dbobj=new db_gafam;
$servername = "localhost";
$username = "gafam";
$password = "gafam0101";
$dbname="gafam";
$table_name="post_tb";
$insert_vars="display,thumb,kind,url";
$insert_vals = "'$display','$thumb','$kind','$url'";

$dbobj->connectDB($servername, $username, $password, $dbname);
//echo "IMPORTED".$display.$thumb.$kind.$url."SUCCESSFUL";
if($dbobj->insertToTable($table_name,$insert_vars,$insert_vals)){

	echo "IMPORTED: ".$display." ".$thumb." ".$kind." ".$url." SUCCESSFUL";
}
else {
	echo "ERROR IN IMPORTING...";
}


?>