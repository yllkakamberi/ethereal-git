<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            color: #333;
        }

        header, nav {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #ffc107;
        }

        section {
            margin: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            width: 300px;
            margin: 0 auto; 
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #ffc107;
        }
    </style>
</head>
<?php
include('db.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SESSION['user_role'] !== 'admin') {
    echo "You do not have permission to access this page.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    // Insert the new user into the database
    $sql = "INSERT INTO users (name, email, role) VALUES ('$name', '$email', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo "New user added successfully.";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>

<body>

    <header>
        <h1>New User</h1>
    </header>

    <nav>
        <a href="admin_dashboard.php">Back to Dashboard</a>
        <a href="logout.php">Logout</a>
    </nav>

    <section>
        <form action="add_user.php" method="post">
            <!-- Add input fields for new user details -->
            <label for="name">Name:</label>
            <input type="text" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="role">Role:</label>
            <input type="text" name="role" required>

            <button type="submit" class="new-button">Add User</button>
        </form>
    </section>

</body>
</html>
