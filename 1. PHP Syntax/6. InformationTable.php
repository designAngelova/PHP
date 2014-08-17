<?php
$name = "Gosho";
$number = "0882-321-423";
$age = 24;
$address = "Hadji Dimitar";
echo("<style>\n table,td{border:1px solid #666666;border-collapse: collapse; width:250px;}\n tr{height:30px;} td:nth-child(odd){background:#FF9C00;font-weight:bold}td:nth-child(even){text-align:right;}</style>");
echo("<table>");

echo("<tr> \n");
echo("<td> Name</td>");
echo("<td> $name </td>");
echo("</tr> \n");
echo("<tr> \n");
echo("<td> Phone number </td>");
echo("<td> $number </td>");
echo("</tr> \n");
echo("<tr> \n");
echo("<td> Address </td>");
echo("<td> $address </td>");

echo("</tr>");

