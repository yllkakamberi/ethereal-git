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

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $users = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $users = array();
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<style>
    body, h1, h2, p, ul {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f8f8;
        color: #333;
    }

    header {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
    }

    nav {
        background-color: #444;
        padding: 10px;
        text-align: center;
        transition: color 0.1s;
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

    section {
        margin: 20px;
    }

    .user-info, .user-list {
        background-color: #fff;
        padding: 20px;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .user-list li {
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition:  box-shadow 0.5s;
        position: relative;
    }

    .user-list li:hover {
        transform: scale(1.00);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .user-list li .edit-button {
        position: absolute;
        right: 80px; 
        top: 20px;
    }

    .user-list li button {
        position: absolute;
        right: 20px;
        top: 20px;
    }

    footer {
        background-color: #333;
        color: #fff;
        padding: 10px;
        text-align: center;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
  
.delete-button {
    background-color: red;
    color: white;
}

.edit-button {
    background-color: green;
    color: white;
}
.insert-button {
    background-color: blue;
    color: white;
    margin-left:665px;
    margin-bottom:16px;
}

.insert-button:hover {
    background-color: navy; 
}
</style>

    <header>
        <h1>Welcome to the Admin Dashboard, <?php echo $_SESSION['user_name']; ?>!</h1>
    </header>

    <nav>
        <a href="../index.php">Home</a>
        <a href="logout.php">Log out</a>
    </nav>

    <section>
        <div class="user-info">
            <h2>User Information</h2>
            <p><strong>User ID:</strong> <?php echo $_SESSION['user_id']; ?></p>
            <?php if (isset($_SESSION['user_email'])): ?>
                <p><strong>Email:</strong> <?php echo $_SESSION['user_email']; ?></p>
            <?php else: ?>
                <p><strong>Email:</strong> Email not available</p>
            <?php endif; ?>
            <p><strong>Role:</strong> <?php echo $_SESSION['user_role']; ?></p>
        </div>
          
        <form action="insert_users.php" method="post">
    <button type="submit" class="insert-button">Insert Users</button>
</form>
        <div class="user-list">
            <h2>User List</h2>
            <ul>
                <?php foreach ($users as $user): ?>
                    <li>
                        <p><strong>User ID:</strong> <?php echo $user['id']; ?></p>
                        <p><strong>Name:</strong> <?php echo $user['name']; ?></p>
                        <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
                        <p><strong>Role:</strong> <?php echo $user['role']; ?></p>

        
    


        <form action="delete_user.php" method="post">
    <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
    <button type="submit" class="delete-button">Delete</button>
        </form>


        <form action="edit_user.php" method="post">
    <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
    <button type="submit" class="edit-button">Edit</button>
        </form>

                        <hr>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

</body>
</html>