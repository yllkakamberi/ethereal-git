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
    width: 300px; /* Adjust the width as needed */
    margin: 0 auto; /* Center the form */
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
    background-color: #dc3545; 
}
</style>

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
    $user_id = $_POST['user_id'];

    $sql = "DELETE FROM users WHERE id = $user_id";
    if ($conn->query($sql) === TRUE) {
        echo "User deleted successfully.";
    } else {
        echo "Error deleting user: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request.";
    exit();
}
?>