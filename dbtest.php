<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("testuser");
$dbpwd = getenv("testpwd");
$dbname = getenv("testdb");

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    exit();
}
echo "Just for fun!";

$query = "SELECT * from users";

$rs = $connection->query($query);
	while ($row = $rs->fetch_array(MYSQLI_ASSOC)) {
    		echo $row['user_id'] . " " . $row['username'] . "\n";
	}

$rs->close();
$connection->close();
?>
