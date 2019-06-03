<?php
    session_start();
        
    if (!isset($_POST['userLogin_name']) || $_POST['userLogin_name'] == "" ||
        !isset($_POST['userLogin_pass']) || $_POST['userLogin_pass'] == "")
    {
        // Re-direct back to this page to enter in the required data
        $signUp_page = "teach07_signUp.php";
        header("Location: $signUp_page");
        die();
    }
    include 'connectDB.php';

    $userLogin_name = htmlspecialchars($_POST['userLogin_name']);
    $userLogin_pass = $_POST['userLogin_pass'];
    $userLogin_Hpass = password_hash($userLogin_pass, PASSWORD_DEFAULT);

    $stmt=$db->$prepare('INSERT INTO userLogin(userLogin_name, userLogin_pass)
            VALUES(:userLogin_name, :userLogin_pass);');
    $stmt->bindValue(':userLogin_name', $userLogin_name);
    $stmt->bindValue(':userLogin_pass', $userLogin_Hpass);
    $stmt->execute();

    // Re-direct to the sign-in page and kill this page
    $signIn_page = "teach07_signIn.php";
    header("location: $signIn_page");
    die();
?>
