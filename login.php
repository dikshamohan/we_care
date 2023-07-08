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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> -->


    <!-- custom css file link  -->
    <link rel="stylesheet" href="CSS/style.css">

</head>

<body>

    <?php

include 'dbcon.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from users_registration where email='$email' ";
    $query = mysqli_query($con, $email_search);

    $email_count = mysqli_num_rows($query);

    if ($email_count) {
        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['password'];

        $_SESSION['username'] = $email_pass['username'];

        $pass_decode = password_verify($password, $db_pass);

        if ($pass_decode) {
            //  echo "login successful";
            if (isset($_POST['rememberme'])) {

                setcookie('emailcookie', $email, time() +60);
                setcookie('passwordcookie', $password, time() +60);

                header('location:home.php');

            } else {
                header('location:home.php');
            }



        } else {
            ?>
      <script>
          alert("Incorrect password");
      </script>

  <?php
        }
    } else {
        ?>
        <script>
            alert("Invalid Email");
        </script>
  
    <?php
    }
}

?>
    <?php include "./layout/header.php" ?>
    <section class="book" id="book">

        <h1 class="heading"> <span>Connect</span> now </h1>

        <div class="row">

            <div class="image">
                <img src="image/book-img.svg" alt="">
            </div>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <h3>Connect with Us</h3>
                <input type="text" placeholder="enter your email" class="box" required placeholder="Email" name="email"
                    value="<?php if (isset($_COOKIE['emailcookie'])) {
                echo $_COOKIE['emailcookie'];
            } ?>">
                <input type="password" placeholder="enter your password" class="box" id ="myinput" required placeholder="Password"
                    name="password"
                    value="<?php if (isset($_COOKIE['passwordcookie'])) {
                echo $_COOKIE['passwordcookie'];
            } ?>">
            <!-- <i class="far fa-eye" id="togglepassword" style="margin-left: -30px; cursor:pointer;"></i>      -->
                <!-- <input type="email" placeholder="your email" class="box">
            <input type="date" class="box"> -->
                <div class="checkbox-text">
                    <div class="checkbox-content">
                        <input type="checkbox" id="logCheck">
                        <label for="logCheck" class="text">Remember me</label>
                    </div>
                    <!-- for showing the password-->
                    <a href="#" class="text"><input type="checkbox" onclick = "myFunction()">Show Password</a>
                    <script>
                        function myFunction()
                        {
                            var x = document.getElementById("myinput");
                            if(x.type == "password")
                            {
                                x.type = "text";
                            }
                            else
                            {
                                x.type = "password";

                            }
                        }
                        
                    </script>
                </div>
                <input type="submit" value="Login" name ="submit" class="btn">
                <div class="signup">
                    Not a member,
                    <a href="register.php">I,m new here</a>
            </form>

        </div>

    </section>
    <?php include "./layout/footer.php" ?>