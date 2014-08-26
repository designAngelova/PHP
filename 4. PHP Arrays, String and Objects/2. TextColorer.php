<!--Write a PHP program TextColorer.php that takes a text from a textfield,
colors each character according to its ASCII value and prints the result.
If the ASCII value of a character is odd, the character should be printed in blue.
If it’s even, it should be printed in red.-->
<?php
require_once('header.php');
?>

<form method="post">
    <textarea name="text"></textarea><br>
    <input type="submit" value="Color words"/>
</form>
<?php
if (isset ($_POST['text'])) {
    $letters =($_POST['text']);
    $output =[];
//        preg_split('/\W+/', strtolower($_POST['text']), -1, PREG_SPLIT_NO_EMPTY);
   for($a=0; $a < strlen($letters); $a++){
       $cur = $letters[$a];

       if(ord($cur) % 2 == 0){
           array_push($output,"<span style=color:red>$letters[$a]</span>" );
         //  echo("<span style=color:red>$letters[$a]</span>");

       }
       else{
          // echo("<span style=color:blue>$letters[$a]</span>");
           array_push($output,"<span style=color:blue>$letters[$a]</span>" );
       }

   }
    $split = implode(" ", $output);
    echo($split);
}
?>
</body>
</html>