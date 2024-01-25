<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['registerName'];
    $email = $_POST['registerEmail'];
    $password = password_hash($_POST['registerPassword'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$password', 'user')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.form-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

input {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    box-sizing: border-box;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

.error {
    color: red;
    font-size: 14px;
}
</style>
<body>
 
    <div class="form-container">
        <h2>Register</h2>
        <form action="register.php" method="post">
            <label for="registerName">Name:</label>
            <input type="text" id="registerName" name="registerName" required>

            <label for="registerEmail">Email:</label>
            <input type="email" id="registerEmail" name="registerEmail" required>

            <label for="registerPassword">Password:</label>
            <input type="password" id="registerPassword" name="registerPassword" required>

            <button type="submit">Register</button>
        </form>

        <p class="error" id="registerError"></p>

        <p>Already have an account? <a href="login.php">Login here</a>.</p>
    </div>

    <script src="scripts.js"></script>
</body>
</html>