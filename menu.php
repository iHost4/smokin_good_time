<?php
    session_start();

    if(!isset($_SESSION['username']) || $_SESSION['username'] !=='wilson'){
        header('Location: index.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smokin' Good Time</title>
    <style>
        nav {
            text-align: center;
            height: 100px;
            width: 100%;
            padding-left: auto;
            padding-right: auto;
            background-color: #7F7F7F;
        }
        

        #menuBar{
            padding: 5%;
            
        }

        #menuBar img{
             width: 100%;
             height: auto;
             display: block;
        }
        td{
            width:20%;
        }
        
    </style>
</head>
<body>
    <h1>Smokin' Good Time</h1>
    <nav>
        <table border= "1" id="menuBar">
            <tr>
                <td> <a href="Menu/appetizers/appetizers.html"><img src="Images/500-500-default.jpg"></a> </td>
                <td> <a href="Menu/entree/entree.html"><img src="Images/500-500-default.jpg"></a> </td>
                <td> <a href="Menu/sides/sides.html"><img src="Images/500-500-default.jpg"></a> </td>
                <td> <a href="Menu/drinks/drinks.html"><img src="Images/500-500-default.jpg"></a> </td>
                <td> <a href="Menu/desserts/desserts.html"><img src="Images/500-500-default.jpg"></a> </td>
            </tr>
            <tr>
                <td><a href="/appetizers/appetizers.html">Appetizers</a></td>
                <td><a href="/entree/entree.html">Entrees</a></td>
                <td><a href="/sides/sides.html">Sides</a></td>
                <td><a href="/drinks/drinks.html">Drinks</a></td>
                <td><a href="/desserts/desserts.html">Desserts</a></td>
            </tr>
        </table>  
    </nav>
    <a href="logout.php">LOG OUT</a>
</body>
</html>

<!--<a href="entree.html"><img src="/500-500-default.jpg"></a>-->
