<div class = "navigation">
		<a class = "activate" href="index.html">Home</a>
	<a href = "search-form.php">Search</a>
	<a href = "DataView.php">DataView</a>
<a href = "imageUpload.php">imageUpload</a>
  <a href = "logout.php">logout</a>

</div>

</div>
<?php

$servername = "localhost";
$username = "taha";
$password = "123";

$dbname = "session_example";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, username, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      echo "<br>";
        echo "Id: " . $row["id"]. " - username: " . $row["username"]. "- password: " . $row["password"]. "<br>";
    }
} else {
    echo "0 results";
}

 ?>
