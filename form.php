
<?php
include("connection.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-FIR Filing System</title>
    <style>

body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('home.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        /* Navigation */
        header {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px 20px;
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .logo{
            color: white;
        }
        .nav ul li {
            margin-left: 20px;
        }

        .nav-link {
            text-decoration: none;
            color: white;
            position: relative;
            padding: 5px;
        }

        .nav-link:hover {
            color: #bbb;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: white;
            left: 0;
            bottom: -5px;
            transition: 0.4s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Login Box */
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .input-box {
            position: relative;
            margin-bottom: 30px;
        }

        .input-box input {
            width: 100%;
            padding: 10px;
            background: none;
            border: none;
            border-bottom: 1px solid black;
            outline: none;
            color: black;
        }

        .input-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px;
            pointer-events: none;
            transition: 0.5s;
        }

        .input-box input:focus ~ label, 
        .input-box input:valid ~ label {
            top: -20px;
            left: 0;
            color: #3f51b5;
            font-size: 12px;
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
        }

        .login-btn {
            width: 100%;
            padding: 10px;
            background-color: #3f51b5;
            border: none;
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-btn:hover {
            background-color: #303f9f;
        }
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
            width: 80%;
            margin: 50px auto;
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

        input[type="text"], input[type="number"], input[type="datetime-local"], input[type="file"], select, textarea {
            width: 48%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: white;
        }

        textarea {
            resize: vertical;
        }

        input[type="file"] {
            padding: 5px;
            background-color: #444;
        }

        .nature-wrapper, .description-wrapper, .perpetrator-wrapper {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-bottom: 20px;
        }

        .nature-wrapper input, .description-wrapper textarea, 
        .description-wrapper input[type="text"],
        .perpetrator-wrapper input[type="text"], .perpetrator-wrapper input[type="file"] {
            width: 32%;
        }

        .btn-group {
            width: 100%;
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn {
            padding: 15px;
            width: 30%;
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

        .btn-yellow {
            background-color: #ffc107;
        }

        .btn:hover {
            opacity: 0.9;
        }

        @media screen and (max-width: 768px) {
            input[type="text"], input[type="number"], input[type="datetime-local"], input[type="file"], select, textarea {
                width: 100%;
            }

            .btn {
                width: 100%;
                margin-bottom: 10px;
            }

            .btn-group {
                flex-direction: column;
            }

            .nature-wrapper, .description-wrapper, .perpetrator-wrapper {
                flex-direction: column;
            }

            .nature-wrapper input, .description-wrapper textarea, 
            .description-wrapper input[type="text"],
            .perpetrator-wrapper input[type="text"], .perpetrator-wrapper input[type="file"] {
                width: 100%;
            }
        }
    </style>
</head>
<body>

</head>
<body>
    <header>
        <div class="nav">
            <div class="logo">Crime Shield</div>
            <nav>
                <ul>
                    <li><a href="home.php" class="nav-link">Home</a></li>
                    <li><a href="anonymous.php" class="nav-link">Anonymous</a></li>
                    <li><a href="official_login.php" class="nav-link">Official</a></li>
                    <li><a href="#about" class="nav-link">About Us</a></li> 
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <h1>e-FIR Filing System</h1>
        <form action="form.php" method="post" enctype="multipart/form-data">
            <label for="user-id">Your Personal Information</label>
            <input type="number" id="user-id" name="user_id" placeholder="Enter your 7-Digit User ID" required>
            <input type="text" id="first-name" name="first_name" placeholder="Enter your First Name" required>
            <input type="text" id="last-name" name="last_name" placeholder="Enter your Last Name" required>
            <input type="number" id="age" name="age" placeholder="Enter your Age" required>
            <input type="text" id="address" name="address" placeholder="Enter your Residential Address" required>
            <input type="text" id="contact-number" name="contact_number" placeholder="Enter your Contact Number" required>

            <label for="incident-datetime">Nature of the Incident</label>
            <div class="nature-wrapper">
                <input type="datetime-local" id="incident-datetime" name="incident_datetime" required>
                <input type="text" id="location" name="location" placeholder="Location of Incident" required>
                <input type="text" id="incident-type" name="incident_type" placeholder="Type of Incident" required>
            </div>

            <label for="description">Description of the Incident and Victim</label>
            <div class="description-wrapper">
                <textarea id="description" name="description" rows="1" placeholder="Describe about the Incident" required></textarea>
                <input type="text" id="injuries" name="injuries" placeholder="Injuries, Damages, or Losses" required>
            </div>

            <label for="perpetrator">Description of the Perpetrator(s) and Proof/Evidence</label>
            <div class="perpetrator-wrapper">
                <input type="text" id="perpetrator" name="perpetrator" placeholder="Description of the Perpetrator(s)" required>
                <input type="file" id="proof" name="proof">
            </div>

            <div class="btn-group">
                <input type="submit" class="btn" value="SUBMIT FIR" name="submitfir">
                <button type="button" class="btn btn-blue" onclick="window.location.href='search.php'">SEARCH FIR</button>
                <button type="button" class="btn btn-yellow">MAP & BOT</button>
            </div>
        </form>
    </div>

</body>
</html>


<?php 
if (isset($_POST['submitfir'])) {
    $uid = $_POST['user_id'];  
    $fname = $_POST['first_name'];  
    $lname = $_POST['last_name']; 
    $age = $_POST['age'];
    $address = $_POST['address'];
    $cno = $_POST['contact_number'];
    $datetime = $_POST['incident_datetime'];
    $location = $_POST['location'];
    $incident = $_POST['incident_type'];
    $description = $_POST['description'];
    $injuries = $_POST['injuries'];
    $perpetrator = $_POST['perpetrator'];

    // Insert query
    $query = "INSERT INTO form (fir_id, first_name, last_name, age, address, contact_number, incident_datetime, location, incident_type, description, injuries, perpetrator) 
              VALUES ('$uid', '$fname', '$lname', '$age', '$address', '$cno', '$datetime', '$location', '$incident', '$description', '$injuries', '$perpetrator')";

    // Execute query
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "FIR submitted successfully!";
    } else {
        echo "Failed to submit FIR: " . mysqli_error($conn);
    }
}
?>
