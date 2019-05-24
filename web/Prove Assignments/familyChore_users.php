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
foreach ($db->query("select parent_fname, parent_lname, parent_bday, parent_display from parent where parent_pk='$userName'") as $rowParent)
{
    echo 'User Name: ' . $rowParent['parent_fname'] . ' ' . $rowParent['parent_lname'] . '</br>';
    echo 'Birthday: ' . $rowParent['parent_bday'] . '</br>'; 
}

foreach ($db->query("select child_fname, child_lname, child_bday, child_display from child where child_pk='$userName'") as $rowChild)
{
    echo 'User Name: ' . $rowChild['child_fname'] . ' ' . $rowChild['child_lname'] . '</br>';
    echo 'Birthday: ' . $rowChild['child_bday'] . '</br>';
}

echo '</br><h1> Family  </h1></br>';
foreach ($db->query("select family_pk, family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk") as $rowFamily)
{
    echo $rowFamily['family_pk'] . '</br>';
}

?>

</body>
</html>
