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
?>


</body>
</html>
