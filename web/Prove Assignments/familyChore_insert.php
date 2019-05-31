<?php
include 'connectDB.php';
session_start();

// Adding a New chore
// Chore Variables
$chore_name     = htmlspecialchars($_POST['chore_name']);
$chore_details  = htmlspecialchars($_POST['chore_details']);
$chore_expire   = htmlspecialchars($_POST['chore_expire']);
$chore_repeat   = htmlspecialchars($_POST['chore_repeat']);
$chore_done     = htmlspecialchars($_POST['chore_done']);
$chore_date     = htmlspecialchars($_POST['chore_date']);
    
// Account variable
$account_pk = htmlspecialchars($_POST['chore_account']);

// Parent variable
$parent_pks = $_POST['parent_pks'];

// Child variable
$child_pks = $_POST['child_pks'];

// Create NEW chore entry
$stmtChore = $db->prepare('INSERT INTO chore(chore_name, chore_details, chore_expire, chore_repeat, chore_done, chore_date)
    VALUES (:chore_name, :chore_details, :chore_expire, :chore_repeat, :chore_done, :chore_date);');
$stmtChore->bindValue(':chore_name',    $chore_name,    PDO::PARAM_STR);
$stmtChore->bindValue(':chore_details', $chore_details, PDO::PARAM_STR);
$stmtChore->bindValue(':chore_expire',  $chore_expire,  PDO::PARAM_BOOL);
$stmtChore->bindValue(':chore_repeat',  $chore_repeat,  PDO::PARAM_BOOL);
$stmtChore->bindValue(':chore_done',    $chore_done,    PDO::PARAM_BOOL);
$stmtChore->bindValue(':chore_date',    $chore_date);
$stmtChore->execute();
    
// Find New chore_pk
$chore_pk = null;
foreach ($db->query("SELECT chore_pk FROM chore where chore_name='$chore_name' and chore_details='$chore_details'") as $rowChore )
{
    $chore_pk = $rowChore['chore_pk'];
}

// Create New family entry for parent
if (isset($_POST['parent_pks']))
{    
    foreach ($parent_pks as $parent_pk)
    {
        $stmt = $db->prepare('INSERT INTO family(family_chore_fk, family_parent_fk, family_account_fk) VALUES (:family_chore_fk, :family_parent_fk, :family_account_fk);');
        $stmt->bindValue(':family_chore_fk', $chore_pk, PDO::PARAM_INT);
        $stmt->bindValue(':family_parent_fk', $parent_pk, PDO::PARAM_INT);
        $stmt->bindValue(':family_account_fk', $account_pk, PDO::PARAM_INT);
        $stmt->execute();
    }   
}

// Create New family entry for child
if (isset($_POST['child_pks']))
{
    foreach ($child_pks as $child_pk)
    {
        $stmtFamily = $db->prepare('INSERT INTO family(family_chore_fk, family_child_fk, family_account_fk) VALUES (:family_chore_fk, :family_child_fk, :family_account_fk);');
        $stmtFamily->bindValue(':family_chore_fk',   $chore_pk, PDO::PARAM_INT);
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