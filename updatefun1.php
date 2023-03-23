<?php    
$conn = mysqli_connect("localhost","root","","rajj");
if (isset($_REQUEST["update"])) {
    $id = $_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $contact=$_POST["contact"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $university = $_POST["university"];
    $languages = implode(",", $_POST["languages"]);
  
    $sql = "UPDATE `record` SET `fname`='$fname', `lname`='$lname', `email`='$email', `contact`='$contact',`password`='$password', `gender`='$gender', `university`='$university', `languages`='$languages' WHERE `id`=$id";
    $result=mysqli_query($conn,$sql);

    if($result)
    {
        header("location:display1.php");
    }
    else
    {
        echo "not update";
    }
}
?>