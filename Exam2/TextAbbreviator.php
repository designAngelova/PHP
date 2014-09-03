<?php
$list  =  ($_GET['list']);
$max = $_GET['maxSize'];
echo "<ul>";
$lines = explode("\n", $list);
foreach ( $lines as $value) {
    $value = trim ($value);

    $strLength = strlen($value);
    if($strLength > 0){
        if($strLength < $max){
            echo "<li>".htmlspecialchars($value)."</li>";
        }

        else{

            $rest = substr($value, 0, $max);
            $rest = htmlspecialchars($rest);
            echo "<li>$rest...</li>";
        }

    }
}

echo "</ul>";

?>