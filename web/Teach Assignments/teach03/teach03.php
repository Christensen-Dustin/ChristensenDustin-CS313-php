<!DOCTYPE html>
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Teach 03 - Team Activity - PHP PAGE</title>
	<link rel="stylesheet" type="text/css" href="teach03.css">
	<style></style>
</head>  
<body>
<?php 
    echo "<div id='greetings'>Greetings, " . $_POST["fname"] . "</div>";
?>
    <br>
<div id="info" >
User's Name: <?php echo $_POST["fname"] . " " . $_POST["lname"]; ?>
    <br>
mailto: <?php echo $_POST["email"]; ?>
    <br>
Your major: <?php echo $_POST["major"]; ?>
    <br>
    <br>
The continents you have visited:
    <br>
<?php
    echo "<div style='margin-left:3%;'>";
    foreach($_POST['cont'] as $selected) {
        echo $selected . "<br>";
    }
    echo "</div>";
?>
    <br>
</div>
<p style="font-weight:bold;">Your comment:</p><br>
    <?php echo "<p style='margin-left:3%';>" . $_POST["comment"]; . "</p>"?>

</body>
</html>
