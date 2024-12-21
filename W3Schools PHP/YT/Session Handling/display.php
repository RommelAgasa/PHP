<?php
session_start(); // Start the PHP session

// Check if the session variables are set before displaying them
if (isset($_SESSION["name"]) && isset($_SESSION["email"])) {
    $name = $_SESSION["name"];
    $email = $_SESSION["email"];

    // Unset the session variables if you want to clear the data after displaying it
    // unset($_SESSION["name"]);
    // unset($_SESSION["email"]);
} else {
    // Redirect back to the form page if the session variables are not set (optional)
    header("Location: form.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Input</title>
</head>
<body>
    <h2>Displaying Input:</h2>
    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
</body>
</html>
