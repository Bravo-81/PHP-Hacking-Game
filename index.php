<?php
	echo "Hello there, stranger!";

// mysqli
$mysqli = new mysqli("35.197.200.94", "hack_dbadmin", "gm256mwE5pmdpMw0bAN", "mysql");
$result = $mysqli->query("SELECT 'Hello, dear MySQL user!' AS _message FROM mysql");
$row = $result->fetch_assoc();
echo htmlentities($row['_message']);

?>