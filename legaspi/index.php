
<?php
require_once 'core/dbConfig.php';
require_once 'core/models.php';

// Redirect to login if the user is not logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the User Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Display any session messages -->
    <?php if (isset($_SESSION['message'])): ?>
        <h1 style="color: red;"><?php echo $_SESSION['message']; ?></h1>
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>

    <!-- Greeting and Logout Option -->
    <div class="greeting" style="text-align: center;">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?>!</h1>
        <h1><a href="core/handleForms.php?logoutUserBtn=1">Logout</a></h1>    
    </div>

    <!-- Search Form -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET">
        <input type="text" name="searchInput" placeholder="Search here">
        <input type="submit" name="searchBtn" value="Search">
    </form>

    <p><a href="index.php">Clear Search Query</a></p>
    <p><a href="insert.php">Insert New User</a></p>

    <!-- User Table -->
    <table style="width:100%; margin-top: 20px;">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Education</th>
            <th>Expertise</th>
            <th>Experience</th>
            <th>Date Added</th>
            <th>Action</th>
        </tr>

        <?php
        if (!isset($_GET['searchBtn'])) {
            $getAllUsers = getAllUsers($pdo);
            foreach ($getAllUsers as $row) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['first_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['last_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                echo "<td>" . htmlspecialchars($row['gender']) . "</td>";
                echo "<td>" . htmlspecialchars($row['address']) . "</td>";
                echo "<td>" . htmlspecialchars($row['education']) . "</td>";
                echo "<td>" . htmlspecialchars($row['expertise']) . "</td>";
                echo "<td>" . htmlspecialchars($row['experience']) . "</td>";
                echo "<td>" . htmlspecialchars($row['date_added']) . "</td>";
                echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            $searchForAUser = searchForAUser($pdo, $_GET['searchInput']);
            foreach ($searchForAUser as $row) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['first_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['last_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                echo "<td>" . htmlspecialchars($row['gender']) . "</td>";
                echo "<td>" . htmlspecialchars($row['address']) . "</td>";
                echo "<td>" . htmlspecialchars($row['education']) . "</td>";
                echo "<td>" . htmlspecialchars($row['expertise']) . "</td>";
                echo "<td>" . htmlspecialchars($row['experience']) . "</td>";
                echo "<td>" . htmlspecialchars($row['date_added']) . "</td>";
                echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>
