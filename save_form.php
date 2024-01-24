<?php

$servername = "localhost";
$database = "etheral";
$username = "admindb";
$password = "admin123.123";

$conn = new mysqli($servername, $username, $password, $database);

//Kontrollon lidhjen,nese ka error shfaq mesazhin
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Kontrollon nese forma eshte bere submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Varg qe permban fields te contact formes
    $fields = ['firstname', 'lastname', 'partnersname', 'partnerslastname', 'pronouns', 'country', 'number', 'email', 'date', 'location', 'guests'];

    //Vargu ku vendosen te dhenat
    $formData = [];

    //Kontrollon brenda fields dhe i vendos ato ne vargun formData
    foreach ($fields as $field) {
        $formData[$field] = isset($_POST[$field]) ? htmlspecialchars(trim($_POST[$field])) : '';
    }

    $optionalFields = ['referral_source', 'drink-choice', 'about-you'];

    foreach ($optionalFields as $field) {
        $formData[$field] = isset($_POST[$field]) ? htmlspecialchars(trim($_POST[$field])) : '';
    }

    //Dergon te dhenat ne databaze
    $stmt = $conn->prepare("INSERT INTO contact_form (first_name, last_name, partner_first_name, partner_last_name, pronouns, country, phone_number, email, event_date, location, estimated_guest_count, referral_source, drink_of_choice, about_you)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        die("Error: " . $conn->error);
    }

    $stmt->bind_param("ssssssssssssss", $formData['firstname'], $formData['lastname'], $formData['partnersname'], $formData['partnerslastname'], $formData['pronouns'], $formData['country'], $formData['number'], $formData['email'], $formData['date'], $formData['location'], $formData['guests'], $formData['referral_source'], $formData['drink_of_choice'], $formData['about_you']);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();

?>