<?php
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
include 'connectDB.php';
echo "name = " . $name;
echo '<h1>Scripture Add/Edit</h1>';

echo '<form method="post" action="teach06_search.php"><select name="addEdit"><option selected="new">Enter in a new Scripture</option>';
    
foreach ($db->query("select id, book, chapter, verse from scriptures") as $rowScript)
{
    echo '<option value=' . $rowScript['id'] . '>' . $rowScript['book'] . ' ' . $rowScript['chapter'] . ':' . $rowScript['verse'] . '</option>';
}

// echo '<input type="submit" value="Chore Details">';
echo '</select></form>';
?>

</body>
</html>