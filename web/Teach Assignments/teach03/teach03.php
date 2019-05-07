<!DOCTYPE html>
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Teach 03 - Team Activity - PHP PAGE</title>
	<link rel="stylesheet" type="text/css" href="teach03.css">
	<style></style>
</head>  
<body>

Greetings, <?ph echo $_POST["fname"]; ?>
    <br>
    <br>
User's Name: <?php echo $_POST["fname"] . " " . $_POST["lname"]; ?>
    <br>
mailto: <?php echo $_POST["email"]; ?>
    <br>
Your major <?php echo $_POST["major"]; ?>
    <br>
Your comment:<br>
    <?php echo $_POST["comment"]; ?>

</body>
</html>
