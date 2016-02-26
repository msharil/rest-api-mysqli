<?php

//DB connection
include 'config.php';

$sql = 'SELECT * FROM wp_users';

$result = mysqli_query($dbcon,$sql);

if (!$result = $dbcon->query($sql)) {

	echo "Error";
	exit;

}

if ($result->num_rows === 0) {

    echo "Please try again.";
    exit;	

} else {

	$array = null;

	while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
	  $array[] = $row;
	}

	//Output data to json data format
	echo json_encode($array);

}

// Free result set
mysqli_free_result($result);

// Close connection
mysqli_close($dbcon);

?>