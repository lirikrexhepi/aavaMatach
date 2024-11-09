<?php
header('Content-Type: application/json');
include 'config.php'; // Include the config file

$conn = getDatabaseConnection(); // Get the database connection

// Get POST data
$location = $_POST['location'] ?? '';
$employment = $_POST['employment'] ?? '';
$employmentType = $_POST['employment_type'] ?? '';
$salary = $_POST['salary'] ?? '';
$description = $_POST['description'] ?? '';

// Validate data
if (empty($location) || empty($employment) || empty($employmentType) || empty($salary) || empty($description)) {
    echo json_encode(['success' => false, 'message' => 'All fields are required.']);
    exit;
}

// Use a placeholder value for company_id
$companyId = 1;

// Insert data into the database
$sql = "INSERT INTO job_listings (company_id, location, employment, employment_type, salary, description) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    echo json_encode(['success' => false, 'message' => 'Prepare failed: ' . $conn->error]);
    exit;
}

$stmt->bind_param('isssss', $companyId, $location, $employment, $employmentType, $salary, $description);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Execute failed: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>