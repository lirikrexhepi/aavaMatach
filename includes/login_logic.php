<?php
require_once '../config/db.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        // First check users table
        $stmt = $pdo->prepare("SELECT id, password FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_type'] = 'user';
            
            echo json_encode([
                'success' => true,
                'redirect' => 'swipe.html'
            ]);
            exit;
        }

        // If not found in users, check company table
        $stmt = $pdo->prepare("SELECT id, password FROM company WHERE email = ?");
        $stmt->execute([$email]);
        $company = $stmt->fetch();

        if ($company && password_verify($password, $company['password'])) {
            session_start();
            $_SESSION['user_id'] = $company['id'];
            $_SESSION['user_type'] = 'company';
            
            echo json_encode([
                'success' => true,
                'redirect' => 'company_dashboard.php'
            ]);
            exit;
        }

        // If no match found in either table
        echo json_encode([
            'success' => false,
            'message' => 'Invalid email or password'
        ]);
        
    } catch (PDOException $e) {
        echo json_encode([
            'success' => false,
            'message' => 'Login failed. Please try again.'
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request method'
    ]);
}
?>