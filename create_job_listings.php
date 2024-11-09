<?php
require_once 'config/db.php'; // Include the database configuration

try {
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve form data
        $location = $_POST['location'] ?? '';
        $employment = $_POST['employment'] ?? '';   
        $employmentType = $_POST['employment_type'] ?? '';
        $salary = $_POST['salary'] ?? '';
        $description = $_POST['description'] ?? '';
        $companyId = 1; // You might want to get this from a session or another source

        // Prepare and execute the SQL statement using PDO
        $stmt = $pdo->prepare("INSERT INTO job_listings (company_id, location, employment, employment_type, salary, description) 
                              VALUES (?, ?, ?, ?, ?, ?)");
        
        $stmt->execute([
            $companyId,
            $location,
            $employment,
            $employmentType,
            $salary,
            $description
        ]);

        // Redirect back to the job listings page on success
        header('Location: job-listings.html');
        exit();
    }
} catch (PDOException $e) {
    // Handle any errors
    echo "Error: " . $e->getMessage();
}
?>