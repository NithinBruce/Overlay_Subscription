<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if (!$email) {
        echo "Please enter a valid email address.";
        exit;
    }

 
    $mysqli = new mysqli("localhost", "root", "", "overlay");
    if ($mysqli->connect_errno) {
      
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit;
    }

  
    $stmt = $mysqli->prepare("INSERT INTO subscribers (email) VALUES (?)");
    $stmt->bind_param("s", $email);
    if (!$stmt->execute()) {
 
        echo "Error: " . $mysqli->error;
        exit;
    }

    $stmt->close();
    $mysqli->close();
    header("Location: settingpage.php");
    exit;
} else {
   
    echo "Method not allowed";
}
?>
