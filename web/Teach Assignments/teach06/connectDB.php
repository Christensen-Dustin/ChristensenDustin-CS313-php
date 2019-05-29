<?php
// Connecting to the database
function getDB() {
    $db = NULL;
    try {
        // Default HEROKU Postgres configuration URL
        $dbUrl = getenv('DATABASE_URL');
        
        // Get the various parts of the DB connection for the URL
        $dbOpts = parse_url($dbUrl);
        
        $dbHost = $dbOpts["host"];
        $dbPort = $dbOpts["port"];
        $dbUser = $dbOpts["user"];
        $dbPassword = $dbOpts["pass"];
        $dbName = ltrim($dbOpts["path"], '/');
        
        // Create the PDO connection
        $db = new PDO("pgsql:host=$dbHost; port=$dbPort; dbname=$dbName", $dbUser, $dbPassword);
    
        // This line makes the PDO give us exceptions when there are problems
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $ex) 
    {
        // IN a production situation one would want as much info as possible
        echo 'Error!: ' . $ex->getMessage();
        die();
    }
    
    return $db;
}
?>