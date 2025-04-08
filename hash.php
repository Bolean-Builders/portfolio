<?php
$password = "1111"; // Replace with user input
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

echo "Hashed Password: " . $hashed_password;

?>