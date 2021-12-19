<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>CVR-Contact</title>
    <link rel="shortcut icon" href="Resource/coronavirus_50px.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <div class='container'>
  <a style= 'letter-spacing: 0rem; !important' class="navbar-brand" href="index.php">
    <img src="Resource/coronavirus_50px.png" alt="" width="27" class="d-inline-block align-text-top">COVID Vaccine Registration
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="index.php"><?php

$con = mysqli_connect('localhost', 'root');

if($con)
{
    echo 'Home';
}
else
{
    echo 'No connection';
}

?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registration.php">Registration</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav>


<div id= 'carouselExampleIndicators' class='carousel slide' data-ride= 'carousel' data-interval= '7000'>
    <div class='carousel-inner' role= 'listbox'>
        <div class= 'carousel-item active' style='background-image: url(img/c10.jpg);'>
        <div style= 'position: absolute; top: 38%;' class='carousel-caption text-design text-center'>
            <h1 style= 'color: #3a3934; margin-bottom: 0%;'>Covid-19 Telehealth</h1>
            <h3 style= 'color: #84b068;'>09666777222</h3>
            <p style= 'color: #4e4538;'>Click the button below for more info</P>
            <a href="https://surokkha.gov.bd/"><button style = 'background-color: #658a8b; margin-top: 0%;' type='submit' id="login_button" class="button"><span>GO!</span></button></a>
        </div>
    </div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
