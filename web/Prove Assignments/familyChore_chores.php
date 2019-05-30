<?php
    include 'connectDB.php';
    session_start();
    $chores = $_GET['chores'];
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Title of Project/Site</title>
	<link rel="stylesheet" type="text/css" href="familyChore.css">
	<script type="text/javascript" src="familyChore.js"></script>
	<style></style>
</head>
<body>
<header>
<h1>Here are the details regarding - 
    <?php
    foreach ($db->query("select chore_name from chore where chore_pk='$chores'") as $rowHeader)
    {
        echo '"' . $rowHeader['chore_name'] . '"';
    }
    ?>
</h1>
</header>
<br>
<div class="navBar">
    <a class="active" href="index.html">Home - Little about myself</a>
    <a href="interest.php"> Other Interest</a>
    <a href="assignment.html">Assignments Page</a>
    <a href="familyChore_main.php">Home Page</a>
</div>
<br>
<br>

<div id="adjust">
    <div id="left">
<h1>Chores Details</h1>
<?php
foreach ($db->query("select chore_name, chore_details, chore_date from chore where chore_pk='$chores'") as $rowChore)
{
    echo 'Chore Name: ' . $rowChore['chore_name'] . '<br>';
    echo 'Due Date :' . $rowChore['chore_date'] . '<br>';
    echo 'Chore Details: ' . $rowChore['chore_details'] . '<br>';
}
?>
    </div>
    <div id="right">
<?php
echo '<h1> Users </h1>';
foreach ($db->query("select family_chore_fk, chore_pk, parent_fname, parent_lname, parent_bday, parent_display from chore inner join family on family_chore_fk=chore_pk inner join parent on family_parent_fk=parent_pk where chore_pk='$chores'") as $rowParent)
{
    echo 'Display Name: ' . $rowParent['parent_display'] . '</br>';
    echo 'User Name: ' . $rowParent['parent_fname'] . ' ' . $rowParent['parent_lname'] . '</br>';
    echo 'Birthday: ' . $rowParent['parent_bday'] . '</br></br>'; 
}

foreach ($db->query("select family_chore_fk, family_child_fk, chore_pk, child_fname, child_lname, child_bday, child_display, child_pk from chore inner join family on family_chore_fk=chore_pk inner join child on family_child_fk=child_pk where chore_pk='$chores'") as $rowChild)
{
    echo 'Display Name: ' . $rowChild['child_display'] . '</br>';
    echo 'User Name: ' . $rowChild['child_fname'] . ' ' . $rowChild['child_lname'] . '</br>';
    echo 'Birthday: ' . $rowChild['child_bday'] . '</br></br>';
}

?>
    </div>
</div>
</body>
</html>
