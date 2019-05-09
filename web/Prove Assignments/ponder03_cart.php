<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="eng-US">
<head>
    <title> PHP-Shopping Cart </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="index.css">
    <script type="text/javascript" src="name of file.js"></script>
</head>
<body>
<header>
    <h1>Welcome to YOUR SHOPPING CART</h1>
</header>
<div class="navBar">
    <a class="active" href="index.html">Home</a>
    <a href="interest.php"> Other Interest</a>
    <a href="assignment.html">Assignments</a>
    <a href="ponder03.php">Browse ITEMS</a>
</div>
<br>
<br>
<?php

    
    echo "This is the item " . $_SESSION["sk"] . "<br>This is the quantity: " . $_SESSION["sk_qty"] . "<br>";
  
    echo "This is the item " . $_SESSION["fs"] . "<br>This is the quantity: " . $_SESSION["fs_qty"] . "<br>";

    echo "This is the item " . $_SESSION["hp"] . "<br>This is the quantity: " . $_SESSION["hp_qty"] . "<br>";
    
    echo "This is the item " . $_SESSION["wp"] . "<br>This is the quantity: " . $_SESSION["wp_qty"] . "<br>";
?>
        
</body>
</html>