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
    echo ' password: ' . $row['password'];
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
$results = $statement2->fetchAll(PDO::FETCH_ASSOC);


// Prepared statements style one
$stmt = $db->prepare('select * from table where id=:id and name=:name');
&stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->execute();
$row3 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
// Prepared statements style two
$stmt2 = $db->prepare('select * from table where id=:id and name=:name');
$stmt2->execute(array(':name' => $name, ':id' => $id));
$row4 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
























?>
</body>
</html>
