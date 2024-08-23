<?php
session_start();
include 'config.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header('Location: dashboard.php');
    } else {
        echo "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Finance Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Finance Management</h1>
        <nav>
            <a href="index.html">Home</a>
            <a href="login.php">Login</a>
            <a href="signup.php">Signup</a>
        </nav>
    </header>
    <main>
        <h2>Login</h2>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" name="login">Login</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Finance Management</p>
    </footer>
</body>
</html>
