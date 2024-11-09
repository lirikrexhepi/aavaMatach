<?php
include 'config.php'; // Include your database configuration

$conn = getDatabaseConnection(); // Get the database connection

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $location = $_POST['location'] ?? '';
    $employment = $_POST['employment'] ?? '';
    $employmentType = $_POST['employment_type'] ?? '';
    $salary = $_POST['salary'] ?? '';
    $description = $_POST['description'] ?? '';

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO job_listings (location, employment, employment_type, salary, description) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param('sssss', $location, $employment, $employmentType, $salary, $description);

    if ($stmt->execute()) {
        // Redirect back to the job listings page
        header('Location: job-listings.html');
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>