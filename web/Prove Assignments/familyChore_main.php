<?php
    include 'connectDB.php';
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


<?php
echo '<h1> Parents </h1>';
foreach ($db->query("select parent_fname, parent_lname, parent_bday, parent_display from parent") as $rowParent)
{
    echo $rowParent['parent_display'] . '</br>';
}

echo '</br><h1> Children </h1></br>';
foreach ($db->query("select child_fname, child_lname, child_bday, child_display from child") as $rowChild)
{
    echo $rowChild['child_display'] . '</br>';
}

echo '</br><h1> Chores </h1></br>';
foreach ($db->query("select chore_name, chore_details, chore_date from chore") as $rowChore)
{
    echo $rowChore['chore_name'] . '</br>';
}

echo '</br><h1> Rewards </h1></br>';
foreach ($db->query("select reward_name, reward_details, reward_date from reward") as $rowReward)
{
    echo $rowReward['reward_name'] . '</br>';
}

echo '</br><h1> Goals </h1></br>';
foreach ($db->query("select goal_name, goal_details, goal_date from goal") as $rowGoal)
{
    echo $rowGoal['goal_name'] . '</br>';
}

echo '</br><h1> Steps </h1></br>';
foreach ($db->query("select steps_details, steps_goal_fk from steps") as $rowSteps)
{
    echo $rowSteps['steps_details'] . '</br>';
}

echo '</br><h1> Family  </h1></br>';
foreach ($db->query("select family_pk, family_chore_fk, family_goal_fk, family_reward_fk, family_parent_fk, family_child_fk") as $rowFamily)
{
    echo $rowFamily['family_pk'] . '</br>';
}







?>



</body>
</html>
