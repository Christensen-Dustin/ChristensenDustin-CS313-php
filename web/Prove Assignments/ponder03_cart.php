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
    <a id="cart" href="ponder03.php">Browse ITEMS</a>
</div>
<br>
<br>
<?php
<table class="items">
    <tr>
        <th><img class="thumbPic" src="survival_knife.jpg" alt="Survival Knife"></th>
        <td></td>
    </tr>
    <tr>
        <td>
            
        </td>
    </tr>
</table>
<table class="items">
    <tr class="info">
        <th><img class="thumbPic" src="flint_steel.jpg" alt="Flint and Steel"></th>
        <td></td>
    </tr>
    <tr>
        <td>
            
        </td>
    </tr>
</table>
<table class="items">
    <tr>
        <th><img class="thumbPic" src="water_pack.jpg" alt="Hydration Pack"></th>
        <td></td>
    </tr>
    <tr>
        <td>
            
        </td>
    </tr>
</table>
<table class="items">
    <tr>
        <th><img class="thumbPic" src="water_purifier.jpg" alt="Portable Water Purifier"></th>
        <td></td>
    </tr>
    <tr>
        <td>
            
        </td>
    </tr>
</table>
    
    echo "This is the item " . $_SESSION["sk"] . "<br>This is the quantity: " . $_SESSION["sk_qty"] . "<br>";
  
    echo "This is the item " . $_SESSION["fs"] . "<br>This is the quantity: " . $_SESSION["fs_qty"] . "<br>";

    echo "This is the item " . $_SESSION["hp"] . "<br>This is the quantity: " . $_SESSION["hp_qty"] . "<br>";
    
    echo "This is the item " . $_SESSION["wp"] . "<br>This is the quantity: " . $_SESSION["wp_qty"] . "<br>";
?>
        
</body>
</html>