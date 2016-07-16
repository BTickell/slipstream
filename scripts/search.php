<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
DEFINE('DB_USERNAME', 'root');
DEFINE('DB_PASSWORD', '108108');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_DATABASE', 'myDB');

$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (mysqli_connect_error()) {
 die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
}
$term = $_GET["search"];
$to_query = "SELECT * FROM $term";
if($conn->multi_query($to_query)) {
	echo "FOUND";
}
else {
	echo "NOT FOUND";
}
/*
if ($conn->query("SELECT 1 FROM MyGuest LIMIT 1") === TRUE) {
	echo "TABLE EXISTS";
} else {
	echo "TABLE DOES NOT EXIST";
}

*/

$conn->close(); 
?>

</body>
</html>