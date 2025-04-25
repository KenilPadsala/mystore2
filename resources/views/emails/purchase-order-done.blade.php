<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Order Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 5px;
            overflow: hidden;
        }
        .header {
            background-color: #007BFF;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 20px;
        }
        .footer {
            background-color: #f4f4f4;
            text-align: center;
            padding: 10px;
            font-size: 12px;
            color: #777777;
        }
        @media only screen and (max-width: 600px) {
            .container {
                width: 100%;
            }
            .header, .content, .footer {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Purchase Order Confirmation</h1>
        </div>
        <div class="content">
            <h2>Thank you for your order!</h2>
            <p>Dear John Doe,</p>
            <p>We are pleased to confirm your purchase order. Below are the details of your order:</p>
            <ul>
                <li><strong>Order Number:</strong> 123456</li>
                <li><strong>Order Date:</strong> October 15, 2023</li>
                <li><strong>Items Ordered:</strong></li>
                <ul>
                    <li>Wireless Mouse - 2 - $25.00</li>
                    <li>Mechanical Keyboard - 1 - $75.00</li>
                </ul>
                <li><strong>Total Amount:</strong> $125.00</li>
            </ul>
            <p>Your order will be processed shortly, and you will receive another email with shipping details.</p>
            <p>Thank you for choosing us!</p>
        </div>
        <div class="footer">
            <p>&copy; 2023 Tech Solutions Inc. All rights reserved.</p>
            <p>123 Tech Lane, Silicon Valley, CA 94043</p>
            <p>(123) 456-7890</p>
        </div>
    </div>
</body>
</html>