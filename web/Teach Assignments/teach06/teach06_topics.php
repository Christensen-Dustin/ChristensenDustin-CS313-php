<?php
session_start();
if(isset($_POST['topic'])){
    $topic = $_POST['topic'];
}
?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Scripture Topics</title>
	<style></style>
</head>  
<body>
<header>
<?php
    include 'navigationBar.php';
?>
</header>
    <br>
    <br>
<?php
include 'connectDB.php';

echo '<h1>Scripture Topics</h1>';

echo '<form method="post"><select name="topic"><option value="none">Select a Topic</option>';
    
foreach ($db->query("select t_id, name from topics") as $rowTopic)
{
    echo '<option value=' . $rowTopic['t_id'] . '>' . $rowTopic['name'] . '</option>';
}

echo '<input type="submit" value="Search by Topic">';
echo '</select></form>';
?>
<div id="list">
<?php
foreach ($db->query("SELECT t_id, name, topics_fk, script_fk, book, chapter, verse, content FROM topics INNER JOIN topicLinks ON t_id=topics_fk INNER JOIN scriptures ON script_fk=s_id WHERE t_id='$topic'") as $rowTopic)
{
    echo '<b>';
    echo $rowTopic['book'] . ' ' . $rowTopic['chapter'] . ':' . $rowTopic['verse'] . '</b>- "';
    echo $rowTopic['content'] . '"';
    
}
?>
</div>
</body>
</html>