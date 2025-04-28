<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Smokin' Good Time - Our Menu</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      text-align: center;
      background-color: #f8f1e4      ;
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

    .card {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .card-body {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
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

    .content {
      margin-top: 100px;
    }

    .footer {
      padding: 50px;
      background: #222;
      color: white;
    }

    .zachbtn {
      background-color: #e67e22;
      color: white;
      border: none;
      padding: 10px 25px;
      border-radius: 5px;
      font-size: 20px;
      cursor: pointer;
    }

    .zachbtn:hover {
      background-color: #d35400;
    }
  </style>
</head>
<body>
  <!-- Header -->
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
      <a href="sign_in.php" class="booking-button">Reserve Table</a>
    </div>
  </header>

  <!-- Main Content -->
  <main class="content">
    <hr>
    <h2 class="text-center"><strong>OUR MENU</strong></h2>
    <hr>
    <div class="container">
      <div class="row text-center">
        <!-- Appetizers -->
        <div class="col-md-4 pb-1 pb-md-0">
          <a href="appetizers.html">
            <div class="card">
              <img class="card-img-top" src="images/ZachImages/Appetizers.jpg" alt="Appetizers">
              <div class="card-body">
                <h5 class="card-title">Appetizers</h5>
                <p class="card-text">Start your BBQ journey off right with our crave-worthy starters. These Southern classics are the perfect way to whet your appetite and bring the heat before the main event.</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Entrees -->
        <div class="col-md-4 pb-1 pb-md-0">
          <a href="entree.html">
            <div class="card">
              <img class="card-img-top" src="images/ZachImages/Entrees.jpg" alt="Entrees">
              <div class="card-body">
                <h5 class="card-title">Entrees</h5>
                <p class="card-text">Smoked low and slow, our entrées are packed with bold BBQ flavor. From tender brisket to saucy ribs and smoky salmon, these main courses are the real stars of the show.</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Sides -->
        <div class="col-md-4 pb-1 pb-md-0">
          <a href="sides.html">
            <div class="card">
              <img class="card-img-top" src="images/ZachImages/Sides.jpg" alt="Sides">
              <div class="card-body">
                <h5 class="card-title">Sides</h5>
                <p class="card-text">No BBQ plate is complete without the fixin’s. Our homestyle sides are full of flavor—each one crafted to complement our pit-smoked meats perfectly.</p>
              </div>
            </div>
          </a>
        </div>
      </div>

      <!-- Second row -->
      <div class="row text-center mt-4">
        <!-- Kids Menu -->
        <div class="col-md-4 pb-1 pb-md-0">
          <a href="kids-menu.html">
            <div class="card">
              <img class="card-img-top" src="images/ZachImages/Kids-Menu.jpg" alt="Kids Menu">
              <div class="card-body">
                <h5 class="card-title">Kids Menu</h5>
                <p class="card-text">Perfect tasting BBQ isn’t just for the grown-ups! Our kids' menu is packed with mini portions of our smokin’ favorites—perfect for little hands and big appetites.</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Desserts -->
        <div class="col-md-4 pb-1 pb-md-0">
          <a href="desserts.html">
            <div class="card">
              <img class="card-img-top" src="images/ZachImages/Desserts.jpg" alt="Desserts">
              <div class="card-body">
                <h5 class="card-title">Desserts</h5>
                <p class="card-text">Save room for something sweet! From rich chocolate lava cake to our famous banana pudding, these Southern treats are the perfect way to finish off your BBQ feast.</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Drinks -->
        <div class="col-md-4 pb-1 pb-md-0">
          <a href="drinks.html">
            <div class="card">
              <img class="card-img-top" src="images/ZachImages/Drinks.jpg" alt="Drinks">
              <div class="card-body">
                <h5 class="card-title">Drinks</h5>
                <p class="card-text">Wash it all down with a glass of Southern hospitality. Whether you’re sipping sweet tea or cracking open a cold root beer, we’ve got the perfect pour to go with your meal.</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>

    <hr>
    <div class="text-center">
      <button class="zachbtn"><h2>Send to Restaurant</h2></button>
    </div>
    <hr>
  </main>

  <!-- Footer -->
  <footer class="footer">
    <h2>Contact Us</h2>
    <p>Email: email@domain.com</p>
    <p>Phone: (931) 456-7890</p>
    <p>123 W. Sesame St, Nashville, TN 37011</p>
    <div class="social-media-index">
      <a href="https://www.facebook.com" target="_blank">
        <img src="/images/facebook-icon.jpg" alt="Facebook" class="social-icon">
      </a>
      <a href="https://twitter.com" target="_blank">
        <img src="/images/twitter-icon.jpg" alt="Twitter" class="social-icon">
      </a>
      <a href="https://www.instagram.com" target="_blank">
        <img src="/images/instagram-icon.jpg" alt="Instagram" class="social-icon">
      </a>
    </div>
    <p>&copy; 2025 Smokin' Good Time. All rights reserved.</p>
  </footer>

  <!-- JS scripts -->
  <script src="/js/jquery-3.4.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap-4.4.1.js"></script>
</body>
</html>
