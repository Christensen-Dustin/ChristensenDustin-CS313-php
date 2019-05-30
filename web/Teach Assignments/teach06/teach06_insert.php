<?php
include 'connectDB.php';
session_start();
$book = htmlspecialchars($_POST['book']);
$chapter = htmlspecialchars($_POST['chapter']);
$verse = htmlspecialchars($_POST['verse']);
$content = htmlspecialchars($_POST['content']);
$topics = $_POST['topics'];

$stmtScript = $db->prepare('INSERT INTO scriptures(book, chapter, verse, content)
    VALUES (:book, :chapter, :verse, :content);');
$stmtScript->bindValue(':book', $book, PDO::PARAM_STR);
$stmtScript->bindValue(':chapter', $chapter, PDO::PARAM_INT);
$stmtScript->bindValue(':verse', $verse, PDO::PARAM_INT);
$stmtScript->bindValue(':content', $content, PDO::PARAM_STR);
$stmtScript->execute();

$id = null;

foreach ($db->query("SELECT s_id FROM scriptures WHERE book='$book' AND chapter='$chapter' AND verse='$verse'") as $rowTopic) {
    $id = $rowTopic['s_id'];
}

foreach ($topics as $topic) {
    $stmtTopic = $db->prepare('INSERT INTO topicLinks(topics_fk, script_fk)
    VALUES (:topic, :script);');
    $stmtTopic->bindValue(':topic', $topic, PDO::PARAM_INT);
    $stmtTopic->bindValue(':script', $id, PDO::PARAM_INT);
    $stmtTopic->execute();
}

?>
<!DOCTYPE html> 
<html lang="eng-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Scripture Add/Edit</title>
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
echo '<h1>Scripture DATABASE</h1>';
foreach ($db->query('select book, chapter, verse, content, name from scriptures inner join topicLinks on s_id = script_fk inner join topics on t_id = topics_fk;') as $row)
{
    echo 'Book: ' . $row['book'];
}

?>
</body>
</html>