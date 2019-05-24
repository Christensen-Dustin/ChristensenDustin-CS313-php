<?php
    include 'connectDB.php';
    session_start();
    $result = $_GET['userName'];
    $expanded = explode("|", $result);
    $id = $expanded[0];
    $display = $expanded[1];
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>User Details</title>
	<link rel="stylesheet" type="text/css" href="familyChore.css">
	<script type="text/javascript" src="name of familyChore.js"></script>
	<style></style>
</head>  
<body>
<header>
<a href="familyChore_main.php">Main Page</a>

</header>

<h1>User Details</h1>
<?php

    echo 'ID = ' . $id . '</br>;
    echo 'Display = ' . $display;
    
foreach ($db->query("select parent_fname, parent_lname, parent_bday, parent_display from parent where parent_display='$display'") as $rowParent)
{
    echo 'User Name: ' . $rowParent['parent_fname'] . ' ' . $rowParent['parent_lname'] . '</br>';
    echo 'Birthday: ' . $rowParent['parent_bday'] . '</br>'; 
}

foreach ($db->query("select child_fname, child_lname, child_bday, child_display from child where child_display='$display'") as $rowChild)
{
    echo 'User Name: ' . $rowChild['child_fname'] . ' ' . $rowChild['child_lname'] . '</br>';
    echo 'Birthday: ' . $rowChild['child_bday'] . '</br>';
}

echo '<h1> Related Details  </h1>';
echo '<h2> Chores </h2>';
foreach ($db->query("select parent_pk, parent_display, family_pk, chore_name, family_chore_fk, family_parent_fk from parent, chore, family where parent_display='$display' and family_fk = '$id'") as $rowFamily)
{
    echo $rowFamily['chore_name'] . '</br>';
}



?>

</body>
</html>
