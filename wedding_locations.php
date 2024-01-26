<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    h1{
          text-align: center;
          color: #554f4a;
          font-size: 25px;
          font-family: monospace;
          font-weight: 600;
        }

        .location-name {
    font-size: 18px;
    font-weight: bold;
    font-family:monospace;
    color: #333; 
    margin-bottom: 5px; 
}


    #photos-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .photo-item {
        margin: 10px;
        text-align: center;
        max-width: 300px; 
    }
    .photo-item img {
    width: 100%;
    height: 350px;
    object-fit: cover;
}
    img {
        max-width: 100%;
        height: auto;
        margin-bottom: 10px;
    }

    .description-container {
        text-align: center;
        font-family:classico-urw;
        font-size:14px;
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

$sql = "SELECT * FROM wedding_locations";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Locations</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <?php session_start(); ?>

    <header>
    <a href="index.php"> <img src="img/logo.png" alt="Your Logo" id="logo"></a>
    <nav>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="services.php">SERVICES</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="wedding_locations.php">LOCATIONS</a></li>

            <?php if (isset($_SESSION['user_id'])): ?>
                <?php if ($_SESSION['user_role'] === 'admin'): ?>
                    <li><a href="add_location.php">ADD LOCATION</a></li>
                    <li><a href="login/usersdashboard.php">DASHBOARD 1</a></li>
                    <li><a href="dashboard.php">DASHBOARD 2</a></li>
                <?php endif; ?>
                <li><a href="login/logout.php">LOGOUT</a></li>
            <?php else: ?>
                <li><a href="login/login.php">LOG-IN</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>

    <h1>-WEDDING LOCATIONS-</h1>

    <div id="photos-container">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="photo-item">';
                echo '<img src="' . $row["photo_path"] . '" alt="' . $row["location_name"] . '">';
                echo '<div class="description-container">';
                echo '<p class="location-name">' . $row["location_name"] . '</p>';
                echo '<p>' . $row["location_description"] . '</p>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<p>No wedding locations found.</p>';
        }

        $conn->close();
        ?>
    </div>
</body>
</html>