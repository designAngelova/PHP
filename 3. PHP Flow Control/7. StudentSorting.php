<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Homework</title>
    <script>
        var nextId = 0;

        function addLine() {
            nextId++;
            var inputDiv = document.createElement("div");
            inputDiv.setAttribute("id", "num" + nextId);
            inputDiv.innerHTML =
                "<tr><td><input type='text' name='fName' /></td><td><input type='text' name='lName' /></td>"+
                    "<td><input type='email' name='mail' /></td><td><input type='text' name='scores' /></td>"+
                    "<td>"+

                    "<a href=\"javascript:removeLine('num" + nextId + "')\">[Remove]</a>" + "</td></tr>";
            document.getElementById('parent').appendChild(inputDiv);

        }

        function removeLine(id) {
            var inputDiv = document.getElementById(id);
            document.getElementById('parent').removeChild(inputDiv);
        }
    </script>
</head>
<?php
header('Content-Type: text/html; charset=utf-8');
?>
<body>

<form method="post">

   <table>

       <th>First name:</th>
       <th>Second name:</th>
       <th>Email:</th>
       <th>Exam Score:</th>

       <tr>
           <td><input type="text" name="fName" /></td>
           <td><input type="text" name="lName" /></td>
           <td><input type="email" name="mail" /></td>
           <td><input type="text" name="scores" /></td>

      <td><input type="button" onclick="removeLine()" value="-" /><br /></td>
       </tr>


   </table>

<input type="button" onclick="addLine()" value="+" />
    <div id="parent">
        <!-- We shall add inputs here with JavaScript -->
    </div>
<select name="sort">
    <option value="fame">First name</option>
    <option value="lame">Last name</option>
    <option value="mail">Email</option>
    <option value="scores">Exam score</option>
</select>
<select name="order">
    <option value="descending">Descending</option>
    <option value="ascending ">Ascending</option>
</select>
    <input type="submit" name="submit" value="Submit"
</form>

<?php
class Person
{
    public $fName;
    public $sName;
    public $mail;
    public $scores;
    function __construct($fName,$sName,$mail,$scores){
        $this->fname = $fName;
        $this->sname = $sName;
        $this->mail = $mail;
        $this->$scores = $scores;
    }
}
if(isset($_POST['fName']) && isset($_POST['lName'])&& isset($_POST['mail']) && isset($_POST['scores']) ){

   $fNames = $_POST['fName'];
    $sNames = $_POST['lName'];
    $mails =$_POST['mail'];
    $scores=$_POST['scores'];


    $commonLength = count($fNames);
    $allScores = 0;

    $persons = array();

    for($i = 0; $i < $commonLength ;$i++) {
        $newPerson = new Student($fNames[$i], $sNames[$i], $mails[$i], $scores[$i]);
        $persons[] = $newPerson;
        $allScores += $scores[$i];
    }

    function sortByFirstName($a, $b) {
        if($a->firstName < $b->firstName) {
            return -1;
        }
        else if($a->firstName > $b->firstName) {
            return 1;
        }
        else {
            return 0;
        }
    }




}
?>