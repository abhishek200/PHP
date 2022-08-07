<?php
// Script formHandle.php
// This page receivers the data from contact.html
// It will receive: title, firstname, lastname, email, feedback, comments and submit in $_POST

$title = $_POST['Title'];
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$email = $_POST['eMail'];
$feedback = $_POST['feedback'];
$comments = $_POST['Comments'];

print "<p>Thank you $title $fName $lName, for your comment </p>
       <p>You stated that you found the website to be $feedback and your comments were <br> $comments</p>";

?>