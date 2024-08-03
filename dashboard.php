<?php
include 'db_connect.php'; // Include the file with the database connection

// Fetch appointments from the database
$sql = "SELECT * FROM appoint";
$result = $conn->query($sql);

// Display appointments
echo "<h2>Your Appointments</h2>";
echo "<table border='1'>
    <tr>
        <th>ID</th>
        <th>Doctor</th>
        <th>Date</th>
        <th>Time Slot</th>
    </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['doctor']}</td>
        <td>{$row['date']}</td>
        <td>{$row['time_slot']}</td>
    </tr>";
}

echo "</table>";

// Close the database connection
$conn->close();
?> 