
<?php
$con=mysqli_connect("localhost","root","","school");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM student");

echo "<table border='1'>
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