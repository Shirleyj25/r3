<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from the POST request and ensure they are set
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $address = isset($_POST['address']) ? htmlspecialchars($_POST['address']) : '';

    // Display the submitted data with basic formatting
    echo "
        <h2>Submission Successful</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Address:</strong> {$address}</p>";
} else {
    echo "<p>Error: Invalid request method.</p>";
}
?>
