<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}
?>

<?php
include 'conn.php';
// Fetch inquiries
$sql = "SELECT id, submitted_at, name, email, subject, message FROM contact_form ORDER BY submitted_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Inquiries</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 90%;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        .delete-btn {
            padding: 5px 10px;
            background-color: red;
            color: white;
            border: none;
            cursor: pointer;
        }
        .delete-btn:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Admin Dashboard - User Inquiries</h2>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Submitted At</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
        
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['submitted_at']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['subject']}</td>
                        <td>{$row['message']}</td>
                        <td>
                            <form action='delete_inquiry.php' method='POST' onsubmit='return confirm(\"Are you sure you want to delete this inquiry?\");'>
                                <input type='hidden' name='id' value='{$row['id']}'>
                                <button type='submit' class='delete-btn'>Delete</button>
                            </form>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='7' style='text-align:center;'>No inquiries found</td></tr>";
        }
        ?>
    </table>
</div>

</body>
</html>

<?php
$conn->close();
?>
