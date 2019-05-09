<!DOCTYPE html>
<html lang="eng-US">
<head>
    <title> Interest.php </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="index.css">
    <script type="text/javascript" src="name of file.js"></script>
</head>
<body>
<header>
    <h1>Welcome to MY OTHER INTERESTS</h1>
</header>
<div class="navBar">
  <a class="active" href="index.html">Home</a>
  <a href="interest.php"> Other Interest</a>
  <a href="assignment.html">Assignments</a>
</div>
<br>
<br>
    <?php
    date_default_timezone_set("America/Los_Angeles");
    echo "<p>Today's date is " . date("m.d.Y") . "</p><br>";
    echo "<p>The time is " . date("h:i:sa") . "</p><br>";
    ?>
    <!--<ul class="topmenu">
        <li <?php if($_SERVER['SCRIPT_NAME']=="/home.php") { ?>  class="active"   <?php   }  ?>><a href="home.php"><b>Bienvenue</b></a></li>
        <li <?php if($_SERVER['SCRIPT_NAME']=="/livres.php") { ?>  class="active"   <?php   }  ?>><a href="livres.php"><b>Livres</b></a></li>
        <li <?php if($_SERVER['SCRIPT_NAME']=="/bibliotheque.php") { ?>  class="active"   <?php   }  ?>><a href="bibliotheque.php"><b>Bibliothèque</b></a></li>
        <li <?php if($_SERVER['SCRIPT_NAME']=="/universite.php") { ?>  class="active"   <?php   }  ?>><a href="universite.php"><b>L'université</b></a></li>
        <li <?php if($_SERVER['SCRIPT_NAME']=="/contact.php") { ?>  class="active"   <?php   }  ?>><a href="contact.php"><b>Contact</b></a></li>
    </ul>-->
    
    <?php
    $pages = scandir('pages-php');
    $hidden = array('.', '..');
    
    echo '<div class="menubar">';
    
    foreach($pages as $page) {
        if(!in_array($page, $hidden)) {
            $link = 'pages-php' . $page;
            $cleanName = strtoupper(str_replace('.php', '', $page));
            echo'<a href="' . $link . '">' . $cleanName . '</a> <br>';
        } // close if statement
     } // close foreach
    
    echo '</div>';
    ?>
        
</body>
</html>