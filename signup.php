<?php  
session_start();
$conn = mysqli_connect('localhost','root');

if($conn){
	// $_SESSION['nameexist'] = "TRY again Name & Email  is alaredy exist !!!"; 
	header("location: login.php");
}
else{
	echo "no ";
}


mysqli_select_db($conn , 'medicare');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$hash = password_hash($password , PASSWORD_DEFAULT);


// check whether name is exist 
$existsql = "SELECT * FROM `signup` WHERE  email = '$email'";

$result = mysqli_query($conn , $existsql);

$numExistRows = mysqli_num_rows($result);
if($numExistRows > 0 )
{
 $exist = true ; 
 $_SESSION['nameexist'] = "TRY again Email  is alaredy exist !!!"; 
	header("location: login.php");
}
else {
	$exist = false ; 
}

if($exist == false){
$query = " insert into signup (name , email , password) values ('$name' , '$email' , '$hash')";

$result = mysqli_query($conn , $query);
if($result){
	$_SESSION['status'] = "Your account is Created successfully!!!"; 
	header("location: login.php");
}
}
?>