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

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $deleteQuery = "DELETE FROM contact_form WHERE id = $id";
    if ($conn->query($deleteQuery) === TRUE) {
        echo "<p>Record with ID $id deleted successfully.</p>";
    } else {
        echo "<p>Error deleting record: " . $conn->error . "</p>";
    }
} else {
    echo "<p>Invalid or missing ID parameter in the URL.</p>";
}

$conn->close();
?>