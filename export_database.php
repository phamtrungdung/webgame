<?php

require_once("db.php");

$dbobj=new db_gafam;
$servername = "localhost";
$username = "gafam";
$password = "gafam0101";
$dbname="gafam";
$table_name="post_tb";
//$insert_vars="display,thumb,kind,url";
$num=4;

$dbobj->connectDB($servername, $username, $password, $dbname);
if($dbobj->selectNumFromTable($table_name,$num)){
    $outp = "[";
	while($row = $dbobj->result->fetch_assoc()) {
        //echo "name: " . $row["display"]. " - Image: " . $row["thumb"]. "- Attribute:" . $row["kind"]. "- URL:" . $row["url"]."<br>";
	    if ($outp != "[") {$outp .= ",";}
        $outp .= '{"post_id":'  . $row["id"] . ',';
        $outp .= '"display":"'  . $row["display"] . '",';
        $outp .= '"thumb":"'   . $row["thumb"]        . '",';
        $outp .= '"kind":"'   . $row["kind"]        . '",';
        $outp .= '"url":"'   . $row["url"]        . '",';
        $outp .= '"love":"'. $row["love"]     . '"}'; 
    }
	$outp .="]";
	echo $outp;
}
else {
	echo "ERROR IN EXPORTING...";
}

?>