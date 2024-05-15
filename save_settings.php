<?php

$title = $_POST["title"];
$targeting_rule = $_POST["targeting_rule"];
$overlay_type = $_POST["overlay_type"];
$display_rules = $_POST["display_rules"];

$conn = new mysqli('localhost', 'root','', 'overlay');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// Prepare SQL statement
$sql = "INSERT INTO settings (title, targeting_rule, overlay_type, display_rules) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error preparing statement: " . $conn->error);
}

// Bind parameters
$stmt->bind_param("ssss", $title, $targeting_rule, $overlay_type, $display_rules);

// Execute statement
if ($stmt->execute()) {
    // Redirect to settings page with success message
    header("Location: settingpage.html?success=true");
    exit();
} else {
    // Redirect to settings page with error message
    header("Location: settingpage.html?error=true");
    exit();
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
