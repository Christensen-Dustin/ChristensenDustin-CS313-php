<?php
    session_start();
    include'teach07_pass.php';
        
    if (!isset($_POST['userLogin_name']) || $_POST['userLogin_name'] == "" ||
        !isset($_POST['userLogin_pass']) || $_POST['userLogin_pass'] == "")
    {
        // Re-direct back to this page to enter in the required data
        $signUp_page = "teach07_signUp.php";
        header("Location: $signUp_page");
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
