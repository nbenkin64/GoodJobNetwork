<div class = "navigation">
		<a class = "activate" href="index.html">Home</a>
	<a href = "search-form.php">Search</a>
	<a href = "DataView.php">DataView</a>
<a href = "imageUpload.php">imageUpload</a>
  <a href = "logout.php">logout</a>
<a href = "passEncryptCheck.php">Accountviewer</a>
</div>

</div>
<?php
$servername = "localhost";
$username = "taha";
$password = "123";

$dbname = "Badges";

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

$sql = "INSERT INTO Badges (Earner, Dater, Badge, Backpack)
VALUES ('$earner','$date' ,'$badge' ,'$backpack')";






if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>
