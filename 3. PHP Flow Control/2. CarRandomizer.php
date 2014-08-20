<!--You are a very rich billionaire with an unhidden passion for cars. You like certain car manufacturers-->
<!--but you don’t really care about anything else, and that’s why you need your own randomizing algorithm -->
<!--that helps you decide how many and what color cars you should buy. Write a PHP script CarRandomizer-->
<!--.php that receives a string of cars from an input HTML form, separated by a comma and space (“, “).-->
<!--It then prints each car, a random color and a random quantity in a table like the one shown below.-->
<!--Use colors by your choice. Use as quantity a random number in range [1...5]. Styling the page is optional.-->
<?php
require_once('header.php');
?>
    <form method="post">
        <label for="cars">Enter cars</label>
        <input type="text" name="cars" id="cars"/>
        <input type="submit" name="submit" value="Show result">
    </form>
<?php
if(isset($_POST['cars'])){
    $cars = explode(',', $_POST['cars']);
    $colors = array('yellow', 'red','white', 'green', 'black','blue');
    $color = array_rand($colors, 1);
    $count = rand(1, 5);
    $output = "<table border=1><thead><th>Car</th><th>Colour</th><th>Count</th></thead>"."<tbody>";
    for($a=0; $a<count($cars);$a++){
        $output.="<tr><td>".$cars[$a]."</td><td>".$color."</td><td>".$count."</td></tr>";
    }
    $output = $output."</tbody></table>";
    echo($output);
}

?>