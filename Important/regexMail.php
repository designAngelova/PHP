<?php
$text = "Welcome to RegExr v2.0 by gskinner.com! pes@dir.bg, kiro@mail.uu.net, f_petrov@abv.bg pesho@ Edit the Expression & Text to see matches. Roll over matches or the expression for details. Undo mistakes with ctrl-z. Save & Share expressions with friends or the Community. A full Reference & Help is available in the Library, or watch the video Tutorial.Sample text for testing abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ 0123456789 +-.,!@#$%^&*();\/|<> 12345 -98.7 3.141 .6180 9,000 +42 555.123.4567	+1-(800)-555-2468 foo@demo.net	bar.ba@test.co.uk";
$pattern = '/[\w.+]+@(\w+)(\.\w+)+/';
$count = preg_match_all($pattern, $text, $results);
foreach ($results[0] as $match) {
//echo"<p>".$match."</p>";
}


//take all words
 $txt = "I love HTML5,. !; CSS, PHP and MysQL.;.,";
$tokens = preg_split("/\W+/", $txt,-1, PREG_SPLIT_NO_EMPTY);
//echo json_encode($tokens);


//take all a href
$txt = '<a href="http://dir.bg"> Hello</a> <a href="http://abv.bg"> ABV</a>';
$tokens = preg_split(/<a href=('|"|).*\1>(.*?)</a>/, $txt,-1, PREG_SPLIT_NO_EMPTY);
echo json_encode($tokens);


//string replacement
$string = 'August 20, 2014';
$pattern = '/(\w+) (\d+), (\d+)/';
$replacement = '\2-\1-\3';
//echo preg_replace($pattern, $replacement, $string);
// 20-August-2014
