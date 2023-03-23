<html>
<head>
  <title>Registration Form</title>
</head>
<body>
  <h1>Registration Form</h1>
  <form action="insert1.php" method="post">
    <label>First Name:</label>
    <input type="text" name="fname" required><br><br>
    <label>Last Name:</label>
    <input type="text" name="lname" required><br><br>
    <label>Email:</label>
    <input type="email" name="email" required><br><br>
    <label>Contact:</label>
    <input type="contact" name="contact" required><br><br>
    <label>Password:</label>
    <input type="password" name="password" required><br><br>
    <label>Gender:</label>
    <input type="radio" name="gender" value="male" required>Male
    <input type="radio" name="gender" value="female" required>Female<br><br>
    <label>University:</label>
    <select name="university">
      <option value="University of Texas">University of Texas</option>
      <option value="Texas A&M University">Texas A&M University</option>
      <option value="University of Houston">University of Houston</option>
    </select><br><br>
    <label>Languages:</label>
    <input type="checkbox" name="languages[]" value="English">English
    <input type="checkbox" name="languages[]" value="Spanish">Spanish
    <input type="checkbox" name="languages[]" value="French">French<br><br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>
