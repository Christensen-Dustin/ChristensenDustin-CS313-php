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
    
// Parent variable
$parent_pks = $_POST['parent_pks'];

// Child variable
$child_pks = $_POST['child_pks'];

// Create NEW chore entry
$stmtReward = $db->prepare('INSERT INTO reward(reward_name, reward_details, reward_expire, reward_repeat, reward_done, reward_date)
    VALUES (:reward_name, :reward_details, :reward_expire, :reward_repeat, :reward_done, :reward_date);');
$stmtReward->bindValue(':reward_name',      $reward_name, PDO::PARAM_STR);
$stmtReward->bindValue(':reward_details',   $reward_details, PDO::PARAM_STR);
$stmtReward->bindValue(':reward_expire',    $reward_expire, PDO::PARAM_BOOL);
$stmtReward->bindValue(':reward_repeat',    $reward_repeat, PDO::PARAM_BOOL);
$stmtReward->bindValue(':reward_done',      $reward_done, PDO::PARAM_BOOL);
$stmtReward->bindValue(':reward_date',      $reward_date);
$stmtReward->execute();
    
// Find New reward_pk
$reward_pk = null;
foreach ($db->query("SELECT reward_pk FROM reward where reward_name='$reward_name' and reward_details='$reward_details' and reward_date='$reward_date'") as $rowReward )
{
    $reward_pk = $rowReward['reward_pk'];
}
    
// Create New family entry for parent
if (isset($_POST['parent_pks']))
{
    foreach ($parent_pks as $parent_pk)
    {
        $stmtFamily = $db->prepare('INSERT INTO family(family_reward_fk,     family_parent_fk, family_account_fk)
            VALUES (:family_reward_fk, :family_parent_fk, :family_account_fk);');
        $stmtFamily->bindValue(':family_reward_fk',  $reward_pk, PDO::PARAM_INT);
        $stmtFamily->bindValue(':family_parent_fk',  $parent_pk, PDO::PARAM_INT);
        $stmtFamily->bindValue(':family_account_fk', $account_pk, PDO::PARAM_INT);
        $stmtFamily->execute();
    }
}
    
// Create New family entry for child
if (isset($_POST['child_pks']))
{
    foreach ($child_pks as $child_pk)
    {
        $stmtFamily = $db->prepare('INSERT INTO family(family_reward_fk, family_child_fk, family_account_fk)
            VALUES (:family_reward_fk, :family_child_fk, :family_account_fk);');
        $stmtFamily->bindValue(':family_reward_fk',  $reward_pk, PDO::PARAM_INT);
        $stmtFamily->bindValue(':family_child_fk',   $child_pk, PDO::PARAM_INT);
        $stmtFamily->bindValue(':family_account_fk', $account_pk, PDO::PARAM_INT);
        $stmtFamily->execute();
    }
}
    
// RETURN to MAIN page
$main_page = "familyChore_main.php";
header("Location: $main_page");
die();
?>