<?php
    include 'connectDB.php';
    session_start();
    $goals = $_GET['goals'];
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
    <a href="familyChore_update.php">Update Family Tracker Items</a>
</div>
<br>
<br>

<div id="adjust">
    <div id="left">
<h1>Goal Details</h1>
<?php
foreach ($db->query("select goal_pk, goal_name, goal_details, goal_date from goal where goal_pk='$goals'") as $rowGoal)
{
    echo 'Goal Name: ' . $rowGoal['goal_name'] . '<br>';
    echo 'Due Date :' . $rowGoal['goal_date'] . '<br>';
    echo 'Goal Details: ' . $rowGoal['goal_details'] . '<br>';
}
?>
    </div>   
    <div id="right">
<?php    
echo '<h1> Steps </h1>';
foreach ($db->query("select steps_details from goal inner join goalSteps on goal_pk = goalSteps_goal_fk inner join steps on goalSteps_steps_fk = steps_pk where goal_pk = '$goals'") as $rowSteps)
{
    echo $rowSteps['steps_details'] . '</br>';
}

?>
    </div>
</div>
</body>
</html>
