<?php
//database for credentials
require('db_cred.php');
class db_connection
{
	public $db = null;
	public $results = null;

	//connect Database connection
	function db_connect(){
		
		//connection
		$this->db = mysqli_connect(servername,username,password,database);
		
		//testing the connection
		if (mysqli_connect_errno()) {
			return false;
		}else{
			return true;
		}
	}

	//executing the query taking a connection and sql query
	function db_query($sqlQuery){
		
		if (!$this->db_connect()) {
			return false;
		} 
		elseif ($this->db==null) {
			return false;
		}

		//running the query 
		$this->results = mysqli_query($this->db,$sqlQuery);
		
		if ($this->results == false) {
			return false;
		}else{
			return true;
		}
	}

	//executing a query with mysqli real escape string
	function db_query_escape_string($sqlQuery){
		
		//run query 
		$this->results = mysqli_query($this->db,$sqlQuery);
		
		if ($this->results == false) {
			return false;
		}else{
			return true;
		}
	}

	//fetching the data
	function db_fetch_one($sql){
		
		// if the executing query returns false
		if(!$this->db_query($sql)){
			return false;
		} 
		//otherwise, return the record
		return mysqli_fetch_assoc($this->results);
	}

	//fetching all the data
	function db_fetch_all($sql){
		
		// here is executing query and returns false
		if(!$this->db_query($sql)){
			return false;
		} 
		//returning all the records
		return mysqli_fetch_all($this->results, MYSQLI_ASSOC);
	}


	//counting the data
	function db_count(){
		
		//checking if result was set or not
		if ($this->results == null) {
			return false;
		}
		elseif ($this->results == false) {
			return false;
		}
		
		//returning the record
		return mysqli_num_rows($this->results);

	}
}
?>