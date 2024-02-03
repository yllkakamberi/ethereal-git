<?php
include('db.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['loginEmail'];
    $password = $_POST['loginPassword'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_role'] = $row['role'];
            $_SESSION['user_name'] = $row['name'];

            header("Location: ../index.php");
            exit();
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }
}



$conn->close();
?>

   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
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
    background-color: white;
    padding: 50px;
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
    color: white;
    border: none;
    border-radius: 2px;
    cursor: pointer;
}

button:hover {
    background-color: green;
}

.error {
    color: red;
    font-size: 14px;
}
.register-link {
    color: red; 
    font-weight: bold;
    
}

    </style>

    <div class="form-container">
        <h2>Log in</h2>
        <form action="login.php" method="post">
            <label for="loginEmail">Email:</label>
            <input type="email" id="loginEmail" name="loginEmail" required>

            <label for="loginPassword">Password:</label>
            <input type="password" id="loginPassword" name="loginPassword" required>

            <button type="submit">Log in</button>
        </form>

        <p class="error" id="loginError"></p>

        <p>Don't have an account? <a href="register.php" class="register-link">Register here</a></p>


    </div>

    <script>
        function validateForm() {
            var email = document.getElementById('loginEmail').value;
            var password = document.getElementById('loginPassword').value;

            if (email === '' || password === '') {
                document.getElementById('loginError').innerText = 'Please fill in all fields.';
                return false;
            }

            if (!email.includes('@')) {
                document.getElementById('loginError').innerText = 'Invalid email format.';
                return false;
            }

            if (password.length < 8) {
                document.getElementById('loginError').innerText = 'Password must be at least 8 characters long.';
                return false;
            }


            return true;
        }
    </script>
</body>
</html>

