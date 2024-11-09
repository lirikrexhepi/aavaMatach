<?php
require_once '../config/db.php';
session_start();

header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'Not logged in']);
    exit;
}

if (!isset($_FILES['profile_picture'])) {
    echo json_encode(['success' => false, 'message' => 'No file uploaded']);
    exit;
}

try {
    $file = $_FILES['profile_picture'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];

    // Generate unique filename
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

    if (!in_array($fileExtension, $allowedExtensions)) {
        echo json_encode(['success' => false, 'message' => 'Invalid file type']);
        exit;
    }

    // Set path relative to project root
    $uploadDir = '../uploads/profile_pictures/';
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Convert backslashes to forward slashes and ensure consistent format
    $newFileName = 'profile_' . $_SESSION['user_id'] . '_' . time() . '.' . $fileExtension;
    $uploadPath = $uploadDir . $newFileName;
    
    if (move_uploaded_file($fileTmpName, $uploadPath)) {
        // Store the path without leading slash
        $dbPath = 'uploads\\profile_pictures\\' . $newFileName;
        
        // Update database
        $stmt = $pdo->prepare("UPDATE user_data SET profile_picture = ? WHERE id = ?");
        $stmt->execute([$dbPath, $_SESSION['user_id']]);

        echo json_encode([
            'success' => true,
            'message' => 'Profile picture updated successfully',
            'path' => $dbPath
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to upload file']);
    }

} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Error uploading file: ' . $e->getMessage()]);
}