<?php
	$host = "sql6.freesqldatabase.com";
        $user = "sql6439193";
        $pass = "WhL3ZCeLbm";
        $db = "sql6439193";
        $charset = "utf8mb4";

        $conn = mysqli_connect($host, $user, $pass, $db);

	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}
?>


