<?php
  //page only available to logged in participatents. 
  session_start();

  if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
  }
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <!--meta data about the HTML document, to include character set, style (i.e.
    CSS, etc.) author, etc.)-->
  <meta charset="utf-8" />
  <meta name="description" content="Pet The Dog">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="Matthew Kousiry">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .carousel img {

width: 100%;

height: auto;

}
  </style>
<!--browser bar title -->
  <title>SI350 - Matt Kousiry - Index</title>
</head>
<body>
  <ul class = "nav">
    <li class = "nav"><a class = "nav active" href="homepage.html">Home</a></li>
    <li class = "nav"><a class = "nav" href="about.html">About Bruce</a></li>
    <li class = "nav"><a  class = "nav" href="login.html">Login</a></li>
    <li class = "nav"><a  class = "nav" href="logout.php">Logout</a></li>
    <li class = "nav"><a class = "nav" href="leaderboard.html">Leaderboard</a></li>
  </ul>

<div class="jumbotron text-center">
  <h1>Pet the Dog!</h1>
</div>
  

<br>

<img src="img/bruce1.jpeg" class="rounded-circle" onClick="petted()">

<script>
  function petted() {

  }
</script>

