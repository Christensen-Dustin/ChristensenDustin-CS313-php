<?php
    include 'connectDB.php';
    session_start();
    $chores = $_GET['chores'];
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Family Chore Tracker - Chores Detail Page</title>
	<link rel="stylesheet" type="text/css" href="familyChore.css">
	<script type="text/javascript" src="name of familyChore.js"></script>
	<style></style>
</head>  
<body>
<header>
<a href="familyChore_main.php">Main Page</a>

</header>

<h1>Chores Details</h1>
<?php
foreach ($db->query("select chore_name, chore_details, chore_date from chore where chore_pk='$chores'") as $rowChore)
{
    echo 'Chore Name: ' . $rowChore['chore_name'] . '<br>';
    echo 'Due Date :' . $rowChore['chore_date'] . '<br>';
    echo 'Chore Details: ' . $rowChore['chore_details'] . '<br>';
}
?>

</body>
</html>
