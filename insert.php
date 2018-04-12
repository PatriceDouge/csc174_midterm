<html>
<body>


<?php
$dbhost = "localhost";
$dbuser = "Midterm";
$dbpass = "coffee";
$dbname = "Midterm";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$query = "INSERT INTO myTable (name, email)
VALUES
('$_POST[name]','$_POST[email]')";

$result = mysqli_query($connection, $query);

echo "Thank you for signing up!";

?>
</body>
</html>

<?php
	mysqli_free_result($result);
	mysqli_close($connection);
?>
