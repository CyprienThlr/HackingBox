<?php
include 'config.php';

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $query)) {
        header('Location: login.php');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Finance Management</title>
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
        <h2>Signup</h2>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" name="signup">Signup</button>
        </form>

    </main>
    <footer>
        <p>&copy; 2024 Finance Management</p>
    </footer>
</body>
</html>
