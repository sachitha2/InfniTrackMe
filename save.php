<?php
header('Content-Type: application/json');
$servername = "localhost";
$username = "oemdesw10qk8_trackMe";
$password = "trackMe";
$dbname = "oemdesw10qk8_trackMe";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

    $data = $_GET['data'];
    // printf($data."\n");

    $sql = "INSERT INTO data(id,data,date,time) VALUES(NULL,'$data',curdate(),curtime())";
    
    mysqli_query($conn, $sql);
    
    $arr['data'] = "done"; 
    $arr['chata'] = "By infini";
 
    $json = json_encode($arr);

    echo($arr);

?>