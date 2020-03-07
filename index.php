<html>
	<head>
		<title>
			index
		</title>
	</head>
	
	<body>
		<center>
		<h1>data</h1>
		<form method="GET" action="save.php">
			<input type="text" name="data">
		</form>
		</center>

        <hr width="80%" height="2px" align="center">
        
        <center>
        <table>
            <thead>
                <th>ID</th>
                <th>Data</th>
                <th>Date</th>
                <th>Time</th>
            </thead>
            <tbody>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "track_me";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM data;";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
?>
                <tr>
                    <td><?php echo($row["id"]) ?></td>
                    <td><?php echo($row["data"]) ?></td>
                    <td><?php echo($row["date"]) ?></td>
                    <td><?php echo($row["time"]) ?></td>
                </tr>
<?php
}
?>

            </tbody>
        </table>
        </center>

	</body>
</html>