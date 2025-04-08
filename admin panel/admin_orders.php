<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

include 'conn.php';
// Fetch orders
$query = "SELECT * FROM orders ORDER BY created_at DESC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Orders</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background: #0A1F44;
            color: white;
        }
        tr:hover {
            background: #f1f1f1;
        }
        .logout {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Orders List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Plan</th>
            <th>Created At</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['plan']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <a href="logout.php" class="logout">Logout</a>
</div>

</body>
</html>

<?php
$conn->close();
?>
