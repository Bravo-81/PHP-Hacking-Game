<?php
	echo "Init\n";

/* mysqli */
	echo "MySQLi Settings\n";
$mysqli = new mysqli("35.197.200.94", "hack_dbadmin", "gm256mwE5pmdpMw0bAN", "PHPHackGame");

	echo "Connection Attempt\n";
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
echo "Query Attempt\n";
$query = "SELECT HackerID, EmailAd FROM Hackers";
$result = $mysqli->query($query);

echo "Results:\n";
/* numeric array */
$row = $result->fetch_array(MYSQLI_NUM);
printf ("%s (%s)\n", $row[0], $row[1]);

/* associative array */
$row = $result->fetch_array(MYSQLI_ASSOC);
printf ("%s (%s)\n", $row["HackerID"], $row["EmailAd"]);

/* associative and numeric array */
$row = $result->fetch_array(MYSQLI_BOTH);
printf ("%s (%s)\n", $row[0], $row["EmailAd"]);

?>