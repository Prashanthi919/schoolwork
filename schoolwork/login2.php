<?php

 if (isset($_POST['submit'])) {
$email=mysqli_real_escape_string($con, $_POST['email']);
$password=mysqli_real_escape_string($con, $_POST['pass']);

  if($email == 'vydi16%40gmail.com' && $password == 'siva123')
   require('main.php');}
  ?>