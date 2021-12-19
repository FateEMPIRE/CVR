<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <title>CVR-Registration</title>
    <link rel="shortcut icon" href="Resource/coronavirus_50px.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body class='registration_body'>
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
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="registration.php">Registration<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav>



<div class="container contact-form">
            <form action= 'sql.php' method ='post'>
              <h3 class='blank'></h3>
                <h3>Fill up the form</h3>
               <div class="row from-group">
                    <div class="col-md-12">
                      <input class="form-control inputs" type="text" name='name' placeholder= 'Full Name'>
                      <input class="form-control inputs" type="text" name='phone_number' placeholder= 'Phone Number'>
                      <input class="form-control inputs" type="text" name='date_of_birth' placeholder= 'Date of Birth'>
                      <input class="form-control inputs" type="text" name='nid_number' placeholder= 'NID/Birth Certificate Number'>
                      <input class="form-control inputs" type="text" name='occupation' placeholder= 'Occupation'>
                      <input class="form-control inputs" type="text" name='address' placeholder= 'Full Address'>
                      <textarea class= 'form-control' name="comment" id="" cols="30" rows="2" placeholder= 'Comment'></textarea>
                      <button type='submit' id="login_button" class="button"><span>Submit</span></button>
                    </div>
                </div>
            </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
</body>
</html>