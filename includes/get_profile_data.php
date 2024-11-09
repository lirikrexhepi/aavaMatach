<?php
require_once '../config/db.php';
session_start();

header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
    echo json_encode([
        'success' => false,
        'message' => 'User not logged in'
    ]);
    exit;
}

try {
    // Get basic user info
    $stmt = $pdo->prepare("SELECT u.fullname, u.email, ud.* 
                          FROM users u 
                          LEFT JOIN user_data ud ON u.id = ud.id 
                          WHERE u.id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $userData = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($userData) {
        echo json_encode([
            'success' => true,
            'data' => $userData
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'User data not found'
        ]);
    }
} catch (PDOException $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Error fetching user data'
    ]);
}
?>