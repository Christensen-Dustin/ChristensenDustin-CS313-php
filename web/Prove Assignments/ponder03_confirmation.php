<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="eng-US">
<head>
    <title> Confirmation.php </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="index.css">
    <script type="text/javascript" src="name of file.js"></script>
</head>
<body>
<header>
    <h1>Confirmation of YOUR order</h1>
</header>
<div class="navBar">
    <a class="active" href="index.html">Home</a>
    <a href="interest.php"> Other Interest</a>
    <a href="assignment.html">Assignments</a>
    <a id="cart" href="ponder03.php">Browse ITEMS</a>
</div>
<br>
<br>
<h1 style="text-align:center;">Confirmation of your order</h1>
<?php
/***echo
    "<p>Your name: " . $_SESSION['fname'] . " " . $_SESSION['lname'] . "</p>
    <br>
<p>   Street: " . $_SESSION['stNum'] . " " . $_SESSION['StName'] . "</p>
    <br>
<p>     City: " . $_SESSION['city'] . " - State: " . $_SESSION['state'] . " - Zip: " . $_SESSION['zip'] . "</p>
    <br>
<p>Special Instructions:<br>" . $_SESSION['special'] . "</p>
    <br>
    <br>";*/

if($_SESSION['isSk'] == true) {
        echo
"<table class='cart'>
    <tr class='info'>
        <th id='thCart'>
            <img class='thumbPic' src='survival_knife.jpg' alt='Survival Knife'>
        </th>
        <td id='tdCart'>" . $_SESSION['sk'] . "</td>
        <td id='tdCart'>Quantity: " . $_SESSION['sk_qty'] . "</td>
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
    </tr>
</table>
    <br>
    <br>
    <br>;" }

?>        
</body>
</html>