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
	<script type="text/javascript" src="familyChore.js"></script>
	<style></style>
</head>  
<body>
<header>
<h1>Here are the details regarding - 
    <?php
    foreach ($db->query("select reward_name from reward where reward_pk='$rewards'") as $rowHeader)
    {
        echo '"' . $rowHeader['reward_name'] . '"';
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
    <a href="familyChore_update.php">Update Family Tracker Items</a>
</div>
<br>
<br>

<div id="adjust">
    <div id="left">
<h1>Reward Details</h1>
<?php
foreach ($db->query("select reward_name, reward_details, reward_date from reward where reward_pk='$rewards'") as $rowReward)
{
    echo 'Reward Name: ' . $rowReward['reward_name'] . '<br>';
    echo 'Start Date: ' . $rowReward['reward_date'] . '<br>';
    echo 'Reward Details: ' . $rowReward['reward_details'] . '</br></br>';
}
?>
    </div>
    <div id="right">
<?php
echo '<h1> Users </h1>';
foreach ($db->query("select family_reward_fk, reward_pk, parent_fname, parent_lname, parent_bday, parent_display from reward inner join family on family_reward_fk=reward_pk inner join parent on family_parent_fk=parent_pk where reward_pk = '$rewards'") as $rowParent)
{
    echo 'Display Name: ' . $rowParent['parent_display'] . '</br>';
    echo 'User Name: ' . $rowParent['parent_fname'] . ' ' . $rowParent['parent_lname'] . '</br>';
    echo 'Birthday: ' . $rowParent['parent_bday'] . '</br></br>'; 
}

foreach ($db->query("select family_reward_fk, child_fname, child_lname, child_bday, child_display from reward inner join family on family_reward_fk=reward_pk inner join child on family_child_fk=child_pk where reward_pk = '$rewards'") as $rowChild)
{
    echo 'Display Name: ' . $rowChild['child_display'] . '</br>';
    echo 'User Name: ' . $rowChild['child_fname'] . ' ' . $rowChild['child_lname'] . '</br>';
    echo 'Birthday: ' . $rowChild['child_bday'] . '</br>';
}

?>
    </div>
</div>
</body>
</html>
