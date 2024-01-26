<style>
    style>
    body {
    font-family: Arial, sans-serif;
    margin: 20px;
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

h1 {
    text-align: center;
}

form {
    max-width: 400px;
    margin: 0 auto;
}

label {
    display: block;
    margin-top: 10px;
}

input,
textarea,
button {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

button {
    background-color:  #99ddff;
    color: black;
    font-family:monospace;
    font-weight:bold;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}
</style>


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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_location"])) {
    $locationName = $_POST["location_name"];
    $locationDescription = $_POST["location_description"];

    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["photo"]["name"]);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile);

    $stmt = $conn->prepare("INSERT INTO wedding_locations (location_name, location_description, photo_path) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $locationName, $locationDescription, $targetFile);

    if ($stmt->execute()) {
        echo "New location added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Location</title>
</head>
<body>
<header>
    <h1>Add a wedding location </h1>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="logout.php">Log out</a>
</nav>

<form action="add_location.php" method="post" enctype="multipart/form-data">
    <label for="location_name">Location Name:</label>
    <input type="text" name="location_name" required>

    <label for="location_description">Location Description:</label>
    <textarea name="location_description" required></textarea>

    <label for="photo">Upload Photo:</label>
    <input type="file" name="photo" accept="uploads/*" required>

    <button type="submit" name="add_location">Add Location</button>
</form>

<form action="add_location.php" method="post">
    <label for="location_id">Location ID to Delete:</label>
    <input type="number" name="location_id" required>

    <button type="submit" name="delete_location">Delete Location</button>
</form>
</body>
</html>