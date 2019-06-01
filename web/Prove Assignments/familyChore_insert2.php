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
foreach ($db->query("SELECT goal_pk FROM goal where goal_name='$goal_name'") as $rowGoal )
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
        $stmt = $db->prepare('INSERT INTO steps(steps_details, steps_done) VALUES(:steps_details, :steps_done);');
        $stmt->bindValue(':steps_details', $stepsDetail, PDO::PARAM_STR);
        $stmt->bindValue(':steps_done', $steps_done, PDO::PARAM_BOOL);
        $stmt->execute();        
    }
    
    foreach($stepsDetails as $stepsDetail)
    {
        $stmt = $db->prepare("SELECT steps_pk from steps where steps_details = :steps_details;");
        $stmt->bindValue(':steps_details', $stepsDetail, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if(isset($_POST['steps_pks']))
        {
            array_push($steps_pks, $result['steps_pk']);
        } else {
            $steps_pks=array($result['steps_pk']);
        }
    }
}

// Old Steps variable
if(isset($_POST['steps_pks']))
{
    $steps_done = 0;
    
    foreach($steps_pks as $steps_pk)
    {
        $stmt = $db->prepare('INSERT INTO goalSteps(goalSteps_goal_fk, goalSteps_steps_fk) VALUES(:goalSteps_goal_fk, :goalSteps_steps_fk);');
        $stmt->bindValue(':goalSteps_goal_fk', $goal_pk, PDO::PARAM_INT);
        $stmt->bindValue(':goalSteps_steps_fk', $steps_pk, PDO::PARAM_INT);
        $stmt->execute();        
    }
}
    
// RETURN to MAIN page
$main_page = "familyChore_main.php";
header("Location: $main_page");
die();
?>