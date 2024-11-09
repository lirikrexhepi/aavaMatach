<?php
header('Content-Type: application/json');
include 'config.php'; // Include the config file

$conn = getDatabaseConnection(); // Get the database connection

$sql = "SELECT location, employment, employment_type, salary, description FROM job_listings";
$result = $conn->query($sql);

$jobListings = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $jobListings[] = $row;
    }
}

echo json_encode($jobListings);

$conn->close();
?>
