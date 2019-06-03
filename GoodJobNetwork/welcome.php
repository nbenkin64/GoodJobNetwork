<div class = "navigation">
		<a class = "activate" href="welcome.php">Home</a>
	<a href = "search-form.php">Search</a>
	<a href = "DataView.php">DataView</a>
<a href = "imageUpload.php">imageUpload</a>
  <a href = "logout.php">logout</a>
<a href = "passEncryptCheck.php">Accountviewer</a>
</div>
<?php

session_start();


// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: login.php");
    exit;
}
?>
