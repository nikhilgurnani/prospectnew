<?php

class mainDB
{
	public $con;
	public $errflag = 0;
	public function connect()
	{
		$con = new mysqli('localhost', 'root', '', 'etherealvista');
		if ($mysqli->connect_errno) 
		{
			echo "Failed to connect to MySQL: " . $mysqli->connect_error;
		}
	}

	public function contactus()
	{
		$uname = $_POST['uname'];
		$umail = $_POST['umail'];
		$text = $_POST['message'];
		$query = "INSERT IGNORE INTO Query VALUES('$uname', '$umail', '$text')";

		connect();

		$result = $con->query($query);
		if(!$result)
		{
			$errflag = -1;
			return $errflag;
		}
		return $errflag;
	}
}

?>