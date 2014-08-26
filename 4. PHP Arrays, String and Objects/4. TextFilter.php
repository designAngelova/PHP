<!--Write a PHP program TextFilter.php that takes a text from a textfield and a string
of banned words from a text input field. All words included in the ban list should
be replaced with asterisks "*", equal to the word’s length. The entries in the banlist
will be separated by a comma and space ", ".-->
<?php
require_once('header.php');
?>
<form method="post">
    <lable for="text">Enter Text</lable>
    <input type="text" name="text" />
    <lable for="words">Enter Words</lable>
    <input type="text" name="words" />
    <input type="submit" name="submit"/>
</form>

<?php
if(isset($_POST['text']) && isset($_POST['words'])){
    $text = $_POST['text'];
    $words =explode(',', $_POST['words']);
    foreach($words as $value){

        $text = str_replace($value, str_repeat('*', strlen($value)), $text);
    }
    echo($text);
}
?>
</body>
</html>