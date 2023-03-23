<html>
<head>
  <title>User Records</title>
</head>
<body>
  <h1>User Records</h1>
  <table border="2">
    <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>contact</th>
      <th>Password</th>
      <th>Gender</th>
      <th>University</th>
      <th>Languages</th>
      <th>Action</th>
    </tr>

    <?php
   $conn = mysqli_connect("localhost","root","","rajj");
   
    $sql = "SELECT * FROM `record`";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["fname"] . "</td>";
        echo "<td>" . $row["lname"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["contact"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        echo "<td>" . $row["university"] . "</td>";
        echo "<td>" . $row["languages"] . "</td>";
        echo "<td><a href='delete1.php?id=" . $row["id"] . "'>Delete</a> | <a href='update1.php?id=" . $row["id"] . "'>Update</a></td>";
        echo "</tr>";
      }
    ?>
  </table>
</body>
</html>
