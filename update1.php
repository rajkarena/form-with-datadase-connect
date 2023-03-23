<?php
$conn = mysqli_connect("localhost","root","","rajj");
$id=$_GET['id'];
$sql="SELECT * FROM `record` WHERE `id`='$id'";
$result=mysqli_query($conn,$sql);

if($row=mysqli_fetch_assoc($result))
{

  $id =$row["id"];
  $fname = $row["fname"];
  $lname = $row["lname"];
  $email = $row["email"];
  $contact=$row["contact"];
  $password = $row["password"];
  $gender = $row["gender"];
  $university = $row["university"];
  $languages = $row["languages"];
}
  
  ?>
  <form method="POST" action="updatefun1.php">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    <label>First Name:</label>
    <input type="text" name="fname" value="<?php echo $row["fname"]; ?>"><br>
    <label>Last Name:</label>
    <input type="text" name="lname" value="<?php echo $row["lname"]; ?>"><br>
    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $row["email"]; ?>"><br>
    <label>Contact:</label>
    <input type="contact" name="contact" value="<?php echo $row["contact"]; ?>"><br><br>
    <label>Password:</label>
    <input type="password" name="password" value="<?php echo $row["password"]; ?>"><br>
    <label>Gender:</label>
    <input type="radio" name="gender" value="Male" <?php if($row["gender"]=="Male") echo "checked"; ?>> Male
    <input type="radio" name="gender" value="Female" <?php if($row["gender"]=="Female") echo "checked"; ?>> Female<br>
    <label>University:</label>
    <input type="text" name="university" value="<?php echo $row["university"]; ?>"><br>
    <label>Languages:</label>
    <input type="checkbox" name="languages[]" value="English" <?php if(strpos($row["languages"],"English")!==false) echo "checked"; ?>> English
    <input type="checkbox" name="languages[]" value="Spanish" <?php if(strpos($row["languages"],"Spanish")!==false) echo "checked"; ?>> Spanish
    <input type="checkbox" name="languages[]" value="French" <?php if(strpos($row["languages"],"French")!==false) echo "checked"; ?>> French<br>
    <input type="submit" name="update" value="Update">
  </form>
