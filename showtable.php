

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Bedirhan Savaş</title>

<link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>
 
   <br><br>
    <div class="text">
      RESERVATIONS 
    </div>

  <table class="table1">
  <tr>
      <td>PHONE</td>
      <td>NAME</td>
      <td>SURNAME</td>
      <td>MONTH</td>
      <td>DAY</td>
      <td># OF PERSON</td>
      <td>FOOD</td>
      <td>NOTE</td>
    </tr>

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

$sql= "SELECT * FROM bookingtable";
$result = $conn->query($sql);

if($result->num_rows > 0 ){
  while($row = $result->fetch_assoc()){
    echo "<tr><br><td>".$row["phone"]."</td><td>".$row["name"]."</td><td>".$row["surname"]."</td><td>".$row["month"]."</td>
    <td>".$row["day"]."</td> <td>".$row["person"]."</td><td>".$row["food"]."</td><td>".$row["note"]."</td></tr>" ;

  }
  echo "</table>" ;
}
else{
  echo "0 result";
}
$conn->close(); 
?>

</table>
<br><br>
<div class="center">
    <a href="booking.html">  <input class="button1" type="submit" value="GO TO HOME PAGE" style="background-color: limegreen;" />
  </div>
  </div>

</html>
