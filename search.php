<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search your FIR</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: url('home.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }

        .container {
            width: 60%;
            margin: 100px auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #ffc107;
        }

        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        label {
            width: 100%;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"], input[type="number"] {
            width: 32%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: white;
        }

        .btn-group {
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .btn {
            padding: 15px 30px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-blue {
            background-color: #007bff;
        }

        .btn:hover {
            opacity: 0.9;
        }

        @media screen and (max-width: 768px) {
            input[type="text"], input[type="number"] {
                width: 100%;
            }

            .btn-group {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Search your FIR</h1>
        <form action="search_fir.php" method="post">
            <input type="number" id="user-id" name="user_id" placeholder="Enter the Registered User ID" required>
            <input type="text" id="fir-id" name="fir_id" placeholder="Enter your FIR Registration ID" required>
            <input type="text" id="contact-number" name="contact_number" placeholder="Enter your Contact Number" required>
            
            <div class="btn-group">
                <button type="submit" class="btn">GET DETAILS</button>
                <button type="button" class="btn btn-blue" onclick="window.location.href='home.php'">HOME PAGE</button>
                <button type="button" class="btn btn-yellow" onclick="window.location.href='form.php'">BACK</button>
            </div>
        </form>
    </div>

</body>
</html>
