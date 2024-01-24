<?php
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];

    $query = "UPDATE contact_form SET
              first_name = ?,
              last_name = ?,
              partner_first_name = ?,
              partner_last_name = ?,
              pronouns = ?,
              country = ?,
              phone_number = ?,
              email = ?,
              event_date = ?,
              location = ?,
              estimated_guest_count = ?,
              referral_source = ?,
              drink_of_choice = ?,
              about_you = ?
              WHERE id = ?";

    $stmt = $conn->prepare($query);

    if (!$stmt) {
        die("Error: " . $conn->error);
    }

    $stmt->bind_param(
        "ssssssssssssssi",
        $_POST['firstname'],
        $_POST['lastname'],
        $_POST['partnersname'],
        $_POST['partnerslastname'],
        $_POST['pronouns'],
        $_POST['country'],
        $_POST['number'],
        $_POST['email'],
        $_POST['date'],
        $_POST['location'],
        $_POST['guests'],
        $_POST['referral_source'],
        $_POST['drink-choice'],
        $_POST['about-you'],
        $id
    );

    if ($stmt->execute()) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request.";
}

$conn->close();
?>