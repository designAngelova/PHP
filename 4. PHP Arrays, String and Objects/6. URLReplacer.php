<!--Write a PHP program URLReplacer.php that takes a text from a textarea and replaces all
URLs with the HTML syntax <a href= "…" ></a> with a special forum-style syntax [URL=…][/URL].-->
<?php
require_once('header.php');
?>
<form method="post">
    <lable for="text">Text</lable>
    <textarea name="text"></textarea>

    <input type="submit" name="submit" value="Replace URLs"/>
</form>
<?php
if(isset($_POST['text'])){
    $text= $_POST['text'];
    $phraseBegin = "<a href=\"";
$phraseEnd = "</a>";
$replaceBegin = "[URL=";
$replaceEnd = "[/URL]";
$resultTmp = str_replace($phraseBegin, $replaceBegin, $text);
    $result = str_replace($phraseEnd, $replaceEnd, $resultTmp);
echo($result);
}
?>


</body>
</html>