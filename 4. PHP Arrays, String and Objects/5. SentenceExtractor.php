<!--Write a PHP program SentenceExtractor.php that takes a text from a textarea and a word from
an input field and prints all sentences from the text, containing that word. A sentence is any
sequence of words ending with ., ! or ?.-->
<?php
require_once('header.php');
?>
<form method="post">
    <lable for="text">Text</lable>
    <textarea name="text"></textarea>
    <lable for="word">Enter Words</lable>
    <input type="text" name="word" />
    <input type="submit" name="submit"/>
</form>
<?php
if(isset($_POST['text']) && isset($_POST['word'])){
    $sentences = preg_split("/(?<=[.?!])\s*/", $_POST['text'], -1, PREG_SPLIT_NO_EMPTY);
    $sentences = array_map('trim', $sentences);
    $word = $_POST['word'];
    foreach ($sentences as $sentence) {
        if (preg_match("/\s+$word\s+.*[.?!]+$/", $sentence)) {
            echo "<p>$sentence</p>";
        }
    }
}
?>
</body>
</html>