<div class = "navigation">
		<a class = "activate" href="index.html">Home</a>
	<a href = "search-form.php">Search</a>
	<a href = "DataView.php">DataView</a>
<a href = "imageUpload.php">imageUpload</a>
  <a href = "logout.php">logout</a>
<a href = "passEncryptCheck.php">Accountviewer</a>
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
$sql = "SELECT Earner,Dater,Badge,Backpack FROM Badges";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      echo "<br>";
        echo "Earner: " . $row["Earner"]. " - Dater: " . $row["Dater"]. "- Badge: " . $row["Badge"]. "- Backpack: " . $row["Backpack"]. "<br>";
    }
} else {
    echo "0 results";
}

 ?>
