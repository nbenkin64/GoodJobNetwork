<html>
<body>
<form method="post" enctype="multipart/form-data">
<input type="file" name="image"/>
<input type="submit" name="submit" value="Upload"/>
</form>
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

    if(isset($_POST['submit']))
    {
     if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
     {
        echo " error ";
     }
     else
     {



        $image = $_FILES['image']['tmp_name'];
        $image = addslashes(file_get_contents($image));
        saveimage($image);
     }

    }
		function im($adapt)
		{

			$result = query;

		}
    function saveimage($image)
    {
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
        $qry="insert into tablename (name) values ('$image')";
        $result=mysqli_query($conn,$qry);
        if($result)
        {
            echo " <br/>Image uploaded.";
            header('location:urlofpage.php');
        }
        else
        {
            echo " error ";
        }
    }
?>
</body>
</html>
