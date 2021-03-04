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

$phone1 = $_POST['phone1'];
$name1 = $_POST['name1'];
$surname1 = $_POST['surname1'];
$month1 = $_POST['months1'];
$day1 = $_POST['days1'];
$person1 = $_POST['number'];
$food1 = $_POST['food1'];
$note1 = $_POST['note1'];

$foods = implode("," , $food1);

$sql = "UPDATE bookingtable SET name='$name1', surname='$surname1' ,month='$month1',
 day='$day1', person='$person1', food='$foods', note='$note1' WHERE phone='$phone1'" ;


if ($conn->query($sql) === TRUE) {
  header("Location: showtable.php");
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  
  $conn->close();

  ?>