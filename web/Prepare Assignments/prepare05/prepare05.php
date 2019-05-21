<?php
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Prepare 05</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<script type="text/javascript" src="name of file.js"></script>
	<style></style>
</head>  
<body>
<?php
include 'connectDB.php';

// First style to display a query
foreach ($db->query('select username, password from note_user') as $row)
{
    echo 'user: ' . $row['username'];
    echo 'password: ' . $row['passwork'];
    echo '<br/>';
}

// Second style to display a query
$statement = $db->query('select username, password from note_user');
while ($row2 = $statement->fetch(PDO::FETCH_ASSOC))
{
    echo 'user: ' . $row2['username'] . ' password: ' . $row2['password'] . '<br/>';
}

// Third style to display a query
$statement2 = $db->query('select username, password, from note_user');
$results = $statement2->fetchALL(PDO::FETCH_ASSOC);



























?>
</body>
</html>
