<?php
// Check if required parameters exist
if (!isset($_GET['order_id'], $_GET['name'], $_GET['email'], $_GET['plan'])) {
    die("<script>alert('Invalid payment details. Please try again.'); window.location.href='payment.php';</script>");
}

// Retrieve and sanitize data
$order_id = htmlspecialchars($_GET['order_id']);
$name = htmlspecialchars($_GET['name']);
$email = htmlspecialchars($_GET['email']);
$plan = htmlspecialchars($_GET['plan']);

// Define plan prices in USD
$plan_prices = [
    "web_basic" => 150.00, // $10
    "web_standard" => 220.00,
    "web_ultimate" => 330.00,
    "app_basic" => 15.00,
    "app_standard" => 25.00,
    "app_ultimate" => 35.00,
    "software_basic" => 18.00,
    "software_standard" => 28.00,
    "software_ultimate" => 40.00
];

// Get the price for the selected plan
$amount = isset($plan_prices[$plan]) ? $plan_prices[$plan] : 0;

// If the amount is not set, prevent payment
if ($amount <= 0) {
    die("<script>alert('Invalid plan selected.'); window.location.href='payment.php';</script>");
}

// Convert amount to cents (Paystack uses cents for USD)
$paystack_amount = $amount * 100;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Payment | Pay with Paystack</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/media/brand/mum.jpg">
    <script src="https://js.paystack.co/v1/inline.js"></script> <!-- Paystack JS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        .details {
            text-align: left;
            padding: 10px;
            background: #f9f9f9;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .details p {
            margin: 8px 0;
        }
        .payment-btn {
            padding: 14px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
            text-align: center;
            transition: background 0.3s;
        }
        .payment-btn:hover {
            background-color: #218838;
        }
        .retry-btn {
            padding: 10px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
            display: none; /* Initially hidden */
        }
        .retry-btn:hover {
            background-color: #c82333;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Secure Payment</h2>
    <div class="details">
        <p><strong>Name:<br></strong> <?php echo $name; ?></p>
        <p><strong>Email:<br></strong> <?php echo $email; ?></p>
        <p><strong>Selected Plan:<br></strong> <?php echo ucfirst(str_replace('_', ' ', $plan)); ?></p>
        <p><strong>Amount:<br></strong> $<?php echo number_format($amount, 2); ?></p>
    </div>

    <button class="payment-btn" onclick="payWithPaystack()">Pay Now</button>
    <button class="retry-btn hidden" onclick="payWithPaystack()">Retry Payment</button>
</div>

<script>
    function payWithPaystack() {
        var handler = PaystackPop.setup({
            key: 'pk_live_984b9dfca46c4f36dbee6a70cc1b9861b44f30fe', // Replace with your Paystack public key
            email: "<?php echo $email; ?>",
            amount: <?php echo $paystack_amount; ?>, // Amount in cents
            currency: "USD",
            ref: "ORD-" + Math.floor((Math.random() * 1000000000) + 1), // Generate a random reference
            callback: function(response) {
                alert("Payment successful! Reference: " + response.reference);
                window.location.href = "verify_payment.php?reference=" + response.reference + "&order_id=<?php echo $order_id; ?>";
            },
            onClose: function() {
                alert("Payment process cancelled. Please try again.");
                document.querySelector('.retry-btn').classList.remove('hidden'); // Show retry button
            }
        });
        handler.openIframe();
    }
</script>

</body>
</html>
