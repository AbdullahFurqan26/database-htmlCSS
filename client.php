<?php
// Connect to MySQL
$conn = new mysqli("localhost", "root", "", "employee_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from 'users' table
$sql = "SELECT client_id, client_name, branch_id FROM client";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Client Table</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
  <h2 style="text-align:center;">Client List</h2>
  <table>
    <tr>
      <th>Client ID</th>
      <th>Client Name</th>
      <th>Branch ID</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["client_id"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["client_name"]) . "</td>";
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
