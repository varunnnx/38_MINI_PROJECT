<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "charity_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $user_id = $_POST['user_id'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $website = $_POST['website'];
    $focus_areas = $_POST['focus_areas'];
    $geographical_scope = $_POST['geographical_scope'];
    $collaboration_interests = $_POST['collaboration_interests'];
    $key_achievements = $_POST['key_achievements'];
    $partnerships = $_POST['partnerships'];

    // Prepare update statement
    $stmt = $conn->prepare("UPDATE users SET phone=?, address=?, website=?, focus_areas=?, geographical_scope=?, collaboration_interests=?, key_achievements=?, partnerships=? WHERE id=?");
    $stmt->bind_param("ssssssssi", $phone, $address, $website, $focus_areas, $geographical_scope, $collaboration_interests, $key_achievements, $partnerships, $user_id);

    // Execute the update statement
    if ($stmt->execute() === TRUE) {
        echo "User information updated successfully";
    } else {
        echo "Error updating user information: " . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();

?>
