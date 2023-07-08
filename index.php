<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website design </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="CSS/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"><i class="fas fa-notes-medical">WeCare. </i></a>
    <!-- <i class="fas fa-heartbeat"></i> -->

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#services">services</a>
        <a href="#about">about</a>
        <!-- <a href="#doctors">doctors</a> -->
        <a href="login.php">connect with us</a>
        <a href="register.php">New Member!</a>
        <a href="#footer">contact us</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>We wish you a healthy and a wealthy life.</h3>
        <p>We provide you all the hospital facilities 24/7 in just a click.</p>
        <a href="login.php" class="btn">connect with us</a>
        <!-- <a href="#" class="btn"> contact us <span class="fas fa-chevron-right"></span> </a> -->
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>140+</h3>
        <p>Disease Prediction</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>100+</h3>
        <p>satisfied patients</p>
    </div>

    <!-- <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>500+</h3>
        <p>Ambulance facility</p>
    </div> -->

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>80+</h3>
        <p>Blood Bank</p>
    </div>

    <!-- <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>800+</h3>
        <p>Buy Medicines</p>
    </div> -->

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>100+</h3>
        <p>Doctor Available</p>
    </div>
    

    


</section>

<!-- icons section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>Online Doctor appointment</h3>
            <p>Consult with our top doctors available for you 24/7.</p>
            
        </div>

        <!-- <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 Ambulance</h3>
            <p>Book your ambulance in the case of emergency.</p>
          
        </div> -->

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>Expert Doctors</h3>
            <p>We have thousand of expert doctor through whom you can easily connect. </p>
            
        </div>

        <!-- <div class="box">
            <i class="fas fa-pills"></i>
            <h3>Medicines</h3>
            <p>You can also easily buy the medicines refered by doctors.</p>
            
        </div> -->

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>Blood Bank facility</h3>
            <p>All type of blood available in the need of a rush hour.</p>
           
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>Disease Prediction System</h3>
            <p>Predict the Disease through your symptoms </p>
            
        </div>

    </div>

</section>

<!-- about section starts -->
    

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        
        
        <span><!-- line here --></span>
        <div class="content">
            <h3>we take care of your healthy life</h3>
            <p>We Care! a group that ensures you have a healthy and a wealthy life. Having symptoms! Predict your disease and cure yourself by consulting to the prescribed doctor.</p>
            <!-- <ul class = "links">
                <li><a href = "#">Predict</a></li>
                <div class = "vertical-line"></div>
                <li><a href = "#">Consult</a></li>
                <div class = "vertical-line"></div>
                <li><a href = "#">Cure</a></li>
            </ul>
            -->
        </div>
        
       

    </div>

</section>

<!-- about section ends -->
 



<!-- footer section starts  -->

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> connect with us</a>
        </div>

        <!-- <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> Disease Prediction </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Online Doctor appointment </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Blood Bank </a>
            <a href="#"> <i class="fas fa-chevron-right"></i>Buy Medicines </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Ambulance service </a>
        </div> -->

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +91 7672324580 </a>
            <a href="#"> <i class="fas fa-phone"></i> +91 8976432090 </a>
            <a href="#"> <i class="fas fa-envelope"></i> finalyearprojectdec@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> goushiaparween111@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Dumka, India - 814101 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/profile.php?id=100009997689780&mibextid=ZbWKwL"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="https://twitter.com/SwarnaliGangul9?t=SmIyXpdEFs7o93LDtwF22g&s=08"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="https://instagram.com/parweengoushia?igshid=ZDdkNTZiNTM="> <i class="fab fa-instagram"></i> instagram </a>
            <a href="https://www.linkedin.com"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="https://www.github.com"> <i class="fab fa-pinterest"></i> github </a>
        </div>

    </div>

    <div class="credit"> created by <span>CSE (2019-2023)</span> | all rights reserved </div>

</section>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>