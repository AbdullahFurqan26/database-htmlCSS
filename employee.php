<?php
// Connect to MySQL
$conn = new mysqli("localhost", "root", "", "employee_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from 'users' table
$sql = "SELECT emp_id, first_name, last_name, birthday, gender, salary, super_id, branch_id FROM employee";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Employee Table</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
  <h2 style="text-align:center;">User List</h2>
  <table>
    <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Birthday</th>
      <th>Gender</th>
      <th>Salary</th>
      <th>Super_id</th>
      <th>Branch_id</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["emp_id"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["first_name"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["last_name"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["birthday"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["gender"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["salary"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["super_id"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["branch_id"]) . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No data found</td></tr>";
    }

    $conn->close();
    ?>
  </table>
</body>
</html>
