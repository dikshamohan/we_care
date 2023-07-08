<header class="header">

  <a href="#" class="logo"><i class="fas fa-notes-medical">WeCare. </i></a>
  <!-- <i class="fas fa-heartbeat"></i> -->

  <nav class="navbar">
    <a href="/we_care/index.php#home">home</a>
    <a href="/we_care/index.php#services">services</a>
    <a href="/we_care/index.php#about">about</a>
    <!-- <a href="#doctors">doctors</a> -->
    <a href="login.php">connect with us</a>
    <a href="register.php">New Member!</a>
    <a href="#footer">contact us</a>
    <?php $email = array_key_exists('username', $_SESSION) ? $_SESSION['username'] : false ?>
    <?php if($email) ?>
      <a href="#"><?php echo $email ?></a>
  </nav>

  <div id="menu-btn" class="fas fa-bars"></div>

</header>