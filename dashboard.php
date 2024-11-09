<?php
session_start();
define('BASE_PATH', __DIR__);

$section = isset($_GET['section']) ? $_GET['section'] : 'dashboard';
$allowed_sections = ['dashboard', 'analytics', 'job_listings', 'applications', 'settings', 'company_profile'];
if (!in_array($section, $allowed_sections)) {
    $section = 'dashboard';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aava Match - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <?php include BASE_PATH . '/includes/styles.php'; ?>
</head>
<body>
    <?php include BASE_PATH . '/includes/sidebar.php'; ?>
    
    <div class="main-content">
        <?php include BASE_PATH . '/includes/header.php'; ?>
        
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <?php 
            $section_file = BASE_PATH . "/sections/{$section}.php";
            if (file_exists($section_file)) {
                include $section_file;
            } else {
                echo "<div class='bg-white rounded-lg shadow-sm p-6'>Section not found</div>";
            }
            ?>
        </main>
    </div>
</body>
</html> 