<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include("connect/connection.php");
$result = mysql_query("SELECT first_name FROM user_details WHERE emailid='anin@gmail.com'");
		while ($row = mysql_fetch_object($result)) {
			$first_name = $row->first_name;
		echo $first_name;
		
		}
class GetDataByEmail
{
 
    public function userDataByEmail($email)
    {
		$result = mysql_query("SELECT * FROM user_details WHERE emailid='$email'");
		while ($row = mysql_fetch_object($result)) {
			$id = $row->id;
		return $id;
		
		}
	}	
	
	
	 public function userFnameByEmail($email)
    {
		$result = mysql_query("SELECT first_name FROM user_details WHERE emailid='$email'");
		while ($row = mysql_fetch_object($result)) {
			$first_name = $row->first_name;
		return $first_name;
		
		}
	}

	 public function userDateByEmail($email)
    {
		$result = mysql_query("SELECT date_at FROM user_details WHERE emailid='$email'");
		while ($row = mysql_fetch_object($result)) {
			$date_value = $row->date_at;
		return $date_value;
		
		}
	}
	   
}

?>