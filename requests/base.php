<?php
/**
* Class request provides base for requesting data from database
*
*/
class Request {
	public $host = 'ec2-107-21-141-';
	

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
