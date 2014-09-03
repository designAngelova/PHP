
<?php
$recipient = $_GET['recipient'];
$subject =$_GET['subject'];
$body = htmlspecialchars($_GET['body']);
$key = $_GET['key'];
$message  = "<p class='recipient'>$recipient</p><p class='subject'>$subject</p><p class='message'>$body</p>";
echo $message;
$result= '|';
for($a=0; $a< strlen($message); $a++){
    $value = ord($message[$a]);

    $crypt  = dechex ($value * (ord($key[$a % strlen($key)])));
  $result.= $crypt.'|';

}
echo $result
?>