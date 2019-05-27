<?php
        session_start();
        $name = $_POST['id'];
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
<?php
include 'connectDB.php';
    echo "name = " . $name;
    echo '<h1>Scripture Resources</h1>';
    foreach ($db->query("select book, chapter, verse, content from scriptures where id = '$name'") as $row)
    {
        echo '<b>';
        echo $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</b>- "';
        echo $row['content'] . '"';
    }
    
?>
</body>
</html>