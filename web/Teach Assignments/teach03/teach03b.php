<?php

 ?>
<DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>TEACH 03 - Taking input and process it with a PHP</title>
	<link rel="stylesheet" type="text/css" href="teach03.css">
	<script type="text/javascript" src="name of file.js"></script>
	<style>
        
    </style>
</head>  
<body>
<form action="teach03.php" method="post" >
    First Name:<input type="text" name="fname"><br>
    Last Name: <input type="text" name="lname"><br>
    Email: <input type="email" name="email"><br>
    <br>
    Select a major:<br>
    <?php
        $_major = array("Computer Science",  "Web Design and Development", "Computer Information Technology", "Computer Engineering");
    
        foreach($_major as $major) {
            echo "<input type='radio' name='major' value='" . $major . "'>" . $major . "<br>";
        }
    ?>
        <br>
    Please select all the continents that you have visited:<br>
    <input type="checkbox" name="cont[]" value="Africa">Africa<br>
    <input type="checkbox" name="cont[]" value="Antarctica">Antarctica<br>
    <input type="checkbox" name="cont[]" value="Asia">Asia<br>
    <input type="checkbox" name="cont[]" value="Australia">Australia<br>
    <input type="checkbox" name="cont[]" value="Europe">Europe<br>
    <input type="checkbox" name="cont[]" value="North America">North America<br>
    <input type="checkbox" name="cont[]" value="South America">South America<br>
    <br>
    Additional Comments:<br>
    <input type="text" name="comment"><br>
    <br>
    <input type="submit" value="Click to Submit">
</form>


</body>
</html>
