<?php
    session_start();
        if(isset($_POST['removeSk'])) {
            $_SESSION['isSk'] = false;
            $_SESSION['sk_qty'] = 0;
        }
        if(isset($_POST['removeFs'])) {
            $_SESSION['isFs'] = false;
            $_SESSION['fs_qty'] = 0;
        }
        if(isset($_POST['removeHp'])) {
            $_SESSION['isHp'] = false;
            $_SESSION['hp_qty'] = 0;
        }
        if(isset($_POST['removeWp'])) {
            $_SESSION['isWp'] = false;
            $_SESSION['wp_qty'] = 0;
        }
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
    <a id="cart" href="ponder03.php">Browse ITEMS</a>
</div>
<br>
<br>
<?php

    if($_SESSION['isSk'] == true) {
        echo
"<table class='cart'>
    <tr class='info'>
        <th id='thCart'>
            <img class='thumbPic' src='survival_knife.jpg' alt='Survival Knife'>
        </th>
        <td id='tdCart'>" . $_SESSION['sk'] . "</td>
        <td id='tdCart'>Quantity: " . $_SESSION['sk_qty'] . "</td>
        <td id='tdCart'><form method='post' action='ponder03_cart.php'>
        <input type='submit' value='REMOVE' name='removeSk'>
        </form></td>
    </tr>
</table>"; }
    if($_SESSION['isFs'] == true) {
        echo
"<table class='cart'>
    <tr class='info'>
        <th id='thCart'>
            <img class='thumbPic' src='flint_steel.jpg' alt='Flint and Steel'>
        </th>
        <td id='tdCart'>" . $_SESSION['fs'] . "</td>
        <td id='tdCart'>Quantity: " . $_SESSION['fs_qty'] . "</td>
        <td id='tdCart'><form method='post' action='ponder03_cart.php'>
        <input type='submit' value='REMOVE' name='removeFs'>
        </form></td>
    </tr>
</table>"; }
    if($_SESSION['isHp'] == true) {
        echo
"<table class='cart'>
    <tr class='info'>
        <th id='thCart'>
            <img class='thumbPic' src='water_pack.jpg' alt='Hydration Pack'>
        </th>
        <td id='tdCart'>" . $_SESSION['hp'] . "</td>
        <td id='tdCart'>Quantity: " . $_SESSION['hp_qty'] . "</td>
        <td id='tdCart'><form method='post' action='ponder03_cart.php'>
        <input type='submit' value='REMOVE' name='removeHp'>
        </form></td>
    </tr>
</table>"; }
    if($_SESSION['isWp'] == true) {
        echo
"<table class='cart'>
    <tr class='info'>
        <th id='thCart'>
            <img class='thumbPic' src='water_purifier.jpg' alt='Portable Water Purifier'>
        </th>
        <td id='tdCart'>" . $_SESSION['wp'] . "</td>
        <td id='tdCart'>Quantity: " . $_SESSION['wp_qty'] . "</td>
        <td id='tdCart'><form method='post' action='ponder03_cart.php'>
        <input type='submit' value='REMOVE' name='removeWp'>
        </form></td>
    </tr>
</table>"; }

if($_SESSION['isSk'] == true ||
   $_SESSION['isFs'] == true ||
   $_SESSION['isHp'] == true ||
   $_SESSION['isWp'] == true) {    
        echo
            "<br>
            <br>
            <div class='btnCheckout'>
            <a href='ponder03_checkout.php'>To Continue to Checkout</a>
            </div>";
} else {
        echo
            "<br>
            <br>
            <div class='btnCheckout'>
            <a href='ponder03.php'>Return to ITEMS</a>
            </div>";
}
    
?>
        
</body>
</html>