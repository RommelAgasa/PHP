<?php
session_start(); // Start the PHP session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $errors = array();

    // Validation checks
    if (empty($name)) {
        $errors["name"] = "Name is required.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email address.";
    }

    if (empty($errors)) {
        // If there are no errors, save the data in the session
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;

        // Redirect to the other page where you want to display the input
        header("Location: display.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <span style="color: red;"><?php echo isset($errors["name"]) ? $errors["name"] : ""; ?></span>
        <br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <span style="color: red;"><?php echo isset($errors["email"]) ? $errors["email"] : ""; ?></span>
        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
