<?php
    session_start();
    include 'teach07_pass.php';
    
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();

    // Re-direct to the sign-in page and kill the page
    $signIn_page = "teach07-signIn.php";
    header("location: $signIn_page");
    die();
?>