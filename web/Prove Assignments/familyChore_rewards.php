<?php
    include 'connectDB.php';
    session_start();
    $rewards = $_GET['rewards'];
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Title of Project/Site</title>
	<link rel="stylesheet" type="text/css" href="familyChore.css">
	<script type="text/javascript" src="name of familyChore.js"></script>
	<style></style>
</head>  
<body>
<header>


</header>


<?php
foreach ($db->query("select parent_fname, parent_lname, parent_bday, parent_display from parent where parent_display='$userName'") as $rowParent)
{
    echo 'User Name: ' . $rowParent['parent_fname'] . ' ' . $rowParent['parent_lname'] . '</br>';
    echo 'Birthday: ' . $rowParent['parent_bday'] . '</br>'; 
}

foreach ($db->query("select child_fname, child_lname, child_bday, child_display from child where child_display='$userName'") as $rowChild)
{
    echo 'User Name: ' . $rowParent['child_fname'] . ' ' . $rowParent['child_lname'] . '</br>';
    echo 'Birthday: ' . $rowParent['child_bday'] . '</br>';
}

?>


</body>
</html>
