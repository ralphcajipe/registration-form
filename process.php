<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Info</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet"> <!-- Import PT Sans font -->
    <link rel="stylesheet" href="styles.css">
    <script src="formInputEffects.js"></script>

    <!-- For Birthday date picker -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body style="padding: 30px;">
    <!-- Add inline style to left align the heading -->
    <h1 style="text-align: center;">User Info</h1>
</body>

</html>
<?php
// Server Side Validation
/* Using the `filter_input` function to retrieve and sanitize user input from the
superglobal array. */
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$email_invalid = ($email === false);
if ($email_invalid) {
    $email = $_POST['email'];
}

/* Calculating the age of the user based on their date of birth (``). */
$dob_time = strtotime($dob);
// Subtracts the year of the date of birth from the current year
$age = date('Y') - date('Y', $dob_time);
$minor = ($age < 18);

/* Remove any characters from the `$message` variable that are not letters (both uppercase
and lowercase), numbers, or whitespace. */
$message = preg_replace('/[^a-zA-Z0-9\s]/', '', $message);

// Display the data
echo "<div class='user-data'>";
echo "<p><strong>Username:</strong> $username</p>";
echo "<p><strong>Email:</strong> ";
if ($email_invalid) {
    // Display the email in red on this next (process) page if it is invalid
    echo "<span class='invalid'>$email (invalid)</span>";
} else {
    echo $email;
}

echo "</p>";

echo "<p><strong>Birthday:</strong> $dob (";
if ($minor) {
    echo "you are a minor";
} else {
    echo "you are not a minor";
}

echo ")</p>";

// Check if message field is empty and display a message if it is
if (empty($message)) {
    echo "<p><strong>Message:</strong> <em>No message was provided by the user.</em></p>";
} else {
    echo "<p><strong>Message:</strong> $message</p>";
}
