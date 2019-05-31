<?php
include 'connectDB.php';
session_start();

// Adding a New PARENT
if(isset($_POST['accountPa']))
{
    // Parent Variables
    $parent_fname = htmlspecialchars($_POST['fname']);
    $parent_lname = htmlspecialchars($_POST['lname']);
    $parent_password = htmlspecialchars($_POST['password']);
    $parent_display = htmlspecialchars($_POST['display']);
    $parent_bday = htmlspecialchars($_POST['bday']);

    // Account variable
    $account_pk = htmlspecialchars($_POST['accountPa']);
    
    // chore variable
    $chore_pks = $_POST['chores'];

    // Reward variable
    $reward_pks = $_POST['rewards'];

    // Create NEW parent entry
    $stmtParent = $db->prepare('INSERT INTO parent(parent_fname, parent_lname, parent_bday, parent_display, parent_password)
        VALUES (:parent_fname, :parent_lname, :parent_bday, :parent_display, :parent_password);');
    $stmtParent->bindValue(':parent_fname', $parent_fname, PDO::PARAM_STR);
    $stmtParent->bindValue(':parent_lname', $parent_lname, PDO::PARAM_STR);
    $stmtParent->bindValue(':parent_password', $parent_password, PDO::PARAM_STR);
    $stmtParent->bindValue(':parent_display', $parent_display, PDO::PARAM_STR);
    $stmtParent->bindValue(':parent_bday', $parent_bday);
    $stmtParent->execute();
    
    // Find New parent_pk
    $parent_pk = null;
    foreach ($db->query("SELECT parent_pk FROM parent where parent_fname='$parent_fname' and parent_lname='$parent_lname' and parent_bday='$parent_bday'") as $row )
    {
        $parent_pk = $row['parent_pk'];
    }
    
    // Create New family entry for chore and parent
    if (isset($_POST['chores']))
    {
        foreach ($chore_pks as $chore_pk)
        {
            $stmtFamily = $db->prepare('INSERT INTO family(family_chore_fk,     family_parent_fk, family_account_fk)
                VALUES (:family_chore_fk, :family_parent_fk, :family_account_fk);');
            $stmtFamily->bindValue(':family_chore_fk', $chore_pk, PDO::PARAM_INT);
            $stmtFamily->bindValue(':family_parent_fk', $parent_pk, PDO::PARAM_INT);
            $stmtFamily->bindValue(':family_account_fk', $account_pk, PDO::PARAM_INT);
            $stmtFamily->execute();
        }
    }
    
    // Create New family entry for reward and parent
    if (isset($_POST['rewards']))
    {
        foreach ($reward_pks as $reward_pk)
        {
            $stmtFamily = $db->prepare('INSERT INTO family(family_reward_fk, family_parent_fk, family_account_fk)
                VALUES (:family_reward_fk, :family_parent_fk, :family_account_fk);');
            $stmtFamily->bindValue(':family_reward_fk',  $reward_pk, PDO::PARAM_INT);
            $stmtFamily->bindValue(':family_parent_fk',   $parent_pk, PDO::PARAM_INT);
            $stmtFamily->bindValue(':family_account_fk', $account_pk, PDO::PARAM_INT);
            $stmtFamily->execute();
        }
    }
    
    // RETURN to MAIN page
    $main_page = "familyChore_main.php";
    header("Location: $main_page");
    die();
} // Adding Parent


// Adding a New CHILD
if(isset($_POST['accountCD']))
{
    // child Variables
    $child_fname = htmlspecialchars($_POST['fname']);
    $child_lname = htmlspecialchars($_POST['lname']);
    $child_password = htmlspecialchars($_POST['password']);
    $child_display = htmlspecialchars($_POST['display']);
    $child_bday = htmlspecialchars($_POST['bday']);

    // Account variable
    $account_pk = htmlspecialchars($_POST['accountCD']);
    
    // chore variable
    $chore_pks = $_POST['chores'];

    // Reward variable
    $reward_pks = $_POST['rewards'];

    // Create NEW child entry
    $stmtChild = $db->prepare('INSERT INTO child(child_fname, child_lname, child_bday, child_display, child_password)
        VALUES (:child_fname, :child_lname, :child_bday, :child_display, :child_password);');
    $stmtChild->bindValue(':child_fname', $child_fname, PDO::PARAM_STR);
    $stmtChild->bindValue(':child_lname', $child_lname, PDO::PARAM_STR);
    $stmtChild->bindValue(':child_password', $child_password, PDO::PARAM_STR);
    $stmtChild->bindValue(':child_display', $child_display, PDO::PARAM_STR);
    $stmtChild->bindValue(':child_bday', $child_bday);
    $stmtChild->execute();
    
    // Find New child_pk
    $child_pk = null;
    foreach ($db->query("SELECT child_pk FROM child where child_fname='$child_fname' and child_lname='$child_lname' and child_bday='$child_bday'") as $row )
    {
        $child_pk = $row['child_pk'];
    }
    
    // Create New family entry for chore and parent
    if (isset($_POST['chores']))
    {
        foreach ($chore_pks as $chore_pk)
        {
            $stmtFamily = $db->prepare('INSERT INTO family(family_chore_fk,     family_child_fk, family_account_fk)
                VALUES (:family_chore_fk, :family_child_fk, :family_account_fk);');
            $stmtFamily->bindValue(':family_chore_fk', $chore_pk, PDO::PARAM_INT);
            $stmtFamily->bindValue(':family_child_fk', $child_pk, PDO::PARAM_INT);
            $stmtFamily->bindValue(':family_account_fk', $account_pk, PDO::PARAM_INT);
            $stmtFamily->execute();
        }
    }
    
    // Create New family entry for reward and parent
    if (isset($_POST['rewards']))
    {
        foreach ($reward_pks as $reward_pk)
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
} // Adding Child
?>