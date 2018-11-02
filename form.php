<?php

$mailTo = "eeisen11@gmail.com"; // <----- YOUR EMAIL ADDRESS GOES HERE

if ($HTTP_POST_VARS['message']) {
$mailSubject = "Contact Form";
$mailHeaders = "From:" . ereg_replace("\r|\n", " ", stripslashes($HTTP_POST_VARS['name'])) . " <" . ereg_replace("\r|\n", " ", stripslashes($HTTP_POST_VARS['email'])) . ">\r\nX-Mailer: PHP/" . phpversion() . "\r\n";
$mailParams = "-f" . ereg_replace("\r|\n", " ", stripslashes($HTTP_POST_VARS['email']));
$mailBody = ereg_replace("\r|\n", " ", stripslashes($HTTP_POST_VARS['message']));
mail($mailTo,$mailSubject,$mailBody,$mailHeaders,$mailParams);
?>