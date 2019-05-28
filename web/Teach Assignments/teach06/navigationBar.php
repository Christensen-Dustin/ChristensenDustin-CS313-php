<?php

$pages = scandir('.');
$notWanted = array('.', '..', 'connectDB.php', 'navigationBar.php');

echo '<div class="menu">';
    foreach($pages as $page) {
        if(!in_array($page, $notWanted)) {
            $link = $page;
            $safeName = strtoupper(str_replace('.php', '', $page));
        echo '<a href="' . $link . '">' . $safeName . '</a> &nbsp;';
        } // close if
    } // close foreach
echo '</div>';

?>