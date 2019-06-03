<?php
    session_start();
    include 'teach07_pass.php';
    
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();

    // Re-direct to the sign-in page and kill the page
    header("location: teach07-signIn.php");
    die();
?>