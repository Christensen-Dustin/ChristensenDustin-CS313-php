<?php
    session_start();
    
    $_SESSION['book'] = htmlspecialchars($_POST['book'];
    $name = $_SESSION['book'];
    
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Scripture Resource</title>
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
    
echo '<h1>Scripture Resources</h1>';
    
foreach ($db->query("select book, chapter, verse, id from scriptures where book = '$name'") as $row)
{
    echo '<b>';
    echo $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</b> - ';
    echo '<a href="teach06_details.php">click here to view the verse</a>';
}
?>
</body>
</html>
