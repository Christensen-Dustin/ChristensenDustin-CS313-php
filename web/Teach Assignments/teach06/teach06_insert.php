<?php
    include 'connectDB.php';
    session_start();
    $name = $_SESSION['book'];
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Scripture Add/Edit</title>
	<style></style>
</head>  
<body>
<header>
<?php
    include 'navigationBar.php';
?>
</header>
    <br>
    <br>
<?php


echo '<h1>Scripture Add/Edit</h1>';

echo '<form method="post" action="teach06_results.php">';
echo 'Book: <input type=


echo '<input type="submit" value="Chore Details">';
echo '</select></form>';

</body>
</html>