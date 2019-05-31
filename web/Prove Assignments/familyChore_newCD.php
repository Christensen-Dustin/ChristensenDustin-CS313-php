<?php
    include 'connectDB.php';
    session_start();
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Family Chore Tracker - Add a Child</title>
	<link rel="stylesheet" type="text/css" href="familyChore.css">
	<script type="text/javascript" src="familyChore.js"></script>
	<style></style>
</head>  
<body>
<header>
<h1>Add a NEW Child</h1>
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
    <form method="post" action="familyChore_insert3.php">
<div id="adjust">
    <div id="left">
<h1>Input all NEW Child information</h1>
    <input type="hidden" name="accountCD" value="1">
    Child First Name: <input type="text" name="fname"><br>
    Child Last Name: <input type="text" name="lname"><br>
    Birth Date: 
    <input placeholder="2004-20-07" type="date" id="date" name="bday"/><br>
    Child Display Name: <input type="text" name="display"><br>
    Child Password: <input type="text" name="password"><br>
    </div>

    <div id="right">
<h1> Add a Chore</h1>    
<?php
foreach ($db->query("select chore_pk, chore_name from chore") as $rowChore)
{
    echo '<input type="checkbox" name="chores[]" value=' . $rowChore['chore_pk'] . '>' . $rowChore['chore_name'] . '<br>';
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
    echo '<input type="checkbox" name="rewards[]" value=' . $rowReward['reward_pk'] . '>' . $rowReward['reward_name'] . '<br>';
}
?>
    </div>
</div>
    </form>
</body>
</html>