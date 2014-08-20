<?php
require_once('header.php');
?>
<form method="post">

    <input type="text" name="string" />
    <input type="radio" name="choice" value="palindrome" />
    <label for="choice">Check Palindrome</label>
    <input type="radio" name="choice" value="reverse" />
    <label for="choice">Reverse String</label>
    <input type="radio" name="choice" value="split" />
    <label for="choice">Split</label>
    <input type="radio" name="choice" value="hash" />
    <label for="choice">Hash String</label>
    <input type="radio" Shuffle String</label>

    <input type="submit" name="submit" value="Submit"/>
</form>
<?php
if(isset($_POST['string'])){
    $string = $_POST['string'];
    $arr =[];
    for($a=0; $a<=count($string); $a++){
        $arr_push(str_split($string[$a]));
    }
echo($arr);
}

?>