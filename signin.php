<?php
  session_start();
$login = false;
$showerr = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    include 'partial/dbconnect.php';

$email = $_POST["email"];
$password = $_POST["password"];

//   $sql = "Select * from signup where email = '$email' AND password = '$password'";
  $sql = "Select * from signup where email = '$email'";
  
  $result = mysqli_query($conn , $sql);
  $num = mysqli_num_rows($result);
  if($num == 1){
    while($row = mysqli_fetch_assoc($result)){
        if(password_verify($password , $row['password'])){
        $login = true;
        session_start();
        $_SESSION['logged'] = true;
        $_SESSION['name'] = $name; 
        $_SESSION['email'] = $email; 
        header("location: index.php");
        }
        else{
            $_SESSION['log'] = "invalid Credentials";
            header("location: login.php");
        }
    }
} 
else{
    // $showerr = "invalid data";
    $_SESSION['log'] = "invalid Credentials";
    header("location: login.php");
}

}
?>