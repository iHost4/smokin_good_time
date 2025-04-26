<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us - Smokin' Good Time</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background-color: #f8f1e4;
        }
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            background: #f0e68c;
        }

        .page-wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background: #f0e68c;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
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
            z-index: 1001;
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

        .contact-form-section {
            margin-top: 120px;
            padding: 40px 20px;
            background: #fff;
        }

        .contact-form-section h1 {
            color: #333;
            font-size: 36px;
        }
        .contact-form-section h1,
        .contact-form-section p {
            text-align: center;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            text-align: left;
        }

        label {
            display: block;
            margin: 15px 0 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            height: 150px;
        }

        button {
            margin-top: 20px;
            padding: 12px 25px;
            background: #e67e22;
            color: white;
            border: none;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #cf671a;
        }

        footer.footer {
            background-color: #222;
            color: white;
            padding: 15px 20px;
            text-align: center;
        }

        .social-media-footer {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 15px;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            transition: transform 0.3s;
        }

        .social-icon:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="page-wrapper">
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

        <main class="main-content">
            <section class="contact-form-section">
                <h1>Contact Us</h1>
                <p>We'd love to hear from you! Please fill out the form below and we'll be in touch soon.</p>
                <br>
                <form action="sendmessage.php" method="POST">
                    <label for="name">Your Name:</label>
                    <input type="text" name="name" id="name" required>

                    <label for="email">Your Email:</label>
                    <input type="email" name="email" id="email" required>

                    <label for="subject">Subject:</label>
                    <input type="text" name="subject" id="subject">

                    <label for="message">Message:</label>
                    <textarea name="message" id="message" required></textarea>

                    <button type="submit">Send Message</button>
                </form>
            </section>
        </main>

        <footer class="footer">
            <div class="footer-contact">
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
    </div>
</body>
</html>
