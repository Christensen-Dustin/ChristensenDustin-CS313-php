<?php
    include 'connectDB.php';
    session_start();
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Family Chore Tracker - Item Update</title>
	<link rel="stylesheet" type="text/css" href="familyChore.css">
	<script type="text/javascript" src="familyChore.js"></script>
	<style></style>
</head>  
<body>
<header>
<h1>Please select an item to update</h1>
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
<h1 >Users - Display Name</h1>
    <form method="get" action="familyChore_update.php"><select name="userName"><option selected="selected">Select a user by there Display Name</option>
<?php
foreach ($db->query("select parent_pk, parent_display from parent") as $rowParent)
{
    echo '<option value=' . $rowParent['parent_pk'] . '-' . $rowParent['parent_display'] . '>' . $rowParent['parent_display'] . '</option>';
}
foreach ($db->query("select child_pk, child_display from child") as $rowChild)
{
    echo '<option value=' . $rowChild['child_pk'] . '-' . $rowChild['child_display'] . '>' . $rowChild['child_display'] . '</option>';
}
?>
<input type="submit" value="Update User"><br>
</select></form>
    </div>

    <div id="right">
<h1> Chores </h1>
    <form method="get" action="familyChore_update.php"><select name="chores"><option selected="selected">Select a chore</option>
<?php
foreach ($db->query("select chore_pk, chore_name from chore") as $rowChore)
{
    echo '<option value=' . $rowChore['chore_pk'] . '>' . $rowChore['chore_name'] . '</option>';
}
?>
<input type="submit" value="Update Chore"><br>
</select></form>
    </div>
</div>

<div id="adjust">
    <div id="left">
<h1> Rewards </h1>
    <form method="get" action="familyChore_update.php"><select name="rewards"><option selected="selected">Select a reward</option>
<?php
foreach ($db->query("select reward_pk, reward_name from reward") as $rowReward)
{
    echo '<option value=' . $rowReward['reward_pk'] . '>' . $rowReward['reward_name'] . '</option>';
}
?>
<input type="submit" value="Update Reward"><br>
</select></form>
    </div>

    <div id="right">
<h1> Goals </h1>
    <form method="get" action="familyChore_updateGO.php"><select name="goals"><option selected="selected">Select a goal</option>
<?php
foreach ($db->query("select goal_pk, goal_name from goal") as $rowGoal)
{
    echo '<option value=' . $rowGoal['goal_pk'] . '>' . $rowGoal['goal_name'] . '</option>';
}
?>
<input type="submit"  value="Update Goal"><br>
</select></form>
    </div>
</div>
<div id="update"> </div>
</body>
</html>
