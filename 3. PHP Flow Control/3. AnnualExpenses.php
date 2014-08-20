<?php
require_once('header.php');
?>
<form method="post">
<label for="years">Enter number of years:</label>
<input type="text" name="years" />
<input type="submit" name="submit" value="Show costs" />
</form>
<?php
if(isset($_POST['years'])){
    $years = $_POST['years'];
    $currentYear=date("Y");
    $exp1 = rand(0, 999);
    $exp2 = rand(0, 999);
    $exp3 = rand(0, 999);
    $exp4 = rand(0, 999);
    $exp5 = rand(0, 999);
    $exp6 = rand(0, 999);
    $exp7 = rand(0, 999);
    $exp8 = rand(0, 999);
    $exp9 = rand(0, 999);
    $exp10 = rand(0, 999);
    $exp11= rand(0, 999);
    $exp12= rand(0, 999);
    $total = $exp1+$exp2+$exp3+$exp4+$exp5+$exp6+$exp7+$exp8+$exp9+$exp10+$exp11+$exp12;
    $result = "<table border=1><thead>
    <th>Year</th>
    <th>January</th>
    <th>March</th>
    <th>April</th>
    <th>May</th>
    <th>June</th>
    <th>July</th>
    <th>August</th>
    <th>September</th>
    <th>October</th>
    <th>November</th>
    <th>December</th>
    <th>Total:</th>
    </thead>"."<tbody>";
    for($i=0; $i< $years; $i++){
        $result.="<tr>
        <td>".$currentYear."</td>
        <td>".$exp1."</td>
        <td>.$exp2.</td>
        <td>.$exp3.</td>
        <td>.$exp4.</td>
        <td>.$exp5.</td>
        <td>.$exp6.</td>
        <td>.$exp7.</td>
        <td>.$exp8.</td>
        <td>.$exp9. </td>
        <td>.$exp10.</td>
        <td>.$exp11.</td>
        <td>.$exp12.</td>
        <td>.$total.</td></tr>";

        $currentYear--;
    }
    $result=$result."</tbody></table>";
    echo($result);
    require_once('footer.php');
}
?>