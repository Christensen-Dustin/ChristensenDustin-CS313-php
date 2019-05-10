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
    <title> PHP-Checking Out </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="index.css">
    <script type="text/javascript" src="name of file.js"></script>
</head>
<body>
<header>
    <h1>Checking Out</h1>
</header>
<div class="navBar">
    <a class="active" href="index.html">Home</a>
    <a href="interest.php"> Other Interest</a>
    <a href="assignment.html">Assignments</a>
    <a id="cart" href="ponder03.php">Browse ITEMS</a>
    <a id="cart" href="ponder03_cart.php">Return to SHOPPING CART</a>
</div>
<br>
<br>
<?php

    if($_SESSION['isSk'] == true) {
        echo
"<table class='items'>
    <tr class='info'>
        <th><img class='thumbPic' src='survival_knife.jpg' alt='Survival Knife'></th>
        <td>" . $_SESSION['sk'] . "</td>
        <td>Quantity: " . $_SESSION['sk_qty'] . "</td>
        <td><form method='post' action='ponder03_cart.php'>
        <input type='submit' value='REMOVE' name='removeSk'>
        </form></td>
    </tr>
</table>"; }
    if($_SESSION['isFs'] == true) {
        echo
"<table class='items'>
    <tr class='info'>
        <th><img class='thumbPic' src='flint_steel.jpg' alt='Flint and Steel'></th>
        <td>" . $_SESSION['fs'] . "</td>
        <td>Quantity: " . $_SESSION['fs_qty'] . "</td>
        <td><form method='post' action='ponder03_cart.php'>
        <input type='submit' value='REMOVE' name='removeFs'>
        </form></td>
    </tr>
</table>"; }
    if($_SESSION['isHp'] == true) {
        echo
"<table class='items'>
    <tr class='info'>
        <th id='thCart'><img class='thumbPic' src='water_pack.jpg' alt='Hydration Pack'></th>
        <td id='thCart'>" . $_SESSION['hp'] . "</td>
        <td id='thCart'>Quantity: " . $_SESSION['hp_qty'] . "</td>
        <td id='thCart'><form method='post' action='ponder03_cart.php'>
        <input type='submit' value='REMOVE' name='removeHp'>
        </form></td>
    </tr>
</table>"; }
    if($_SESSION['isWp'] == true) {
        echo
"<table class='items'>
    <tr class='info'>
        <th><img class='thumbPic' src='water_purifier.jpg' alt='Portable Water Purifier'></th>
        <td>" . $_SESSION['wp'] . "</td>
        <td>Quantity: " . $_SESSION['wp_qty'] . "</td>
        <td><form method='post' action='ponder03_cart.php'>
        <input type='submit' value='REMOVE' name='removeWp'>
        </form></td>
    </tr>
</table>"; }
        echo
"<br>
 <br>
 <div class='btnCheckout'>
 <a href='ponder03_checkout.php'>To Continue to Checkout</a>
 </div>";
    
?>
        
</body>
</html>