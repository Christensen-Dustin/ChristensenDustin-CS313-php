<!DOCTYPE html>

<html lang="eng-US">
<head>
    <title> Interest.php </title>
    <meta charset="utf-8" />
</head>
<body>
    <ul class="topmenu">
        <li <?php if($_SERVER['SCRIPT_NAME']=="/home.php") { ?>  class="active"   <?php   }  ?>><a href="home.php"><b>Bienvenue</b></a></li>
        <li <?php if($_SERVER['SCRIPT_NAME']=="/livres.php") { ?>  class="active"   <?php   }  ?>><a href="livres.php"><b>Livres</b></a></li>
        <li <?php if($_SERVER['SCRIPT_NAME']=="/bibliotheque.php") { ?>  class="active"   <?php   }  ?>><a href="bibliotheque.php"><b>Bibliothèque</b></a></li>
        <li <?php if($_SERVER['SCRIPT_NAME']=="/universite.php") { ?>  class="active"   <?php   }  ?>><a href="universite.php"><b>L'université</b></a></li>
        <li <?php if($_SERVER['SCRIPT_NAME']=="/contact.php") { ?>  class="active"   <?php   }  ?>><a href="contact.php"><b>Contact</b></a></li>
    </ul>
        
</body>
</html>