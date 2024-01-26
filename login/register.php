<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['registerName'];
    $email = $_POST['registerEmail'];
    $password = password_hash($_POST['registerPassword'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, 'user')");
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
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
    padding: 40px;
    border-radius: 20px;
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
    background-color: green;
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
.register{
    color: red; 
    font-weight: bold;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="form-container">
        <h2>Register</h2>
        <form action="register.php" method="post" onsubmit="return validateForm()">
            <label for="registerName">Name:</label>
            <input type="text" id="registerName" name="registerName" required>

            <label for="registerEmail">Email:</label>
            <input type="email" id="registerEmail" name="registerEmail" required>

            <label for="registerPassword">Password:</label>
            <input type="password" id="registerPassword" name="registerPassword" required>

            <button type="submit">Register</button>
        </form>

        <p class="error" id="registerError"></p>

        <p>Already have an account? <a href="login.php" class="register">Log-in here</a></p>
    </div>

    <script>
        function validateForm() {
            var name = document.getElementById('registerName').value;
            var email = document.getElementById('registerEmail').value;
            var password = document.getElementById('registerPassword').value;
            var errorElement = document.getElementById('registerError');
            
            errorElement.innerText = '';

            if (name === '' || email === '' || password === '') {
                errorElement.innerText = 'Please fill in all fields.';
                return false;
            }

            if (!/^[A-Z][a-z]*$/.test(name)) {
                errorElement.innerText = 'Name must start with an uppercase letter.';
                return false;
            }

            if (!email.includes('@')) {
                errorElement.innerText = 'Invalid email format.';
                return false;
            }

            if (password.length < 8) {
                errorElement.innerText = 'Password must be at least 8 characters long.';
                return false;
            }

            return true;
        }
    </script>
</body>
</html>