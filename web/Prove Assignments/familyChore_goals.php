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
	<script type="text/javascript" src="name of familyChore.js"></script>
	<style></style>
</head>  
<body>
<header>
<a href="familyChore_main.php">Main Page</a>

</header>

<h1>Goal Details</h1>
<?php
foreach ($db->query("select goal_pk, goal_name, goal_details, goal_date from goal where goal_pk='$goals'") as $rowGoal)
{
    echo 'Goal Name: ' . $rowGoal['goal_name'] . '<br>';
    echo 'Due Date :' . $rowGoal['goal_date'] . '<br>';
    echo 'Goal Details: ' . $rowGoal['goal_details'] . '<br>';
}
    
echo '</br><h1> Steps </h1></br>';
foreach ($db->query("select goal_name, steps_details, steps_done, steps_goal_fk from steps, goal where steps_goal_fk = '$goals'") as $rowSteps)
{
    echo $rowSteps['steps_details'] . '</br>';
}

?>


</body>
</html>
