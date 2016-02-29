<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dnd";



//Creating connection
$conn = new mysqli($servername, $username, $password, $dbname);

//checking connection
if ($conn -> connect_error) {
	die("Connection failed: " . $conn -> connect_error);
}

//Receiving
$sql = "SELECT * FROM characters";

//Post variable here
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$name = $row["name"];
		$background = $row["background"];
		$charlevel = $row["charlevel"];
		$class = $row["class"];
		$race = $row["race"];
	}
} else {
	echo "the search returned no results";
}

$location = "../html/index.php?name=".$name."&background=".$background."&charlevel=".$charlevel."&class=".$class."&race=".$race;

header("Location: ".$location);

$conn -> close();
?>