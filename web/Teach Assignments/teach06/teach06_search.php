<?php
    session_start();
    if(isset($_POST['book'])) {
        $_SESSION['book'] = $_POST['book'];
}        
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
<header>
<br>
<br>
<?php
    include 'navigationBar.php';
?>
</header>

<form method="post" action="teach06_results.php">
    <input type="text" name="book">
    <input type="submit" value="click me"> 
</form>    
    
    
</body>
</html>