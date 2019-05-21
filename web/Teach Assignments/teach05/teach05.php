<?php
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Scripture Resource</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<script type="text/javascript" src="name of file.js"></script>
	<style></style>
</head>  
<body>
<?php
include 'connectDB.php';
    echo '<h1>Scripture Resources</h1>';
    foreach ($db->query('select book, chapter, verse, content from scriptures') as $row)
    {
        echo $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . ' - "' . $row[content] .'"';
    }



?>
</body>
</html>
