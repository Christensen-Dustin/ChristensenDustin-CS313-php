<?php
    include 'connectDB.php';
    session_start();
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Family Chore Tracker - Add a Goal</title>
	<link rel="stylesheet" type="text/css" href="familyChore.css">
	<script type="text/javascript" src="familyChore.js"></script>
	<style></style>
</head>  
<body>
<header>
<h1>Add a NEW Goal</h1>
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
    <form method="post" action="familyChore_insert2.php">
<div id="adjust">
    <div id="left">
<h1>Input all NEW Goal information</h1>
    <input type="hidden" name="goal_account" value="1">
    Goal Name: <input type="text" name="goal_name"><br>
    Goal Details: <textarea name="goal_details">      </textarea><br>
    Goal Expire: <select name="goal_expire">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
    Goal Repeats : <select name="goal_repeat">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select><br>
    <input type="hidden" name="goal_done" value="0">
    Goal Finish Date: 
    <input placeholder="2011-01-01" type="date" id="date" name="goal_date"/>
    </div>

    <div id="right">
<h1> Add Steps</h1>    
<?php
foreach ($db->query("select steps_pk, steps_details from steps") as $row)
{
    echo '<input type="checkbox" name="steps_pks[]" value=' . $row['steps_pk'] . '>' . $row['steps_details'] . '<br>';
}
?>
    </div>
</div>

<div id="adjust">
    <div id="left">
<input type="submit" value="Add Goal">
    </div>
    <div id="right">
<?php
for ($index = 0; $index < 7; $index++)
{
    echo '<input type="checkbox" name="newSteps[]" value="newSteps">';
    echo '<input type="text" name="stepsDetail"><br>';
}
?>
    </div>
</div>
    </form>
</body>
</html>