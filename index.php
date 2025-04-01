<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smokin' Good Time</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background-color: #f0e68c;
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
        .login-index {
            padding: 10px 15px;
            background: #e67e22;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px; 
            margin-right: 40px;
        }
        .hero {
            background: url('images/pexels-pixabay-533325.jpg') no-repeat center center/cover;
            color: white;
            padding: 100px 20px;
            margin-top: 80px;
        }
        .menu {
            padding: 50px;
            background: #E6E8E6;
        }
        .contact {
            padding: 50px;
            background: #222;
            color: white;
        }
        .button {
            padding: 10px 20px;
            background: #e67e22;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo-container">
            <img src="Images/Smokin-Good-Time-Logo.png" alt="Smokin' Good Time Logo" class="logo">
            <span class="chevron">▼</span>
            <div class="dropdown-menu">
                <a href="about.php">About Us</a>
                <a href="menu.php">Menu</a>
                <a href="contact.php">Contact Us</a>
                <a href="employ.php">Opportunities</a>
            </div>
        </div>
        <a href="ualog.php" class="login-index">Login</a>
    </header>
    <section class="hero">
        <h1>Smokin' Good Time</h1>
        <p>filler</p>
        <a href="menu.php" class="button">View Menu</a>
    </section>
    
    <section id="menu" class="menu">
        <h2>Try our World-Famous Pulled Pork Sandwich&#8482;</h2>
        <p>filler</p>
    </section>
    
    <section class="contact">
        <h2>Contact Us</h2>
        <p>Email: email@domain.com</p>
        <p>Phone: (123) 456-7890</p>
        <p>123 W. Sesame St, Timbuktu, WV 11223</p>
    </section>
</body>
</html>
