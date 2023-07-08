<?php
session_start();
ob_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>we_care</title>

        <!-- CSS FILES -->        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">


    </head>
    
    <body id="section_1">

        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
               

              ><?php $email = array_key_exists('username', $_SESSION) ? $_SESSION['username'] : false ?>
        <?php echo "Welcome ". $_SESSION['username']?>
               
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="home.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="disease.php">Disease Prediction</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="../we_care/appointment/index.php">Doctor Appointment</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="../we_care/blood_bank/">Blood Bank</a>
                        </li>

                        <li class="nav-item ms-3">
                            <a class="nav-link custom-btn custom-border-btn btn" href="index.php">Log out</a>
                        </li>

            
                    </ul>
                </div>
            </div>
        </nav>

        <main>

            <section class="hero-section hero-section-full-height">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12 col-12 p-0">
                            <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="image/1.jpg" class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>Predict Disease</h1>
                                            
                                            <p>You can Predict your disease..</p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="image/2.jpg" class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1> Appointment</h1>
                                            
                                            <p>We provide you online doctor Appointment in a click.</p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="image/3.jpg" class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>Blood Bank</h1>
                                            
                                            <p>Here, you can find blood bank in your home.</p>
                                        </div>
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 text-center mx-auto">
                            <h2 class="mb-5">Welcome to We care</h2>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <!-- <a href="donate.html" class="d-block"> -->
                                    <img src="image/hands.png" class="featured-block-image img-fluid" alt="">

                                    <p class="featured-block-text">Healthy <strong>Life</strong></p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <!-- <a href="donate.html" class="d-block"> -->
                                    <img src="image/heart.png" class="featured-block-image img-fluid" alt="">

                                    <p class="featured-block-text"><strong>Caring</strong> Yourself</p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <!-- <a href="donate.html" class="d-block"> -->
                                    <img src="image/receive.png" class="featured-block-image img-fluid" alt="">

                                    <p class="featured-block-text">Predict your<strong> Disease</strong></p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <!-- <a href="donate.html" class="d-block"> -->
                                    <img src="image/scholarship.png" class="featured-block-image img-fluid" alt="">

                                    <p class="featured-block-text"><strong>Save your </strong> Money</p>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

           
            <section class="cta-section section-padding section-bg">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-5 col-12 ms-auto">
                            <h2 class="mb-0">Disease Prediction <br> System</h2>
                        </div>

                        <div class="col-lg-5 col-12">
                           
                            <a href="disease.php" class="custom-btn btn smoothscroll">Click here </a>
                        </div>

                    </div>
                </div>
            </section>
            <section class="about-section section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-5 col-12">
                            <img src="image/main.jpg" class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                        </div>

                        <div class="col-lg-5 col-md-7 col-12">
                            <div class="custom-text-block">
                                <h2 class="mb-0">Blood Bank</h2>

                                <a href="../we_care/blood_bank/" class="custom-btn btn smoothscroll">Click here </a>

                                <p>Online blood bank in your pocket.</p>

                                <p>You can take online blood bank facilities in your mobile or desktop.</p>
                    
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            


            
            <section class="testimonial-section section-padding section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h2 class="mb-lg-3">Doctor Appointment</h2>
                            
                                <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                           <div class="carousel-caption">
                                                <h4 class="carousel-title">Here,you can take online Appointment with doctor.</h4>

                                                <a href="../we_care/appointment/index.php" class="custom-btn btn smoothscroll">Click here </a>
                                           </div>
                                        </div>

                                              


                    </main>

       
        <!-- JAVASCRIPT FILES  -->
        <script src="js/js1/jquery.min.js"></script>
        <script src="js/js1/bootstrap.min.js"></script>
        <script src="js/js1/jquery.sticky.js"></script>
        <script src="js/js1/click-scroll.js"></script>
        <script src="js/js1counter.js"></script>
        <script src="js/js1/custom.js"></script>

    </body>
    
</html>