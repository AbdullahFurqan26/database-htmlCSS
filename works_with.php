<?php
// Connect to MySQL
$conn = new mysqli("localhost", "root", "", "employee_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from 'users' table
$sql = "SELECT emp_id, client_id, total_sales FROM works_with";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Works Table</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
  <h2 style="text-align:center;">Works-With List</h2>
  <table>
    <tr>
      <th>Employee ID</th>
      <th>Client ID</th>
      <th>Total Sales</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["emp_id"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["client_id"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["total_sales"]) . "</td>";
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
