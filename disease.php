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
  <title> we_care </title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/disease.css">
  <script src="js/fetch_desease.js"></script>
  <link rel="stylesheet" href="css/index.css">

</head>

<body>
  <?php include "./layout/home-header.php" ?><br>

  <!-- about section starts -->


  <section class="about" id="about">


    <div class="row">

      <div class="image">
        <img src="image/disease.gif" alt="">
        <h1 class="heading" style="position:relative;"> <span>Disease Prediction  </span> System</h1>
      </div>


      <div class="content">
        <section>
          <h2> Choose your symptoms</h2>

          <?php $symptoms_str = file_get_contents("data/symptoms.json") ?>
          <?php $symptoms = json_decode($symptoms_str) ?>
          <div class="disease-prediction">
            <section class="symptoms-container">
              <?php foreach ($symptoms as $key => $value) { ?>
                <div class="symptom">
                  <input type="checkbox" class="checkbox" name="symptoms[]" value="<?php echo $key ?>"
                    id="<?php echo $key ?>">
                  <label for="<?php echo $key ?>">
                    <?php echo $value ?>
                  </label>
                </div>
              <?php } ?>
            </section>

        </section>

        <!-- about section ends -->

        <section class="actions">
          <input type="submit" class="submit-disease" id="btnSubmit" value="Submit">
          <div id="prediction" class="txt"></div>
          <h2 style="color:black;"><a href="home.php">Back</a></h2>
        </section>
      </div>
  </section>


  <!-- custom js file link  -->
  <script src="js/script.js"></script>

</body>

</html>

</html>