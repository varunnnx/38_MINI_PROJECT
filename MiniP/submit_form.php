<?php
// Validate and sanitize form data
$inputUsername = htmlspecialchars(trim($_POST['username']));
$inputEmail = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$inputPhone = htmlspecialchars(trim($_POST['phone']));
$inputAddress = htmlspecialchars(trim($_POST['address']));
$inputWebsite = filter_var(trim($_POST['website']), FILTER_SANITIZE_URL);
$inputSocialMedia = htmlspecialchars(trim($_POST['socialMedia']));
$inputFocusAreas = htmlspecialchars(trim($_POST['focusAreas']));
$inputGeographicalScope = htmlspecialchars(trim($_POST['geographicalScope']));
$inputCollaborationInterests = htmlspecialchars(trim($_POST['collaborationInterests']));
$inputKeyAchievements = htmlspecialchars(trim($_POST['keyAchievements']));
$inputPartnerships = htmlspecialchars(trim($_POST['partnerships']));

// Password should be hashed for security
$inputPassword = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);

// File upload handling
if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileType = $_FILES['image']['type'];
    $fileSize = $_FILES['image']['size'];
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

    // Validate file type and size
    $allowedExtensions = ['pdf'];
    $maxFileSize = 5 * 1024 * 1024; // 5 MB in bytes

    if (!in_array(strtolower($fileExtension), $allowedExtensions) || $fileSize > $maxFileSize) {
        die('Error: Invalid file or file size exceeds the limit.');
    }

    // Move uploaded file to a designated directory
    $uploadDir = 'uploads/';
    $uploadedFilePath = $uploadDir . uniqid() . '.' . $fileExtension;

    if (!move_uploaded_file($fileTmpName, $uploadedFilePath)) {
        die('Error: Failed to move uploaded file.');
    }
} else {
    die('Error: File upload failed.');
}

// Store data in the database (Assuming you have a database connection)
$dsn = 'mysql:host=localhost;dbname=charity_db';
$dbUsername = 'root';
$dbPassword = '';

try {
    $pdo = new PDO($dsn, $dbUsername, $dbPassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare SQL statement with parameterized query
    $stmt = $pdo->prepare("INSERT INTO users (username, email, phone, address, website, social_media, focus_areas, geographical_scope, collaboration_interests, key_achievements, partnerships, password, pdf_path) 
                           VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters and execute
    $stmt->execute([$inputUsername, $inputEmail, $inputPhone, $inputAddress, $inputWebsite, $inputSocialMedia, $inputFocusAreas, $inputGeographicalScope, $inputCollaborationInterests, $inputKeyAchievements, $inputPartnerships, $inputPassword, $uploadedFilePath]);

    // Close connection
    $pdo = null;

    header("Location: pending.php");
    exit; // Ensure script stops after redirection
} catch (PDOException $e) {
    die('Database error: ' . $e->getMessage());
}
?>
