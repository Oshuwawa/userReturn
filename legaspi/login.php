<?php
require_once 'core/dbConfig.php';
require_once 'core/models.php';

if (isset($_POST['loginBtn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if (checkUserCredentials($pdo, $email, $password)) {
        $_SESSION['email'] = $email;
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['message'] = "Invalid email or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login Scientist Account</h2>
    <?php if (isset($_SESSION['message'])) { echo "<p>{$_SESSION['message']}</p>"; unset($_SESSION['message']); } ?>
    <form method="POST" action="">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="loginBtn">Login</button>
    </form>
    <p><a href="register.php">Don't have an account? Register here</a></p>
</body>
</html>