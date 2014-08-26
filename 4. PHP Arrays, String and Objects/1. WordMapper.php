<!--Write a PHP program WordMapper.php that takes a text from a textarea and prints each
word and the number of times it occurs in the text. The search should be case-insensitive.
The result should be printed as an HTML table.-->
<?php
require_once('header.php');
?>

<form method="post">
    <textarea name="text"></textarea><br>
    <input type="submit" value="Count words"/>
</form>
<?php
if (isset ($_POST['text'])) :
    $words = preg_split('/\W+/', strtolower($_POST['text']), -1, PREG_SPLIT_NO_EMPTY);
    $wordMap = [];
    foreach ($words as $word) {
        if (isset($wordMap[$word])) {
            $wordMap[$word]++;
        } else {
            $wordMap[$word] = 1;
        }
    }
    arsort($wordMap);
    ?>
    <table>
        <?php foreach ($wordMap as $word => $count) : ?>
            <tr>
                <td><?=$word?></td>
                <td><?=$count?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
</body>
</html>