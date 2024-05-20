<?php
$subject = 'MY TEST EMAIL';
echo '============' . "\n";
echo $subject . "\n";
echo '============' . "\n";
$firstName = 'Vladislav';
$secondName = 'Zhuravlov';
$text1 = "firstName : {$firstName}" . "\n";
$text2 = "secondName : {$secondName}" . "\n";
$message = $text1 . $text2;
echo $message;
$headers = 'From:rav v.h.zhulov@student.khai.edu';
mail('v.h.zhuravlov@student.khai.edu', $subject, $message, $headers);