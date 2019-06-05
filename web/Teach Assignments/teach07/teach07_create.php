<?php
    session_start();
    $_SESSION['passMatch'] = true;
    $signUp_page = "teach07_signUp.php";
        
    if (!isset($_POST['userlogin_name']) || $_POST['userlogin_name'] == "" ||
        !isset($_POST['userlogin_pass']) || $_POST['userlogin_pass'] == "")
    {
        // Re-direct back to this page to enter in the required data
        header("Location: $signUp_page");
        die();
    }

    if (!isset($_POST['userlogin_pass2']) ||
        $_POST['userlogin_pass'] != $_POST['userlogin_pass2'])
    {
        $_SESSION['passMatch'] = false;
        // Re-direct back to this page to enter in the required data
        header("Location: $signUp_page");
        die();
    }

    include 'connectDB.php';

    $userlogin_name = htmlspecialchars($_POST['userlogin_name']);
    $userlogin_pass = $_POST['userlogin_pass'];
    $userlogin_Hpass = password_hash($userlogin_pass, PASSWORD_DEFAULT);

    error_log("login = " . $userlogin_name . ', ' . $userlogin_pass);

    $stmt=$db->prepare('INSERT INTO userlogin(userlogin_name, userLogin_pass)
            VALUES(:userlogin_name, :userlogin_pass);');
    $stmt->bindValue(':userlogin_name', $userlogin_name, PDO::PARAM_STR);
    $stmt->bindValue(':userlogin_pass', $userlogin_Hpass, PDO::PARAM_STR);
    $stmt->execute();

    // Re-direct to the sign-in page and kill this page
    $signIn_page = "teach07_signIn.php";
    header("location: $signIn_page");
    die();
?>
