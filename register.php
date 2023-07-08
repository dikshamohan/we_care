<?php 

session_start();

if (!empty($_SESSION['username'])) {
  // User is already logged in.
  header('location:home.php');  
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="/CSS/style.css"> -->
    <link rel="stylesheet" href="CSS/register.css">      
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
 <body background="image/main.jpg">
 
  
<?php 



include 'dbcon.php';

if(isset($_POST['submit'])){
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
  
  //change password to hash
  $pass = password_hash($password, PASSWORD_BCRYPT);
  $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

  $emailquery = "select * from users_registration where email ='$email' ";
  $query = mysqli_query($con, $emailquery);

  $emailcount = mysqli_num_rows($query);

  if($emailcount>0){
    // echo"email already exists";
    ?>
                    <script>
                        alert("email already exists");
                    </script>
                <?php
    
  }else{
    if($password === $cpassword){
      $insertquery =" insert into users_registration( name,  username, email, mobile, gender, password) values('$name','$username','$email','$mobile', '$gender', '$pass')";

      $iquery = mysqli_query($con, $insertquery);

          if($iquery){
            // generate a hash code for the user
            $code = randHash();
            $user_id = save_verification_code_and_get_id($code, $con, $email);
            
            if ($user_id) {
              // Send the email to user with verification link.
              send_verification_email($code, $user_id, $email, $name);
            }

              ?>
                    <script>
                        alert("Registration Successful, Check your Email!");
                    </script>
                <?php
            }
            else{

                ?>
                    <script>
                        alert("Registration Failed");
                    </script>

                <?php
          }

    }else{
      ?>
      <script>
      alert("password is not matched");  // echo "password are not matching";
      </script> 
      <?php    
    }
  }
}
?>

  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="mobile" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="cpassword" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Register">
        </div>
        <div class="login">I,m a member,,<a href="login.php">login now</a></div>
      </form>
    </div>
  </div>

</body>
</html>

<?php

function randHash($len=20)
{
	return substr(md5(openssl_random_pseudo_bytes(20)),-$len);
}

function save_verification_code_and_get_id($code, $con, $email) {
  $emailquery = "select id from users_registration where email ='$email' ";
  $result = mysqli_query($con, $emailquery);
  $user_id = NULL;

  if ($result) {
    $row = mysqli_fetch_assoc($result);
    $last_id = $row['id'];

    // insert code and id into  users_verification table
    $insert =" insert into users_verification( id,code) values('$last_id','$code')";

    if(mysqli_query($con, $insert)){
      echo "<script> console.log('Email Verication code generated') </script>";
      $user_id = $last_id;
    } else {
      echo "<script> console.log('ERROR: Could not able to execute $insert. ' . mysqli_error($con)) </script>";
    }

  } else {
    echo "<script> console.log('ERROR: Could not able to execute $emailquery. ' . mysqli_error($con)) </script>";
  }

  return $user_id;
}

function send_verification_email($code, $user_id, $email, $name) {
  $url = "http://localhost/we_care/email_verification.php?code=$code&id=$user_id";

  $msg = "Verification Link: <a href='$url' target='_blank'>$url</a>";

  // send email
  $mail = new PHPMailer;

  //$mail->SMTPDebug = 3;                               // Enable verbose debug output

  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Port       = 465;                    // set the SMTP port for the GMAIL server
  $mail->Username   = "wecarehelp24x7@gmail.com";            // SMTP account username example
  $mail->Password   = "tqtgsaobgdanwpvl";            // SMTP account password example
  $mail->SMTPSecure = "ssl";                               // TCP port to connect to

  $mail->From = 'wecarehelp24x7@gmail.com';
  $mail->FromName = 'Wecare Help';
  $mail->addAddress($email, $name);          // Name is optional
  $mail->addReplyTo('wecarehelp24x7@gmail.com', 'Wecare Help');

  // Content
  $mail->isHTML(true);                       // Set email format to HTML
  $mail->Subject = 'Email verification | Wecare';
  $mail->Body    = $msg;
  $mail->AltBody = $url;

  if(!$mail->send()) {
      echo "<script> console.log('Message could not be sent.') </script>";
      echo "<script> console.log('Mailer Error: $mail->ErrorInfo') </script>";
  } else {
    echo "<script> console.log('Verification email sent') </script>";
  }
  
}

?>

