<?php
    session_start();
    $book=$_SESSION['book'];
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Scripture Details</title>
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
    
    echo '<h1>Scripture Details</h1>';
    foreach ($db->query("select book, chapter, verse, content from scriptures where book = '$book'") as $row)
    {
        echo '<b>';
        echo $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</b>- "';
        echo $row['content'] . '"';
    }
    
?>
</body>
</html>