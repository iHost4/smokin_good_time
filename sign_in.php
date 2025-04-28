<?php
    session_start();
    $msg='';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){//awaits for form submission before running
        if(!empty($_POST['user_name']) && !empty($_POST['user_password'])){
                
            $user_name = filter_input(INPUT_POST, 'user_name', FILTER_SANITIZE_STRING);
            $user_password = filter_input(INPUT_POST, 'user_password', FILTER_SANITIZE_STRING);
    
            require_once('smokin_good_time_db.php');
            $signin = 'SELECT user_name, user_password FROM customer WHERE user_name = :user_name';
            $statement = $db->prepare($signin);
            $statement->bindValue(':user_name', $user_name);//binds the user_name field with what is in the db
            $statement->execute();
            $account = $statement->fetch(PDO::FETCH_ASSOC); //PDO::FETCH... fetches one matching row of matching username (should all be unique)
            $statement->closeCursor();

            if($account && $user_password === $account['user_password']){
                $_SESSION['user_name'] = $account['user_name']; //starts session
                header('Location: reservation.php');
                //exit;
            }else{
                $msg = 'Invalid credentials, please recheck inputs';
            }
        }
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
                <form id="loginForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST"> <!--htmlspec... means the action to be executed is in the same file-->
                    <h2>Welcome, please sign in</h2>
                    <br><br>
                    <input name="user_name" type="text" placeholder="Enter your username" required>
                    <input name="user_password" type="password" placeholder="Enter your password" required>
                    <br><br>
                    <span style="color: red;"><?php echo $msg;?></span>
                    <br>
                    <input type="submit" value="Log in">
                    <br><br>
                    <p>Don't have an account? <a href="signup.php">Sign up</a></p>
                    <br><br>
                    <a href="index.php">Back to Home</a>
                </form>
            </div>
        </div>
    </body>
</html>