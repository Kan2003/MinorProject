<?php

session_start();

//    $num = 1;
// if(isset($_SESSION['logged']) || $_SESSION['logged'] != true){
// if($num == 1){
//     header("location: login.php");
//     // echo "hii";
//     session_unset();
//     session_destroy();
//     exit;
// }

// if($num){
	$_SESSION['logout'] = "You logged Out!!!!"; 
    // session_unset();
    // session_destroy();
	header("location: login.php");
	// exit;
	// header("location: login.php");
// }

?>