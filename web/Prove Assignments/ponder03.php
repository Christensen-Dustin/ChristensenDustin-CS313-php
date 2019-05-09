<?php
    session_start();
    $_SESSION["sk"] = $sk;
    $_SESSION["sk_qty"] = $sk_qty;
    $_SESSION["fs"] = "FS";
    $_SESSION["fs_qty"] = 2;
    $_SESSION["hp"] = "HP";
    $_SESSION["hp_qty"] = 4;
    $_SESSION["wp"] = "PPWP";
    $_SESSION["wp_qty"] = 7;
?>
<!DOCTYPE html> 
<html lang="en-US">
  <head>
    <title>Items I like</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="index.css">
    <script type="text/javascript" src="name of file.js"></script>
    <style></style>
</head>  
<body>
<header>
    <h1>Items I am interested in that I would recommend to others to buy</h1>
</header>
<div class="navBar">
  <a class="active" href="index.html">Home</a>
  <a href="interest.php"> Other Interest</a>
  <a href="assignment.html">Assignments</a>
  <a id="cart" href="ponder03_cart.php">View Cart</a>
</div>
    <br>
    <br>    
<table class="items">
    <tr class="info">
        <th rowspan="2"><img class="mainPic" src="survival_knife.jpg" alt="Survival Knife"></th>
        <td>This Suvival Knife is not the best on market, but I have found that it will do all that you need it to do, in a pinch.</td>
    </tr>
    <tr class="items">
        <td>
            <form method="post">
                <input type="submit"  value="Add to Cart" name="sk" onclick="<?php $sk = 'Survival Knife'; $sk_qty = 1;?>">
            </form>
            <input type="button" value="More Detail">
        </td>
    </tr>
</table>
<table class="items">
    <tr class="info">
        <th rowspan="2"><img class="mainPic" src="flint_steel.jpg" alt="Flint and Steel"></th>
        <td>I have used this flint and steel on a number of ocasions and it has 
        not let me down.</td>
    </tr>
    <tr class="items">
        <td>
            <form method="post">
                <input type="submit"  value="Add to Cart" name="fs">
            </form>
            <input type="button" value="More Detail">
        </td>
    </tr>
</table>
<table class="items">
    <tr class="info">
        <th rowspan="2"><img class="mainPic" src="water_pack.jpg" alt="Hydration Pack"></th>
        <td>I have used this Hydration Pack on a number of hikes, excursions, 
        trips to theme parks and it has always kept my liquids cold/cool.</td>
    </tr>
    <tr class="items">
        <td>
            <form method="post">
                <input type="submit"  value="Add to Cart" name="hp">
            </form>
            <input type="button" value="More Detail">
        </td>
    </tr>
</table>
<table class="items">
    <tr class="info">
        <th rowspan="2"><img class="mainPic" src="water_purifier.jpg" alt="Portable Water Purifier"></th>
        <td>On ocassion, a fresh water source has not been available to us, while hiking. This Portable Personal Water Purifier has come in handy.</td>
    </tr>
    <tr class="items">
        <td>
            <form method="post">
                <input type="submit"  value="Add to Cart" name="wp">
            </form>
            <input type="button" value="More Detail">
        </td>
    </tr>
</table>
    <br>
    <br>    
</body>
</html>