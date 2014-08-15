<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="" method="POST">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit" name="submit" value="Log In">
</form>

<?php
		if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];

		echo 'Welcome, '.$name.'!<br/>';
		echo 'Your email address is: '.$email;
		}

?>
</body>
</html>