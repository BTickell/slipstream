<!DOCTYPE html>
<style type="text/css">
	body {
		background-color: black;
	}

</style>
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
$to_query = "SELECT * FROM COMMENTS";

// Code past this line assumes connection to DB was successful
function queryDB($query) {
	$conn = $GLOBALS['conn'];
	//echo $query;
	$result = $conn->query($query);
	$row = $result->fetch_assoc();
	echo '<h1 id="search_term"> search results for <span> $term </span> </h1> <br>';
	while ($row) {	
		echo "id: " . $row["userID"] . $row["post"] . "<br>"	;
		$row = $result->fetch_assoc();
	}
}
queryDB($to_query);
$conn->close(); 
?>

</body>
</html>