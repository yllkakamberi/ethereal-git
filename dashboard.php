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
    font-family: Arial, sans-serif;
}

h2 {
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

a {
    text-decoration: none;
    color: #007BFF;
    font-weight: bold;
}

a:hover {
    color: #0056b3;
}
</style>
<body>
    <h2>Contact Form Dashboard</h2>

    <?php
    include('db_connection.php');

    $query = "SELECT * FROM contact_form";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Partner First Name</th><th>Partner Last Name</th><th>Pronouns</th><th>Country</th><th>Phone Number</th><th>Email</th><th>Event Date</th><th>Location</th><th>Estimated Guest Count</th><th>Referral Source</th><th>Drink of Choice</th><th>About You</th><th>Action</th></tr>';
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
            echo '<td>' . $row['referral_source'] . '</td>';
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