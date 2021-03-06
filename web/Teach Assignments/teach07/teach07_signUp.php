<?php
    session_start();
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Create a Username and Password</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<script type="text/javascript" src="Teach07.js"></script>
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
<form onsubmit="return validateDetails()" method="post" action="teach07_create.php">
    Enter a desired username:<br>
    <input type="text" name="userlogin_name" placeholder="User's Name"/>
    <br>
    <br>
    Enter a desired password:<br>
<span class='asterisk' style="color:red">
<?php
    if(isset($_SESSION['passMatch']) && $_SESSION['passMatch'] == false)
    {
        echo '<span style="color:red">*</span>';
    }
?>
</span>
    <input type="password" name="userlogin_pass" placeholder="User's Password"/>
    <br>
    <br>
<span class='asterisk' style="color:red">
<?php
    if(isset($_SESSION['passMatch']) && $_SESSION['passMatch'] == false)
    {
        echo '<span style="color:red">*</span>';
    }
?>
</span>
    <input type="password" name="userlogin_pass2" placeholder="User's Password"/>
    <br>
<span id='message' style="color:red">
<?php
     if(isset($_SESSION['passMatch']) && $_SESSION['passMatch'] == false)
    {
        echo '<br>Passwords must MATCH</span><br>';
    }
    if(isset($_SESSION['passValid']) && $_SESSION['passValid'] == false)
    {
        echo '<br>Password must contain at least 7 characters and a number<br>';
    }
?>
</span>
    <br>
    <input type="submit" value="Click to Create an Account"/>
</form>    
</body>
</html>