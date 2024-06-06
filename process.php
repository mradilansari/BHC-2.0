<!-- contact.php -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Save the data to the user_data.txt file
    $data = "$name, $email, $message\n";
    file_put_contents('user_data.txt', $data, FILE_APPEND);

    // Respond to the client
    echo json_encode(['success' => true, 'message' => 'Form submitted successfully']);
} else {
    // Respond to the client if not a POST request
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>
