<!DOCTYPE html>
<html>
<head>
	<title>WILL NOT BE DISPLAYED</title>
</head>
<body>
<?php
	echo "TESTING CONNECTION... <br>";
	
	//DEFINE CONSTANTS FOR SQL SERVER VALIDATION

	DEFINE('DB_USERNAME','root');
	DEFINE('DB_PASSWORD','108108');
	DEFINE('DB_HOST','localhost');
	DEFINE('DB_DATABASE', 'myDB');
	
	//CONNECT TO THE SERVER

	$sql_conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
	if (mysqli_connect_error()) {
		die('Connect Error (' . mysqli_connecterrno() . ') '.mysqli_connect_error());
	} else {
		echo "CONNECTION SUCCESSFUL <br>";
	}
	echo "CLOSING CONNECTION";
	
	//CLOSE CONNECTION TO SERVER
	$sql_conn->close();
	?>	
</body>
</html>