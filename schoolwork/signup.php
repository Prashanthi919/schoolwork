

<!DOCTYPE HTML>
<html>
  <head>
    <title>Signup Page</title>
    <link rel="stylesheet" href="scripte.css" type="text/css">
    <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body background="back.jpg">
    <nav class="navbar  navbar-fixed-top">
<div class="contain">
        <div class="navbar-header">
          
          
          <a href="main.php" class="navbar-brand"><strong><h4 style="color: black;">School Reports</h4></strong></a>

          <br/>
    </div>

        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right ">
            
            <li><a href="Signup.php"><strong><h4  style="color: black;"><i>Add Student Data</i></h4></strong></a></li>
            <li><a href="display.php"><strong><h4  style="color: black;"><i>Display Data</i></h4></strong></a></li>
            <li><a href="logout.php"><strong><h4  style="color: black;"><i>LogOut</i></h4></strong></a></li>

            <li>as</li>
          
          </ul>
      </div>

      
  </div>

    </nav><br/><br/><br/>
 
<div class="container-fluid"  background="pop.jpeg">
            
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <center><h3 style="color:black"><u>Enter Student's Data</u></h3></center><br/>
                        <form method="POST" action="signup2.php">
                    
                            <div class="form-group">
                                <input class="form-control" placeholder="Student Admission Number" name="admissionno"  required = "true">
                          </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Class"  name="class" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name of the Student" name="name" required = "true">
                            </div>
                            <div class="form-group">Gender : 
                               <input type="radio" name="gender" value="male" checked> Male
                               <input type="radio" name="gender" value="female"> Female
                               <input type="radio" name="gender" value="other"> Other  </div>
                                <div class ="form-group">
                                Date of Birth:
                              <input type="date" name="bday">
                                 </div> 
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Father's Name" name="fathersname" required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="Mother's Name" name="mothersname" required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="Caste" name="caste" required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="Aadhar Number" name="aadhar" required = "true">
                            </div>
                           <div class="form-group">
                                <input class="form-control"  placeholder="Address" name="address" required = "true">
                            </div><div class ="form-group">
                                Date of Admission:
  <input type="date" name="admdate">
  </div>

                            <center><a href="#">
                            <button type="submit" name="submit" value="submit" class="btn btn-primary" style="width: 200px;">Submit</button></a></center>
                        </form>
                           
                    </div>
                </div>
            </div>

<br/><br/>
    
</body>
</html>
