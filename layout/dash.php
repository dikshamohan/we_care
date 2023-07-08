<div class="container">
  <div class="topbar">
    <div class="logo">
      <h2>wecare.</h2>
    </div>

    <!-- search bar start -->
    <div class="search">
      <input type="text" name="search" placeholder="search here">
      <label for="search"><i class="fas fa-search"></i></label>
    </div>
    <!-- search bar end -->

    <i class="fas fa-bell"></i>
    <div class="user">
      <?php $email = array_key_exists('username', $_SESSION) ? $_SESSION['username'] : false ?>
      <?php echo "Welcome " . $_SESSION['username'] ?>
    </div>
  </div>

  <!-- sidebar start -->
  <div class="sidebar">
    <ul>
      <li>
        <a href="/we_care/home.php#home">
          <i class="fas fa-th-large"></i>
          <div>Home</div>
        </a>
      </li>
      <li>
        <a href="/we_care/disease.php">
          <i class="fas fa-user-md"></i>
          <div>Diseases Prediction system</div>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-chalkboard-teacher"></i>
          <div>Doctor Appointment</div>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-users"></i>
          <div>Blood Bank</div>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-hospital"></i>
          <div>Buy Medicine</div>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-procedures"></i>
          <div>Ambulance</div>
        </a>
      </li>
      <li>
        <a href="logout.php">
          <i class="fas fa-cog"></i>
          <div>Logout</div>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-question"></i>
          <div>Help</div>
        </a>
      </li>
    </ul>
  </div>
  <!-- sidebar end -->