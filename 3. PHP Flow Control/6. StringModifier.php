<!--Write a PHP script StringModifier.php which receives a string from an input form and modifies it according to the selected
option (radio button). You should support the following operations: palindrome check, reverse string, split to extract leters
only, hash the string with the default PHP hashing algorithm, shuffle the string characters randomly. The result should be
displayed right under the input field. Styling the page is optional. Think about which of the modification can be achieved
with already built-in functions in PHP. Where necessary, write your own algorithms to modify the given string. Hint:
Use the crypt() function for the "Hash String" modification.-->
<?php
require_once('header.php');
?>
<form method="post">

    <input type="text" name="string" />

    <input type="radio" name="palindrome"  />
    <label for="reverse">Check Palindrome</label>

    <input type="radio" name="reverse"  />
    <label for="reverse">Reverse String</label>

    <input type="radio" name="split" />
    <label for="split">Split</label>

    <input type="radio" name="hash"/>
    <label for="hash">Hash String</label>

    <input type="radio" name="shuffle"/>
    <label for="shuffle">Shuffle String</label>

    <input type="submit" name="submit" value="Submit"/>
</form>
<?php
if(isset($_POST['string'])){
    $string = $_POST['string'];

    $arrayChar = str_split($string);
    $reversedChar = array_reverse($arrayChar);
    $reversed = implode("", $reversedChar);
    $split = implode(" ", $arrayChar);
    $shuffle = str_shuffle($string);
    $choice = '';
    $output = '';


    if(isset($_POST['palindrome'])){

        if($reversedChar == $arrayChar){
            echo($string."is a palindrome");
        }
        else{
            echo($string." is not a palindrome");
        }
    }

   else if(isset($_POST['reverse'])){

            echo($reversed);
        }
   else if(isset($_POST['split'])){

       echo($split);
   }
   else if(isset($_POST['split'])){

       echo($split);
   }
   else if(isset($_POST['hash'])){

       echo password_hash($string, PASSWORD_DEFAULT);
   }
   else if(isset($_POST['shuffle'])){

       echo($shuffle);
   }
}

?>