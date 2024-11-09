<?php
session_start();
define('BASE_PATH', __DIR__);

$section = isset($_GET['section']) ? $_GET['section'] : 'dashboard';
$allowed_sections = ['dashboard', 'analytics', 'job_listings', 'applications', 'settings'];
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
    <link href="https://api.fontshare.com/v2/css?f[]=general-sans@500,600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Inter", sans-serif;
            background: radial-gradient(
                circle at 10% 20%,
                rgba(0, 0, 0, 0.02) 0%,
                transparent 8%
            ),
            radial-gradient(
                circle at 90% 80%,
                rgba(0, 0, 0, 0.02) 0%,
                transparent 8%
            );
            background-color: #ffffff;
        }

        nav {
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .sidebar {
            width: 280px;
            border-right: 1px solid rgba(0, 0, 0, 0.05);
            background: rgba(255, 255, 255, 0.95);
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto;
        }

        .main-content {
            margin-left: 280px;
        }

        @media (max-width: 1024px) {
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <?php include BASE_PATH . '/includes/sidebar.php'; ?>

    <div class="main-content">
        <nav>
            <div class="nav-container px-6 py-4">
                <div class="flex justify-center items-center">
                    <a href="#" class="text-xl font-semibold">aava match.</a>
                </div>
            </div>
        </nav>

        <main class="max-w-6xl mx-auto px-6 py-8">
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.querySelector('#mobile-menu-button');
            const sidebar = document.querySelector('.sidebar');
            
            if (menuButton) {
                menuButton.addEventListener('click', () => {
                    sidebar.classList.toggle('active');
                });
            }

            // Close sidebar when clicking outside on mobile
            document.addEventListener('click', (e) => {
                if (window.innerWidth < 1024) {
                    if (!sidebar.contains(e.target) && !menuButton.contains(e.target)) {
                        sidebar.classList.remove('active');
                    }
                }
            });
        });
    </script>
</body>
</html> 