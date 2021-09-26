
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user (fname, lname, email, country, username, password)
VALUES ('".$_POST["fname"]."', '".$_POST["lname"]."', '".$_POST["email"]."', '".$_POST["country"]."', '".$_POST["username"]."','".$_POST["password"]."')";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	 mysqli_close($conn);

?>