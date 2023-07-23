
<?php
// Database connection settings
$host = '127.0.0.1:3308';
$email = 'root';
$password = '';
$dbname = 'marble_db';

// Establish database connection
$conn = new mysqli($host, $email, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the login form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted email and password
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute a database query to check for matching credentials
    $sql = "SELECT * FROM admin_login WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    // Check if the query returned any rows
    if ($result->num_rows > 0) {
        // Login successful, redirect to the admin panel
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid credentials, display an error message
        $error = "Invalid email or password";
    }
}

// Close the database connection
$conn->close();
?>