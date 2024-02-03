<?php
session_start();

function isAuthenticated() {
    return isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0;
}

if (!isAuthenticated()) {
    header('Location: login.php'); 
    exit();
}

$userRole = $_SESSION['user_role'] ?? 'guest';

if ($userRole !== 'admin') {
    echo '<p>Access denied. You do not have permission to view this page.</p>';
    exit();
}

include('db_connection.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
  body {
    font-family: arial;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
        background-color: white;
        color: #545151;
        padding: 10px;
        text-align: center;
        font-family: monospace;
align-items:center;
    }

nav {
        background-color: grey;
        padding: 10px;
        text-align: center;
        transition: color 0.1s;
        font-family:monospace;
        font-size:14px;
    }

    nav a {
        color: #fff;
        text-decoration: none;
        margin: 0 15px;
        font-weight: bold;
        transition: color 0.5s;
    }

    nav a:hover {
        color: grey;
    }

    table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
    font-size:13px;
    }

    table, th, td {
    border: 1px solid #ddd;
    }

    th, td {
    padding: 12px;
    text-align: left;
    }

    th {
    background-color: 	 #e6f2ff;
    font-family:arial;
    font-size:14px;
    }

    a{
    text-decoration: none;
    color: #ff0080;
    font-weight: bold;
    }

    a:hover {
    color: #0056b3;
    }
</style>

<body>
<header>
        <h1>Welcome to the Contact Dashboard, <?php echo $_SESSION['user_name']; ?>!</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="login/logout.php">Log out</a>
    </nav>

 <?php
    $query = "SELECT * FROM contact_form";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Partner First Name</th><th>Partner Last Name</th><th>Pronouns</th><th>Country</th><th>Phone Number</th><th>Email</th><th>Event Date</th><th>Location</th><th>Estimated Guest Count</th><th>Drink of Choice</th><th>About You</th><th>Action</th></tr>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['first_name'] . '</td>';
            echo '<td>' . $row['last_name'] . '</td>';
            echo '<td>' . $row['partner_first_name'] . '</td>';
            echo '<td>' . $row['partner_last_name'] . '</td>';
            echo '<td>' . $row['pronouns'] . '</td>';
            echo '<td>' . $row['country'] . '</td>';
            echo '<td>' . $row['phone_number'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['event_date'] . '</td>';
            echo '<td>' . $row['location'] . '</td>';
            echo '<td>' . $row['estimated_guest_count'] . '</td>';
            echo '<td>' . $row['drink_of_choice'] . '</td>';
            echo '<td>' . $row['about_you'] . '</td>';
            echo '<td><a href="edit_form.php?id=' . $row['id'] . '">Edit</a> | <a href="delete_form.php?id=' . $row['id'] . '">Delete</a></td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo '<p>No contact form entries found.</p>';
    }

    $conn->close();
    ?>
</body>
</html>