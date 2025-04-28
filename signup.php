<?php
    $signed_up = "";
    $user_name = filter_input(INPUT_POST, 'user_name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $user_password = filter_input(INPUT_POST, 'user_password', FILTER_SANITIZE_STRING);

    if($_SERVER['REQUEST_METHOD'] === 'POST'){ //ensures code only runs when form is submitted
        
        require_once('smokin_good_time_db.php');
        
        $signup = 'INSERT INTO customer(user_name, email, user_password)
                    VALUE(:user_name, :email, :user_password);';
        $statement = $db->prepare($signup);
        $statement->bindValue(':user_name', $user_name);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':user_password', $user_password);
        $statement->execute();
        $statement->closeCursor();

        $signed_up = 'account created successfully...please wait';
        header('Refresh: 3; URL = sign_in.php');
        //exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Smokin Good Time</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="login.css">
        <script src="loginPage.js "></script>
    </head>

    <body>
        <div id="loginContainer">
            <div class="loginImageContainer">
                <img class="images" src="Images/food1.jpg" alt="">
            </div>

            <div class="loginFormContainer">
                <form id="loginForm" action="" method="POST">
                    <h2>Create Account</h2>
                    <br><br>
                    <input type="text" name="user_name" placeholder="Enter a user name" required><br><br>
                    <input type="email" name="email" placeholder="Enter an email" required><br><br>
                    <input type="password" name="user_password" placeholder="Enter a password" required>
                    <br><br>
                    <span style="color:green"><?php echo $signed_up;?></span>
                    <input type="submit" value="Sign up">
                    <br><br>
                    <p>Have an account? <a href="sign_in.php">Log in</a></p>
                </form>
            </div>
        </div>
    </body>
</html>