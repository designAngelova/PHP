<!DOCTYPE html>
<html>
<head>
    <title>CV Generator</title>
</head>
<body>

<form method="post">

<fieldset name="personalInformation">
        <legend>Personal Information</legend>
        <input type="text" name="fname" placeholder="First Name"/><br />
        <input type="text" name="lname" placeholder="Last Name"/><br />
        <input type="mail" name="mail" placeholder="Email"/><br />
        <input type="text" name="number" placeholder="Phone number"/><br />
        <label for="gender">Female</label>
        <input type="radio" name="gender" value="Female"/>
        <label for="gender">Male</label>
        <input type="radio" name="gender" value="Male"/><br />
        <label for="date">Birth Date</label>
        <input type="date">
        <label for="nationality">Nationality</label>
        <select name="nationality">
            <option value ="bulgarian">Bulgarian</option>
            <option value ="english">English</option>
            <option value ="german">German</option>
        </select>
    </fieldset>

    <fieldset name="workPosition">
        <legend>Last Work Position</legend>
        <label for="companyName">Company name</label>
        <input type="text" name="companyName"/><br />

        <label for="from">From</label>
        <input type="date" name="to"/><br />
</fieldset>

    <fieldset name="computerSkills">
        <legend>Computer Skills</legend>
        <label for="programmingLanguages">Programming Languages</label>
        <input type="text" name="programmingLanguages"/>
        <select name="programmingLevel"/>
        <option value="beginner">Beginner</option>
        <option value="advanced">Advanced</option>
        <option value="senior">Senior</option><br />
        <input type="button" value="Remove Language" onclick="removeProgramLanguage()" />
        <input type="button" value="Add Language" onclick="AddProgramLanguage()" />

   </fieldset>
    <fieldset name="otherSkills">
        <legend>Other Skills</legend>
        <label for="languages">Languages</label>
        <input type="text" name="languages"/>
        <select name="comprehension">
        <option>Comprehension</option>
        <option value="beginner">beginner</option>
        <option value="intermediate">intermediate</option>
        <option value="advances">advances</option>
        </select>
        <select name="reading">
            <option>Reading</option>
            <option value="beginner">beginner</option>
            <option value="intermediate">intermediate</option>
            <option value="advances">advances</option>
        </select>
        <select name="writing">
            <option>Writing</option>
            <option value="beginner">beginner</option>
            <option value="intermediate">intermediate</option>
            <option value="advances">advances</option>
        </select>
        <br />
        <input type="button" value="Remove Language" onclick="removeLanguage()" />
        <input type="button" value="Add Language" onclick="AddLanguage()" />
<label for="license">Driver License</label>
        <label for="category">B</label>
        <input type="checkbox" name="category" value="B">
        <label for="category">A</label>
        <input type="checkbox" name="category" value="A">
        <label for="category">C</label>
        <input type="checkbox" name="category" value="C">

    </fieldset>
  </form>

    <input type="submit" name="submit" value="Generate CV"/>
</body>
</html>

<?php
if(isset($_POST['fname']) && isset($_POST['lname'])&& isset($_POST['mail']) &&
    isset($_POST['number']) && isset($_POST['gender']) && isset($_POST['date']) &&
    isset($_POST['nationality']) && isset($_POST['companyName']) &&
    isset($_POST['from']) && isset($_POST['to']) && isset($_POST['programmingLanguages']) &&
    isset($_POST['programmingLevel']) &&  isset($_POST['languages']) &&  isset($_POST['comprehension']) &&
    isset($_POST['reading']) && isset($_POST['writing'])&&isset($_POST['license'])){
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $mail = $_POST['mail'];
    $number = ($_POST['number']);
    $gender = ($_POST['gender']);
        $date = ($_POST['date']);
    $nationality = ($_POST['nationality']);
    $companyName = ($_POST['companyName']);
$from = ($_POST['from']);
    $to = ($_POST['to']);
    $programmingLanguages = ($_POST['programmingLanguages']);
    $programmingLevel= ($_POST['programmingLevel']);
    $languages = ($_POST['languages']);
    $comprehension = ($_POST['comprehension']);
    $reading = ($_POST['reading']);
    $writing= ($_POST['writing']);
    $license = ($_POST['licence']);

}

?>