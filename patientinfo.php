<?php  
session_start();
$conn = mysqli_connect('localhost','root');

// if($conn){
// 	echo 'success';
// }
// else{
// 	echo "no ";
// }

mysqli_select_db($conn , 'medicare');

$name = $_POST['name'];
$gender = $_POST['gender'];
$number = $_POST['number'];
$birth = $_POST['birth'];
$email = $_POST['email'];
$address = $_POST['address'];
$department = $_POST['department'];
$date = $_POST['date'];
$time = $_POST['time'];


$query = "INSERT INTO `patient` (`name`, `gender`, `phone`, `birth`, `email`, `address`, `department`, `appointment date`, `time`) VALUES ( '$name', '$gender', '$number', '$birth', '$email', '$address', '$department', '$date', '$time')";

$result = mysqli_query($conn , $query);

if($result){
	$_SESSION['patient'] = "Your Appointment Boooked Successfully"; 
	header("location: d1-Appoinment.php");
}
?>