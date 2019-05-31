<?php
    include 'connectDB.php';
    session_start();
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Family Chore Tracker - Add a Parent</title>
	<link rel="stylesheet" type="text/css" href="familyChore.css">
	<script type="text/javascript" src="familyChore.js"></script>
	<style></style>
</head>  
<body>
<header>
<h1>Add a NEW Parent</h1>
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
    <form method="post" action="familyChore_insertPa.php">
<div id="adjust">
    <div id="left">
<h1>Input all NEW Chore information</h1>
    <input type="hidden" name="account" value="1">
    Parent First Name: <input type="text" name="fname"> - 
    Parent Last Name: <input type="text" name="lname"><br>
    Birth Date: 
    <input placeholder="1977-06-25" type="date" id="date" name="bday"/>
    Parent Display Name: <input type="text" name="display"> - 
    Parent Password: <input type="text" name="password"><br>
    </div>

    <div id="right">
<h1> Add a Chore</h1>    
<?php
foreach ($db->query("select chore_pk, chore_name from chore") as $rowChore)
{
    echo '<input type="checkbox" name="chore[]" value=' . $rowChore['chore_pk'] . '>' . $rowChore['chore_name'] . '<br>';
}
?>
    </div>
</div>

<div id="adjust">
    <div id="left">
<input type="submit" value="Add Parent">
    </div>
    <div id="right">
<h1> Add a Reward</h1>    
<?php
foreach ($db->query("select reward_pk, reward_name from reward") as $rowReward)
{
    echo '<input type="checkbox" name="reward[]" value=' . $rowChore['reward_pk'] . '>' . $rowChore['reward_name'] . '<br>';
}
?>
    </div>
</div>
    </form>
</body>
</html>