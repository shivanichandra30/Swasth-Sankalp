<?php
include 'db_connect.php';

// Get appointment data from POST request
$doctor = $_POST['doctor'];
$date = $_POST['date'];
$timeSlot = $_POST['time_slot'];

// Insert appointment into the database
$sql = "INSERT INTO appointments (doctor, date, time_slot) VALUES ('$doctor', '$date', '$timeSlot')";
if ($conn->query($sql) === TRUE) {
    echo "Appointment added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
