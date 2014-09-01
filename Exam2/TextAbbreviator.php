<?php
header('Content-Type: text/html; charset=utf-8');
$list  =  htmlentities($_GET['list']);
$max = $_GET['maxSize'];
$output = "<ul>";
$lines = preg_split('/(?<=[.?!])\s+(?=[a-z])/i', $list);
foreach ( $lines as $value) {
    $value = ltrim ($value);

    $strLength = strlen($value);



    if($strLength < $max){
        $output.="<li>$value</li>";
    }

    else{
        $decoded =htmlspecialchars_decode($value);
        $rest = substr($decoded, 0, $max);
        $rest = htmlspecialchars($rest);
        $output.="<li>".$rest."..."."</li>";
    }

}
$output.="</ul>";
echo $output;
?>