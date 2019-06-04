<?php
    session_start();
    include 'connectDB.php';

    $userlogin_name=htmlspecialchars($_POST['userlogin_name']);
    $userlogin_pass= $_POST['userlogin_pass'];
    $invalidLogin = false;

    if (isset($_POST['userlogin_name']) && isset($_POST['userlogin_pass']))
    {
        $userlogin_Hpass = password_hash($userlogin_pass, PASSWORD_BCRYPT);
        
        $stmt=$db->prepare('SELECT userLogin_pass FROM userLogin WHERE userlogin_name=:userlogin_name;');
        $stmt->bindValue(':userlogin_name', $userlogin_name);
        $stmt->execute();
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['result'] = $result;
        
        if($result)
        {
            $rowPass=$stmt->fetch(PDO::FETCH_ASSOC);
            $hashedPassDB = $rowPass['userlogin_pass'];
            $_SESSION['hashedPassDB'] = $hashedPassDB;
            
            if(password_verify($userlogin_pass, $hashedPassDB))
            {
                $_SESSION['userlogin_name']=$userlogin_name;
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
        echo 'entered password: ' . $userlogin_pass . '<br>';
        echo 'entered Hash pass: ' . $userlogin_Hpass . '<br>';
        echo 'result Hash pass: ' . $_SESSION['result'] . '<br>';
        echo 'hashed password: ' . $_SESSION['hashedPassDB'] . '<br>';
    }
?>
    <br>
    <br>
<form method="post" action="teach07_signIn.php">
    Enter Username:<br>
    <input type="text" name="userlogin_name" placeholder="Your Username">
    <br>
    <br>
    Enter User Passwork:<br>
    <input type="password" name="userlogin_pass" placeholder="Your Password">
    <br>
    <br>
    <input type="submit" value="Click to Sign In"/>
</form>
    <br>
    <br>
<a href="teach07_signUp.php">Click here to Create an Account</a>

</body>
</html>