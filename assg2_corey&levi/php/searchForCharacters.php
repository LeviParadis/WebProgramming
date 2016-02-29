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
		$name = $name." ".$row["name"];
		$background = $background." ".$row["background"];
		$charlevel = $charlevel." ".$row["charlevel"];
		$class =$class." ".$row["class"];
		$race = $race." ".$row["race"];
	}
} else {

}

$location = "../html/index.php?name=".$name."&background=".$background."&charlevel=".$charlevel."&class=".$class."&race=".$race;

header("Location: ".$location);

$conn -> close();
?>