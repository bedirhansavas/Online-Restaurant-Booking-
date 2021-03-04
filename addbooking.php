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


$sql = "INSERT INTO bookingtable (phone,name, surname,month,day, person, food, note)
VALUES ('$phone1','$name1', '$surname1','$month1', '$day1','$person1','$foods','$note1')";


if ($conn->query($sql) === TRUE) {
    header("Location: showtable.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  
  $conn->close();


?>
