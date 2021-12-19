<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'vaccine_registration');

$name = $_POST['name'];
$phone_number = $_POST['phone_number'];
$date_of_birth = $_POST['date_of_birth'];
$nid_number = $_POST['nid_number'];
$occupation = $_POST['occupation'];
$address = $_POST['address'];
$comment = $_POST['comment'];

$query = "insert into information (name, phone_number, date_of_birth, nid_number, occupation, address, comment) VALUES ('$name', '$phone_number', '$date_of_birth', '$nid_number', '$occupation','$address', '$comment')";

mysqli_query($con, $query);

header('location: registration.php');

?>