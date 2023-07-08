<?php
// http://localhost/we_care/email_verification.php?code=<code>&id=<id>;
include 'dbcon.php';

// get the id and code from url
$user_id = mysqli_real_escape_string($con, $_GET['id']);
$user_code = mysqli_real_escape_string($con, $_GET['code']);

//match the id and code with db
$emailquery = "select * from users_verification  where id ='$user_id' and code='$user_code' ";
$query = mysqli_query($con, $emailquery);
$count = mysqli_num_rows($query);

if($count==1)
{
  // if matched update user status
  $sql = "UPDATE users_registration SET status='1' WHERE id=$user_id";
  if (mysqli_query($con, $sql))
   {
    echo "<strong>Email has been verified, <a href='login.php'>Click here to login</a></strong>";
   } 
  else {
    echo "Error updating record: " . mysqli_error($con);
  }
}
else
{
  echo "Email verification failed";
}

?>

