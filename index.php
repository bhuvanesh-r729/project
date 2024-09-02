<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
  </head>
  <body>
    <h1>Registration form</h1>
    <form action="#" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="name"><br>
    <label for="age">Age</label>
    <input type="number" id="age" placeholder="age" name="age"><br>
    <label for="dob">Dob</label>
    <input type="date" id="dob" name="dob"><br> 
    <!--
    <label>Gender</label>
    <label for="male">Male</label>
    <input type="radio" name="gender" id="male">
    <label for="female">Female</label>
    <input type="radio" name="gender" id="female" ><br>

    <label>Course</label>
    <label>c</label>
    <input type="checkbox" name="c" id="c">
    <label>c++</label>
    <input type="checkbox" name="c" id="c">
    <label>Java</label>
    <input type="checkbox" name="c" id="c"><br>

    <label>City</label>    
    <select id="city" name="city">
        <option>Select a city</option>
        <option>chennai</option>
        <option>madurai</option>
        <option>erode</option>
        <option>tirupur</option>
    </select><br>
    <input type="submit" name="submit">   
    <a href="" type="button">back</a>
    </form>
    <table border="1" cellspacing="0" cellpadding="9">
        <tr>
            <th>Reg no</th> 
            <th>Name</th>
            <th>Course</th>            
        </tr>
        <tr>
            <td>1</td> 
            <td>nithu</td>
            <td>java</td>            
        </tr>
        <tr>
            <td>2</td> 
            <td>udhi</td>
            <td>python</td>            
        </tr>

    </table>

-->
  </body>
</html>
<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $age = $_POST['age'];
  $date = new DateTime($_POST['dob']);
  $dob = $date->format('y-m-d');
  
  echo"<table class='tb'><tr><th>Name</th><th>Age</th><th>Dob</th></tr>";
  echo"<tr><td>".$name."</td>";
  echo"<td>".$age."</td>";
  echo"<td>".$dob."</td></tr></table>";
  
  $query = "insert into details(name,age,dob,created_on) values ('$name','$age','$dob',NOW())";
  $sql=mysqli_query($conn,$query);
  if($sql){
    echo "Insertion sucess";
  }
  else{
    echo "Insertion failed";
  }
  }
?>
