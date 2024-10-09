<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymous Reporting</title>
    <style>
        /* General Styles */

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
        header {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px 20px;
            color: white;
        }
        .report-container {
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Align items to the start */
            padding-top: 20px; /* Add space above the report box */
        }
        .report-box {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .input-box {
            margin-bottom: 20px;
        }
        .input-box label {
            display: block;
            margin-bottom: 5px;
        }
        .input-box input, .input-box textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .input-box textarea {
            resize: none;
        }
        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .submit-btn:hover {
            background-color: #0056b3;
        }
        .warning {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
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


<div class="report-container">
    <div class="report-box">
        <h2>Submit Anonymous Report</h2>
        <form action="submit_report.php" method="POST">
            <div class="input-box">
                <label for="incident_type">Incident Type</label>
                <input type="text" id="incident_type" name="incident_type" required>
            </div>
            <div class="input-box">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="input-box">
                <label for="location">Location</label>
                <input type="text" id="location" name="location" required>
            </div>
            <div class="input-box">
                <label for="incident_datetime">Date & Time of Incident</label>
                <input type="datetime-local" id="incident_datetime" name="incident_datetime" required>
            </div>
            <div class="input-box">
                <label for="proof">Upload Proof (Optional)</label>
                <input type="file" id="proof" name="proof" accept=".jpg, .jpeg, .png, .pdf">
            </div>
            <button type="submit" class="submit-btn">Submit Anonymously</button>
        </form>
        <p class="warning">* Please do not submit false reports. <br> Else serious action will be taken against you.</p>
    </div>
</div>

</body>
</html>
