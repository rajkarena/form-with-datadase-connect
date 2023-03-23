<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$contact=$_POST['contact'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$university = $_POST['university'];
$languages = implode(",", $_POST['languages']);

$conn = mysqli_connect("localhost","root","","rajj");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Insert record into database
$sql = "INSERT INTO `record` (`fname`, `lname`, `email`,`contact`, `password`, `gender`, `university`, `languages`)
VALUES ('$fname', '$lname', '$email','contact', '$password', '$gender', '$university', '$languages')";

if (mysqli_query($conn, $sql)) {
  header("location:display1.php");
} else {
  echo "Error inserting record: " . mysqli_error($conn);
}

?>
