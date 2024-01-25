<style>
    body {
    font-family: Arial, sans-serif;
}

h2 {
    color: #333;
}

form {
    max-width: 400px;
    margin: 20px auto;
}

label {
    display: block;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #007BFF;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}
</style>
<?php
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM contact_form WHERE id = $id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Contact Form Entry</title>
            <link rel="stylesheet" href="edit_style.css">
        </head>
        <body>
            <h2>Edit Contact Form Entry</h2>

            <form action="update_form.php" method="post">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">

                <label for="firstname">First Name</label>
                <input type="text" name="firstname" value="<?= $row['first_name'] ?>" required><br>

                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" value="<?= $row['last_name'] ?>" required><br>

                <label for="partnersname">Partner's First Name</label>
                <input type="text" name="partnersname" value="<?= $row['partner_first_name'] ?>"><br>

                <label for="partnerslastname">Partner's Last Name</label>
                <input type="text" name="partnerslastname" value="<?= $row['partner_last_name'] ?>"><br>

                <label for="pronouns">Preferred Pronouns</label>
                <textarea name="pronouns"><?= $row['pronouns'] ?></textarea><br>

                <label for="country">Country</label>
                <input type="text" name="country" value="<?= $row['country'] ?>"><br>

                <label for="number">Phone Number</label>
                <input type="tel" name="number" value="<?= $row['phone_number'] ?>"><br>

                <label for="email">Email Address</label>
                <input type="email" name="email" value="<?= $row['email'] ?>" required><br>

                <label for="date">Event Date</label>
                <input type="date" name="date" value="<?= $row['event_date'] ?>"><br>

                <label for="location">Location</label>
                <input type="text" name="location" value="<?= $row['location'] ?>" required><br>

                <label for="guests">Estimated Guest Count</label>
                <input type="text" name="guests" value="<?= $row['estimated_guest_count'] ?>" required><br>

                <label for="referral_source">Referral Source</label>
                <select name="referral_source">
                    <option value="Word of mouth" <?= ($row['referral_source'] == 'Word of mouth') ? 'selected' : '' ?>>Word of mouth</option>
                </select><br>

                <label for="drink-choice">Drink of Choice</label>
                <textarea name="drink-choice"><?= $row['drink_of_choice'] ?></textarea><br>

                <label for="about-you">About You</label>
                <textarea name="about-you"><?= $row['about_you'] ?></textarea><br>

                <input type="submit" value="Update">
            </form>
        </body>
        </html>
        <?php
    } else {
        echo '<p>Contact form entry not found.</p>';
    }
}

$conn->close();
?>