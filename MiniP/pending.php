<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Pending</title>
</head>
<body>
    <h1>Your enrollment is pending approval</h1>
    <p>We have received your enrollment. Please wait for admin approval.</p>

    <?php
    // Establish database connection
    $dsn = 'mysql:host=localhost;dbname=charity_db';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if user is approved
        $stmt = $pdo->prepare("SELECT is_approved FROM users WHERE username = :username");
        $stmt->bindParam(':username', $_SESSION['username']);
        $stmt->execute();
        $isApproved = $stmt->fetchColumn();

        if ($isApproved == 1) {
            header("Location: index.php"); // Redirect to index.php if approved
            exit;
        }

        $pdo = null; // Close connection
    } catch (PDOException $e) {
        die('Database error: ' . $e->getMessage());
    }
    ?>

</body>
</html>
