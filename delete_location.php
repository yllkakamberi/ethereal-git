<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_location"])) {
    $locationId = $_POST["location_id"];

    $sql = "SELECT photo_path FROM wedding_locations WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $locationId);
    $stmt->execute();
    $stmt->bind_result($photoPath);
    $stmt->fetch();
    $stmt->close();

    $sqlDelete = "DELETE FROM wedding_locations WHERE id = ?";
    $stmtDelete = $conn->prepare($sqlDelete);
    $stmtDelete->bind_param("i", $locationId);

    if ($stmtDelete->execute()) {
        unlink($photoPath);
        echo "Location deleted successfully!";
    } else {
        echo "Error: " . $stmtDelete->error;
    }

    $stmtDelete->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Wedding Location</title>
</head>
<body>
    <header>
        <h1>Delete a wedding location</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="logout.php">Log out</a>
    </nav>

    <form action="delete_location.php" method="post">
        <label for="location_id">Location ID:</label>
        <input type="number" name="location_id" required>

        <button type="submit" name="delete_location">Delete Location</button>
    </form>
</body>
</html>