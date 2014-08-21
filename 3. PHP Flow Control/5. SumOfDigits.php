<!--Write a PHP script SumOfDigits.php which receives a comma-separated list of integers from an input form and creates a two-column
table. The first column should contain each of the values from the input. The second column should contain the sum of the digits
of each value. If the value is not an integer number, print "I cannot sum that". Styling the page is optional-->
<?php
require_once('header.php');
?>
    <form method="post">
        <label for="string">Input string:</label>
        <input type="text" name="string" />

        <input type="submit" name="submit" value="Submit"/>
    </form>
<?php

if(isset($_POST['string'])){
    $string = explode(',',$_POST['string']);
 $output = "<table border=1>";
    for($a=0; $a<count($string); $a++){
        $output.="<tr><td>".$string[$a]."</td>";
        if(is_numeric($string[$a]) && !preg_match("/\\./", $string[$a])) {
            $sum = array_sum(str_split($string[$a]));
            $output .= "<td>".$sum."</td></tr>";
        }
        else{
            $output .="<td> I cannot sum that</td></tr>";
        }
        $output .= '</td></tr>';
    }
    $output .= '</table>';


    echo($output);
}

?>