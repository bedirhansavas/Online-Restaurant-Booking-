<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservation";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo 'Error Connect' ;
}
else
{
    echo 'successful connect';
}
$phone = $_POST['phone1'];
$sql = "DELETE FROM bookingtable WHERE phone=$phone";

if ($conn->query($sql) === TRUE) {
  
  header("Location: showtable.php");

} else {
  echo "Error deleting record: " . $conn->error;
}

  $conn->close();

?>