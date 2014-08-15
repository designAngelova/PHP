<?php
		if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];

		echo 'Welcome, '.$name.'!<br/>';
		echo 'Your email address is: '.$email;
		}

?>
