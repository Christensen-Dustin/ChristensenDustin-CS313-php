<?php
    include 'connectDB.php';
    session_start();
    list($id, $display) = explode('-', $_GET['userName'], 2);
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
<h1>Here are the details regarding - 
    <?php
        echo '"' . $display . '"';
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
<h1>User Details</h1>
<?php
    
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
?>
    </div>    
    <div id="right">
<?php
echo '<h1> Related Details  </h1>';
echo '<h2> Chores </h2>';
foreach ($db->query("select parent_pk, parent_display, family_pk, chore_name, family_chore_fk, family_parent_fk from parent inner join family on family_parent_fk=parent_pk inner join chore on family_chore_fk=chore_pk where parent_display='$display'") as $rowFamily)
{
    echo $rowFamily['chore_name'] . '</br>';
}

foreach ($db->query("select child_pk, child_display, family_pk, chore_name, family_chore_fk, family_child_fk from child inner join family on family_child_fk = child_pk inner join chore on family_chore_fk = chore_pk where child_display='$display'") as $rowFamily)
{
    echo $rowFamily['chore_name'] . '</br>';
}
?>

<h2> Rewards </h2>
<?php
foreach ($db->query("select parent_pk, parent_display, family_pk, reward_name, family_reward_fk, family_parent_fk from parent inner join family on family_parent_fk=parent_pk inner join reward on family_reward_fk=reward_pk  where parent_display='$display'") as $rowFamily)
{
    echo $rowFamily['reward_name'] . '</br>';
}

foreach ($db->query("select child_pk, child_display, family_pk, reward_name, family_reward_fk, family_child_fk from child inner join family on family_child_fk=child_pk inner join reward on family_reward_fk=reward_pk where child_display='$display'") as $rowFamily)
{
    echo $rowFamily['reward_name'] . '</br>';
}
?>
    </div>
</div>
</body>
</html>
