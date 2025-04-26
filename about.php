<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Smokin' Good Time</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background-color: #f8f1e4;
        }

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .page-wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
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
        .about-section {
            padding: 120px 40px 60px;
            background: #f8f1e4;
        }
        .about-section h1 {
            font-size: 36px;
            color: #333;
        }
        .about-section p {
            font-size: 18px;
            color: #555;
            max-width: 800px;
            margin: 20px auto;
            line-height: 1.6;
        }
        .bbq-photo {
            width: 60%;
            max-width: 600px;
            margin: 30px auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .content {
            flex: 1; 
        }
        .footer {
            background-color: #222;
            color: white;
            padding: 30px 20px;
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
                <a href="Menu/index.php">Menu</a>
                <a href="contact.php">Contact Us</a>
                <a href="employ.php">Opportunities</a>
            </div>
        </div>
        <div class="button-container">
            <a href="bookatable.php" class="booking-button">Reserve Table</a>
            <a href="ualog.php" class="login-index">Login</a>
        </div>
    </header>

    <section class="about-section">
        <h1>About Us</h1>
        <p>At <strong>Smokin' Good Time</strong>, we're all about bringing people together over smoky, slow-cooked barbecue that's been perfected over generations. From our humble beginnings as a family-owned food truck to becoming a local favorite dine-in spot, we've always kept one thing at the heart of our mission—<strong>authentic flavor with a side of hospitality</strong>.</p>
        
        <p>Whether you’re craving our signature Pulled Pork Sandwich™ or just looking for a place to unwind with friends, our team is here to make your visit memorable. We source the freshest ingredients, smoke our meats low and slow, and treat every customer like family.</p>
        
        <p>Come hungry. Leave happy. That's the Smokin' Good Time way.</p>

        <img src="images/sgtpulledpork.jpg" alt="What we do best." class="bbq-photo">
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
    </div>
</body>
</html>
