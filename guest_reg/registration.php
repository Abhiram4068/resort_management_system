<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 500px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        input, select {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
        }

        .button-container {
            text-align: center;
        }

        .button-container button {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background: #3498db;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .button-container button:hover {
            background: #2980b9;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            label, input {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registration</h1>
        <form action="register_process.php" method="POST">
            <label for="username">User Name</label>
            <input type="text" id="username" name="username" placeholder="Enter your name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

            <label for="booking-date">Booking Date</label>
            <input type="date" id="booking-date" name="booking_date" required>

            <label for="from-date">From Date</label>
            <input type="date" id="from-date" name="from_date" required>

            <label for="to-date">To Date</label>
            <input type="date" id="to-date" name="to_date" required>

            <label for="days">Days</label>
            <input type="number" id="days" name="days" placeholder="Enter number of days" min="1" required>

            <label for="total">Total Amount</label>
            <input type="number" id="total" name="total" placeholder="Enter total amount" required>

            <div class="button-container">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
