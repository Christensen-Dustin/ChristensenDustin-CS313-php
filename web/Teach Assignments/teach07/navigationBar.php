<?php

$pages = scandir('.');
$notWanted = array('.', '..', 'connectDB.php', 'navigationBar.php', 'teach07_create.php');

echo '<div class="menu">';
    foreach($pages as $page) {
        if(!in_array($page, $notWanted)) {
            $link = $page;
            $safeName = strtoupper(str_replace('.php', '', $page));
            $safeName2 = strtoupper(str_replace('TEACH07_', '', $safeName));
        echo '<a href="' . $link . '">' . $safeName2 . '</a> &nbsp;';
        } // close if
    } // close foreach
echo '</div>';

?>