<?php
        session_start();
        $name = $_GET['book'];
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Scripture Resource</title>
	<style></style>
</head>  
<body>
<?php
include 'connectDB.php';
    echo "name = " . $name;
    echo '<h1>Scripture Resources</h1>';
    foreach ($db->query("select book, chapter, verse, id from scriptures where book = '$name'") as $row)
    {
        echo '<b>';
        echo $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . ' - "';
        $details = $row['id'];
        echo "</b><a href='teach05_details.php?id=$details'>click here for details</a>";
    }
echo "name = " . $name;
    
?>
</body>
</html>
