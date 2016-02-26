<?php

	date_default_timezone_set("Asia/Kuala_Lumpur");
	
    $host   = 'localhost';		
    $user   = 'root';			
    $pass   = '';
    $dbname	= 'wordpressdb';

    //$con = mysqli_connect($host,$user,$pass,$dbname);
    $dbcon = new mysqli($host,$user,$pass,$dbname);

	// Check connection
	if ($dbcon->connect_errno)
	{
	  echo "Failed to connect to MySQL: " . $dbcon->connect_error;
	} else {
		//echo "DB connected";
	}


	/** Do not delete this script **/
	// Allow CORS
	if (isset($_SERVER['HTTP_ORIGIN'])) {
	    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
	    header('Access-Control-Allow-Credentials: true');
	    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
	    //header("Content-Type: application/json");
	}

	// Access-Control headers are received during OPTIONS requests
	if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
	    header("Access-Control-Allow-Headers: *");
	}

?>