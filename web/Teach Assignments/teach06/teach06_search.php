<?php
    session_start();        
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Scripture Search</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<script type="text/javascript" src="name of file.js"></script>
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
    <h1>Secriptures Search</h1>
<form method="get" action="teach06_results.php">
    <input type="text" name="book">
    <input type="submit" value="click me"> 
</form>    
    
    
</body>
</html>