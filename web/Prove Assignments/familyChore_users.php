<?php
    include 'connectDB.php';
    session_start();
    $userName = $_GET['userName'];
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

$family_hk;

foreach ($db->query("select parent_fname, parent_lname, parent_bday, parent_display from parent where parent_display='$userName'") as $rowParent)
{
    echo 'User Name: ' . $rowParent['parent_fname'] . ' ' . $rowParent['parent_lname'] . '</br>';
    echo 'Birthday: ' . $rowParent['parent_bday'] . '</br>'; 
    
    if(!$rowParent['parent_display'])
    {
        global $family_hk = $rowParent['parent_pk'];
    }
}

foreach ($db->query("select child_fname, child_lname, child_bday, child_display from child where child_display='$userName'") as $rowChild)
{
    echo 'User Name: ' . $rowChild['child_fname'] . ' ' . $rowChild['child_lname'] . '</br>';
    echo 'Birthday: ' . $rowChild['child_bday'] . '</br>';
    
    if(!$rowChild['child_display'])
    {
        global $family_fk = $rowChild['child_pk'];
    }
}

echo '<h1> Related Details  </h1>';
echo '<h2> Chores </h2>';
foreach ($db->query("select parent_pk, parent_display, family_pk, chore_name, family_chore_fk, family_child_fk from parent, chore, family where parent_display='$userName' and family_child_fk ='$family_fk'") as $rowFamily)
{
    echo $rowFamily['chore_name'] . '</br>';
}



?>

</body>
</html>
