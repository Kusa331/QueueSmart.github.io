<?php
// Start session
session_start();

// Check if user is logged in, otherwise redirect to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Welcome, <?php echo $_SESSION['user_id']; ?></h1>
            <div class="header-buttons">
                <button class="register">Registration</button>
                <button class="logout">Logout</button>
            </div>
        </header>
        
        <section class="dashboard">
            <h2>Dashboard Overview</h2>
            <div class="stats">
                <div class="stat-item">
                    <h3>Current Position in Queue:</h3>
                    <p class="stat-number" id="tokenNumber">3</p>
                </div>
                <div class="stat-item">
                    <h3>Estimated Waiting Time:</h3>
                    <p class="stat-number">15 minutes</p>
                </div>
                <div class="stat-item">
                    <h3>Total People in Queue:</h3>
                    <p class="stat-number">10</p>
                </div>
            </div>
        </section>

        <section class="appointments">
            <h2>Upcoming Appointments</h2>
            <ul>
                <li>Appointment on October 5, 2024 at 10:00 AM</li>
                <li>Appointment on October 7, 2024 at 11:00 AM</li>
            </ul>
        </section>

        <section class="notifications">
            <h2>Notifications</h2>
            <p>No new notifications.</p>
        </section>

        <section class="help">
            <h2>Help</h2>
            <p><a href="#">FAQ</a> | <a href="#">Contact Support</a></p>
        </section>
    </div>

    <script>
        // Handle Logout Button
        document.querySelector('.logout').addEventListener('click', function() {
            window.location.href = 'logout.php';  // Redirect to logout.php to destroy the session
        });
    </script>
</body>
</html>
