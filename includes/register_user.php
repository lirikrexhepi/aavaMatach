<?php
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Handle profile picture upload
        $profile_picture = null;
        if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = '../uploads/users/';
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            
            $fileExtension = pathinfo($_FILES['profile_picture']['name'], PATHINFO_EXTENSION);
            $fileName = uniqid() . '.' . $fileExtension;
            $uploadFile = $uploadDir . $fileName;
            
            if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $uploadFile)) {
                $profile_picture = 'uploads/users/' . $fileName;
            }
        }

        // Begin transaction
        $pdo->beginTransaction();

        // Insert into USERS table
        $stmt = $pdo->prepare("INSERT INTO USERS (fullname, email, password) VALUES (?, ?, ?)");
        $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $stmt->execute([
            $_POST['full_name'],
            $_POST['email'],
            $hashedPassword
        ]);
        
        $userId = $pdo->lastInsertId();

        // Insert into USER_DATA table
        $stmt = $pdo->prepare("INSERT INTO USER_DATA (
            id, role, experience, industry, environment, workhours, 
            prefered_company_size, work_pace, communication, team_dynamic,
            mental_support, work_life_balance, wellness_program, goals, benefits,
            profile_picture
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->execute([
            $userId,
            $_POST['current_role'],
            $_POST['experience'],
            $_POST['industry'],
            $_POST['work_environment'],
            $_POST['working_hours'],
            $_POST['company_size'],
            $_POST['work_pace'],
            $_POST['communication_style'],
            $_POST['team_dynamic'],
            $_POST['mental_health_importance'],
            $_POST['work_life_balance'],
            $_POST['wellness_programs'],
            $_POST['primary_motivation'],
            implode(',', $_POST['benefits'] ?? []),
            $profile_picture
        ]);

        // Commit transaction
        $pdo->commit();

        header('Content-Type: application/json');
        echo json_encode(['success' => true, 'message' => 'Registration successful']);

    } catch (PDOException $e) {
        // Handle duplicate email specifically
        if ($e->getCode() == 23000 && strpos($e->getMessage(), 'Duplicate entry') !== false) {
            echo json_encode([
                'success' => false,
                'message' => 'This email address is already registered. Please use a different email.'
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Registration failed. Please try again.'
            ]);
        }
    }
}
?>