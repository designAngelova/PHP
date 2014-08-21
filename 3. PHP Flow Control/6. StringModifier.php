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