<?php
    session_start();
    if (isset($_SESSION['userLogin_name']))
    {
        $userLogin_name=$_SESSION['userLogin_name'];
    }
    else
    {
        header("teach07_signIn.php");
        die();
    }
    include 'connectDB.php';
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Home Page of Teach 07</title>
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
<?php
    echo '<h1>Welcome ' . $userLogin_name . ' to the Teach 07 Homepage</h1>';
    echo 'Your username is : ' . $userLogin_name . '<br><br><br><br>';
    
    echo '<a href="teach07_signOut.php">Click here to Sign Out</a>';  
?>    
</body>
</html>