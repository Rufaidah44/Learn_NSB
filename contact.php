<?php
// the message
$msg = $_POST['subject'];

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg);

// send email
mail($_POST['email'],$_POST['subject'],$msg);
?>