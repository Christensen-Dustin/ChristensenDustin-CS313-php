<?php
    include 'connectDB.php';
    session_start();
    $rewards = $_GET['rewards'];
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


<h1>Reward Details</h1>
<?php
foreach ($db->query("select reward_name, reward_details, reward_date from reward where reward_pk='$rewards'") as $rowReward)
{
    echo 'Reward Name: ' . $rowReward['reward_name'] . '<br>';
    echo 'Due Date :' . $rowReward['reward_date'] . '<br>';
    echo 'Reward Details: ' . $rowReward['reward_details'] . '<br>';
}

echo '</br><h1> Users </h1></br>';
foreach ($db->query("select family_reward_fk, reward_pk, reward_name, parent_fname, parent_lname, parent_bday, parent_display, from family, reward, parent where family_reward_fk = '$rewards' and reward_pk = '$rewards'") as $rowParent)
{
    echo 'Display Name: ' . $rowParent['parent_display'] . '</br>';
    echo 'User Name: ' . $rowParent['parent_fname'] . ' ' . $rowParent['parent_lname'] . '</br>';
    echo 'Birthday: ' . $rowParent['parent_bday'] . '</br>'; 
}

foreach ($db->query("select family_reward_fk, reward_pk, child_fname, child_lname, child_bday, child_display from family, reward, child where family_reward_fk = '$rewards' and reward_pk = '$rewards'") as $rowChild)
{
    echo 'Display Name: ' . $rowChild['child_display'] . '</br>';
    echo 'User Name: ' . $rowChild['child_fname'] . ' ' . $rowChild['child_lname'] . '</br>';
    echo 'Birthday: ' . $rowChild['child_bday'] . '</br>';
}

?>

</body>
</html>
