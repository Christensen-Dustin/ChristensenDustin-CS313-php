<?php
include 'connectDB.php';
session_start();

// Adding a New GOAL
// Reward Variables
$goal_name    = htmlspecialchars($_POST['goal_name']);
$goal_details = htmlspecialchars($_POST['goal_details']);
$goal_expire  = htmlspecialchars($_POST['goal_expire']);
$goal_repeat  = htmlspecialchars($_POST['goal_repeat']);
$goal_done    = htmlspecialchars($_POST['goal_done']);
$goal_date    = htmlspecialchars($_POST['goal_date']);

// Account variable
$account_pk = htmlspecialchars($_POST['goal_account']);
    
// Old Steps variable
$steps_pks = $_POST['steps_pks'];
    
// Create NEW goal entry
$stmtGoal = $db->prepare('INSERT INTO goal(goal_name, goal_details, goal_expire, goal_repeat, goal_done, goal_date)
    VALUES (:goal_name, :goal_details, :goal_expire, :goal_repeat, :goal_done, :goal_date);');
$stmtGoal->bindValue(':goal_name',      $goal_name, PDO::PARAM_STR);
$stmtGoal->bindValue(':goal_details',   $goal_details, PDO::PARAM_STR);
$stmtGoal->bindValue(':goal_expire',    $goal_expire, PDO::PARAM_BOOL);
$stmtGoal->bindValue(':goal_repeat',    $goal_repeat, PDO::PARAM_BOOL);
$stmtGoal->bindValue(':goal_done',      $goal_done, PDO::PARAM_BOOL);
$stmtGoal->bindValue(':goal_date',      $goal_date);
$stmtGoal->execute();
    
// Find New goal_pk
$goal_pk = null;
foreach ($db->query("SELECT goal_pk FROM goal where goal_name='$goal_name' and goal_details='$goal_details' and goal_date='$goal_date'") as $rowGoal )
{
    $goal_pk = $rowGoal['goal_pk'];
}

// New Steps variable
if(isset($_POST['newSteps']))
{
    $stepsDetails = htmlspecialchars($_POST['stepsDetails']);
    $steps_done = 0;
    
    foreach($stepsDetails as $stepsDetail)
    {
        $stmt = $db->prepare('INSERT INTO steps(steps_details, steps_done, steps_goal_fk) VALUES(:steps_details, :steps_done, :steps_goal_fk);');
        $stmt->bindValue(':steps_details', $stepsDetail, PDO::PARAM_STR);
        $stmt->bindValue(':steps_done', $steps_done, PDO::PARAM_BOOL);
        $stmt->bindValue(';steps_goal_fk', $goal_pk, PDO::PARAM_INT);
        $stmt->execute();        
    }
}

// Old Steps variable
if(isset($_POST['steps_pks']))
{
    $steps_done = 0;
    
    foreach($steps_pks as $steps_pk)
    {
        $stmt = $db->prepare('INSERT INTO steps(steps_pk, steps_details, steps_done, steps_goal_fk) VALUES(:steps_details, :steps_done, :steps_goal_fk);');
        $stmt->bindValue(';steps_pk', $steps_pk, PDO::PARAM_INT);
        $stmt->bindValue(':steps_details', $steps_Detail, PDO::PARAM_STR);
        $stmt->bindValue(':steps_done', $steps_done, PDO::PARAM_BOOL);
        $stmt->bindValue(';steps_goal_fk', $goal_pk, PDO::PARAM_INT);
        $stmt->execute();        
    }
}
    
// RETURN to MAIN page
$main_page = "familyChore_main.php";
header("Location: $main_page");
die();
?>