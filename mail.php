<?php
// Send the mail in the message section.
$to = 'marton.tasnadi@gmail.com';
$subject = '[EVESMUNKA]';
if ($_POST['captcha'] == 'Attila' or $_POST['captcha'] == 'Asztal') {
	mail($to, $subject, $_POST['message']);
	header('location: /');
}
?>
