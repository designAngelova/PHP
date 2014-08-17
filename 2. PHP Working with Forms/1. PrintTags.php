<!--Write a PHP script PrintTags.php which generates an HTML input text field and a submit
button. In the text field the user must enter different tags, separated by a comma and a space (", ").
When the information is submitted, the script should split the tags, put them in an array and print out
the array. Semantic HTML is required. Styling is not required.-->
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
    $array = explode(",",$tags);
    $counter = 0;
    foreach($array as $value){
        echo "$counter : $value" . "<br>";
        $counter++;
    }
}

?>

</body>
</html>
