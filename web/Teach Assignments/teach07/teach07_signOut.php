<?php
    session_start();
    
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();

    // Re-direct to the sign-in page and kill the page
    $signIn_page = "teach07_signIn.php";
    header("location: $signIn_page");
    die();
?>