<?php

class db_gafam {
var $servername = "localhost";
var $username = "root";
var $password = "";

var $conn;
var $result;
var $debug=0;

	function connectDB($servername, $username, $password, $dbname) {
		// Create connection
		
		$this->conn = new mysqli($servername, $username, $password, $dbname);
		
		// Check connection
		if ($this->conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			
		} 	
		if($this->debug){
			echo "Connected successfully";
		}
		
	}
	
	function createDB($db_name) {
		// Create database
		$sql = "CREATE DATABASE $db_name";
		if ($this->conn->query($sql) === TRUE) {
			if($this->debug) echo "Database $db_name created successfully";
			return true;

		} else {
			echo "Error creating database $db_name: " . $this->conn->error;
			return false;
		}
	}	
	function createTable($table_name,$table_content) {
		// Create Table	
		$sql = "CREATE TABLE $table_name ($table_content)";
		if ($this->conn->query($sql) === TRUE) {
			if($this->debug) echo "Table $table_name created successfully";
			return 1;
		} else {
			echo "Error creating table: " . $this->conn->error;
			return 0;
		}
	}
	function insertToTable($table_name,$insert_vars,$insert_vals) {
		// insert new records to Table	
		$sql = "INSERT INTO $table_name ($insert_vars) VALUES ($insert_vals)";
		if ($this->conn->query($sql) === TRUE) {
			if($this->debug) echo "Table $table_name inserted successfully";
			return 1;
		} else {
			echo "Error inserting table: " . $this->conn->error;
			return 0;
		}
	}
	
	function selectFromTable($table_name,$select_vars,$condition) {
		// Select Data from Table	
		$this->result=null;
		$sql = "SELECT $select_vars FROM $table_name WHERE $condition";
		$this->result=$this->conn->query($sql);
		if ($this->result->num_rows > 0) {
			// Have output data
			return 1;
		} else {
			return 0;
		}
	}
	
	function selectNumFromTable($table_name,$data_num) {
		// Select Data from Table	
		$this->result=null;
		$sql = "SELECT * FROM $table_name LIMIT $data_num";
		$this->result=$this->conn->query($sql);
		if ($this->result->num_rows > 0) {
			// Have output data
			return 1;
		} else {
			return 0;
		}
	}
	
	function deleteFromTable($table_name,$condition) {
		// insert new records to Table	
		$sql = "DELETE FROM $table_name WHERE $condition";
		if ($this->conn->query($sql) === TRUE) {
			if($this->debug) echo "Record deleted successfully";
			return 1;
		} else {
			echo "Error deleting record: " . $this->conn->error;
			return 0;
		}
	}

	function updateTable($table_name,$setvalues,$condition) {
		// insert new records to Table	
		$sql = "UPDATE $table_name SET $setvalues WHERE $condition";
		if ($this->conn->query($sql) === TRUE) {
			if($this->debug) echo "Record updated successfully";
			return 1;
		} else {
			echo "Error updating record: " . $this->conn->error;
			return 0;
		}
	}
	
	function addColumnToTable($table_name,$column) {
		// insert new records to Table	
		$sql = "ALTER TABLE $table_name SADD $column";
		if ($this->conn->query($sql) === TRUE) {
			if($this->debug) echo "Column added successfully";
			return 1;
		} else {
			echo "Error adding column: " . $this->conn->error;
			return 0;
		}
	}	
}

?>