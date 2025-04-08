<?php
// Database connection
include 'conn.php';
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
   

    // Insert data into the table
    $sql = "INSERT INTO request (name, email, phone) VALUES ('$name','$email','$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Quote Requested Successfully!',
                    text: 'Your Quote Request has been successfully submitted.',
                    text: 'we will get back to you soon.',
                    confirmButtonText: 'OK'
                });
              </script>";
    } else {
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Submission Failed',
                    text: 'Error: " . $conn->error . "',
                    confirmButtonText: 'OK'
                });
              </script>";
    }

    $conn->close();
}
?>