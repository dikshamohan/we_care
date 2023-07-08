<header class="header">

  <a href="#" class="logo"><i class="fas fa-notes-medical">WeCare. </i></a>
  <!-- <i class="fas fa-heartbeat"></i> -->

  <nav class="navbar">
    <a href="/we_care/home.php#home">home</a>
    <a href="/we_care/login.php">Log out</a>
        <!-- <a href="/we_care/index.php">Log out</a> -->
    <a href="#"><?php $email = array_key_exists('username', $_SESSION) ? $_SESSION['username'] : false ?>
        <?php echo "Welcome ". $_SESSION['username']?></a>
  </nav>

  <div id="menu-btn" class="fas fa-bars"></div>

</header>