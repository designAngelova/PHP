<?php
require_once('header.php');
?>
<form method="post">
    <label for="start">Starting Index:</label>
    <input type="text" name="start" />
    <label for="end">End:</label>
    <input type="text" name="end" />
    <input type="submit" name="submit" value="Submit"/>
</form>
<?php
function isPrime($num) {
    if(is_nan($num) || $num % 1 || $num < 2) return false;
    if($num % 2 == 0) return ($num == 2);
    if($num % 3 == 0) return ($num == 3);

    $m = sqrt($num);

    for($i = 5; $i <= $m ;$i+=6) {
        if($num % $i == 0) return false;
        if($num % ($i+2) == 0) return false;
    }
    return true;
}
if(isset($_POST['start']) && isset($_POST['end'])){
    $start = $_POST['start'];
    $end = $_POST['end'];
    for($i=$start; $i<=$end-1; $i++){

        if(isPrime($i)){
            echo("<b>".$i."</b>, ");
        }
       else{
           echo($i.', ');
       }


       }
if(isPrime($end)){
    echo("<b>".$end."</b>");
}
    else{
        echo($end);
    }


    }

?>