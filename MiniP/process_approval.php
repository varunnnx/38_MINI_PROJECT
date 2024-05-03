<?php
// Check if form was submitted and process admin actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['approve']) && isset($_POST['user_id'])) {
        // Approve the user (Update is_approved to 1)
        $userId = $_POST['user_id'];

        try {
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare("UPDATE users SET is_approved = 1 WHERE id = ?");
            $stmt->execute([$userId]);

            $pdo = null;

            header("Location: index.php"); // Redirect to index.php after approval
            exit;
        } catch (PDOException $e) {
            die('Database error: ' . $e->getMessage());
        }
    } elseif (isset($_POST['reject']) && isset($_POST['user_id'])) {
        // Reject the user (Update is_approved to -1 or handle accordingly)
        $userId = $_POST['user_id'];

        try {
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare("UPDATE users SET is_approved = -1 WHERE id = ?");
            $stmt->execute([$userId]);

            $pdo = null;

            header("Location: index.php"); // Redirect to index.php after rejection
            exit;
        } catch (PDOException $e) {
            die('Database error: ' . $e->getMessage());
        }
    }
}
?>
