<?php
/**
* Class request provides base for requesting data from database
*
184.72.226.188
port: 3306
user: root
password: habitat
dbname: habitatforhumanity
*/
class Request {
	//public $host = 'localhost';
	public $host = '184.72.232.112';
	public $user = 'root';
	public $pass = 'habitat';
	public $dbname = 'habitatforhumanity';
	public $port = 3306;
  //public $connection = Connect();

	/**
	* Function Connect()
	*
	*	establish database connection to local MySQL
	*/
	public function Connect() {
		$mysqli = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
		if ($mysqli->connect_errno) {
			echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		//echo $mysqli->host_info . "\n";
		return $mysqli;
	}

	public function listFamilies() {
		$mysqli = $this->Connect();
		$sql = 'SELECT FamilyName, FamilyId, SweatHours FROM `FAMILY`';
		$results = $mysqli->query($sql);
		$return = array();
		foreach($results as $result) {
			//var_dump($result);
			$return[] = $result;
		}
		return $return;
	}

	/**
	* Function makeRequest
	*
	* @param string $method
	*		Method to append to base url for request
	*
	*	@return string
	*		Response from data source as string
	*/
	public function makeRequest($method) {
		$url = $this->host . $method;
		$ch = curl_init($url);
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;	
	}	

}
