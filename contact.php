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
                <li><a href="doctor.php">Doctors</a></li>
                <li><a href="medicine.php">Store</a></li>
                <li><a  href="about.php">About</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
                <button onclick="window.location.href='logout.php';">Log out</button>
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <!-- <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a> -->
            <i id="bar" class="fas fa-outdent"></i>

        </div>
    </section>
      
    <section id="p-contact" class="section-p1">
        <h2>LET'S <span>TALK</span></h2>
        <p> "LEAVE a massage where we can talk"</p>
    </section>

    <?php
    if(isset($_SESSION['massage'])){
		?>
          <h5 class="show"><?php echo $_SESSION['massage']; ?></h5>
       <?php
		
		unset($_SESSION['massage']);
	}




?>
    
    <section id="contact" class="section-p1">
        <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Vist one of our agency locations or contact us today</h2>
        <h3>Head office</h3>
        <div>
            <li>
                <i class="fa-regular fa-map"></i>
                <p>patel colony behind aurbindo hospital</p>
            </li>
            <li>
                <i class="fa-regular fa-envelope"></i>
                <p>smartmaedicare@gmail.com</p>
            </li>
            <li>
                <i class="fa-sharp fa-solid fa-phone"></i>
                <p>123456789</p>
            </li>
            <li>
                <i class="fa-solid fa-clock"></i>
                <p>24x7</p>
            </li>
        </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.4986778570606!2d75.78515031479256!3d22.59784598516976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962f99e5832a20b%3A0x7b44dc2ea08744eb!2sSushila%20Devi%20Bansal%20College%2C%20BGI%20Indore!5e0!3m2!1sen!2sin!4v1665496596372!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>


    <section id="form-details"class="section-p1">
        <img src="img/Mention-cuate.png" alt="">
        <form action="contact_detail.php" method = "post">
            <span>LEAVE A MASSAGE</span>
            <h2>We love to hear you</h2>
            <input type="text" name= "name" placeholder="Enter your Name">
            <input type="email" name= "email" placeholder="Enter your email">
            <input type="text" name= "subject" placeholder="Enter your subject">
            <textarea name="massage" id="" cols="30" rows="10" placeholder="Message"></textarea>
            <button class="normal" type = "submit">Submit</button>
        </form>
        <div class="people">
            
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