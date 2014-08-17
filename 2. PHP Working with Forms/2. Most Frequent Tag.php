<!--Write a PHP script MostFrequentTag.php which generates an HTML input
text field and a submit button. In the text field the user must enter
different tags, separated by a comma and a space (", "). When the information
is submitted, the script should generate a list of the tags, sorted by frequency.
Then you must print: "Most Frequent Tag is: [most frequent tag]". Semantic HTML is required. Styling is not required-->
<!DOCTYPE html>

<html>
<head>
    <title>Print tags</title>
</head>
<body>
<h3>Enter tags</h3>
<form method="post">
<input type="text" name="tags" />
<input type="submit" name="submit" />
</form>
<?php

if( isset($_POST['tags']) )
{
    $tags = htmlentities($_POST['tags']);
    //split array in ','
    $array = explode(",",$tags);
    //обхожда масива и връща всяка една стойност колко пъти я има в друг масив)
    $arrayCount = array_count_values($array);
    //намира максималния елемент от масива
    $max = array_search(max($arrayCount), $arrayCount);
    arsort($arrayCount);
    foreach($arrayCount as $key => $value){
    echo("$key : $value times".'<br />');
}
    echo('<br />'."Most Frequent Word is".$max);

    }

?>

</body>
</html>
