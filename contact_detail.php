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
$email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['massage'];

$query = "INSERT INTO `contact` (`name`, `email`, `subject`, `massage`) VALUES ('$name', '$email', '$subject', '$massage')";

$result = mysqli_query($conn , $query);

if($result){
	$_SESSION['massage'] = "Massage Sent successfully"; 
	header("location: contact.php");
}
?>