<?php
include 'conn.php';
// Check if ID is set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    
    // Delete the record
    $sql = "DELETE FROM contact_form WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo "<script>alert('Inquiry deleted successfully!'); window.location.href='message.php';</script>";
    } else {
        echo "<script>alert('Error deleting inquiry!'); window.location.href='message.php';</script>";
    }
    
    $stmt->close();
}

$conn->close();
?>
