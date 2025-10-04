<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Bill</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1, h3 {
            text-align: center;
            margin: 0;
            padding-bottom: 10px;
            color: #333;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 16px;
        }

        table thead {
            background: #3498db;
            color: #fff;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table tbody tr:nth-child(odd) {
            background: #f9f9f9;
        }

        table tbody tr:hover {
            background: #f1f1f1;
        }

        /* Button Styles */
        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button-container input,
        .button-container a {
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            color: #fff;
            background: #3498db;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
            transition: background 0.3s ease;
        }

        .button-container input:hover,
        .button-container a:hover {
            background: #2980b9;
        }

        .button-container a {
            display: inline-block;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            table {
                font-size: 14px;
            }

            .button-container input,
            .button-container a {
                font-size: 14px;
                padding: 8px 16px;
            }
        }
    </style>
    <script>
        function printData() {
            var divToPrint = document.getElementById("printTable");
            var newWin = window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.document.close();
            newWin.print();
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>BILL RECEIPT</h1>
        <h3>Invoice</h3>
        <div class="table-responsive">
            <table id="printTable">
                <thead>
                    <tr>
                        <th colspan="3">Bill No: 1</th>
                        <th>Date: <?php echo date("Y/m/d"); ?></th>
                    </tr>
                    <tr>
                        <th>User Name</th>
                        <th>Booking Date</th>
                        <th>From Date</th>
                        <th>To Date</th>
                        <th>Days</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    session_start();
                    include("dbcon.php");
                    $name = $_SESSION['email'];
                    $sql = "SELECT * FROM book WHERE status=1 and userid='$name'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . $row["userid"] . "</td>
                                    <td>" . $row["date"] . "</td>
                                    <td>" . $row["datefrom"] . "</td>
                                    <td>" . $row["todate"] . "</td>
                                    <td>" . $row["days"] . "</td>
                                    <td>" . $row["total"] . "</td>
                                  </tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="button-container">
            <input type="button" onclick="printData();" value="PRINT">
            <a href="index.php">HOME</a>
        </div>
    </div>

    <?php
    $sql11 = "UPDATE book SET status=2 WHERE status=1 and userid='$name'";
    if ($conn->query($sql11) === TRUE) {
        echo "<script>alert('Payment Successful! Photo ID should be submitted!');</script>";
    }
    ?>
</body>
</html>
