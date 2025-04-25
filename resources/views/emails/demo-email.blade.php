<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #f00000; /* Change to the desired header color */
            color: #ffffff;
            padding: 10px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .header img {
            width: 100px; /* Adjust logo size */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #dddddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        @media screen and (max-width: 600px) {
            .header img {
                width: 80px; /* Adjust for mobile */
            }
            body {
                padding: 10px;
            }
            table {
                font-size: 14px; /* Adjust font size for mobile */
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <img src="logo.png" alt="Kotak Mahindra Bank Logo"> <!-- Replace with your logo URL -->
        <h1>Kotak Mahindra Bank</h1>
    </div>
    
    <p>Dear Customer,</p>
    
    <p>To provide you with a seamless banking experience, our systems will be undergoing a maintenance activity.</p>
    
    <p>Due to the scheduled maintenance, some services will not be available as per the details mentioned below.</p>

    <table>
        <tr>
            <th>Date</th>
            <th>Systems unavailable</th>
        </tr>
        <tr>
            <td>18<sup>th</sup> Apr (Fri) 1:00 am to 2:30 am</td>
            <td>Some Kotak811 Mobile Banking Services will be intermittently available</td>
        </tr>
    </table>

    <p>We request you to kindly plan your banking activities in advance to avoid any inconvenience before the scheduled downtime.</p>

    <p>We appreciate your understanding in this matter. Thank you for your continued trust in Kotak Mahindra Bank.</p>
</div>

</body>
</html>