<!--Write a PHP program SidebarBuilder.php that takes data from several input fields and builds 3 sidebars.
The input fields are categories, tags and months. The first sidebar should contain a list of the categories,
the second sidebar – a list of the tags and the third should contain the months. The entries in the input
strings will be separated by a comma and space ", ". Styling the page is optional. Semantic HTML is required.-->
<?php
require_once('header.php');
?>
<style>
    aside{
        background: rgba(216,228,243,1);
        background: -moz-linear-gradient(top, rgba(216,228,243,1) 0%, rgba(174,201,235,1) 45%, rgba(190,214,246,1) 64%, rgba(181,203,240,1) 78%, rgba(129,162,208,1) 100%);
        background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(216,228,243,1)), color-stop(45%, rgba(174,201,235,1)), color-stop(64%, rgba(190,214,246,1)), color-stop(78%, rgba(181,203,240,1)), color-stop(100%, rgba(129,162,208,1)));
        background: -webkit-linear-gradient(top, rgba(216,228,243,1) 0%, rgba(174,201,235,1) 45%, rgba(190,214,246,1) 64%, rgba(181,203,240,1) 78%, rgba(129,162,208,1) 100%);
        background: -o-linear-gradient(top, rgba(216,228,243,1) 0%, rgba(174,201,235,1) 45%, rgba(190,214,246,1) 64%, rgba(181,203,240,1) 78%, rgba(129,162,208,1) 100%);
        background: -ms-linear-gradient(top, rgba(216,228,243,1) 0%, rgba(174,201,235,1) 45%, rgba(190,214,246,1) 64%, rgba(181,203,240,1) 78%, rgba(129,162,208,1) 100%);
        background: linear-gradient(to bottom, rgba(216,228,243,1) 0%, rgba(174,201,235,1) 45%, rgba(190,214,246,1) 64%, rgba(181,203,240,1) 78%, rgba(129,162,208,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d8e4f3', endColorstr='#81a2d0', GradientType=0 );
        border: 1px solid #000;
        border-radius: 10px;
        width:200px;
        margin-top:10px;
    }
    ul li{
        list-style: circle;
        text-decoration: underline;
        font-family: Verdana;
    }
    h1{
        font-family: Verdana;
        margin-left:10px;
    }
    hr{
        background-color: #000000 !important;
        width: 185px;
        float: right;
        margin-top: -10px;
    }
</style>
<form method="post">
<label for="categories">Categories</label>
<input type="text" name="categories" /><br />
<label for="tags">Tags</label>
<input type="text" name="tags" /><br />
<label for="months">Moths</label>
<input type="text" name="months" /><br />
<input type="submit" name="submit" value="Generate" />
</form>

<?php
if(isset ($_POST['categories']) && isset($_POST['tags']) && isset($_POST['months'] ) ){
    $categories = $_POST['categories'];
    $tags = $_POST['tags'];
    $months = $_POST['months'];
    $outputCategory ="<aside>"."<h1>Categories</h1><hr /><ul>";
    $outputTags ="<aside>"."<h1>Tags</h1><hr /><ul>";
    $outputMonths ="<aside>"."<h1>Months</h1><hr /><ul>";
    $category = explode(',', $categories);
    $tag = explode(',', $tags);
    $month = explode(',', $months);
    for($a=0; $a<count($category); $a++){
        $outputCategory.= "<li>".$category[$a]."</li>";
    }
    for($a=0; $a<count($tag); $a++){
        $outputTags.= "<li>".$tag[$a]."</li>";
    }
    for($a=0; $a<count($month); $a++){
        $outputMonths.= "<li>".$month[$a]."</li>";
    }
    $outputCategory.='</ul></aside>';
    $outputTags.='</ul></aside>';
    $outputMonths.='</ul></aside>';
    print_r($outputCategory);
    print_r($outputTags);
    print_r($outputMonths);
}
?>
</body>
</html>