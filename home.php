<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crime Shield</title>
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

    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="login.php" method="post">
                <div class="input-box">
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="login-btn">Login</button>
                <p>Don't have an account? <a href="#">Register</a></p>
            </form>
        </div>
    </div>


    <section id="about">
        <h2>About Us</h2>
        <p>This section contains information about our platform, Crime Shield.</p>
    </section>

</body>
</html>
