<?php
require_once 'config/db.php';
header('Content-Type: application/json');

try {
    // Check if the request is POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Validate required fields
        $required_fields = ['employment', 'location', 'employment_type', 'salary', 'description'];
        foreach ($required_fields as $field) {
            if (empty($_POST[$field])) {
                throw new Exception("Field '$field' is required");
            }
        }

        // Set a default company_id (you might want to get this from a session)
        $company_id = 1; // Adjust this according to your needs

        // Prepare the SQL statement
        $stmt = $pdo->prepare("
            INSERT INTO job_listings (
                company_id, 
                employment, 
                location, 
                employment_type, 
                salary, 
                description
            ) VALUES (?, ?, ?, ?, ?, ?)
        ");
        
        // Execute with the form data
        $result = $stmt->execute([
            $company_id,
            $_POST['employment'],
            $_POST['location'],
            $_POST['employment_type'],
            $_POST['salary'],
            $_POST['description']
        ]);

        if ($result) {
            echo json_encode([
                'success' => true,
                'message' => 'Job listing created successfully',
                'job_id' => $pdo->lastInsertId()
            ]);
        } else {
            throw new Exception('Failed to insert job listing');
        }
    } else {
        throw new Exception('Invalid request method');
    }
} catch (Exception $e) {
    error_log('Job Creation Error: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Error: ' . $e->getMessage()
    ]);
}
?>