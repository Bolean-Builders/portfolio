<?php
$servername = "localhost"; // Change if necessary
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password (empty)
$database = "boleanbuilders"; // Use your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate and retrieve form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $plan = trim($_POST['plan']);

    if (!empty($name) && !empty($email) && !empty($plan)) {
        // Insert data into database
        $stmt = $conn->prepare("INSERT INTO orders (name, email, plan) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $plan);

        if ($stmt->execute()) {
            // Get the last inserted ID
            $order_id = $stmt->insert_id;

            // Redirect to pay.php with user details
            header("Location: pay.php?order_id=" . urlencode($order_id) . "&name=" . urlencode($name) . "&email=" . urlencode($email) . "&plan=" . urlencode($plan));
            exit();
        } else {
            echo "<script>alert('Error processing your request. Please try again.'); window.history.back();</script>";
        }
        $stmt->close();
    } else {
        echo "<script>alert('Please fill in all fields!'); window.history.back();</script>";
    }
}

$conn->close();
?>
