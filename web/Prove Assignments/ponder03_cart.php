<?php
    session_start();
        if(isset($_POST['removeHP'])) {
            unset($_SESSION['isHp']);
            unset($_SESSION['hp_qty']);
        }
        if(isset($_POST['removeWP'])) {
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
    <tr class='cartInfo'>
        <th><img class='thumbPic' src='survival_knife.jpg' alt='Survival Knife'></th>
        <td>" . $_SESSION['sk'] . "</td>
        <td>Quantity: " . $_SESSION['sk_qty'] . "</td>
        <td><input type='submit' value='REMOVE'></td>
    </tr>
    <tr class='cartInfo'>
        <td>
            
        </td>
    </tr>
</table>"; }
    if($_SESSION['isFs'] == true) {
        echo
"<table class='cart'>
    <tr class='cartInfo'>
        <th><img class='thumbPic' src='flint_steel.jpg' alt='Flint and Steel'></th>
        <td>" . $_SESSION['fs'] . "</td>
        <td>Quantity: " . $_SESSION['fs_qty'] . "</td>
        <td><input type='submit' value='REMOVE'></td>
    </tr>
    <tr class='cartInfo'>
        <td>
            
        </td>
    </tr>
</table>"; }
    if($_SESSION['isHp'] == true) {
        echo
"<table class='cart'>
    <tr class='cartInfo'>
        <th><img class='thumbPic' src='water_pack.jpg' alt='Hydration Pack'></th>
        <td>" . $_SESSION['hp'] . "</td>
        <td>Quantity: " . $_SESSION['hp_qty'] . "</td>
        <form method='post'><td>
        <input type='submit' value='REMOVE' name='removeHp' href='ponder03_cart.php'>
        </td></form>
    </tr>
    <tr class='cartInfo'>
        <td>
            
        </td>
    </tr>
</table>"; }
    if($_SESSION['isWp'] == true) {
        echo
"<table class='cart'>
    <tr class='cartInfo'>
        <th><img class='thumbPic' src='water_purifier.jpg' alt='Portable Water Purifier'></th>
        <td>" . $_SESSION['wp'] . "</td>
        <td>Quantity: " . $_SESSION['wp_qty'] . "</td>
        <form method='post'>
            <td><input type='submit' value='REMOVE' name='removeWp'></td>
        </form>
    </tr>
    <tr class='cartInfo'>
        <td>
            
        </td>
    </tr>
</table>"; }
    
    echo "This is the item " . $_SESSION["sk"] . "<br>This is the quantity: " . $_SESSION["sk_qty"] . "<br>";
  
    echo "This is the item " . $_SESSION["fs"] . "<br>This is the quantity: " . $_SESSION["fs_qty"] . "<br>";

    echo "This is the item " . $_SESSION["hp"] . "<br>This is the quantity: " . $_SESSION["hp_qty"] . "<br>";
    
    echo "This is the item " . $_SESSION["wp"] . "<br>This is the quantity: " . $_SESSION["wp_qty"] . "<br>";
?>
        
</body>
</html>