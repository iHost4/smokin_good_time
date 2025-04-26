<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Reservation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f1e4;
            text-align: center;
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
        .booking-button {
            padding: 10px 15px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-right: 20px;
        }
        .login-index {
            padding: 10px 15px;
            background: #e67e22;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px; 
            margin-right: 40px;
        }
        .footer {
            padding: 50px;
            background: #222;
            color: white;
        }
        .contact {
            margin: 0;
        }
        .social-media-index {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .social-icon {
            width: 40px;
            height: 40px;
            transition: transform 0.3s;
        }
        .social-icon:hover {
            transform: scale(1.1);
        }
        .reservation-form {
            max-width: 400px;
            margin: 120px auto;
            padding: 20px;
            background: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 15px;
            align-items: center;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px; /* Add some space below the label */
            text-align: left; /* Align label to the left */
        }
        select, input[type="date"], input[type="number"] {
            width: calc(100% - 16px); /* Adjust width to account for padding */
            padding: 8px;
            margin-top: 0; /* Remove default top margin */
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Ensure padding and border are inside the element's width */
            text-align: center; /* Center the text within the input and select */
        }
        .hidden {
            display: none;
        }
        .error {
            color: red;
            font-size: 14px;
            display: none;
        }
        button {
            background: #e67e22;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
            font-size: 16px; /* Add font-size for better consistency */
        }
        /* Style for the time select elements to be centered */
        .form-group > div[style*="display: flex"] > select {
            text-align: center;
        }
    </style>
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

    <main class="content">
        <div class="reservation-form">
            <h2>Table Reservation</h2>
            <form action="process_reservation.php" method="post">
                <div class="form-group">
                    <input type="hidden" id="user_name" name="user_name" value="<?php echo $_SESSION['user_name']; ?>">
                </div>
                <div class="form-group">
                    <label for="res_date">Reservation Date:</label>
                    <input type="date" id="res_date" name="res_date" required style="text-align: center;">
                </div>
                <div class="form-group">
                    <label for="res_time">Reservation Time:</label>
                    <div style="display: flex; gap: 5px;">
                        <select id="hour" name="hour" required style="text-align: center;">
                            <?php for ($i = 11; $i <= 12; $i++) echo "<option value='$i'>$i</option>"; ?>
                            <?php for ($i = 1; $i <= 9; $i++) echo "<option value='0$i'>0$i</option>"; ?>
                        </select>
                        <select id="minute" name="minute" required style="text-align: center;">
                            <option value="00">00</option>
                            <option value="15">15</option>
                            <option value="30">30</option>
                            <option value="45">45</option>
                        </select>
                        <select id="ampm" name="ampm" required style="text-align: center;">
                            <option value="AM">AM</option>
                            <option value="PM">PM</option>
                        </select>
                    </div>
                    <div class="error" id="timeError">Reservations are only available between 11 AM and 9 PM.</div>
                </div>
                <div class="form-group">
                    <label for="num_of_guests">Number of Guests:</label>
                    <input type="number" id="num_of_guests" name="num_of_guests" min="1" required style="text-align: center;">
                </div>
                <div id="tableTypeSection" class="form-group hidden">
                    <label for="table_type">Table Type:</label>
                    <select id="table_type" name="table_type" style="text-align: center;">
                        <option value="booth">Booth</option>
                        <option value="window">Window</option>
                        <option value="outdoor">Outdoor</option>
                    </select>
                </div>
                <button type="submit">Reserve</button>
            </form>
        </div>
    </main>

    <footer class="footer">
        <section class="contact">
            <h2>Contact Us</h2>
            <p>Email: email@domain.com</p>
            <p>Phone: (123) 456-7890</p>
            <p>123 W. Sesame St, Timbuktu, WV 11223</p>
            <div class="social-media-index">
                <a href="https://www.facebook.com" target="_blank">
                    <img src="images/facebook-icon.jpg" alt="Facebook" class="social-icon">
                </a>
                <a href="https://twitter.com" target="_blank">
                    <img src="images/twitter-icon.jpg" alt="Twitter" class="social-icon">
                </a>
                <a href="https://www.instagram.com" target="_blank">
                    <img src="images/instagram-icon.jpg" alt="Instagram" class="social-icon">
                </a>
            </div>
            <p>&copy; 2025 Smokin' Good Time. All rights reserved.</p>
        </section>
    </footer>
</body>
</html>