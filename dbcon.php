<?php 

$server = "localhost";
$user = "root";
$password = "";
$db = "we_care";

$con = mysqli_connect($server, $user, $password, $db);

if($con){
    ?>
        <script>
            console.log("Connection Successful");
        </script>

    <?php
}
else{

    ?>
        <script>
            console.log("Connection Failure");
        </script>

    <?php
    

}


?>
