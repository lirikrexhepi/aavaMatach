<?php
require_once 'config/db.php';
header('Content-Type: application/json');

try {
    // Enable error reporting for debugging
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Simpler query without the created_at ordering for now
    $query = "SELECT 
        j.*,
        c.name as company_name
    FROM job_listings j
    LEFT JOIN company c ON j.company_id = c.id
    ORDER BY j.id DESC"; // Order by ID instead of created_at

    $stmt = $pdo->prepare($query);
    $stmt->execute();
    
    $jobListings = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Log the results
    error_log("Found " . count($jobListings) . " job listings");
    
    echo json_encode([
        'success' => true,
        'data' => $jobListings,
        'count' => count($jobListings)
    ]);

} catch (PDOException $e) {
    error_log("Database error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Database error: ' . $e->getMessage()
    ]);
} catch (Exception $e) {
    error_log("General error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'General error: ' . $e->getMessage()
    ]);
}
?>
