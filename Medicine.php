<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicare</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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
                <li><a class="active" href="medicine.php">Store</a></li>
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

    <section id="p-medicine" class="section-p1">
        <h2>Medic<span>ine</span></h2>
        <p> "Medicine Cure Diseases, but only Doctors can cure Patients"</p>
       </section>

    <section id="g-medicine" class="section-p1">
        <h1>General <span>Medicines.</span></h1>
        <div class="medicine-box">
              <div class="m-box"  data-aos="fade-down" data-aos-delay="100">
                <h3>FOR <SPAn>HEAD</SPAn>ACHE</h3>
                <P>Headaches are a very common condition that most people will experience many times during their lives. The main symptom of a headache is pain in your head or face. There are several types of headaches, and tension headaches are the most common. While most headaches aren’t dangerous, certain types can be a sign of a serious underlying condition.</P>
                <button onclick="window.location.href='m1-detail.php';">Check Now</button>
              </div>
              <div class="m-box"  data-aos="fade-down" data-aos-delay="200">
                <h3>FOR <SPAn>STOMACH</SPAn> PAIN</h3>
                <P>Stomach pain can be caused by a wide variety of issues, from gas to more serious conditions like appendicitis or Crohn’s disease. Noting the severity and area of the abdomen affected can help with a diagnosis.</P>
                <button onclick="window.location.href='m2-detail.php';">Check Now</button>
              </div>
              <div class="m-box"  data-aos="fade-down" data-aos-delay="300">
                <h3>FOR <SPAn>FE</SPAn>VER</h3>
                <P>Body temperatures vary slightly from person to person and at different times of day. The average temperature has traditionally been defined as 98.6 F (37 C). A temperature taken using a mouth thermometer (oral temperature) that's 100 F (37.8 C) or higher is generally considered to be a fever.</P>
                <button onclick="window.location.href='m3-detail.php';">Check Now</button>
              </div>
              <div class="m-box"  data-aos="fade-down" data-aos-delay="400">
                <h3>FOR <SPAn>CHEST </SPAn>PAIN</h3>
                <P>Most respiratory causes of chest pain are due to injuries to the lungs, or problems within the airways leading to and coming from your lungs. Chest pain associated with a breathing disorder or other respiratory condition may feel like a heart attack or heart-related condition.</P>
                <button onclick="window.location.href='m4-detail.php';">Check Now</button>
              </div>
              <div class="m-box"  data-aos="fade-down" data-aos-delay="500">
                <h3>FOR <SPAn>BACK </SPAn> PAIN</h3>
                <P>Back pain is pain felt in the back. Back pain is divided into neck pain (cervical), middle back pain (thoracic), lower back pain (lumbar) or coccydynia (tailbone or sacral pain) based on the segment affected. The lumbar area is the most common area affected.</P>
                <button onclick="window.location.href='m5-detail.php';">Check Now</button>
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


     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
      AOS.init();
    </script>

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