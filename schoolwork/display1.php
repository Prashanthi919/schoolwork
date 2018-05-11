

<!DOCTYPE HTML>
<html>
  <head>
    <title>Signup Page</title>
    <link rel="stylesheet" href="scripte.css" type="text/css">
    <script src="dd.js"></script>
    <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body background="new1.jpg">
    <nav class="navbar  navbar-fixed-top">
<div class="contain">
        <div class="navbar-header">
          
          
          <a href="main.php" class="navbar-brand"><strong><h4 style="color: black;">School Reports</h4></strong></a>

          <br/>
    </div>

        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right ">
            
            <li><a href="Signup.php"><strong><h4  style="color: black;"><i>Add Student Data</i></h4></strong></a></li>
            <li><a href="settings.php"><strong><h4  style="color: black;"><i>Display Data</i></h4></strong></a></li>
            <li><a href="logout.php"><strong><h4  style="color: black;"><i>LogOut</i></h4></strong></a></li>

            <li>as</li>
          
          </ul>
      </div>

      
  </div>

    </nav><br/><br/><br/><br/><br/><br/>
    <button class="btn">Print</button>

    <div style="position: absolute;margin-left: 200px;"" id = "table" class="table">
    <?php
$con=mysqli_connect("localhost","root","","school");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$classno=mysqli_real_escape_string($con, $_POST['classno']);

$result = mysqli_query($con,"SELECT * FROM student where class = '$classno'");
echo "<table border='2' cellpadding = '20'>
<tr>
<th>Admission Number</th>
<th>Name</th>
<th>Gender</th>
<th>Date of Birth</th>
<th>Father's Name</th>
<th>Mother's Name</th>
<th>Caste</th>
<th>Aadhar Number</th>
<th>Address</th>
<th>Date of Admission</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
 
  echo "<td>" . $row['admission_number'] . "</td>";
   echo "<td>" . $row['name'] . "</td>";
   echo "<td>" . $row['gender'] . "</td>";
   echo "<td>" . $row['date_of_birth'] . "</td>";
   echo "<td>" . $row['fathersname'] . "</td>";
   echo "<td>" . $row['mothersname'] . "</td>";
   echo "<td>" . $row['caste'] . "</td>";
   echo "<td>" . $row['aadhar_number'] . "</td>";
   echo "<td>" . $row['address'] . "</td>";
   echo "<td>" . $row['date_of_admission'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>

 </div>

<script src="jquery.min.js">
  
</script>
<script> $('.btn').click(function(){
  var printme=document.getElementById('table');
  var wme=window.open("","","width=1300,height=700");
  wme.document.write(printme.outerHTML);
  wme.document.close();
  wme.focus();
  wmr.print();
  wme.close();

})</script>
<br/><br/>
    
</body>
</html>

