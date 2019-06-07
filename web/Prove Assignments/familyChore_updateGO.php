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
foreach ($db->query("select goal_pk, goal_name, goal_details, goal_date, goal_repeat, goal_done, goal_expire from goal where goal_pk='$goals'") as $rowGoal)
{
    echo '<input type="hidden" name="updatePk" value="' . $rowGoal['goal_pk'] . '"/>';
    echo 'Goal Name: <input type="text" name="updateName" value="' . $rowGoal['goal_name'] . '"/><br>';
    
    echo 'Due Date : ' . $rowGoal['goal_date'] . 
    '<br><b>Please set date to existing or a new date</b><br>
    <input type="date" name="updateDate value="' . $rowGoal['goal_date'] . '"/><br>';
    
    if($rowGoal['goal_repeat'] == true)
    {
        echo 'Does the Goal Repeat: <input type="checkbox" name="updateRepeat" checked/> Yes <br>';
    }
    else
    {
        echo 'Does the Goal Repeat: <input type="checkbox" name="updateRepeat" /> Yes <br>';
    }
    
    if($rowGoal['goal_expire'] == true)
    {
        echo 'Does the Goal Expire: <input type="checkbox" name="updateExpire" checked/> Yes <br>';
    }
    else
    {
        echo 'Does the Goal Expire: <input type="checkbox" name="updateExpire" /> Yes <br>';
    }
    
    if($rowGoal['goal_done'] == true)
    {
        echo 'Is the Goal Done: <input type="checkbox" name="updateDone" checked/> Yes <br>';
    }
    else
    {
        echo 'Is the Goal Done: <input type="checkbox" name="updateDone" /> Yes <br>';
    }
    
    echo 'Goal Details: <textarea name="updateDetail" style="height: 60px; width: 180px;">' . stripcslashes($rowGoal['goal_details']) . '</textarea><br>';
}
?>
    </div>   
    <div id="right">
<?php
$checked = [];

echo '<h1> Steps </h1>';
foreach ($db->query("select steps_details from goal inner join goalSteps on goal_pk = goalSteps_goal_fk inner join steps on goalSteps_steps_fk = steps_pk where goal_pk = '$goals'") as $rowChecked)
{
    array_push($checked, $rowChecked['steps_details']);
}

foreach ($db->query("select steps_details from steps") as $row)
{
    if(in_array($row['steps_details'], $checked))
    {
        echo '<input type="checkbox" name="updateSteps[]" checked/>' . $row['steps_details'] . '</br>';
    }
    else
    {
        echo '<input type="checkbox" name="updateSteps[]" />' . $row['steps_details'] . '</br>';
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
    echo '<input type="text" name="newDetails[]"><br>';
}
?>
    </div>
</div>
</form>
</body>
</html>
