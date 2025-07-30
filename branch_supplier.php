<?php
// Connect to MySQL
$conn = new mysqli("localhost", "root", "", "employee_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from 'users' table
$sql = "SELECT branch_id, supplier_name, supplier_type, FROM branch_supplier";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Branch Supplier Table</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
  <h2 style="text-align:center;">Branch Supplier List</h2>
  <table>
    <tr>
      <th>Branch ID</th>
      <th>Supplier Name</th>
      <th>Supplier Type</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["branch_id"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["supplier_name"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["supplier_type"]) . "</td>";
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
