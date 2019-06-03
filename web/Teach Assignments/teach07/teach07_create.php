<?php
    session_start();
    include'teach07_pass.php';
        
    if (!isset($_POST['userLogin_name']) || $_POST['userLogin_name'] == "" ||
        !isset($_POST['userLogin_pass']) || $_POST['userLogin_pass'] == "")
    {
        // Re-direct back to this page to enter in the required data
        $create_page = "teach07_create.php";
        header("Location: $create_page");
        die();
    }

    $userLogin_name = htmlspecialchars($_POST['userLogin_name']);
    $userLogin_pass = $_POST['userLogin_pass'];
    $userLogin_Hpass = password_hash($userLogin_pass, PASSWORD_DEFAULT);

    include 'connectDB.php';

    $stmt=$db->$prepare('INSERT INTO userLogin(userLogin_name, userLogin_pass)
            VALUES(:userLogin_name, :userLogin_pass)');
    $stmt->bindValue(':userLogin_name', $userLogin_name, PDO::PARAM_STR);
    $stmt->bindValue(':userLogin_pass', $userLogin_Hpass, PDO::PARAM_STR);
    $stmt->execute();

    // Re-direct to the sign-in page and kill this page
    $signIn_page = "teach07_signIn.php";
    header("location: $signIn_page");
    die();
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
    <input type="text" name="userLogin_name" placeholder="User's Name">
    <br>
    <br>
    <input type="password" name="userLogin_pass" placeholder="User's Password">
    <br>
    <br>
    <input type="submit" value="Click to Create an Account"/>
</form>    
</body>
</html>