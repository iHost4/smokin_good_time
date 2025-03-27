<?php
    session_start();
    $msg='';

    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        if($username === 'wilson' && $password === 'unlock'){
            $_SESSION['username'] = 'wilson';
            //echo 'session started'
            header('Location: menu.php');
            exit;
        }else{
            $msg='Invalid credentials';
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
                <form id="loginForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                    <h2>Welcome, please sign in</h2>
                    <br><br>
                    <input name="username" type="text" placeholder="Enter your username" required>
                    <input name="password" type="password" placeholder="Enter your password" required>
                    <br><br>
                    <span style="color: red;"><?php echo $msg?></span>
                    <input type="submit" value="Log in">
                    <br><br>
                    <p>Don't have an account? <a href="signup.php">Sign up</a></p>
                </form>
            </div>
        </div>
    </body>
</html>