<?php
        session_start();
        $name = $_SESSION['book'];
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Scripture Topics</title>
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

echo '<h1>Scripture Topics</h1>';

echo '<form method="post" action="teach06_search.php"><select name="topics"><option value="none">Select a Topic</option>';
    
foreach ($db->query("select id, name from topics") as $rowTopic)
{
    echo '<option value=' . $rowTopic['name'] . '>' . $rowTopic['name'] . '</option>';
}

// echo '<input type="submit" value="Chore Details">';
echo '</select></form>';
?>
<div id="list">
<?php
    
    
    
?>
</div>
</body>
</html>