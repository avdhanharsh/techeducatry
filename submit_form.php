<?php
$serverName = "techeduca-server.database.windows.net,1433";
$database = "techeduca-database";
$username = "techeduca-server-admin";
$password = "harsh@111";

// Create connection
$conn = new PDO("sqlsrv:server=$serverName;Database=$database", $username, $password);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepare SQL statement
    $sql = "INSERT INTO ContactForm (name, email, message) VALUES (:name, :email, :message)";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Form submitted successfully!";
    } else {
        echo "Error submitting form.";
    }
}
?>
