<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "track_me";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

    $data = $_GET['data'];
    printf($data."\n");

    $sql = "INSERT INTO data(id,data,date,time) VALUES(NULL,'$data',curdate(),curtime())";
    
    mysqli_query($conn, $sql);
    
	echo("done");

?>