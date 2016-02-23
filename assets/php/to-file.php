<?php

// email txt file path
define('EMAIL_TXT', 'emails.txt');

// trim email address
$email = trim($_POST['email']);

// valid email address
function valid_email($email) {
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// if everything fine, save email address to txt file
if (defined('EMAIL_TXT') && isset($email) && valid_email($email)) {
	file_put_contents(EMAIL_TXT, PHP_EOL . date("Y/m/d H:i:s"). " - "."$email", FILE_APPEND);
}

?>