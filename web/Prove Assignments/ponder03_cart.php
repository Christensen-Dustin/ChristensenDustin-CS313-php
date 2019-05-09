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
</div>
<br>
<br>
<?php

    
  echo "This is the item " . $_SESSION["SK"] . "<br>This is the quantity: " . $_SESSION["SK_QTY"] . "<br>";
?>
        
</body>
</html>