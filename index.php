<?php
    if(file_exists('header.php'))
    {
        include_once "header.php";
    }
?>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="Baaztech" width="100px" class="img-fluid"></a>
      <h1><a href="index.html">Mohammad Ali</a></h1>
      <h2>I'm a <span style="color: #FF5B00;">Software Engineer</span> &amp; <span style="color: #FF5B00;">web developer</span> from Pakistan</h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <!-- <li><a class="nav-link" href="#resume">Resume</a></li> -->
          <li><a class="nav-link" href="#services">Services</a></li>
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="https://twitter.com/DevAliMalik" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.linkedin.com/in/muhammad-ali-malik-49a72419b/" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <!--
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a> -->
        <a href="https://github.com/devalimalik" target="_blank" class="github"><i class="bi bi-github"></i></a>
      </div>

    </div>
  </header><!-- End Header -->


<?php
    if(file_exists('footer.php'))
    {
        include_once "footer.php";
    }
?>