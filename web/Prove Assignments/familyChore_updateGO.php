<?php
    include 'connectDB.php';
    session_start();
    $goals = $_GET['goals'];
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Family Chore Tracker - Goal Update</title>
	<link rel="stylesheet" type="text/css" href="familyChore.css">
	<script type="text/javascript" src="familyChore.js"></script>
	<style></style>
</head>  
<body>
<header>
<h1>What information do you want to update regarding - 
    <?php
    foreach ($db->query("select goal_name from goal where goal_pk='$goals'") as $rowHeader)
    {
        echo '"' . $rowHeader['goal_name'] . '"';
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
<form method="post" action="familyChore_goalUpdate.php">
<div id="adjust">
    <div id="left">
<h1>Update Goal</h1>
<?php
foreach ($db->query("select goal_pk, goal_name, goal_details, goal_date from goal where goal_pk='$goals'") as $rowGoal)
{
    echo 'Goal Name: <input type="text" name="updateName" value="' . $rowGoal['goal_name'] . '"/><br>';
    echo 'Due Date : <input type="date" name="updateDate value="' . $rowGoal['goal_date'] . '"/><br>';
    echo 'Goal Details: <textarea name="updateDetail" >' . stripcslashes($rowGoal['goal_details']) . '</textarea><br>';
}
?>
    </div>   
    <div id="right">
<?php    
echo '<h1> Steps </h1>';
foreach ($db->query("select steps_details from goal inner join goalSteps on goal_pk = goalSteps_goal_fk inner join steps on goalSteps_steps_fk = steps_pk where goal_pk = '$goals'") as $rowChecked)
{
    echo '<input type="checkbox" name="updateSteps1" checked/>' . $rowChecked['steps_details'] . '</br>';
}
foreach ($db->query("select steps_details from goal") as $rowUnchecked)
{
    foreach ($db->query("select steps_details from goal inner join goalSteps on goal_pk = goalSteps_goal_fk inner join steps on goalSteps_steps_fk = steps_pk where goal_pk = '$goals'") as $rowChecked)
    {
        if($rowUnchecked['step_details'] != $rowChecked['step_details'])
        {
            echo '<input type="checkbox" name="updateSteps2" />' . $rowUnchecked['steps_details'] . '</br>';
        }
    }
}
?>
    </div>
</div>
<div id="adjust">
    <div id="left">
<input type="submit" value="update Goal">
    </div>
    <div id="right">
<h1> Add Additional Steps</h1>
<?php
for ($index = 0; $index < 7; $index++)
{
    echo '<input type="checkbox" name="newSteps[]" value="newSteps">';
    echo '<input type="text" name="stepsDetails[]"><br>';
}
?>
    </div>
</div>
</form>
</body>
</html>
