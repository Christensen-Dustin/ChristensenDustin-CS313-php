<?php
    session_start();
    include 'connectDB.php';

    $userLogin_name=htmlspecialchars($_POST['userLogin_name']);
    $userLogin_pass= $_POST['userLogin_pass'];
    $invalidLogin = false;

    if (isset($_POST['userLogin_name']) && isset($_POST['userLogin_pass']))
    {
        $userLogin_Hpass = password_hash($userLogin_pass, PASSWORD_DEFAULT);
        
        $stmt=$db->prepare('SELECT userLogin_pass FROM userLogin WHERE userLogin_name=:userLogin_name;');
        $stmt->bindValue(':userLogin_name', $userLogin_name);
        $stmt->execute();
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        
        if($result)
        {
            $rowPass=$stmt->fetch();
            $hashedPassDB = $result['userLogin_pass'];
            $_SESSION['hashedPassDB'] = $hashedPassDB;
            
            if(password_verify($userLogin_Hpass, $hashedPassDB))
            {
                $_SESSION['userLogin_name']=$userLogin_name;
                $main_page = 'teach07_main.php';
                header("Location: $main_page");
                die();
            }
            else
            {
                $invalidLogin=true;
            }
        }
        else
        {
            $invalidLogin=true;
        }
        
    }
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Log-in page of Teach 07</title>
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
<h1>Please sign-in</h1>

<?php    
    if($invalidLogin)
    {
        echo '<h2 style="color:red;">Invalid User Name or Password</h2>';
        echo 'entered password: ' . $userLogin_Hpass . '<br>';
        echo 'hashed password: ' . $_SESSION['hashedPassDB'] . '<br>';
    }
?>
    <br>
    <br>
<form method="post" action="teach07_signIn.php">
    Enter Username:<br>
    <input type="text" name="userLogin_name" placeholder="Your Username">
    <br>
    <br>
    Enter User Passwork:<br>
    <input type="password" name="userLogin_pass" placeholder="Your Password">
    <br>
    <br>
    <input type="submit" value="Click to Sign In"/>
</form>
    <br>
    <br>
<a href="teach07_signUp.php">Click here to Create an Account</a>

</body>
</html>