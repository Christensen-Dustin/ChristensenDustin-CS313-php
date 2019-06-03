<?php
    session_start();
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Create a Username and Password</title>
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
<h1>Please fill in the below information to create an account</h1>
<form method="post" action="teach07_create.php">
    Enter a desired username:<br>
    <input type="text" name="userLogin_name" placeholder="User's Name">
    <br>
    <br>
    Enter a desired password:<br>
    <input type="password" name="userLogin_pass" placeholder="User's Password">
    <br>
    <br>
    <input type="submit" value="Click to Create an Account"/>
</form>    
</body>
</html>