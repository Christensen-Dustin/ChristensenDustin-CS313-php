<?php
    session_start();

        if(isset($_POST['sk'])) {
            $_SESSION["isSk"] = true;
            $_SESSION["sk"] = "Survival Knife";
            $_SESSION["sk_qty"] = 1;
        }
        if(isset($_POST['fs'])) {
            $_SESSION["isFs"] = true;
            $_SESSION["fs"] = "Flint and Steel";
            $_SESSION["fs_qty"] = 1;
        }
        if(isset($_POST['hp'])) {
            $_SESSION["isHp"] = true;
            $_SESSION["hp"] = "Hydration Pack";
            $_SESSION["hp_qty"] = 1;
        }
        if(isset($_POST['wp'])) {
            $_SESSION["isWp"] = true;
            $_SESSION["wp"] = "Portable Personal Water Purifier";
            $_SESSION["wp_qty"] = 1;
        }

        if(isset($_POST['skDetails'])) {
            $details = 'skDetails';
        }
        if(isset($_POST['fsDetails'])) {
            $details = 'fsDetails';
        }
        if(isset($_POST['hpDetails'])) {
            $details = 'hpDetails';
        }
        if(isset($_POST['wpDetails'])) {
            $details = 'wpDetails';
        }

?>
<!DOCTYPE html>
<html lang="eng-US">
<head>
    <title> Details.php </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="index.css">
    <script type="text/javascript" src="name of file.js"></script>
</head>
<body>
<header>
    <h1>MORE DETAILS</h1>
</header>
<div class="navBar">
    <a class="active" href="index.html">Home</a>
    <a href="interest.php"> Other Interest</a>
    <a href="assignment.html">Assignments</a>
    <a id="cart" href="ponder03.php">Browse ITEMS</a>
    <a id="cart" href="ponder03_cart.php">SHOPPING CART</a>
</div>
<br>
<br>
<?php
if($details == 'skDetails') {
    echo
        "<table class='details'>
            <tr class='info'>
                <th class='thDetails' rowspan='2'><img class='thDetails' src='survival_knife.jpg' alt='Survival Knife'></th>
                <td class='tdDetails'>Description:<br><br>This survival knife is the ideal tool for any outdoor enthusiast. The rugged 8 in. stainless steel blade on this hunting knife is designed for cutting, chopping and sawing. Features include a compass and survival kit stashed in the storage handle. This high quality knife doubles as a complete survival package. Precision sharpened 8 in. stainless steel blade. Sawtooth edge. Survival kit stores in handle.<br><br>Manufacturer Warranty Detail:<br><br>We guarantee this product to be free from defects in materials and workmanship 90 days from the date of purchase. Limitations apply.</td>
            </tr>
            <tr class='info'>
                <td>
                    <form method='post'>
                        <input type='submit'  value='Add to Cart' name='sk'>
                    </form>
                </td>
            </tr>
        </table>";
}

if($details == 'fsDetails') {
    echo
        "<table class='details'>
            <tr class='info'>
                <th class='thDetails' rowspan='2'><img class='thDetails' src='flint_steel.jpg' alt='Flint and Steel'></th>
                <td class='tdDetails'> HANDCRAFTED HARDWOOD HANDLE — Traditionally inspired materials and ergonomics. We’ve intentionally left the grip natural, ready to earn that seasoned finish. Oil & grit… bare, calloused hands.<br>
                BEST FERRO BLEND, PERIOD — Überleben’s Sånft-korr(TM) ferrocerium is the perfect balance between softness & durability, consistently outperforming the leading fire starters. Easily throw a 5,500ºF shower of molten sparks in any weather (waterproof), at any altitude.<br>
                MULTIPLE SIZE OPTIONS — At nearly 5-inches in total length, the Zünden is available in three thickness variations, including: Trad 5/16” (8mm): 12,000+ strikes, Pro 3/8” (10mm): 15,000+ strikes, and Fatty 1/2” (12.5mm): 20,000+ strikes.<br>
                DESIGNED FOR NECK CARRY — There’s no excuse. Even the Zünden Fatty weighs in at less than 3 oz. Includes Mil-spec 550 paracord lanyard + Multi-tool striker (straight-edge spine, concave tinder scraper, map scale, ruler, hex wrench… and most importantly, bottle opener).<br>
                HASSLE FREE GUARANTEE — If you’re not stoked, we’re not stoked. You shouldn’t pay for something you don’t love. If for any reason you’re not absolutely thrilled with your Zünden, let us know. We’ll fix it. </td>
            </tr>
            <tr class='info'>
                <td>
                    <form method='post'>
                        <input type='submit'  value='Add to Cart' name='fs'>
                    </form>
                </td>
            </tr>
        </table>";
}

if($details == 'hpDetails') {
    echo
        "<table class='details'>
            <tr class='info'>
                <th class='thDetails' rowspan='2'><img class='thDetails' src='water_pack.jpg' alt='Hydration Pack'></th>
                <td class='tdDetails'></td>
            </tr>
            <tr class='info'>
                <td>
                    <form method='post'>
                        <input type='submit'  value='Add to Cart' name='hp'>
                    </form>
                </td>
            </tr>
        </table>";
}

if($details == 'wpDetails') {
    echo
        "<table class='details'>
            <tr class='info'>
                <th class='thDetails' rowspan='2'><img class='thDetails' src='water_purifier.jpg' alt='Portable Water Purifier'></th>
                <td class='tdDetails'></td>
            </tr>
            <tr class='info'>
                <td>
                    <form method='post'>
                        <input type='submit'  value='Add to Cart' name='wp'>
                    </form>
                </td>
            </tr>
        </table>";
}
?>        
</body>
</html>