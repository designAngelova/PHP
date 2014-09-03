<?php
$input = ($_GET['html']);

$inputArr =explode("\n", $input);
$semantics = [ "main", "header", "nav", "article", "section", "aside", "footer" ];

$id= "div id=";
$class= " class = \"";
$input = preg_replace('/"/', '', $input);
foreach($inputArr as $value) {

    if (strpos($value, $id) !== false) {

       $out= str_replace($id, "", $input);



    }


    foreach ($semantics as $value) {

        if (strpos($inputArr[0], $value) !== false) {
            $div =$value;
        }


    }


}
