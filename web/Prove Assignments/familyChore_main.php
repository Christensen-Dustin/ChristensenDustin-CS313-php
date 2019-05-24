<?php
    include 'connectDB.php';
    session_start();
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
<h1 id="title">Users - Display Name</h1>
    <form method="get" action="familyChore_users.php"><select name="userName"><option selected="selected">Select a user by there Display Name</option>
<?php
foreach ($db->query("select parent_fname, parent_lname, parent_bday, parent_display from parent") as $rowParent)
{
    echo '<option value=' . $rowParent['parent_display'] . '>' . $rowParent['parent_display'] . '</option>';
}
foreach ($db->query("select child_fname, child_lname, child_bday, child_display from child") as $rowChild)
{
    echo '<option value=' . $rowChild['child_display'] . '>' . $rowChild['child_display'] . '</option>';
}
?>
<input type="submit" value="User Details">
</select></form>
<br>

<h1> Chores </h1>
    <form method="get" action="familyChore_chores.php"><select name="chores"><option selected="selected">Select a chore</option>
<?php
foreach ($db->query("select chore_name, chore_details, chore_date from chore") as $rowChore)
{
    echo '<option value=' . $rowChore['chore_name'] . '>' . $rowChore['chore_name'] . '</option>';
}
?>
<input type="submit" value="Chore Details">
</select></form>
<br>

<h1> Rewards </h1>
    <form method="get" action="familyChore_rewards.php"><select name="rewards"><option selected="selected">Select a reward</option>
<?php
foreach ($db->query("select reward_name, reward_details, reward_date from reward") as $rowReward)
{
    echo '<option value=' . $rowReward['reward_name'] . '>' . $rowReward['reward_name'] . '</option>';
}
?>
<input type="submit" value="Reward Details">
</select></form>
<br>

<h1> Goals </h1>
    <form method="get" action="familyChore_goals.php"><select name="goals"><option selected="selected">Select a goal</option>
<?php
foreach ($db->query("select goal_name, goal_details, goal_date from goal") as $rowGoal)
{
    echo '<option value=' . $rowGoal['goal_name'] . '>' . $rowGoal['goal_name'] . '</option>';
}
?>
<input type="submit" value="Goal Details">
</select></form>
<br>



</body>
</html>
