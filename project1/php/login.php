<?php
// Start session
session_start();

// Check if user is already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php"); // Redirect to dashboard if logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login_action.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Log In</button>
        </form>
        <p>Don't have an account? <a href="register.php">Sign Up</a></p>
    </div>
</body>
</html>
<?php
// Start session
session_start();

// Example credentials - Replace this with your database query
$email = $_POST['email'];
$password = $_POST['password'];

// Hardcoded credentials for demo purposes
if ($email === 'user@example.com' && $password === 'password123') {
    // Store user data in session if credentials are correct
    $_SESSION['user_id'] = $email;

    // Redirect to dashboard
    header("Location: dashboard.php");
    exit();
} else {
    // Show error message if credentials are invalid
    echo "Invalid email or password.";
}
?>
