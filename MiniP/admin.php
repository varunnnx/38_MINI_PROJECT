<?php
// Database configuration
$host = 'localhost';
$dbname = 'charity_db';
$username = 'root';
$password = '';

// Connect to database using PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['user_id']) && isset($_POST['action'])) {
        $user_id = $_POST['user_id'];
        $action = $_POST['action'];

        // Update is_approved based on action (approve or reject)
        $is_approved = ($action === 'approve') ? 1 : 0;

        // Update database
        $sql = "UPDATE users SET is_approved = :is_approved WHERE id = :user_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['is_approved' => $is_approved, 'user_id' => $user_id]);
    }
}

// Retrieve pending user applications with image_path and pdf_path
$sql = "SELECT id, username, email, phone, address, pdf_path FROM users WHERE is_approved = 0"; // Get users where not approved
$stmt = $pdo->prepare($sql);
$stmt->execute();
$pendingUsers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <h1>Pending User Applications</h1>

    <?php if (count($pendingUsers) > 0): ?>
        <table border="1">
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Image</th>
                <th>PDF</th>
                <th>Action</th>
            </tr>
            <?php foreach ($pendingUsers as $user): ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['phone']; ?></td>
                    <td><?php echo $user['address']; ?></td>
                    <td>
                        <?php if ($user['pdf_path']): ?>
                            <a href="<?php echo $user['pdf_path']; ?>" download="user_application.pdf">Download PDF</a>
                        <?php else: ?>
                            No PDF available
                        <?php endif; ?>
                    </td>
                    <td>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                            <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                            <input type="hidden" name="action" value="approve">
                            <button type="submit">Approve</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No pending applications found.</p>
    <?php endif; ?>
</body>
</html>
