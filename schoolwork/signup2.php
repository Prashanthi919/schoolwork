 <?php 
$con=mysqli_connect("localhost","root","","school") or die(mysqli_error($con));
session_start();
 if (isset($_POST['submit'])) {



$admissionno=mysqli_real_escape_string($con, $_POST['admissionno']);
$class=mysqli_real_escape_string($con, $_POST['class']);
$name=mysqli_real_escape_string($con, $_POST['name']);
$gender=mysqli_real_escape_string($con, $_POST['gender']);
$bday=mysqli_real_escape_string($con, $_POST['bday']);
$fathersname=mysqli_real_escape_string($con, $_POST['fathersname']);
$mothersname = mysqli_real_escape_string($con,$_POST['mothersname']);
$caste=mysqli_real_escape_string($con, $_POST['caste']);
$aadhar=mysqli_real_escape_string($con, $_POST['aadhar']);
$address=mysqli_real_escape_string($con, $_POST['address']);
$admdate=mysqli_real_escape_string($con, $_POST['admdate']);


	
	
		$user_reg="insert into student(admission_number,class,name,gender,date_of_birth,fathersname,mothersname,caste,aadhar_number,address,date_of_admission) values('$admissionno','$class','$name','$gender','$bday','$fathersname','$mothersname','$caste','$aadhar','$address','$admdate')";

		$result=mysqli_query($con, $user_reg) or die(mysqli_error($con));
}
		
?>