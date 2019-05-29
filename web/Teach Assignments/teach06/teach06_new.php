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
<h1>Scripture Add/Edit</h1>

<form method="post" action="teach06_insert.php">
    Book: <input type="text" name="book"><br> 
    Chapter: <input type="text" name="chapter"> - 
    Verse: <input type="text" name="verse"><br>
    Scripture: <textarea name="content"></textarea><br>
    Topic: 
<?php
foreach ($db->query("select id, name from topics") as $rowTopic)
{
    echo '<input type="checkbox" name="topics[]" value=' . $rowTopic['id'] . '>' . $rowTopic['name'] . ' - ';
} 
?>
<br>
<input type="submit" value="Create New Entry">
</form>

</body>