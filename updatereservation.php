<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Bedirhan Savaş</title>

<link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>
  
<form action="updatebooking.php" method="POST">
 <br>
<div class="center" >
<br><br>
    <input type="text" id="phone" name="phone1" class="input1" placeholder="Enter phone number"  >
  
</div>

  <div class="center">
      <br>
<input type="text" id="name" name="name1" class="input1" placeholder="Enter name">
    
  </div>
  
  
  <div class="center">
      <br>
      <input type="text" id="surname" name="surname1" class="input1" placeholder="Enter surname">
    
  </div>
   
  <div class="center">
  <br>
  <select name="months1" id="months">
    <option value="January">JANUARY</option><option value="February">FEBRUARY</option>
    <option value="MARCH">MARCH</option><option value="April">APRIL</option>
    <option value="May">MAY</option><option value="June">JUNE</option>
    <option value="July">JULY</option><option value="August">AUGUST</option>
    <option value="September">SEPTEMBER</option><option value="October">OCTOBER</option>
    <option value="November">NOVEMBER</option><option value="December">DECEMBER</option>
  </select> 
  <select name="days1" id="days">
    <option value="1">1</option><option value="2">2</option>
    <option value="3">3</option><option value="4">4</option>
    <option value="5">5</option><option value="6">6</option>
    <option value="7">7</option><option value="8">8</option>
    <option value="9">9</option><option value="10">10</option>
    <option value="11">11</option><option value="12">12</option>
    <option value="13">13</option><option value="14">14</option>
    <option value="15">15</option><option value="16">16</option>
    <option value="17">17</option><option value="18">18</option>
    <option value="19">19</option><option value="20">20</option>
    <option value="21">21</option><option value="22">22</option>
    <option value="23">23</option><option value="24">24</option>
    <option value="25">25</option><option value="26">26</option>
    <option value="27">27</option><option value="28">28</option>
    <option value="29">29</option><option value="29">29</option>
    <option value="30">30</option><option value="31">31</option>
  </select>

  </div>

  <div class="center">
  <label class="radio1" >1
    <input type="radio" name="number" id="person" value="1">
  </label>
  <label class="radio1">2 - 3
    <input type="radio" name="number" id="person" value="2-3">
  </label>
  <label class="radio1">4 - 5
    <input type="radio" name="number" id="person" value="4-5">
  </label>
  <label class="radio1">5+
    <input type="radio" name="number" id="person" value="5+">
  </label>
  
    </div> 
 
 
    <div class="center">
    <label class="checkbox1">SOUP
      <input type="checkbox" value="Soup" name="food1[]" id="food1" >
     
    </label>
    <label class="checkbox1">MEAT
      <input type="checkbox" value="Meat" name="food1[]" id="food1">
     
    </label>
    <label class="checkbox1">SALAD
      <input type="checkbox" value="Salad" name="food1[]" id="food1">
     
    </label>
    <label class="checkbox1">DESSERT
      <input type="checkbox" value="Dessert" name="food1[]" id="food1">
     
    </label>
  </div> 

  <div class="center">
  <br>
      <input type="text" id="note" name="note1" class="input1" placeholder="Enter note">
    
  </div>
  
    <br><br><br>
    <div class="center">
    <input id="update" class="button1" type="submit" value="UPDATE " style="background-color: deepskyblue;"/></a>
    </div>
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
  <script src='update.js'></script>
  </form>
  
</body>
</html>
