<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<HTML>
<HEAD>
<TITLE>Welcome</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
    rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
    rel="stylesheet" />
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
    body{
        background-image:url("./assets/bg2.jfif");
        background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
    }
</style>
</HEAD>
<BODY>
    <!-- <img src="./assets/bg.jpg" alt=""> -->
    <div class="collapse navbar-collapse" id="navbarResponsive">
         <div class="col btn btn-warning"><a class="nav-link me-lg-3" href="caesar.php" style="margin-top:5% !important;">Ceaesar</div></a>
        <div class="page-header">
        <div class="page-content jumbotron" style="  background-color: red;
  background-image: linear-gradient(to right, violet , plum);">
  <h1 style="color:white; font-family:courier; font-weight:bold;">Selamat Datang</h1>
  <h2 style="color:white; font-family:roboto; justify-content: center; display : flex; align-items:center;">Di SMAN 1 SIMO</h2>
  <p class="lead fw-normal text-muted mb-5">SMA N 1 Simo yang terletak di Jl. Ngadenan No.549, Kebayanan 3, Pelem, Simo, Kabupaten Boyolali, Jawa Tengah 57377. Visi dari SMA N 1 Simo yaitu terwujudnya sekolah unggulan yang menghasilkan lulusan beriman, bertaqwa, cerdas, berkarakter, berdaya saing dan berwawasan lingkungan.</p>
</div>
  
  <span class="login-signup btn btn-danger"><a href="logout.php" style="color:white">Logout</a></span>
    </div>
</BODY>
</HTML>