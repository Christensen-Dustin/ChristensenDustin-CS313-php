<?php
    session_start();
    $name=htmlspecialchars($_GET['book']);
    $_SESSION['book'] = $name;
    if(!isset($_GET['book'])) {
        $name =$_SESSION['book'];
    }
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
    
foreach ($db->query("select book, chapter, verse, s_id from scriptures where book = '$name'") as $row)
{
    echo '<b>';
    echo $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . ' - ';
    $details = $row['s_id'];
    echo "</b><a href='teach06_details.php'>click here for details</a>";
}
?>
</body>
</html>
