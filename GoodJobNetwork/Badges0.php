<?php
$servername = "localhost";
$username = "root";
$password = "";

$dbname = "badges";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$earner = $_POST['Earner'];
$date = $_POST['Date'];
$badge = $_POST['Badge'];
$backpack = $_POST['Backpack'];

$sql = "INSERT INTO badges (Earner, Dater, Badge, Backpack)
VALUES ('$earner','$date' ,'$badge' ,'$backpack')";






if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
