<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Teach 03 - Team Activity - PHP PAGE</title>
	<link rel="stylesheet" type="text/css" href="teach03.css">
	<script type="text/javascript" src="name of file.js"></script>
	<style></style>
</head>  
<body>
<div id="greetings">
    Greetings, <?ph echo $_POST["fname"]; ?>
</div>
    <br>
    <br>
<div id="generalInfo">
    User's Name: <?php echo $_POST['fname'] . echo " " . echo $_POST['lname']; ?>
</div>
</body>
</html>
