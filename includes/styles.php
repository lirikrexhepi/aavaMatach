<style>
    body {
        font-family: "Inter", sans-serif;
        background: radial-gradient(circle at 10% 20%, rgba(0, 0, 0, 0.02) 0%, transparent 8%),
                    radial-gradient(circle at 90% 80%, rgba(0, 0, 0, 0.02) 0%, transparent 8%);
        background-color: #ffffff;
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
        z-index: 40;
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