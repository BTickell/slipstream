<!DOCTYPE html>
<html>
<head>
	<title>Slipstream | Search</title>
	<link rel="stylesheet" type="text/css" href="../style/reset.css">
	<link rel="stylesheet" type="text/css" href="../style/search.css">
</head>
<body>
<div id="banner">	
<br/>
</div>
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
	$term = $GLOBALS['term'];
	$conn = $GLOBALS['conn'];
	//echo $query;
	$result = $conn->query($query);
	$row = $result->fetch_assoc();
	echo '<h1 id="search_term"> search results for <span>' . $term . '</span> </h1>';
	echo '<div id="feed"> <ol id="feed_list">';
	while ($row) {	
		echo "<li>" . $row["post"] . " posted by <span class='username'>" . $row["userID"] . "</span></li>";
		$row = $result->fetch_assoc();
	}
	echo '</ol> </div>';
}
queryDB($to_query);
$conn->close(); 
?>

</body>
</html>