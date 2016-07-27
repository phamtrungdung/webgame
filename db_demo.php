<?php
require_once("db.php");

$dbobj=new db_gafam;
$servername = "Localhost via UNIX socket";
$username = "cpses_huvKGnqXUi@localhost";
$password = "";
$dbname="gafam";
$insert_vars="display,thumb,kind,url";
$insert_vals = "'Bao Tuoi tre','tuoitre.png','Tin tuc','http://www.tuoitre.vn'";
$dbobj->connectDB($servername, $username, $password, $dbname);
$table_name="post_tb";
$table_content="id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				display VARCHAR(50) NOT NULL,
				thumb VARCHAR(50) NOT NULL,
				kind VARCHAR(50) NOT NULL,
				url VARCHAR(50) NOT NULL,
				love INT(6) UNSIGNED,
				report INT(6) UNSIGNED
				";
//

$dbobj->createTable($table_name,$table_content);




$dbobj->insertToTable($table_name,$insert_vars,$insert_vals);


?>