<?php
    include 'connectDB.php';
    session_start();
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Family Chore Tracker - Add a Chore</title>
	<link rel="stylesheet" type="text/css" href="familyChore.css">
	<script type="text/javascript" src="familyChore.js"></script>
	<style></style>
</head>  
<body>
<header>
<h1>Add a NEW Chore</h1>
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
    <form method="post" action="familyChore_insert.php">
<div id="adjust">
    <div id="left">
<h1>Input all NEW Chore information</h1>
    <input type="hidden" name="reward_account" value="1">
    Reward Name: <input type="text" name="reward_name"><br>
    Reward Details: <textarea name="reward_details">      </textarea><br>
    Reward Expire: <select name="reward_expire">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
    Chore Repeats : <select name="reward_repeat">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select><br>
    <input type="hidden" name="reward_done" value="0">
    Chore Start Date: 
    <input placeholder="2001-01-01" type="date" id="date" name="reward_date"/>
    </div>

    <div id="right">
<h1> Add a User</h1>    
<?php
foreach ($db->query("select parent_pk, parent_display from parent") as $row)
{
    echo '<input type="checkbox" name="parent_pks[]" value=' . $row['parent_pk'] . '>' . $row['parent_display'] . '<br>';
}
foreach ($db->query("select child_pk, child_display from child") as $row)
{
    echo '<input type="checkbox" name="child_pks[]" value=' . $row['child_pk'] . '>' . $row['child_display'] . '<br>';
}
?>
    </div>
</div>

<div id="adjust">
    <div id="left">
<input type="submit" value="Add reward">
    </div>
</div>
    </form>
</body>
</html>