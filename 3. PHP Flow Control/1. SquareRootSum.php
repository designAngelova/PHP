<!--Write a PHP script SquareRootSum.php that displays a table in your browser with 2 columns.
The first column should contain a number (even numbers from 0 to 100) and the second column
should contain the square root of that number, rounded to the second digit after the decimal
point. The last row of the table should contain the sum of all values in the Square column.
Styling the page is optional.-->
<?php
require_once('header.php');

$output = "<table border=1><tHead><th>Number</th><th>Square</th></thead>"."<tBody>";
$total = 0;
for($i=0; $i<=100; $i+=2){
    $sqrt = round(sqrt($i),2);
    $total +=$sqrt;
    $output.="<tr><td>".$i."</td><td>".$sqrt."</td></tr>";
}
$output = $output."</tHead><tFoot><th>Total:</th><th>".$total."</th></tFoot></table>";
echo($output);
require_once('footer.php');
?>