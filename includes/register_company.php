<?php
require_once '../config/db.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $stmt = $pdo->prepare("INSERT INTO COMPANY (
            name, description, industry, company_size, location,
            office_type, working_hours, office_layout, work_pace,
            communication, team_dynamic, mental_support, wellness_budget, benefits
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->execute([
            $_POST['company_name'],
            $_POST['company_description'],
            $_POST['industry'],
            $_POST['company_size'],
            $_POST['location'],
            $_POST['office_type'],
            $_POST['working_hours'],
            $_POST['office_layout'],
            $_POST['work_pace'],
            $_POST['communication_style'],
            $_POST['team_dynamic'],
            $_POST['mental_health_support'],
            $_POST['wellness_budget'],
            isset($_POST['benefits']) ? implode(',', $_POST['benefits']) : ''
        ]);

        echo json_encode(['success' => true, 'message' => 'Company registered successfully']);

    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>