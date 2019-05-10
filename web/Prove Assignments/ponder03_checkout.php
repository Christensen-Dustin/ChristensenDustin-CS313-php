<?php
    session_start();
        $fname = htmlspecialchars($_POST['fname']);
        $lname = htmlspecialchars($_POST['lname']);
        $stNum = htmlspecialchars($_POST['stNUm']);
        $stName = htmlspecialchars($_POST['stName']);
        $city = htmlspecialchars($_POST['city']);
        $state = htmlspecialchars($_POST['state']);
        $zip = htmlspecialchars($_POST['zip']);
        $special = htmlspecialchars($_POST['special'];

        if(isset($_POST['fname'])) {
            $_SESSION['fname'] = $fname;
        }
        if(isset($_POST['lname'])) {
            $_SESSION['lname'] = $lname;
        }
        if(isset($_POST['stNum'])) {
            $_SESSION['stNum'] = $stNum;
        }
        if(isset($_POST['stName'])) {
            $_SESSION['stName'] = $stName;
        }
        if(isset($_POST['city'])) {
            $_SESSION['city'] = $city;
        }
        if(isset($_POST['state'])) {
            $_SESSION['state'] = $state;
        }
        if(isset($_POST['zip'])) {
            $_SESSION['zip'] = $zip;
        }
        if(isset($_POST['special'])) {
            $_SESSION['special'] = $special;
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
echo
"<form method='post'>
    <table class='client'>
        <tr class='trClient'>
            <th class='thClient'>First Name:</th>
            <td class='tdClient'><input type='text' name='fname'></td>
            <td class='tdClient'>Last Name:</td>
            <td class='tdClient'><input type='text' name='lname'></td>
        </tr>
    </table>
    <input type='submit' value='Check Information'>
</form>";
echo
    "<br>
    <br>
    <div class='btnCheckout'>
    <a href='ponder03_checkout.php'>Continue on to Confirmation</a>
    </div>";
echo
    "<br>
    <br>
    <div class='btnCheckout'>
    <a href='ponder03.php'>Return to SHOPPING CART</a>
    </div>";    
?>
        
</body>
</html>