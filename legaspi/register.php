<?php
require_once 'core/dbConfig.php';
require_once 'core/models.php';


if (isset($_POST['registerBtn'])) {
    $registerUser = registerNewUser(
        $pdo,
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['password'],
        $_POST['gender'],
        $_POST['address'],
        $_POST['education'],
        $_POST['expertise'],
        $_POST['experience']
    );

    if ($registerUser) {
        $_SESSION['message'] = "Registration successful! You can now log in.";
        header("Location: login.php");
        exit();
    } else {
        $_SESSION['message'] = "Registration failed. Email may already be in use.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <?php if (isset($_SESSION['message'])) { echo "<p>{$_SESSION['message']}</p>"; unset($_SESSION['message']); } ?>
    <form method="POST" action="">
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="text" name="gender" placeholder="Gender" required>
        <input type="text" name="address" placeholder="Address" required>
        <input type="text" name="education" placeholder="Education" required>
        <input type="text" name="expertise" placeholder="Expertise" required>
        <input type="text" name="experience" placeholder="Experience" required>
        <button type="submit" name="registerBtn">Register</button>
    </form>
</body>
</html>