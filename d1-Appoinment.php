<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicare</title>

    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="style2.css"> -->
    
    <script src="https://kit.fontawesome.com/c3e8725e16.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <section id="Header">
        <a href="#"><i class="fa-sharp fa-solid fa-heart-pulse"></i>Medicare</a> 


        <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                <li><a class="active" href="doctor.php">Doctors</a></li>
                <li><a href="medicine.php">Store</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <button onclick="window.location.href='logout.php';">Log out</button>
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <!-- <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a> -->
            <i id="bar" class="fas fa-outdent"></i>

        </div>
    </section>
    <?php
    if(isset($_SESSION['patient'])){
		?>
          <h5 class="show"><?php echo $_SESSION['patient']; ?></h5>
       <?php
		
		unset($_SESSION['patient']);
	}




?>
    <section id="appoinment" class="section-p1">
        <div class="heading">
            <h2>APPOINTMENT <SPAn>FORM</SPAn></h2>
        </div>
        <div class="app-box">
            <div class="app-left">
                <img src="img/Date picker-cuate.svg" alt="">
            </div>
            <div class="app-right">
                <h3>PATIENT <span>DETAILS</span></h3>
                <P>ENTER YOUR FOLLOWING DETAILS.</P>
                <form action="patientinfo.php" method = "post">
                    <div class="form-detail">
                        <h5>FULL NAME </h5>
                        <input type="text" placeholder="Enter your Name" name="name" required>
                    </div>
                    <div class="form-detail">
                        <h5>GENDER</h5>
                        <select name="gender">
                            <option value="Select gender">Select gender</option>
                            <option value="Male">MALE</option>
                            <option value="female">FEMALE</option>
                            <option value="other">OTHER</option>
                        </select>
                    </div>
                    <div class="form-detail">
                        <h5>CONTACT NUMBER</h5>
                        <input type="text" placeholder="Enter your contact number" name="number" required>
                    </div>
                    <div class="form-detail">
                        <h5>DATE OF BIRTH</h5>
                        <input type="date" placeholder="Enter your Date of Birth" name="birth" required>
                    </div>
                    <div class="form-detail">
                        <h5>EMAIL</h5>
                        <input type="email" placeholder="Enter your Email" name="email" required>
                    </div>
                    
                    <div class="form-detail">
                        <h5>ADDRESS</h5>
                        <input type="text" placeholder="Enter your address" name="address" required>
                    </div>
                    <div class="form-detail">
                        <h5>DEPARTMENT</h5>
                        <select name="department">
                            <option value="">Choose Department</option>
                            <option value="Cardiologist">Cardiologist - Dr. Ambrish S. Patel</option>
                            <option value="General Surger">General Surgeon - Dr. Nilesh Kumar Dehariya</option>
                            <option value="Orthopaedics">Orthopaedics - Dr. Arun More</option>
                            <option value="Dermatologist">Dermatologist - Dr. Sonal Chavan</option>
                            <option value="Pediatrician">Pediatrician - Dr. Yogesh Jadhav</option>
                            <option value="Dentist">Dentist - Dr. Sarvesh R Jaiswal</option>
                        </select>
                    </div>
                    <div class="form-detail">
                        <h5>SCHEDULE APPOINTMENT</h5>
                        <input type="DATE" placeholder="Enter your date" name="date" required>
                    </div>
                    <div class="form-detail">
                        <h5>SELECT TIME</h5>
                        <input type="time" placeholder="Enter your address" name="time" required>
                    </div>
                    
                    <button type="submit">Submit</button>
                </form>

            </div>
        </div>
    </section>


  



    <footer class="section-p1">
        <div class="col">
          <a class="logo" href="#"><i class="fa-sharp fa-solid fa-heart-pulse"></i>Medicare</a>
          <h4>CONTACT</h4>
          <p><strong>Address</strong> : patel colony behind aurbindo hospital 453555 indore </p>
          <p><strong>Phone</strong> :9522288085 </p>
          <p><strong>Hours</strong> : 10:00 - 18:00 , mon-sat</p>
        
          <div class="follow">
              <h4>Follow us</h4>
              <div class="icon">
                  <i class="fab fa-facebook"></i>
                  <i class="fab fa-twitter"></i>
                  <i class="fab fa-instagram"></i>
                      <i class="fab fa-youtube"></i>
              </div>
          </div>
  
      </div>
      <div class="col">
          <h4>ABOUT</h4>
          <a href="#" ><i class="fa-solid fa-caret-right"></i>about us</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Doctor information</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Medicine information</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Terms & condition</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Contact Us</a>
      </div>
      <div class="col">
          <h4>OUR SITES</h4>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Sign in</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Sign Up</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Book Doctor</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Buy Medicine</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Help</a>
      </div>
      <div class="col">
          <h4>OUR FEATURES</h4>
          <a href="#"><i class="fa-solid fa-caret-right"></i>24x7</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Online Support</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Free Consultation</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Medical Store</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Help</a>
      </div>
      
       </footer>
     <div class="copyright">
        <p>@ 2022 , kanha etc - HTML CSS Js Ecommerce Websites</p>
       </div>



     <script>
const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if(bar){
bar.addEventListener('click' , ()=>
{
nav.classList.add('active');
})
}




if(close){

close.addEventListener('click' , ()=>
{
nav.classList.remove('active');
})
}
     </script>
</body>

</html>