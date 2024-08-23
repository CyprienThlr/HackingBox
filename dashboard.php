<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Finance Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Finance Management</h1>
        <nav>
            <a href="index.html">Home</a>
            <a href="dashboard.php">Dashboard</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <main>
        <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
        <p>This is your user dashboard where you can manage your finances and communicate with others.</p>
    </main>
    <footer>
        <p>&copy; 2024 Finance Management</p>
    </footer>
</body>
</html>
