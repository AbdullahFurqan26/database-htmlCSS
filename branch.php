<?php
// Connect to MySQL
$conn = new mysqli("localhost", "root", "", "employee_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from 'users' table
$sql = "SELECT branch_id, branch_name, mgr_id, mgr_start_date FROM branch";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Branch Table</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
  <h2 style="text-align:center;">Branch List</h2>
  <table>
    <tr>
      <th>Branch ID</th>
      <th>Branch Name</th>
      <th>Manager ID</th>
      <th>Manager Start Date</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["branch_id"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["branch_name"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["mgr_id"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["mgr_start_date"]) . "</td>";
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
