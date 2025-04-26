<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Opportunities - Smokin' Good Time</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background-color: #f8f1e4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background: #f0e68c;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .logo-container {
            position: relative;
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        .logo {
            height: 80px;
        }
        .chevron {
            margin-left: 10px;
            font-size: 18px;
            color: #333;
        }
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            min-width: 150px;
            text-align: left;
        }
        .dropdown-menu a {
            display: block;
            padding: 10px;
            color: black;
            text-decoration: none;
        }
        .dropdown-menu a:hover {
            background: #e67e22;
            color: white;
        }
        .logo-container:hover .dropdown-menu {
            display: block;
        }
        .button-container {
            display: flex;
            align-items: center;
        }
        .booking-button, .login-index {
            padding: 10px 15px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .booking-button {
            background: #3498db;
            margin-right: 20px;
        }
        .login-index {
            background: #e67e22;
            margin-right: 40px;
        }
        .jobs-section {
            background: #f8f1e4;
            flex: 1;
            margin-top: 120px;
            padding: 60px 20px;
            background: #fff;
        }
        .jobs-section h1 {
            font-size: 36px;
            color: #333;
        }
        .jobs-section p {
            font-size: 20px;
            color: #555;
            margin-top: 20px;
        }
        .notify-button {
            padding: 10px 20px;
            background: #e67e22;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 30px;
        }
        .notify-form {
            display: none;
            margin-top: 20px;
        }
        .notify-form input[type="text"],
        .notify-form input[type="email"] {
            padding: 10px;
            width: 250px;
            margin: 10px 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .notify-form input[type="submit"] {
            padding: 10px 20px;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        footer.footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px;
        }
    </style>
    <script>
        function toggleForm() {
            const form = document.getElementById("notifyForm");
            form.style.display = form.style.display === "none" ? "block" : "none";
        }
    </script>
</head>
<body>
    <header class="header">
        <div class="logo-container">
            <img src="Images/Smokin-Good-Time-Logo.png" alt="Smokin' Good Time Logo" class="logo">
            <span class="chevron">▼</span>
            <div class="dropdown-menu">
                <a href="index.php">Home</a>
                <a href="about.php">About Us</a>
                <a href="index.php">Menu</a>
                <a href="contact.php">Contact Us</a>
                <a href="employ.php">Opportunities</a>
            </div>
        </div>
        <div class="button-container">
            <a href="bookatable.php" class="booking-button">Reserve Table</a>
            <a href="ualog.php" class="login-index">Login</a>
        </div>
    </header>

    <section class="jobs-section">
        <h1>Job Opportunities</h1>
        <p>We appreciate your interest in joining the Smokin' Good Time family.</p>
        <p><strong>Currently, we do not have any job openings available.</strong></p>
        <p>Please check back soon or reach out through our <a href="contact.php">Contact Page</a> if you have any questions.</p>

        <button class="notify-button" onclick="toggleForm()">Notify Me About Jobs</button>

        <form id="notifyForm" class="notify-form" action="#" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <br>
            <input type="submit" value="Submit">
        </form>
    </section>

    <footer class="footer">
            <div class="footer-contact">
                <h2>Contact Us</h2>
                <p>Email: email@domain.com</p>
                <p>Phone: (123) 456-7890</p>
                <p>123 W. Sesame St, Timbuktu, WV 11223</p>
            </div>
            <div class="social-media-footer">
                <a href="https://www.facebook.com" target="_blank">
                    <img src="" alt="Facebook" class="social-icon">
                </a>
                <a href="https://twitter.com" target="_blank">
                    <img src="" alt="Twitter" class="social-icon">
                </a>
                <a href="https://www.instagram.com" target="_blank">
                    <img src="" alt="Instagram" class="social-icon">
                </a>
            </div>
            <p>&copy; 2025 Smokin' Good Time. All rights reserved.</p>
        </footer>
</body>
</html>
