<?php
$conn = mysqli_connect("localhost","root","","rajj");

$id=$_REQUEST['id'];
$sql="DELETE FROM `record` WHERE `id`='$id'";
$result=mysqli_query($conn,$sql);

if($result==TRUE)
{

    header("location:display1.php");
}
else
{

    echo " record not delete";
}
?>